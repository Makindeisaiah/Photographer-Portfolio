<!DOCTYPE php>
<html lang="zxx">

<!-- Mirrored from duruthemes.com/demo/php/phoxel/main/services.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 May 2022 11:46:23 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>VIRUS SHOT</title>
    <link rel="shortcut icon" href="img/viruslogo10.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&amp;display=swap">
    <link rel="stylesheet" href="css/plugins.css" />
    <link rel="stylesheet" href="css/style.css" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144098545-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-144098545-1');
    </script>
</head>
<body>
    <!-- Preloader -->
    <div class="preloader-bg"></div>
    <div id="preloader">
        <div id="preloader-status">
            <div class="preloader-position loader"> <span></span> </div>
        </div>
    </div>
    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Navbar -->
    <?php
    include "./includes/navbar.php";
    ?>
    <!-- Header Banner -->
    <section class="banner-header banner-img section-padding valign bg-img bg-fixed banner-overlay" data-overlay-darkgray="4" data-background="img/works/canon7.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-5 text-left caption">
                    <h1>My Services</h1>
                    <hr class="border-1">
                    <p>This are the services i render</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Services -->
    <section class="services section-padding bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-6 border-4">
                    <div class="item"> <img src="img/icons/icon-1.svg" alt="">
                        <h5>Photography</h5>
                        <p>Photography is the art, application, and pratice of creating durable images by recording light.</p>
                    </div>
                </div>
                <div class="col-md-6 border-">
                    <div class="item"> <img src="img/icons/icon-3.svg" alt="">
                        <h5>Photo Retouching</h5>
                        <p>Photo Retouching means opting to remove or add elements into an image using digital software like Photoshop.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testiominals -->
    <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0" data-background="img/banner/2.jpg" data-overlay-dark="3">
            <div class="container">
                <div class="row">
                    <!-- Work together -->
                    <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                        <h5>Need help with professional photography? Let's work together!</h5> <a href="contact.php" class="button-tersiyer">Contact me</a>
                    </div>
                    <!-- Testiominals -->
                    <div class="col-md-5 offset-md-1 animate-box" data-animate-effect="fadeInUp">
                        <div class="testimonials-box">
                            <div class="owl-carousel owl-theme">
                                <div class="item"> <span class="quote"><img src="img/quot.png" alt=""></span>
                                    <p class="v-border">I truly have nothing but the highest praise and appreciation for all that you did for me. You were not just professional and superbly talented, you were fun to work with, never obtrusive and  always smiling when working.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="img/team/Afrorock-ceo.jpeg" alt=""> </div>
                                        <div class="cont">
                                            <h6>Bukola Olayinka</h6> <span>Entrepreneur</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> <span class="quote">
                                    <img src="img/quot.png" alt="">
                                </span>
                                <p class="v-border">Virus Shot is truly an outstanding photographer (and wonderful person) with an almost mystical ability to capture the true nature people and events. i'd recommend him to anyone!</p>
                                <div class="info">
                                    <div class="author-img"> <img src="img/team/H1.jpeg" alt=""> </div>
                                    <div class="cont">
                                        <h6>Adesua Ewatomi</h6> <span>Model</span>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients -->
    <section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-7 owl-carousel owl-theme">
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/1.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/2.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/3.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/4.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/5.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/6.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <?php 
    include "./includes/footer.php";
    ?>
    <!-- jQuery -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.isotope.v3.0.2.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scrollIt.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/YouTubePopUp.js"></script>
    <script src="js/custom.js"></script>
</body>

<!-- Mirrored from duruthemes.com/demo/php/phoxel/main/services.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 May 2022 11:46:48 GMT -->
</html>