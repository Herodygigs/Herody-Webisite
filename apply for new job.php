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
                                        <img src="https://media-exp1.licdn.com/dms/image/C560BAQG5nACDpbmHpg/company-logo_200_200/0/1588792162121?e=2159024400&v=beta&t=MpgOcI0RfYcm8-AaGixjgsynQDNWG9XP0D34_Y2_BuE" class="undefined full-width full-height relative" alt="Herody" style="background-size: 100%; object-fit: contain; height: 70px; width: 70px;">
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
                    <div class="mb-4">
                    </div>
                    <div role="dialog" aria-modal="true" class="fade modal show" tabindex="-1" style="display: block; padding-right: 6px;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <form action="form for new job.php" method="POST" enctype="multipart/form-data">
                                        <div class="row pb-4" style="height: 68vh; overflow-y: scroll;">
                                            <header class="col-12 signature_header font-16 fw-700 py-3 px-4" style="font-family:Poppins ;">
                                                <i class="fas fa-chevron-circle-left pointer" onclick="history.back()"></i> Apply Now
                                            </header>
                                            <div class="col-12 mb-3 mt-4 px-4">
                                                <div class="mb-1 black bold" style="font-family:Poppins ;">Full Name 
                                                    <span class="text-danger"></span>
                                                </div>
                                                <input type="text" class="w-100 py-2 px-3 input_border" name="name" placeholder="Enter your full name" style="font-family:Poppins ;" required>
                                                <div class="text-danger"></div>
                                            </div>
                                            <div class="col-12 mb-3 px-4">
                                                <div class="mb-1 black bold" style="font-family:Poppins ;">Mobile Number</div>
                                                <input type="number" class="w-100 py-2 px-3 input_border" name="mobilenumber" placeholder="Mobile Number" required maxlength="10" style="font-family:Poppins ;">
                                            </div>
                                            <div class="col-12 mb-3 px-4">
                                                <div class="mb-1 black bold" style="font-family:Poppins ;">Full Address</div>
                                                <input type="text" class="w-100 py-2 px-3 input_border" placeholder="Full Address" required name="address" style="font-family:Poppins ;">
                                            </div>
                                            <div class="col-12 mb-3 px-4">
                                                <div class="mb-1 black bold" style="font-family:Poppins ;">Email Address</div>
                                                <input type="email" class="w-100 py-2 px-3 input_border" placeholder="Email Address" required name="email" style="font-family:Poppins ;">
                                            </div>
                                            <div class="col-12 mb-3 px-4">
                                                <div class="mb-1 black bold" style="font-family:Poppins ;">City</div>
                                                <input type="text" class="w-100 py-2 px-3 input_border" placeholder="City" required name="city" style="font-family:Poppins ;">
                                            </div>
                                            <div class="col-12 mb-3 px-4">
                                                <div class="mb-1 black bold" style="font-family:Poppins ;">State</div>
                                                <input type="text" class="w-100 py-2 px-3 input_border" placeholder="State" required name="state" style="font-family:Poppins ;">
                                            </div>
                                            <div class="col-12 px-4 pt-3">
                                                <button class="h-40px w-100 pointer br-6 " name="submit" id="submit" style="background-color: green; color: white; border-radius: 6rem;" style="font-family:Poppins ;">Submit</button>
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
