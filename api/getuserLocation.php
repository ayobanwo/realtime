<?php

$con = mysqli_connect('192.168.64.2',"Vincentpresh","7115p1israel","webtrack");
if(mysqli_connect_errno()){  
    // ->>>> CHECKS FOR MYSQL ERROR
    echo mysqli_connect_error();  
}
if (isset($_GET['name'])) {
    # code...
    $name = $_GET['usr_name'];
    
    $query = "SELECT longitude, latitude WHERE name='".$name."'";
    // ->>>> UPDATE FOR MYSQL query where name = user
    $result = mysqli_query($con, $query);
    if ($result) {
        # code...
        $a=array();

        while ($row = mysqli_fetch_array($result)) {
            // ->>>> SENDS EACH ROW INTO ARRAY
            array_push($a,$row);
        }
        mysqli_free_result($result);
        mysqli_close($link);
        
        // ->>>> ENCODES ARRAY FOR OUTPUT
        echo json_encode($a);
    }
    else {
        echo mysqli_connect_error();
    }

} else {
    # code...
    echo "No user name";
}

?>