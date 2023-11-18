<?php
    require_once('headerforall.php'); 
    require_once('navbar.php');
    require_once('dbconn.php');
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ominiphar</title>
    <link rel="stylesheet" href="css/viewcart.css" />
    <script src="https://kit.fontawesome.com/2816eb5ad3.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>
</head>
<body>
    <div class="div_upper"></div>
    <div class="content">
        <!-- leftside -->
        <div class="left_side">
            <div class="div_head">
                <div class="head_topics">
                    <p class="htopic"> <b> Shopping Cart </b></p>
                    
                    
                    <!-- <input type="checkbox" id="checkbox" name="checkbox" value="bike"> -->
                    <label class="container" for="checkbox">Select Items</label> 
                    
                    
                </div>
            </div>
    
                <div class="div_medcart">
                    <form action="pro_checkout.php" method="POST">
                <?php
                $uid = $_SESSION['uid'];
                $query = "SELECT * from cart where uid='$uid'";
                $result = mysqli_query($conn,$query);

                if(mysqli_num_rows($result)>0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                    $med_id = $row['med_id'];
                    $query2 = "SELECT * from item where med_Id='$med_id'";
                    $result2 = mysqli_query($conn,$query2);
                    $row2 = mysqli_fetch_assoc($result2);
                ?>
                <!-- item div -->

                <table class="medcart_table">
                    <tr> 
                        <td class="td_one">
                                <input type="checkbox" id="checkbox2" onclick="updateSum()" name="checkbox[]" value="<?php echo $row['id'];?>">   
                        </td>
                        <td>
                        <img src="<?php echo $row2['image'];?>" class="medimg">
                        </td>
                        <td><span><?php echo $row2['name'];?></span></br>

                        <?php if($row2['category']=='Medicine'){ ?>
                            <span><?php echo $row['dosage'];?>mg</span></br>
                            
                            <?php } ?>
                            <span id="price"><?php echo $row['price'];?></span>
                        </td>
                        <td>
                            <button onclick="decrement()" class="increase"> - </button>
                            <span id="amount"><?php echo $row['quantity'];?></span>
                            <button onclick="increment()" class="increase"> + </button>
                        </td>
                        <td class="delete_btn">
                        <a class="del_item" href="cart_delete.php?uid=<?php echo $uid; ?>&med_id=<?php echo $med_id; ?>&dosage=<?php echo $row['dosage'];?>"><i class="bx bx-trash"></i></a>
                        </td>
                    </tr>
                    
                </table>
                <?php
                    }
                }
                else{
                    echo "no";
                }
                ?>
            
            </div>
        </div>

        <!-- rightside -->
        <div class="right_side">
            <div class="paymet_methods">
                <p> <b> Payment methods</b></p>
                <div class="payment_img">
                    <img src="assets/visacard.png" class="cardimg1" alt="name">
                    <img src="assets/mastercard.png" class="cardimg2">
                    
                </div>
            </div>
            <div class="checkout_summary">
                <p> <b> Summary </b></p>
                <table class="totaltbl">
                    <tr>
                        <td> Total </td>
                        <td class="amount"><input type="text" id="sum" name="sum" value="" readonly></td>
                    </tr>
                    <tr>
                        <td> IMPORTANT : </td>
                        <td> (Rs. 500.00 will be charged for deliveries if chosen) </td>
                    </tr>
                </table>
                    <input type="button" class="checkoutbtn" name="checkout" onclick="openpopup()" value="Check Out">
                
            </div>

        </div>

        <!-- pop up with map  -->
        <div id="map_div" class="map_div">
            <div class="map_div_content">
            <p><b> How to you prefer to receive the order ?</b></p> </br> 
                        <label class="container2"> By myself
                                <input type="radio" onclick="make_invisible()" name="choice" value="onsite"> </label>
                        </br> </br>
                        <label class="container2"> Get delivered
                                <input type="radio" onclick="make_visible()" name="choice" value="deliver"> </label>

                <!-- address to deliver upon choice -->
                <div id="address_details" class="address_details">
                <p>Enter your address</p>
                <input type="text" name="address" placeholder="Enter address" class="address">

                <!-- coordinates of order -->
                <input type="text" name="latitude" hidden>
                <input type="text" name="longitude" hidden>
                <p>IMPORTANT : Services are only available within colombo district</p>
                </div>
                <div class="total_sum_container">
                        <p> Total </p>
                        <input type="text" class="total_sum" id="total_sum" name="total_sum" value="" readonly>
                        <p> (Inclusive with delivery charges) </p>
                </div>

                <!-- cancel and submit button -->
                <input type="button" class="cancel_btn" name="cancel_btn" onclick="closepopup()" value="Cancel">
                <a href="checkout.php"><button name="sub_btn" class="sub_btn">Place Order</button></a>
            </div>
        </div>
        </form>
    </div>


    <!-- increament and decreament function -->
    <script>
    var amount = <?php echo $row['quantity']?>;
    document.getElementById("amount").innerText=amount;
        function decrement() {
            if (amount > 1) {
                amount= amount-1;
            }
            document.getElementById("amount").innerText=amount;
        }

        function increment() {
                amount= amount+1;
                document.getElementById("amount").innerText=amount;
        }

    </script>

    <!-- calculate total items price -->
    <script>
    function updateSum() {
    var checkboxes = document.getElementsByName("checkbox[]");
    var sum = 0;

    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked) {
        var row = checkboxes[i].parentNode.parentNode;
        var price = parseFloat(row.querySelector("#price").textContent);
        sum += price;
    }
    }

    document.getElementById("sum").value = sum;
    // document.getElementById("sum").value = sum.toFixed(2);
    document.getElementById("total_sum").value = document.getElementById("sum").value
    }
    </script>


    <!-- popup function -->
    <script>
        let popup = document.getElementById("map_div");

        function openpopup(){
            popup.classList.add("open_popup")
            
        }
        function closepopup() {
                popup.classList.remove("open_popup")
        }
    </script>
    <script>
        let options = document.getElementById("address_details");
        var money = document.getElementById("sum");
        var charge = 500;

        function make_visible(){
            options.classList.add("visible")
            money.value = parseInt(money.value) + charge;
            document.getElementById("total_sum").value = money.value;
        }
        function make_invisible() {
                options.classList.remove("visible");
        }
    </script>
    
</body>
</html>
