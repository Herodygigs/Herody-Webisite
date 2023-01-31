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
        $address =  $_POST['address'];
        if($_POST['state'] == "Others"){
            $state = $_POST['otherstate'];
        }else{
            $state = $_POST['state'];
        }
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $experience =  $_POST['experience'];
        $joining =  $_POST['joining'];
        if($_POST['language'] == "Others"){
            $language = $_POST['otherlanguage'];
        }else{
            $language = $_POST['language'];
        }
        
        $sql = "INSERT INTO buisnessdevelopment VALUES ('','$name','$address','$state',' $mobile',
            '$email','$experience','$joining','$language')";
     
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