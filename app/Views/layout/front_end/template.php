<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('front_end/assets/img/favicon.ico') ?>" rel="icon">
    <link href="<?= base_url('front_end/assets/img/favicon.ico') ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.STINO">
    <link href="<?= base_url('/front_end/assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" />
    <link href="<?= base_url('/front_end/assets/vendor/icofont/icofont.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('/front_end/assets/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('/front_end/assets/vendor/animate.css/animate.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('/front_end/assets/vendor/remixicon/remixicon.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('/front_end/assets/vendor/venobox/venobox.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('/front_end/assets/vendor/owl.carousel/assets/owl.carousel.min.css'); ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('/front_end/assets/css/style.css'); ?>" rel="stylesheet">


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo"><a href="<?= base_url('view'); ?>">Penghuni Kost</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block">

                <ul>
                    <li><a href="<?= base_url('view'); ?>">Home</a></li>

                    <li><a href="<?= base_url('view/about'); ?>">About</a></li>

                    <li><a href="<?= base_url('view/contact'); ?>">Contact</a></li>

                </ul>

            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <?= $this->renderSection('content'); ?>



    <?= $this->renderSection('content'); ?>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>Penghuni Kost</h3>
                            <p>
                                Jl. Trengguli Gang IV A
                                <br>
                                Kec. Denpasar Timur - DENPASAR<br><br>
                                <strong>Pos:</strong> 80238<br>
                                <strong>Email:</strong> kostku@gmail.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy;
                Copyright <?= date('Y') ?> <strong><span>Wisnawa</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/sailor-free-bootstrap-theme/ -->
                Designed by <a href="https://bootstrapmade.com/">Ega</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('/front_end/assets/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('/front_end/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('/front_end/assets/vendor/jquery.easing/jquery.easing.min.js'); ?>"></script>
    <script src="<?= base_url('/front_end/assets/vendor/php-email-form/validate.js'); ?>"></script>
    <script src="<?= base_url('/front_end/assets/vendor/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
    <script src="<?= base_url('/front_end/assets/vendor/venobox/venobox.min.js'); ?>"></script>
    <script src="<?= base_url('/front_end/assets/vendor/waypoints/jquery.waypoints.min.js'); ?>"></script>
    <script src="<?= base_url('/front_end/assets/vendor/owl.carousel/owl.carousel.min.js'); ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('/front_end/assets/js/main.js'); ?>"></script>

</body>

</html>