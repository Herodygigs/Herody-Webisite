<?php
    include('Admin Dashboard/connection.php');

    if(isset($_POST['submit']))
    {

    $name = $_POST['name'];
    $bank_name = $_POST['bank_name'];
    $ac_no = $_POST['a/c_no'];
    $ifsc_code = $_POST['ifsc_code'];
    $mobile_number = $_POST['mobile_number'];
    $upi_number = $_POST['upi_number'];
    $passbook = $_FILES['passbook']['name'];


    $query = "INSERT INTO account (`name`,`bank_name`,`a/c_no`,`ifsc_code`,`mobile_number`,`upi_number`,`passbook`) VALUES ('$name','$bank_name','$ac_no','$ifsc_code','$mobile_number','$upi_number','$passbook')";
    $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            move_uploaded_file($_FILES["passbook"]["tmp_name"],"Admin Dashboard/upload/" .$_FILES["passbook"]["name"]);
            $_SESSION['status'] = "Details Successfully Added";
            $_SESSION['status_code'] = "success";
            header('Location: wallet.html');
        }
        else 
        {
            $_SESSION['status'] = "Details Not Added";
            $_SESSION['status_code'] = "error";
            header('Location: wallet account details.php');  
        }
    }

?>