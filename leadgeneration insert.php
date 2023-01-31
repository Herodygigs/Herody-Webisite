<?php
 
    $conn = mysqli_connect("localhost", "root", "", "form");
  
    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }
  
    // Taking all values from the form data(input)

    if(isset($_POST['submit'])){
     
        $name =  $_POST['name'];
        $address = $_POST['address'];
        if($_POST['state'] == "Others"){
            $state = $_POST['leadotherstate'];
        }else{
            $state = $_POST['state'];
        }
        $experience = $_POST['experience'];
        $mobile =  $_POST['mobile'];
        $joining = $_POST['joining'];
        $email =  $_POST['email'];
        if($_POST['language'] == "Others"){
            $language = $_POST['leadotherlanguage'];
        }else{
            $language = $_POST['language'];
        }

        $sql = "INSERT INTO leadgeneration VALUES ('','$name','$address','$state',' $experience',
                '$mobile','$joining','$email','$language')";
        
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