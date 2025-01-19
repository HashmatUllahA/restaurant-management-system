<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.templatescoder.com/restaurano/html/demo/1-0/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Aug 2023 15:38:50 GMT -->
<head>
	<title>Khyber Pinda Restaurant</title>

	<!-- Mobile Specific Metas -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link type="image/x-icon" href="http://themes.templatescoder.com/restaurano/html/demo/1-0/images/fav-icon.png" rel="icon">

    <!-- Css File -->
    <link rel="stylesheet" type="text/css" href="http://themes.templatescoder.com/restaurano/html/demo/1-0/css/style.css">
    <link rel="stylesheet" type="text/css" href="http://themes.templatescoder.com/restaurano/html/demo/1-0/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142494086-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-142494086-2');
    </script>

</head>
<style>

        .order-now {
    background-color: rgb(218, 99, 99);
    border-radius: 40px;
    padding: 10px 20px; /* Adjust the padding to control the height */
    display: inline-block;
    text-align: center;
    color: white;
    text-decoration: none;
    margin: 15px 15px;

}

</style>

<body>
    <?php echo e($slot); ?>

    <?php echo $__env->yieldContent('header'); ?>
	<!-- Start preloader -->
		<div id="preloader"></div>
        <!-- End preloader -->

        <header class="header transition">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 display-flex flex-center">
                        <div class="header-logo transition">
                            <a href="http://themes.templatescoder.com/restaurano/html/demo/1-0/index.html"><img src="<?php echo e(url('frontend/assets/User/kprlogo.png')); ?>" alt="Restaurano Logo"></a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 display-flex flex-center justify-right">
                        <div class="menu-toggle">
                            <span class="transition"></span>
                        </div>
                        <div class="main-menu">
                            <ul>
                                <li><a href="userhome">Home</a></li>
                                <li>
                                    <span class="opener plus"></span>
                                    <a href="gallery">pages</a>
                                    <ul>
                                        <li><a href="gallery">Gallery</a></li>
                                        <li><a href="ourteam">Our Team</a></li>
                                        <li><a href="http://themes.templatescoder.com/restaurano/html/demo/1-0/404.html">404</a></li>
                                    </ul>
                                </li>
                                <li><a href="about">About Us</a></li>
                                <li><a href="menu">Menu</a></li>
                                <li><a href="contect">Contact</a></li>
                                <li><a href="booknow" class="book-now">Order now</a></li>
                                    

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <?php echo e($main); ?>

        <footer class="position-r parallex-bg" style="background-image: url(http://themes.templatescoder.com/restaurano/html/demo/1-0/images/footer-bg.jpg)">
            <div class="container">
                <div class="wow fadeInUp">
                    
                    <div class="footer position-r">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5 col-md-4">
                                <div class="footer-logo-part">
                                    <a href="http://themes.templatescoder.com/restaurano/html/demo/1-0/index.html"><img src="<?php echo e(url('frontend/assets/User/kprlogo.png')); ?>" class="logo-icon" alt="logo icon"></a>
                                    <p class="logo-des">Welcome to our exquisite restaurant, where culinary delights await to tantalize your taste buds. Embark on a culinary journey like no other, where you'll experience a symphony of flavors that will leave you craving for more. At our restaurant, we pride ourselves on three key aspects that set us apart.</p>
                                    <ul class="footer-social">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7 col-md-8">
                                <div class="footer-menu display-flex">
                                    <div class="footer-menu-box">
                                        <span class="opener plus"></span>
                                        <h2 class="menu-title">Useful Links</h2>
                                        <ul class="footer-block-contant">
                                            <li><a href="about">About Us</a></li>
                                            <li><a href="">Recent Listings</a></li>
                                            <li><a href="">Featured Listings</a></li>
                                            <li><a href="">Our Service</a></li>
                                        </ul>
                                    </div>
                                    <div class="footer-menu-box">
                                        <span class="opener plus"></span>
                                        <h2 class="menu-title">Infomation</h2>
                                        <ul class="footer-block-contant">
                                            <li><a href="">Brand</a></li>
                                            <li><a href="">Gift Vouchers</a></li>
                                            <li><a href="">Affiliates</a></li>
                                            <li><a href="">Specials</a></li>
                                        </ul>
                                    </div>
                                    <div class="footer-menu-box">
                                        <span class="opener plus"></span>
                                        <h2 class="menu-title">Community</h2>
                                        <ul class="footer-block-contant">
                                            <li><a href="">Terms of services</a></li>
                                            <li><a href="">Advertise with us</a></li>
                                            <li><a href="">Policy</a></li>
                                            <li><a href="">Help center</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="copyright text-center position-r">
                        <p>Developer: Hashmat Sahar</p>
                        <i class="fa fa-envelope-o" style="font-size:24px">  hashmatullah13841@gmail.com</i>
                        <br>
                        <i class="fa fa-whatsapp" style="font-size:24px">  0312 9091602</i>
                    </div>
                </div>
            </div>
        </footer>
      <!-- ... your HTML code ... -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $('.dropdown-toggle').dropdown();
    });
</script>
</body>
</html>

    <script src="http://themes.templatescoder.com/restaurano/html/demo/1-0/js/jquery-3.4.1.min.js"></script>
	<script src="http://themes.templatescoder.com/restaurano/html/demo/1-0/js/bootstrap.min.js"></script>
	<script src="http://themes.templatescoder.com/restaurano/html/demo/1-0/js/slick.min.js"></script>
	<script src="http://themes.templatescoder.com/restaurano/html/demo/1-0/js/slick-animation.min.js"></script>
	<script src="http://themes.templatescoder.com/restaurano/html/demo/1-0/js/animation.js"></script>
	<script src="http://themes.templatescoder.com/restaurano/html/demo/1-0/js/TweenMax.min.js"></script>
    <script src="http://themes.templatescoder.com/restaurano/html/demo/1-0/js/ScrollToPlugin.min.js"></script>
	<script src="http://themes.templatescoder.com/restaurano/html/demo/1-0/js/script.js"></script>
</body>
</html>
<?php /**PATH J:\kpr\resources\views/components/userlayout.blade.php ENDPATH**/ ?>