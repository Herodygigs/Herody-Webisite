<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>India's Gig Herody Website</title>
    <link rel="stylesheet" href="./site.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>

</head>
<body class="modal-open" style="overflow: hidden; padding-right:6px;">
    <div id="__next">
        <div class="full-width bg-head-black" style="z-index: 2; height: 80px; top: 0px; position: fixed; margin-top: 0px;" id="desktop-header">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-5 p-t-b-100 min-vh-100 bg-dark-white">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <!-- <div class="mb-4">
                        <div class="BackButton_back__391FV d-inline-block text-white font-12 pointer">
                            <span class="mr-2"><i class="fas fa-chevron-circle-left" onclick="history.back()"></i></span>
                            <span style="font-family:Poppins;" onclick="history.back()">Back</span>
                        </div>
                    </div> -->
                    <div role="dialog" aria-modal="true" class="fade modal show mt-5 " tabindex="-1" style="display: block; padding-right: 6px;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <form action="wallet account insert data.php" method="post" enctype="multipart/form-data" id="form">
                                        <div class="row pb-4" style="height: 68vh; overflow-y: scroll;">
                                            <header class="col-12 signature_header font-16 fw-700 py-3 px-4" style="font-family:Poppins;">
                                                Account Details
                                            </header>
                                            <div class="col-12 mb-3 px-4">
                                                <div class="mb-1 black bold" style="font-family:Poppins;">Name on Card</div>
                                                <input type="text" class="w-100 py-2 px-3 input_border" placeholder="Name" required name="name" id="name" style="font-family:Poppins;" >
                                                <div class="text-danger"></div>
                                            </div>
                                            <div class="col-12 mb-3 px-4">
                                                <div class="mb-1 black bold" style="font-family:Poppins;">Bank Name</div>
                                                <input type="text" class="w-100 py-2 px-3 input_border" placeholder="Bank name" required name="bank_name" id="bank_name" style="font-family:Poppins;">
                                            </div>
                                            <div class="col-12 mb-3 px-4">
                                                <div class="mb-1 black bold" style="font-family:Poppins;">Account Number</div>
                                                <input type="number" class="w-100 py-2 px-3 input_border" placeholder="A/C No" required name="a/c_no" id="a/c_no" style="font-family:Poppins;">
                                            </div>
                                            <div class="col-12 mb-3 px-4">
                                                <div class="mb-1 black bold" style="font-family:Poppins;">IFSC Code</div>
                                                <input type="text" class="w-100 py-2 px-3 input_border" placeholder="IFSC Code" required name="ifsc_code" id="ifsc_code" onkeydown="walletvalidation()" style="font-family:Poppins;">
                                                <span id="wallettext" style="font-family:Poppins ;"></span>
                                            </div>
                                            <script>
                                                function walletvalidation(){
                                                    var form = document.getElementById("form");
                                                    var ifsc = document.getElementById("ifsc_code").value;
                                                    var text = document.getElementById("wallettext");
                                                    var pattern = /^[A-Z]{4}0[A-Z0-9a-z]{5,6}$/;

                                                    if(!ifsc.match(pattern)){
                                                        text.innerHTML = "Please Enter a valid IFSC Code";
                                                        text.style.color = "#ff0000";
                                                        return false;
                                                    }
                                                        text.innerHTML = "";
                                                        text.style.color = "#00ff00";
                                                        return true;
                                                }
                                            </script>
                                            <div class="col-12 mb-3 px-4">
                                                <div class="mb-1 black bold" style="font-family:Poppins;">Registered Mobile Number</div>
                                                <input type="number" class="w-100 py-2 px-3 input_border" name="mobile_number" id="mobile_number" placeholder="Mobile Number" required onKeyPress="if(this.value.length==12) return false;" style="font-family:Poppins;">
                                            </div>
                                            <div class="col-12 mb-3 px-4">
                                                <div class="mb-1 black bold" style="font-family:Poppins;">UPI Mobile Number</div>
                                                <input type="number" class="w-100 py-2 px-3 input_border" name="upi_number" id="upi_number" placeholder="UPI Number" required onKeyPress="if(this.value.length==12) return false;" style="font-family:Poppins;">
                                            </div>
                                            <div class="col-12 mb-3 px-4">
                                                <div class="mb-1 black bold" style="font-family:Poppins;">Upload Your Passbook
                                                    <span class="text-danger ml-1"></span>
                                                </div>
                                                <div class=" br-6 py-2 px-3 text-center ">
                                                    <input type="file" required accept=".png,.webp,.jpeg,.jpg,.jfif,.pjpeg,.pjp,.svg,.avif,.apng" name="passbook" id="passbook" style="font-family:Poppins;">
                                                </div>
                                                <div class="text-danger"></div>
                                            </div>
                                            <div class="col-12 px-4 pt-3">
                                                <button class="w-100 pointer br-6 font-12" name="submit" id="submit" style="background-color: green; color: white; border-radius: 6rem; height: 55px; font-family:Poppins;">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>