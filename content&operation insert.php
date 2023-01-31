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
        $qualification = $_POST['qualification'];
        $experience = $_POST['experience'];
        $mobile = $_POST['mobile'];
        $location =  $_POST['location'];
        $date =  $_POST['date'];
        $email =  $_POST['email'];
        $shift =  $_POST['shift'];
        if($_POST['language'] == "Others"){
            $language = $_POST['contentotherlanguage'];
        }else{
            $language = $_POST['language'];
        }


        $sql = "INSERT INTO contentoperation VALUES ('','$name','$address','$qualification','$experience',
            '$mobile','$location','$date','$email','$shift','$language')";
     
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