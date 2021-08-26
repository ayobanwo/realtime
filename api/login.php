<?php
    $con = mysqli_connect("localhost","root","root","webtrack");
    if (isset($POST['submit'])) {
        # code...
        if (isset($POST['usr_uname']) && isset($POST['usr_psw'])) {
            # code...
            $name = $POST['usr_uname'];
            $password = $POST['usr_psw'];

            $query = "SELECT * FROM users WHERE name ='".$name."' and password='".$password."'";

        }
    } else {
        # code...
    }
    
    echo "hello its me";
?>