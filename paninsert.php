<?php

    $conn = mysqli_connect("localhost", "root", "", "form");
  
    // Taking all values from the form data(input)

    if(isset($_POST['submit'])){
     
        $pannumber =  $_POST['pannumber'];
        $panname = $_POST['panname'];
        $dob = $_POST['dob'];
        $panimage = addslashes(file_get_contents($_FILES['panimage']["tmp_name"]));
         

        $query = "INSERT INTO pan VALUES ('','$pannumber','$panname','$dob',' $panimage')";
        $query_run = mysqli_query($conn, $query);


        if($query_run){
            echo '<script type="text/javascript"> alert("Image profile Uploaded")</script>';
        } 
        else{
            echo '<script type="text/javascript"> alert("Image profile not Uploaded")</script>';
        }
    }
?>