<?php

$con = mysqli_connect('192.168.64.2',"Vincentpresh","7115p1israel","webtrack");
if(mysqli_connect_errno()){  
    // ->>>> CHECKS FOR MYSQL ERROR
    echo mysqli_connect_error();  
}
if (isset($_GET['name']) && isset($_GET['longitude']) && isset($_GET['latitude'])) {
    # code...
    $name = $_GET['usr_name'];
    $latitude = $_GET['latitude'];
    $longitude = $_GET['longitude'];
    $query = "UPDATE drugName SET longitude = '".$longitude."', latitude='".$latitude."' WHERE name='".$name."'";
    // ->>>> UPDATE FOR MYSQL query where name = user
    $result = mysqli_query($con, $query);
    if ($result) {
        # code...
        echo "SUCCESS";
    }

} else {
    # code...
    echo "No user name";
}
?>