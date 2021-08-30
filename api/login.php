<?php
    $con = mysqli_connect("localhost","root","","webtrack");
    if(mysqli_connect_errno()){  
        // ->>>> CHECKS FOR MYSQL ERROR
        echo mysqli_connect_error();  
    }
    if (isset($_POST['submit'])) {
        # code... CHECKS IF NAME AND PASSWORD IS SET
        if (isset($_POST['usr_name']) && isset($_POST['usr_psw'])) {
            # code...
            $name = $_POST['usr_name'];
            $password = $_POST['usr_psw'];

            $query = "SELECT * FROM users WHERE name ='".$name."' and password='".$password."'";

            $result = mysqli_query($con, $query);
            //->>>> COUNTS NUMBER OF ROW OUTPUT
            $num = mysqli_num_rows($result);
             if ($num==1) {
                 # code...
                 while ($row = mysqli_fetch_array($result)) {

                     //->>>> CHECKS IF ROLE IS ADMIN OR USER, IN ORDER TO REDIRECT CORRECTLY
                  if($row["role"]=="admin") { // IF ADMIN
                    header("Location: http://localhost/webtrack/admin/");
                  }
                  else{ // IF NOT ADMIN
                    header("Location: http://localhost/webtrack/user/");
                    echo "error";
                  }
                 
                }
                 
             }else{
                    echo "error";
             }

        }
         else {
        # code...
        echo "No user name";
    }
    } else {
        # code...
        echo "No user name";
    }
    
   
?>