<?php

    $conn = mysqli_connect("localhost", "root", "", "form");
  
    //  check connection
    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }
  
    // Take all values from form database
    if(isset($_POST['submit'])){
     
        $name =  $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $address = $_POST['address'];
        $joining =  $_POST['joining'];
        $shift = $_POST['shift'];
        if($_POST['language'] == "Others"){
            $language = $_POST['callotherlanguage'];
        }else{
            $language = $_POST['language'];
        }
         

        $sql = "INSERT INTO telecalling VALUES ('','$name','$email','$mobile','$address',
            '$joining','$shift','$language')";
     
        if(mysqli_query($conn, $sql)){
            require_once("./site.html");
         
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
    }

    // Close connection
    mysqli_close($conn);
?>