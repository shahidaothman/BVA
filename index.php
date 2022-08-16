
<?php
    setcookie("Auction_Item", "Luxury Car", time() + 2 * 24 * 60 * 60);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>BVA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Premium Bootstrap 5 Template" />
    <meta name="keywords" content="bootstrap 5, premium, marketing, multipurpose" />
    <meta content="Themesdesign" name="author" />

    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />

    <!-- tinyslider -->
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />

    <!-- css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.min.css" rel="stylesheet" type="text/css" />
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="67">
    <style>
        .hero-1 {
            /* height: 150vh; */
            height: auto;
            width: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .input-group-text {
            height: 45px;
        }

        .hide {
            display: none;
        }

        .input-group-text {
            border: none;
        }

        .form-check-input[type=radio] {
            visibility: hidden;
        }


    </style>
    <!-- start navbar -->
    <nav class="navbar navbar-expand-lg fixed-top sticky" id="navbar">
        <div class="container">
            <a href="layout-1.html" class="navbar-brand me-5">
                <img src="assets/images/logo/logo1.png" class="logo-dark" alt="" height="42" />
            </a>
            <a href="javascript:void(0)" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggle-icon"><i data-feather="menu"></i></span>
            </a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav navbar-center me-auto mt-lg-0 mt-2">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#feature">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#faq">Faq</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#client">Client</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Join Us</a>
                    </li> -->
                </ul>
                <div class="mb-4 mb-lg-0">
                    <a href="#" class="btn btn-sm nav-btn btn-primary mb-4 mb-lg-0 ms-auto" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Contact Us</a>
                </div>
            </div>
        </div>
        <!-- end container -->
    </nav>
    <!-- end navbar -->

    <?php include 'layout/home.php';?>

    <?php include 'layout/details_uses.php';?>
    <?php include 'layout/details_power.php';?>
    <!-- </form> -->

    <?php include 'layout/output_power.php';?>
    <?php include 'layout/output_uses.php';?>


    <?php include 'layout/output_details_power.php';?>
    <?php include 'layout/calculation_power.php';?>

    <?php include 'layout/output_details_uses.php';?>
    <?php include 'layout/calculation_uses.php';?>

 






    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Get In Touch</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" name="myForm" onsubmit="return validateForm()">
                        <span id="error-msg"></span>
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="fw-medium form-label" for="name">Name</label>
                                        <input type="text" class="form-control" placeholder="Your name" id="name" />
                                    </div>
                                    <!-- end col -->
                                    <div class="col-md-6 mb-3">
                                        <label class="fw-medium form-label" for="email">Email</label>
                                        <input type="email" class="form-control" placeholder="Your email" id="email" />
                                    </div>
                                    <!-- end col -->
                                    <div class="col-md-6 mb-3">
                                        <label class="fw-medium form-label" for="subject">Subject</label>
                                        <input type="text" class="form-control" placeholder="your subject"
                                            id="subject" />
                                    </div>
                                    <!-- end col -->
                                    <div class="col-md-6 mb-3">
                                        <label class="fw-medium form-label" for="number">Contact</label>
                                        <input type="text" class="form-control" placeholder="+00 1234 5678 90"
                                            id="number" />
                                    </div>
                                    <!-- end col -->
                                    <div class="col-12 mb-3">
                                        <label class="fw-medium form-label" for="comments">Message</label>
                                        <textarea class="form-control" id="comments" placeholder="Enter your message..."
                                            rows="5"></textarea>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-12">
                                        <input type="submit" id="submit" name="send" class="btn btn-primary mt-2"
                                            value="Send Information" />
                                    </div>
                                    <!-- end col -->
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </form>
                    <!-- end form -->
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- feather icon -->
    <script src="assets/js/feather.js"></script>

    <!-- client-slider -->
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/tiny.init.js"></script>

    <!-- moving letter -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="assets/js/text-animation.init.js"></script>

    <script src="assets/js/app.js"></script>

    <!-- button click -->
    <script>
        $(document).ready(function () {
            $("#calculate_uses").click(function () {
                $('#ouses').show();
                $('#opower').hide();
            });
            $("#calculate_power").click(function () {
                $('#ouses').hide();
                $('#opower').show();
            });
        });
    </script>

</body>

</html>