<?php
 $conn = mysqli_connect("localhost", "root", "", "form");
  
// Take all values from form database
    if(isset($_POST['submit'])){
     
        $aadharnumber =  $_POST['aadharnumber'];
        $aadharname = $_POST['aadharname'];
        $dob = $_POST['dob'];
        $aadharimage = addslashes(file_get_contents($_FILES['aadharimage']["tmp_name"]));
         

        $query = "INSERT INTO aadhar VALUES ('','$aadharnumber',' $aadharname','$dob','$aadharimage')";
        $query_run = mysqli_query($conn, $query);


        if($query_run){
            echo '<script type="text/javascript"> alert("Image profile Uploaded")</script>';
        } 
        else{
            echo '<script type="text/javascript"> alert("Image profile not Uploaded")</script>';
        }
    }
?>