<?php

$con = mysqli_connect('192.168.64.2',"Vincentpresh","7115p1israel","webtrack");
if(mysqli_connect_errno()){  
    // ->>>> CHECKS FOR MYSQL ERROR
    echo mysqli_connect_error();  
}
$query = "SELECT * FROM users WHERE role ='user'";
// ->>>> CHECKS FOR MYSQL query where role = users
$result = mysqli_query($con, $query);
$a=array();

while ($row = mysqli_fetch_array($result)) {
    // ->>>> SENDS EACH ROW INTO ARRAY
    array_push($a,$row);
}
mysqli_free_result($result);
mysqli_close($link);

// ->>>> ENCODES ARRAY FOR OUTPUT
echo json_encode($a);
?>