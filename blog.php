<!DOCTYPE php>
<html lang="zxx">

<!-- Mirrored from duruthemes.com/demo/php/phoxel/main/blog.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 May 2022 11:47:03 GMT -->
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
    <section class="banner-header banner-img banner-img-top section-padding valign bg-img bg-fixed banner-overlay" data-overlay-darkgray="1" data-background="img/works/canon7.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h1>Latest News</h1>
                    <hr class="border-1">
                    <p>Check out the latest trends</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog -->
    <section class="blog section-padding bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="news animate-box" data-animate-effect="fadeInUp">
                        <figure><img src="img/blog/canon1.jpg" alt="" class="img-fluid"></figure>
                        <div class="caption">
                            <h6>Product News</h6>
                            <h4><a href="post">Meet the groundbreaking virtual reality lens
                            </a></h4>
                            <p>Creating high-quality and immersive 180° VR content is easier than ever with the Canon RF 5.2mm F2.8L Dual Fisheye lens.</p>
                            <hr class="border-2">
                            <div class="info-wrapper">
                                <div class="more"><a href="post.php" class="link-btn" tabindex="0">Read more</a></div>
                                <div class="date">6 January 2022</div>
                            </div>
                        </div>
                    </div>
                    <div class="news left animate-box" data-animate-effect="fadeInUp">
                        <figure><img src="img/blog/canon2.jpg" alt="" class="img-fluid"></figure>
                        <div class="caption">
                            <h6>Product News</h6>
                            <h4><a href="post2.php"> High-performance hybrid for video and stills</a></h4>
                            <p>Everything you need to know about the EOS R5 C – Canon's 8K full-frame body that bridges the EOS R and Cinema EOS systems.</p>
                            <hr class="border-2">
                            <div class="info-wrapper">
                                <div class="more"><a href="post2.php" class="link-btn" tabindex="0">Read more</a></div>
                                <div class="date">11 January 2022</div>
                            </div>
                        </div>
                    </div>
                    <div class="news animate-box" data-animate-effect="fadeInUp">
                        <figure><img src="img/blog/iphone13.jpg" alt="" class="img-fluid"></figure>
                        <div class="caption">
                            <h6>Mobile</h6>
                            <h4><a href="post3.php">Apple unveils iPhone 13 Pro and iPhone 13 Pro Max — more pro than ever before</a></h4>
                            <p>The most advanced pro camera system ever on iPhone; Super Retina XDR display with ProMotion; a massive leap in battery life; A15 Bionic, the fastest chip in a smartphone; an advanced 5G experience; and so much more</p>
                            <hr class="border-2">
                            <div class="info-wrapper">
                                <div class="more"><a href="post3.php" class="link-btn" tabindex="0">Read more</a></div>
                                <div class="date">19 March 2022</div>
                            </div>
                        </div>
                    </div>
                    <div class="news left animate-box" data-animate-effect="fadeInUp">
                        <figure><img src="img/blog/boxing.jpg" alt="" class="img-fluid"></figure>
                        <div class="caption">
                            <h6>Article</h6>
                            <h4><a href="post4.php">British Sports Photographer of the Year Award winners' tips</a></h4>
                            <p>Canon-shooting winners of the British Sports Photographer of the Year Awards share the tips and stories behind their winning images.</p>
                            <hr class="border-2">
                            <div class="info-wrapper">
                                <div class="more"><a href="post4.php" class="link-btn" tabindex="0">Read more</a></div>
                                <div class="date">23 April 2022</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
					<div class="col-md-12 text-center">
						<!-- Pagination -->
						<ul class="news-pagination-wrap align-center mt-90">
							<li><a href="#"><i class="ti-angle-left"></i></a></li>
							<li><a href="#" class="active">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#"><i class="ti-angle-right"></i></a></li>
						</ul>
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

<!-- Mirrored from duruthemes.com/demo/php/phoxel/main/blog.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 May 2022 11:47:04 GMT -->
    </html>