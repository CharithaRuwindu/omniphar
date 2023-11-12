

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <title>Pet Care</title>
    
    <style>
/* Reset styles */
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}



/* Form styles */
form {
  display: flex;
  justify-content: center;
  margin-bottom: 20px;
}

.date-range {
  display: flex;
  align-items: center;
  gap: 20px;
}

.date-input {
  display: flex;
  align-items: center;
  gap: 10px;
}

label {
  font-weight: bold;
  color: #000D2F;
  white-space: nowrap; /* prevent label from wrapping */
}

.search-button {
  display: flex;
  align-items: center;
  gap: 5px;
  padding: 10px 20px;
  color: #fff;
  background-color: #000D2F;
  border: none;
  border-radius: 3px;
  cursor: pointer;
  transition: background-color 0.2s ease;
}

.search-button:hover {
  background-color: #001B5E;
}

.search-button i {
  font-size: 16px;
}

/* Table styles */
.table-wrapper {
  overflow-x: auto;
}

table {
  width: 100%;
  border-collapse: collapse;
  background-color: #fff;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
}

th, td {
  padding: 12px 15px;
  text-align: left;
  vertical-align: top;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #000D2F;
  color: #fff;
  font-weight: bold;
}

tr:nth-child(even) td {
  background-color: #f2f2f2;
}

tr:hover td {
  background-color: #e0e0e0;
}

.print-button {
  text-align: right;
}

.print-button button {
  display: flex;
  align-items: center;
  gap: 5px;
  padding: 10px 20px;
  color: #fff;
  background-color: #000D2F;
  border: none;
  border-radius: 3px;
  cursor: pointer;
  transition: background-color 0.2s ease;
}

.print-button button:hover {
  background-color: #001B5E;
}

.print-button i {
  font-size: 16px;
}

.no-records {
  padding: 12px 15px;
  text-align: center;
  color: #f00;
  font-weight: bold;
}
/* Date input styles */
.flatpickr {
  appearance: none;
  -webkit-appearance: none;
  border: none;
  background-color: transparent;
  padding: 0.5em 1em;
  font-size: 1.2em;
  color: #000D2F;
  border-radius: 3px;
  border: 1px solid #ddd;
  outline: none;
  width: 100%;
  max-width: 200px;
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
}

.flatpickr:focus {
  border-color: #000D2F;
}
@media print {
  body * {
    visibility: hidden;
  }
  
  .print-container, .print-container * {
    visibility: visible;
  }
  
  .print-container {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
}
</style>

</head>









<div class="container print-container">

  <form action="" method="POST">
    <div class="date-range">
    <div class="date-input">
  <label for="startdate">Start Date:</label>
  <input type="text" id="startdate" name="startdate" class="flatpickr" placeholder="Select date...">
</div>

<div class="date-input">
  <label for="enddate">End Date:</label>
  <input type="text" id="enddate" name="enddate" class="flatpickr" placeholder="Select date...">
</div>
      <div>
        <button type="submit" name="searchsubmit" class="search-button">
          <i class="fas fa-search"></i>
          Search
        </button>
      </div>
    </div>
  </form>
  <?php
  if(isset($_REQUEST['searchsubmit'])){
    $startdate = $_REQUEST['startdate'];
    $enddate = $_REQUEST['enddate'];
    $sql = "SELECT * FROM employee WHERE emp_dateassigned BETWEEN '$startdate' AND '$enddate'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
      echo '
      <div class="table-wrapper">
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Address</th>
              <th>Contact</th>
              <th>Email</th>
              <th>NIC</th>
              <th>Date Assigned</th>
              <th>Status</th> 
            </tr>
          </thead>
          <tbody>';
      while($row = $result->fetch_assoc()){
        echo '<tr>
              <td>'.$row["emp_id"].'</td>
              <td>'.$row["emp_name"].'</td>
              <td>'.$row["emp_address"].'</td>
              <td>'.$row["emp_contactno"].'</td>
              <td>'.$row["emp_email"].'</td>
              <td>'.$row["emp_nic"].'</td>
              <td>'.$row["emp_dateassigned"].'</td>
              <td>'.$row["working_status"].'</td>
            </tr>';
      }
      echo '<tr>
              <td colspan="8" class="print-button">
              <button type="button" class="print-button" onClick="window.print()">
  <i class="fas fa-print"></i>
  Print
</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>';
    } else {
      echo "<div class='no-records'>No Records Found!</div>";
    }
  }
  ?>
</div>











    </div>
    <script>
  flatpickr(".flatpickr", {
    dateFormat: "Y-m-d",
    allowInput: true,
    placeholder: "Select date..."
  });
</script>
    <script src="script.js"></script>

</body>

</html>