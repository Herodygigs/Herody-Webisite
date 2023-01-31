<?php

    $conn = mysqli_connect("localhost", "root", "", "form");
    
    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }
  
    // Taking all 4 values from the form data(input)

    if(isset($_POST['submit'])){
     
        $name =  $_POST['name'];
        $address = $_POST['address'];
        $mobile = $_POST['mobile'];
        $email =  $_POST['email'];
        $joining =  $_POST['joining'];
        $experience = $_POST['experience'];
        if($_POST['language'] == "Others"){
            $language = $_POST['saleotherlanguage'];
        }else{
            $language = $_POST['language'];
        }
         

        $sql = "INSERT INTO sale VALUES ('','$name','$address',' $mobile',
            '$email','$joining','$experience','$language')";
        
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