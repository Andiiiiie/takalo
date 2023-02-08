<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/avicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo base_url('../assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('../assets/css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('../assets/css/slicknav.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('../assets/css/flaticon.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('../assets/css/progressbar_barfiller.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('../assets/css/gijgo.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('../assets/css/animate.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('../assets/css/animated-headline.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('../assets/css/magnific-popup.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('../assets/css/fontawesome-all.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('../assets/css/themify-icons.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('../assets/css/slick.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('../assets/css/nice-select.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('../assets/css/style.css'); ?>">
</head>
<body>
    

    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?php echo base_url('../assets/img/logo/loder.png') ; ?>" alt="">
                </div>
            </div>
        </div>
    </div>

    <main class="login-body" data-vide-bg="<?php echo base_url('../assets/img/fond.mp4'); ?>">
        <form class="form-default" action="connect" method="POST">
            <div class="login-form">
                <!-- logo-login -->
                <div class="logo-login">
                    <a href="index.html"><img src="<?php echo base_url('../assets/img/logo/logo.png'); ?>" alt=""></a>
                </div>
                <h2>Login</h2>

                <div class="form-input">
                    <label for="name">Email</label>
                    <input type="email" name="log" placeholder="Email">
                </div>
                <div class="form-input">
                    <label for="name">Password</label>
                    <input type="password" name="mdp" placeholder="Password">
                </div>
                <div class="form-input pt-30">
                    <input type="submit" name="submit" value="Login">
                </div>
                <!-- Forget Password -->
                <?php if(isset($erreur)) { ?>
                    <p>tsy mety an</p>
                <?php } ?>
            </div>
        </form>
    </main>

    <script src="<?php echo base_url('..assets/js/vendor/modernizr-3.5.0.min.js'); ?>">
    </script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="<?php echo base_url('../assets/js/vendor/jquery-1.12.4.min.js'); ?>"></script>
    <script src="<?php echo base_url('../assets/js/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('../assets/js/bootstrap.min.js'); ?>"></script>
    <!-- Jquery Mobile Menu -->
    <script src="<?php echo base_url('../assets/js/jquery.slicknav.min.js'); ?>"></script>

    <!-- Video bg -->
    <script src="<?php echo base_url('../assets/js/jquery.vide.js'); ?>"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="<?php echo base_url('../assets/js/owl.carousel.min.js'); ?>"></script>
    <script src="<?php echo base_url('../assets/js/slick.min.js'); ?>"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="<?php echo base_url('../assets/js/wow.min.js'); ?>"></script>
    <script src="<?php echo base_url('../assets/js/animated.headline.js'); ?>"></script>
    <script src="<?php echo base_url('../assets/js/jquery.magnific-popup.js'); ?>"></script>

    <!-- Date Picker -->
    <script src="<?php echo base_url('../assets/js/gijgo.min.js'); ?>"></script>
    <!-- Nice-select, sticky -->
    <script src="<?php echo base_url('../assets/js/jquery.nice-select.min.js'); ?>"></script>
    <script src="<?php echo base_url('../assets/js/jquery.sticky.js'); ?>"></script>
    <!-- Progress -->
    <script src="<?php echo base_url('../assets/js/jquery.barfiller.js'); ?>"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="<?php echo base_url('../assets/js/jquery.counterup.min.js'); ?>"></script>
    <script src="<?php echo base_url('../assets/js/waypoints.min.js'); ?>"></script>
    <script src="<?php echo base_url('../assets/js/jquery.countdown.min.js'); ?>"></script>
    <script src="<?php echo base_url('../assets/js/hover-direction-snake.min.js'); ?>"></script>

    <!-- contact js -->
    <script src="<?php echo base_url('../assets/js/contact.js'); ?>"></script>
    <script src="<?php echo base_url('../assets/js/jquery.form.js'); ?>"></script>
    <script src="<?php echo base_url('../assets/js/jquery.validate.min.js'); ?>"></script>
    <script src="<?php echo base_url('../assets/js/mail-script.js'); ?>"></script>
    <script src="<?php echo base_url('../assets/js/jquery.ajaxchimp.min.js'); ?>"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="<?php echo base_url('../assets/js/plugins.js'); ?>"></script>
    <script src="<?php echo base_url('../assets/js/main.js'); ?>"></script>
</body>
</html>