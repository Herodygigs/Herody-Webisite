 <?php
 
    $conn = mysqli_connect("localhost", "root", "", "form");
  
    // Check connection
    if($conn === false){
      die("ERROR: Could not connect. "         
        .mysqli_connect_error());
    }
  
    // Taking all 4 values from the form data(input)

    if(isset($_POST['submit'])){
     
      $name = $_POST['name'];
      $address =  $_POST['address'];
      $experience =  $_POST['experience'];
      $mobile = $_POST['mobile'];
      $email =  $_POST['email'];
      $work = $_POST['work'];
      $joining =  $_POST['joining'];
      $rate = $_POST['rate'];
      $office =  $_POST['office'];
      if($_POST['language'] == "Others"){
        $language = $_POST['dataotherlanguage'];
      }else{
          $language = $_POST['language'];
      }
          

      $sql = "INSERT INTO data VALUES ('','$name','$address','$experience','$mobile',
          '$email',' $work','$joining','$rate','$office','$language')";
     
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