<?php

    include("security.php");
     
    // Take all values from form database
    if(isset($_POST['submit'])){
     
        $name =  $_POST['name'];
        $mobilenumber = $_POST['mobilenumber'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $state =  $_POST['state'];
         

        $query = "INSERT INTO new_job VALUES ('','$name','$mobilenumber','$address','$email','$city','$state')";
        $query_run = mysqli_query($connection, $query);
     
        if($query_run)
        {
            $_SESSION['status'] = "Your Data is Updated";
            $_SESSION['status_code'] = "success";
            header('Location: latest_job.php'); 
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT Updated";
            $_SESSION['status_code'] = "error";
            header('Location: form for new job.php'); 
        }
    }
?>