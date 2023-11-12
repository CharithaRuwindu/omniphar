<?php
require_once('dbconn.php');

if(isset($_POST['latitude']) && isset($_POST['longitude'])){
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    $query = "INSERT into map(lat, lon) values('$latitude','$longitude')";
    $result = mysqli_query($conn,$query);

    if($result){
        echo "Location added successfully!";
    }
    else{
        echo "Failed to add location!";
    }
}
else{
    echo "error occured";
}
?>