<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offers</title>
    <link rel="stylesheet" href="./site.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" >
</head>
<body>
    <div id="_next">
        <div class="full-width" style="z-index: 2; height: 80px; top: 0px; position: fixed; margin-top: 0px;" id="desktop-header">
            <div class="px-4 full-height">
                <div class="row full-height">
                    <div class="col-md-10 offset-md-1 full-height">
                        <div class="row center-y full-height">
                            <div class="col-6 col-md-6 center-y">
                                <div class="d-inline-block pointer relative float-left pr-5 ">
                                    <div>
                                        <img src="http://drive.google.com/uc?export=view&id=1RQNI1Khnhj4Z-YSKj3F3Z3ZouoT3bmC0" class="undefined full-width full-height relative" alt="Herody" style="background-size: 100%; object-fit: contain; height: 70px; width: 70px;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="align-right">
                                    <button title="Login/Signup" type="button" class="btn Button_button__zNNuI Button_landing_page__23NVz center-x-y  pointer false font-12" style="background-color: white; color: black; font-family:Poppins ;">Login/Signup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-5 p-t-b-100 min-vh-100 bg-dark-white">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="mb-4">
                            <div class="BackButton_back__391FV d-inline-block white font-12 pointer">
                                <span class="mr-2"><i class="fas fa-chevron-circle-left" onclick = "history.back()"></i></span>
                                <span onclick = "history.back()" style="font-family:Poppins;">Back</span>
                            </div>
                        </div>
                        <div class="row" style="min-height: 100vh;">
                            <div class="offset-md-1 col-md-10 pt-5">
                                <?php
                                include("Admin Dashboard/security.php");
                                    $query = "SELECT * FROM offer";
                                    $query_run = mysqli_query($connection, $query);
                                ?>
                                <div class="w-100 text-white" style="font-family:Poppins;">
                                <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                                    <?php  echo '<img src="Admin Dashboard/upload/'.$row['image'].' " class="undefined full-width full-height relative" alt="Herody" style="background-size: 100%; object-fit: contain;">' ?>
                                </div>
                                <?php
                            } 
                        }
                        else {
                            echo "No Offers Availabe";
                        }
                        ?>
                            </div>                
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</body>
</html>