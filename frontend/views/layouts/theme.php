<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

 \frontend\assets\FrontendAsset::register($this);
 \common\modules\chat\assets\DefaultAsset::register($this);
 $bundlePath = Yii::$app->getAssetManager()->getBundle('\frontend\assets\FrontendAsset')->baseUrl;
 $bundlePathChat = Yii::$app->getAssetManager()->getBundle('\common\modules\chat\assets\DefaultAsset')->baseUrl;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="en" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html dir="ltr" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>The Project | Home Blog</title>
    <meta name="description" content="The Project a Bootstrap-based, Responsive HTML5 Template">
    <meta name="author" content="htmlcoder.me">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <?php $this->head() ?>
    <?php echo Html::csrfMetaTags(); ?>
    <!-- Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>


</head>

<!-- body classes:  -->
<!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
<!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
<!-- "transparent-header": makes the header transparent and pulls the banner to top -->
<!-- "gradient-background-header": applies gradient background to header -->
<!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
<body class="no-trans front-page   page-loader-4">
<?php $this->beginBody() ?>
<!-- scrollToTop -->
<!-- ================ -->
<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>

<!-- page wrapper start -->
<!-- ================ -->
<div class="page-wrapper">

    <!-- header-container start -->
    <div class="header-container">


        <!-- header-top start -->
        <!-- classes:  -->
        <!-- "dark": dark version of header top e.g. class="header-top dark" -->
        <!-- "colored": colored version of header top e.g. class="header-top colored" -->
        <!-- ================ -->
        <div class="header-top  ">
            <div class="container">
                <div class="row">
                    <div class="col-xs-3 col-sm-6 col-md-9">
                        <!-- header-top-first start -->
                        <!-- ================ -->
                        <div class="header-top-first clearfix">
                            <ul class="social-links circle small clearfix hidden-xs">
                                <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                <li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
                                <li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                                <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                <li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>
                                <li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
                                <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                <li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                            <div class="social-links hidden-lg hidden-md hidden-sm circle small">
                                <div class="btn-group dropdown">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt"></i></button>
                                    <ul class="dropdown-menu dropdown-animation">
                                        <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                        <li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
                                        <li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                                        <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                        <li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>
                                        <li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
                                        <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                        <li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="list-inline hidden-sm hidden-xs">
                                <li><i class="fa fa-map-marker pr-5 pl-10"></i>One Infinity Loop Av, Tk 123456</li>
                                <li><i class="fa fa-phone pr-5 pl-10"></i>+12 123 123 123</li>
                                <li><i class="fa fa-envelope-o pr-5 pl-10"></i> theproject@mail.com</li>
                            </ul>
                        </div>
                        <!-- header-top-first end -->
                    </div>
                    <div class="col-xs-9 col-sm-6 col-md-3">

                        <!-- header-top-second start -->
                        <!-- ================ -->
                        <div id="header-top-second"  class="clearfix">

                            <!-- header top dropdowns start -->
                            <!-- ================ -->
                            <div class="header-top-dropdown text-right">
                                <div class="btn-group">
                                    <a href="page-signup.html" class="btn btn-default btn-sm"><i class="fa fa-user pr-10"></i> Sign Up</a>
                                </div>
                                <div class="btn-group dropdown">
                                    <button type="button" class="btn dropdown-toggle btn-default btn-sm" data-toggle="dropdown"><i class="fa fa-lock pr-10"></i> Login</button>
                                    <ul class="dropdown-menu dropdown-menu-right dropdown-animation">
                                        <li>
                                            <form class="login-form margin-clear">
                                                <div class="form-group has-feedback">
                                                    <label class="control-label">Username</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                    <i class="fa fa-user form-control-feedback"></i>
                                                </div>
                                                <div class="form-group has-feedback">
                                                    <label class="control-label">Password</label>
                                                    <input type="password" class="form-control" placeholder="">
                                                    <i class="fa fa-lock form-control-feedback"></i>
                                                </div>
                                                <button type="submit" class="btn btn-gray btn-sm">Log In</button>
                                                <span class="pl-5 pr-5">or</span>
                                                <button type="submit" class="btn btn-default btn-sm">Sing Up</button>
                                                <ul>
                                                    <li><a href="index-blog.html#">Forgot your password?</a></li>
                                                </ul>
                                                <span class="text-center">Login with</span>
                                                <ul class="social-links circle small colored clearfix">
                                                    <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                                    <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                                    <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                                </ul>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--  header top dropdowns end -->
                        </div>
                        <!-- header-top-second end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- header-top end -->

        <!-- header start -->
        <!-- classes:  -->
        <!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
        <!-- "dark": dark version of header e.g. class="header dark clearfix" -->
        <!-- "full-width": mandatory class for the full-width menu layout -->
        <!-- "centered": mandatory class for the centered logo layout -->
        <!-- ================ -->
        <header class="header centered fixed    clearfix">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- header-first start -->
                        <!-- ================ -->
                        <div class="header-first clearfix">

                            <!-- logo -->
                            <div id="logo" class="logo">
                                <a href="index.html"><img id="logo_img" src="/images/logo_light_blue.png" alt="The Project"></a>
                            </div>



                        </div>
                        <!-- header-first end -->

                    </div>
                    <div class="col-md-12">

                        <!-- header-second start -->
                        <!-- ================ -->
                        <div class="header-second clearfix">

                            <!-- main-navigation start -->
                            <!-- classes: -->
                            <!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
                            <!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
                            <!-- "with-dropdown-buttons": Mandatory class that adds extra space, to the main navigation, for the search and cart dropdowns -->
                            <!-- ================ -->
                            <div class="main-navigation  animated ">

                                <!-- navbar start -->
                                <!-- ================ -->
                                <nav class="navbar navbar-default" role="navigation">
                                    <div class="container-fluid">

                                        <!-- Toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>

                                        </div>

                                        <!-- Collect the nav links, forms, and other content for toggling -->
                                        <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                            <!-- main-menu -->
                                            <ul class="nav navbar-nav navbar-right">

                                                <!-- mega-menu start -->
                                                <li class="dropdown active mega-menu">
                                                    <a href="index.html" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <h4 class="title"><i class="fa fa-laptop pr-10"></i> Demos</h4>
                                                                    <div class="row">
                                                                        <div class="col-sm-6 col-md-3">
                                                                            <div class="divider"></div>
                                                                            <ul class="menu">
                                                                                <li ><a href="index.html"><i class="icon-home pr-10"></i>Home Default</a></li>
                                                                                <li ><a href="index-rtl.html"><i class="icon-home pr-10"></i>Home Default - RTL <span class="badge">New</span></a></li>
                                                                                <li ><a href="index-corporate-1.html"><i class="icon-suitcase pr-10"></i>Corporate 1</a></li>
                                                                                <li ><a href="index-corporate-2.html"><i class="icon-suitcase pr-10"></i>Corporate 2</a></li>
                                                                                <li ><a href="index-corporate-3.html"><i class="icon-suitcase pr-10"></i>Corporate 3</a></li>
                                                                                <li ><a href="index-corporate-4.html"><i class="icon-suitcase pr-10"></i>Corporate 4 <span class="badge">v1.2</span></a></li>
                                                                                <li ><a href="index-corporate-5.html"><i class="icon-suitcase pr-10"></i>Corporate 5 (Law Firm) <span class="badge">v1.3</span></a></li>
                                                                                <li ><a href="index-shop.html"><i class="icon-basket-1 pr-10"></i>Commerce 1</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-sm-6 col-md-3">
                                                                            <div class="divider"></div>
                                                                            <ul class="menu">
                                                                                <li ><a href="index-shop-2.html"><i class="icon-basket-1 pr-10"></i>Commerce 2</a></li>
                                                                                <li ><a href="index-portfolio.html"><i class="icon-briefcase pr-10"></i>Portfolio/Agency</a></li>
                                                                                <li ><a href="index-portfolio-2.html"><i class="icon-camera pr-10"></i>Portfolio 2 <span class="badge">New</span></a></li>
                                                                                <li ><a href="index-medical.html"><i class="fa fa-ambulance pr-10"></i>Medical</a></li>
                                                                                <li ><a href="index-restaurant.html"><i class="fa fa-cutlery pr-10"></i>Restaurant</a></li>
                                                                                <li ><a href="index-restaurant-2.html"><i class="fa fa-cutlery pr-10"></i>Restaurant 2 <span class="badge">v1.3</span></a></li>
                                                                                <li ><a href="index-wedding.html"><i class="icon-heart pr-10"></i>Wedding</a></li>
                                                                                <li ><a href="index-landing.html"><i class="fa fa-star pr-10"></i>Landing Page</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-sm-6 col-md-3">
                                                                            <div class="divider"></div>
                                                                            <ul class="menu">
                                                                                <li ><a href="index-landing-2.html"><i class="fa fa-star pr-10"></i>Landing Page 2 <span class="badge">v1.3</span></a></li>
                                                                                <li ><a href="page-coming-soon.html"><i class="fa fa-clock-o pr-10"></i>Coming Soon</a></li>
                                                                                <li ><a href="index-one-page.html"><i class="icon-home pr-10"></i>One Page Version</a></li>
                                                                                <li ><a href="index-construction.html"><i class="fa fa-building pr-10"></i>Construction <span class="badge">v1.1</span></a></li>
                                                                                <li ><a href="index-education.html"><i class="fa fa-graduation-cap pr-10"></i>Education <span class="badge">v1.1</span></a></li>
                                                                                <li ><a href="index-hotel.html"><i class="fa fa-bed pr-10"></i>Hotel <span class="badge">v1.1</span></a></li>
                                                                                <li class="active"><a href="index-blog.html"><i class="fa fa-pencil pr-10"></i>Blog <span class="badge">v1.1</span></a></li>
                                                                                <li ><a href="index-blog-2.html"><i class="fa fa-pencil pr-10"></i>Blog 2<span class="badge">v1.3</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-sm-6 col-md-3">
                                                                            <div class="divider"></div>
                                                                            <ul class="menu">
                                                                                <li ><a href="index-beauty.html"><i class="fa fa-magic pr-10"></i>Beauty Center <span class="badge">v1.1</span></a></li>
                                                                                <li ><a href="index-gym.html"><i class="fa fa-heartbeat pr-10"></i>Gym <span class="badge">v1.2</span></a></li>
                                                                                <li ><a href="index-resume.html"><i class="fa fa-user pr-10"></i>Resume <span class="badge">v1.2</span></a></li>
                                                                                <li ><a href="index-agency.html"><i class="fa fa-users pr-10"></i>Agency <span class="badge">v1.2</span></a></li>
                                                                                <li ><a href="index-logistics.html"><i class="fa fa-truck pr-10"></i>Logistics <span class="badge">v1.2</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- mega-menu end -->
                                                <!-- mega-menu start -->
                                                <li class="dropdown  mega-menu">
                                                    <a href="index-blog.html#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <div class="row">
                                                                <div class="col-lg-8 col-md-9">
                                                                    <h4 class="title">Pages</h4>
                                                                    <div class="row">
                                                                        <div class="col-sm-4">
                                                                            <div class="divider"></div>
                                                                            <ul class="menu">
                                                                                <li ><a href="page-about.html"><i class="fa fa-angle-right"></i>About Us 1</a></li>
                                                                                <li ><a href="page-about-2.html"><i class="fa fa-angle-right"></i>About Us 2</a></li>
                                                                                <li ><a href="page-about-3.html"><i class="fa fa-angle-right"></i>About Us 3</a></li>
                                                                                <li ><a href="page-about-4.html"><i class="fa fa-angle-right"></i>About Us 4</a></li>
                                                                                <li ><a href="page-about-me.html"><i class="fa fa-angle-right"></i>About Me</a></li>
                                                                                <li ><a href="page-team.html"><i class="fa fa-angle-right"></i>Our Team - Options 1</a></li>
                                                                                <li ><a href="page-team-2.html"><i class="fa fa-angle-right"></i>Our Team - Options 2</a></li>
                                                                                <li ><a href="page-team-3.html"><i class="fa fa-angle-right"></i>Our Team - Options 3</a></li>
                                                                                <li ><a href="page-coming-soon.html"><i class="fa fa-angle-right"></i>Coming Soon Page</a></li>
                                                                                <li ><a href="page-faq.html"><i class="fa fa-angle-right"></i>FAQ page</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <div class="divider"></div>
                                                                            <ul class="menu">
                                                                                <li ><a href="page-services.html"><i class="fa fa-angle-right"></i>Services 1</a></li>
                                                                                <li ><a href="page-services-2.html"><i class="fa fa-angle-right"></i>Services 2</a></li>
                                                                                <li ><a href="page-services-3.html"><i class="fa fa-angle-right"></i>Services 3</a></li>
                                                                                <li ><a href="page-contact.html"><i class="fa fa-angle-right"></i>Contact 1</a></li>
                                                                                <li ><a href="page-contact-2.html"><i class="fa fa-angle-right"></i>Contact 2</a></li>
                                                                                <li ><a href="page-contact-3.html"><i class="fa fa-angle-right"></i>Contact 3</a></li>
                                                                                <li ><a href="page-login.html"><i class="fa fa-angle-right"></i>Login 1</a></li>
                                                                                <li ><a href="page-login-2.html"><i class="fa fa-angle-right"></i>Login 2 - Fullsreen</a></li>
                                                                                <li ><a href="page-signup.html"><i class="fa fa-angle-right"></i>Sign Up 1</a></li>
                                                                                <li ><a href="page-signup-2.html"><i class="fa fa-angle-right"></i>Sign Up 2 - Fullsreen</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <div class="divider"></div>
                                                                            <ul class="menu">
                                                                                <li ><a href="page-404.html"><i class="fa fa-angle-right"></i>404 error</a></li>
                                                                                <li ><a href="page-404-2.html"><i class="fa fa-angle-right"></i>404 error - Parallax</a></li>
                                                                                <li ><a href="page-affix-sidebar.html"><i class="fa fa-angle-right"></i>Sidebar - Affix Menu</a></li>
                                                                                <li ><a href="page-left-sidebar.html"><i class="fa fa-angle-right"></i>Left Sidebar</a></li>
                                                                                <li ><a href="page-right-sidebar.html"><i class="fa fa-angle-right"></i>Right Sidebar</a></li>
                                                                                <li ><a href="page-two-sidebars.html"><i class="fa fa-angle-right"></i>Two Sidebars</a></li>
                                                                                <li ><a href="page-two-sidebars-left.html"><i class="fa fa-angle-right"></i>Two Sidebars Left</a></li>
                                                                                <li ><a href="page-two-sidebars-right.html"><i class="fa fa-angle-right"></i>Two Sidebars Right</a></li>
                                                                                <li ><a href="page-no-sidebars.html"><i class="fa fa-angle-right"></i>No Sidebars</a></li>
                                                                                <li ><a href="page-sitemap.html"><i class="fa fa-angle-right"></i>Sitemap</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-3 hidden-sm">
                                                                    <h4 class="title">Premium HTML5 Template</h4>
                                                                    <p class="mb-10">The Project is perfectly suitable for corporate, business and company webpages.</p>
                                                                    <img src="/images/section-image-3.png" alt="The Project">
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- mega-menu end -->
                                                <li class="dropdown ">
                                                    <a class="dropdown-toggle" data-toggle="dropdown" href="index-blog.html#">Features</a>
                                                    <ul class="dropdown-menu">
                                                        <li class="dropdown ">
                                                            <a  class="dropdown-toggle" data-toggle="dropdown" href="index-blog.html#">Headers <span class="badge">v1.2</span></a>
                                                            <ul class="dropdown-menu">
                                                                <li ><a href="features-headers-default.html">Default/Semi-Transparent</a></li>
                                                                <li ><a href="features-headers-default-dark.html">Dark/Semi-Transparent</a></li>
                                                                <li ><a href="features-headers-gradient-dark.html">Gradient Dark <span class="badge">v1.2</span></a></li>
                                                                <li ><a href="features-headers-gradient-light.html">Gradient Light <span class="badge">v1.2</span></a></li>
                                                                <li ><a href="features-headers-classic.html">Classic Light</a></li>
                                                                <li ><a href="features-headers-classic-dark.html">Classic Dark</a></li>
                                                                <li ><a href="features-headers-colored.html">Colored/Light</a></li>
                                                                <li ><a href="features-headers-colored-dark.html">Colored/Dark</a></li>
                                                                <li ><a href="features-headers-full-width.html">Full Width</a></li>
                                                                <li ><a href="features-headers-offcanvas-left.html">Offcanvas Left Side</a></li>
                                                                <li ><a href="features-headers-offcanvas-right.html">Offcanvas Right Side</a></li>
                                                                <li ><a href="features-headers-logo-centered.html">Logo Centered</a></li>
                                                                <li ><a href="features-headers-slider-top.html">Slider Top</a></li>
                                                                <li ><a href="features-headers-simple.html">Simple Static</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown ">
                                                            <a  class="dropdown-toggle" data-toggle="dropdown" href="index-blog.html#">Sticky Headers <span class="badge">v1.2</span></a>
                                                            <ul class="dropdown-menu">
                                                                <li ><a href="features-headers-default.html">Default</a></li>
                                                                <li ><a href="features-headers-sticky-2.html">Alternative <span class="badge">v1.2</span></a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown ">
                                                            <a  class="dropdown-toggle" data-toggle="dropdown" href="index-blog.html#">Menus</a>
                                                            <ul class="dropdown-menu">
                                                                <li ><a href="features-headers-default.html">Default/On Hover Menu</a></li>
                                                                <li ><a href="features-menus-onhover-no-animations.html">On Hover Menu - No Animations</a></li>
                                                                <li ><a href="features-menus-onclick.html">On Click Menu - With Animations</a></li>
                                                                <li ><a href="features-menus-onclick-no-animations.html">On Click Menu - No Animations</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown ">
                                                            <a  class="dropdown-toggle" data-toggle="dropdown" href="index-blog.html#">Footers <span class="badge">v1.2</span></a>
                                                            <ul class="dropdown-menu">
                                                                <li ><a href="features-footers-default.html#footer">Default</a></li>
                                                                <li ><a href="features-footers-contact-form.html#footer">Contact Form</a></li>
                                                                <li ><a href="features-footers-contact-form-2.html#footer">Contact Form 2 <span class="badge">v1.2</span></a></li>
                                                                <li ><a href="features-footers-google-maps.html#footer">Google Maps</a></li>
                                                                <li ><a href="features-footers-subscribe.html#footer">Subscribe Form</a></li>
                                                                <li ><a href="features-footers-minimal.html#footer">Minimal</a></li>
                                                                <li ><a href="features-footers-links.html#footer">Links <span class="badge">v1.1</span></a></li>
                                                                <li ><a href="features-footers-full-width.html#footer">Full Width <span class="badge">v1.2</span></a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown ">
                                                            <a  class="dropdown-toggle" data-toggle="dropdown" href="index-blog.html#">Main Sliders <span class="badge">v1.2</span></a>
                                                            <ul class="dropdown-menu">
                                                                <li ><a href="features-sliders-fullscreen.html">Full Screen</a></li>
                                                                <li ><a href="features-sliders-fullwidth.html">Full Width</a></li>
                                                                <li ><a href="features-sliders-fullwidth-big-height.html">Full Width - Big Height</a></li>
                                                                <li ><a href="features-sliders-boxedwidth-light.html">Boxed Width - Light Bg</a></li>
                                                                <li ><a href="features-sliders-boxedwidth-dark.html">Boxed Width - Dark Bg</a></li>
                                                                <li ><a href="features-sliders-boxedwidth-default.html">Boxed Width - Default Bg</a></li>
                                                                <li ><a href="features-sliders-video-background.html">Video Background</a></li>
                                                                <li ><a href="features-sliders-text-rotator.html">Text Rotator</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown">
                                                            <a  class="dropdown-toggle" data-toggle="dropdown" href="index-blog.html#">Email Templates <span class="badge">v1.1</span></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a target="_blank" href="email_templates/email_template_blue.html">Blue</a></li>
                                                                <li><a target="_blank" href="email_templates/email_template_brown.html">Brown</a></li>
                                                                <li><a target="_blank" href="email_templates/email_template_cool_green.html">Cool Green</a></li>
                                                                <li><a target="_blank" href="email_templates/email_template_dark_cyan.html">Dark Cyan</a></li>
                                                                <li><a target="_blank" href="email_templates/email_template_dark_red.html">Dark Red</a></li>
                                                                <li><a target="_blank" href="email_templates/email_template_gold.html">Gold</a></li>
                                                                <li><a target="_blank" href="email_templates/email_template_gray.html">Gray</a></li>
                                                                <li><a target="_blank" href="email_templates/email_template_green.html">Green</a></li>
                                                                <li><a target="_blank" href="email_templates/email_template_light_blue.html">Light Blue</a></li>
                                                                <li><a target="_blank" href="email_templates/email_template_orange.html">Orange</a></li>
                                                                <li><a target="_blank" href="email_templates/email_template_pink.html">Pink</a></li>
                                                                <li><a target="_blank" href="email_templates/email_template_purple.html">Purple</a></li>
                                                                <li><a target="_blank" href="email_templates/email_template_red.html">Red</a></li>
                                                                <li><a target="_blank" href="email_templates/email_template_vivid_red.html">Vivid Red</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown ">
                                                            <a  class="dropdown-toggle" data-toggle="dropdown" href="index-blog.html#">Pricing Tables</a>
                                                            <ul class="dropdown-menu">
                                                                <li ><a href="features-pricing-tables-1.html">Pricing Tables 1</a></li>
                                                                <li ><a href="features-pricing-tables-2.html">Pricing Tables 2</a></li>
                                                                <li ><a href="features-pricing-tables-3.html">Pricing Tables 3</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown ">
                                                            <a  class="dropdown-toggle" data-toggle="dropdown" href="index-blog.html#">Icons</a>
                                                            <ul class="dropdown-menu">
                                                                <li ><a href="features-icons-fontawesome.html">Font Awesome</a></li>
                                                                <li ><a href="features-icons-fontello.html">Fontello</a></li>
                                                                <li ><a href="features-icons-glyphicons.html">Glyphicons</a></li>
                                                            </ul>
                                                        </li>
                                                        <li ><a href="features-dark-page.html">Dark Page</a></li>
                                                        <li ><a href="features-typography.html">Typography</a></li>
                                                        <li ><a href="features-backgrounds.html">Backgrounds</a></li>
                                                        <li ><a href="features-grid.html">Grid</a></li>
                                                    </ul>
                                                </li>
                                                <!-- mega-menu start -->
                                                <li class="dropdown  mega-menu narrow">
                                                    <a href="index-blog.html#" class="dropdown-toggle" data-toggle="dropdown">Components</a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <h4 class="title"><i class="fa fa-magic pr-10"></i> Components</h4>
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <div class="divider"></div>
                                                                            <ul class="menu">
                                                                                <li ><a href="components-social-icons.html"><i class="icon-share pr-10"></i>Social Icons</a></li>
                                                                                <li ><a href="components-buttons.html"><i class="icon-flask pr-10"></i>Buttons</a></li>
                                                                                <li ><a href="components-forms.html"><i class="icon-eq pr-10"></i>Forms</a></li>
                                                                                <li ><a href="components-tabs-and-pills.html"><i class=" icon-dot-3 pr-10"></i>Tabs &amp; Pills</a></li>
                                                                                <li ><a href="components-accordions.html"><i class="icon-menu-outline pr-10"></i>Accordions</a></li>
                                                                                <li ><a href="components-progress-bars.html"><i class="icon-chart-line pr-10"></i>Progress Bars</a></li>
                                                                                <li ><a href="components-call-to-action.html"><i class="icon-chat pr-10"></i>Call to Action Blocks</a></li>
                                                                                <li ><a href="components-alerts-and-callouts.html"><i class="icon-info-circled pr-10"></i>Alerts &amp; Callouts</a></li>
                                                                                <li ><a href="components-content-sliders.html"><i class="icon-star-filled pr-10"></i>Content Sliders</a></li>
                                                                                <li ><a href="components-charts.html"><i class="icon-chart-pie pr-10"></i>Charts</a></li>
                                                                                <li ><a href="components-page-loaders.html"><i class="fa fa-circle-o-notch fa-spin"></i>Page Loaders <span class="badge">v1.1</span></a></li>
                                                                                <li ><a href="components-icon-boxes.html"><i class="icon-picture-outline pr-10"></i>Icon Boxes</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <div class="divider"></div>
                                                                            <ul class="menu">
                                                                                <li ><a href="components-image-boxes.html"><i class="icon-camera-1 pr-10"></i>Image Boxes</a></li>
                                                                                <li ><a href="components-fullwidth-sections.html"><i class="icon-code-1 pr-10"></i>Full Width Sections</a></li>
                                                                                <li ><a href="components-animations.html"><i class="icon-docs pr-10"></i>Animations</a></li>
                                                                                <li ><a href="components-video-and-audio.html"><i class="icon-video pr-10"></i>Video &amp; Audio</a></li>
                                                                                <li ><a href="components-lightbox.html"><i class="icon-plus pr-10"></i>Lightbox</a></li>
                                                                                <li ><a href="components-counters.html"><i class="icon-sort-numeric pr-10"></i>Counters</a></li>
                                                                                <li ><a href="components-modals.html"><i class="icon-popup pr-10"></i>Modals</a></li>
                                                                                <li ><a href="components-tables.html"><i class="icon-th pr-10"></i>Tables</a></li>
                                                                                <li ><a href="components-text-rotators.html"><i class="icon-arrows-ccw pr-10"></i>Text Rotators</a></li>
                                                                                <li ><a href="components-announcement-default.html"><i class="icon-megaphone pr-10"></i>Announcements <span class="badge">v1.3</span></a></li>
                                                                                <li ><a href="components-separators.html"><i class="icon-star pr-10"></i>Separators <span class="badge">v1.3</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- mega-menu end -->
                                                <li class="dropdown ">
                                                    <a href="portfolio-grid-2-3-col.html" class="dropdown-toggle" data-toggle="dropdown">Portfolio</a>
                                                    <ul class="dropdown-menu">
                                                        <li class="dropdown ">
                                                            <a  class="dropdown-toggle" data-toggle="dropdown" href="index-blog.html#">Portfolio Grid 1</a>
                                                            <ul class="dropdown-menu">
                                                                <li ><a href="portfolio-grid-1-2-col.html">2 Column</a></li>
                                                                <li ><a href="portfolio-grid-1-3-col.html">3 Column</a></li>
                                                                <li ><a href="portfolio-grid-1-4-col.html">4 Column</a></li>
                                                                <li ><a href="portfolio-grid-1-sidebar.html">With Sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown ">
                                                            <a  class="dropdown-toggle" data-toggle="dropdown" href="index-blog.html#">Portfolio Grid 2</a>
                                                            <ul class="dropdown-menu">
                                                                <li ><a href="portfolio-grid-2-2-col.html">2 Column</a></li>
                                                                <li ><a href="portfolio-grid-2-3-col.html">3 Column</a></li>
                                                                <li ><a href="portfolio-grid-2-4-col.html">4 Column</a></li>
                                                                <li ><a href="portfolio-grid-2-sidebar.html">With Sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown ">
                                                            <a  class="dropdown-toggle" data-toggle="dropdown" href="index-blog.html#">Portfolio Grid 3 - Dark</a>
                                                            <ul class="dropdown-menu">
                                                                <li ><a href="portfolio-grid-3-2-col.html">2 Column</a></li>
                                                                <li ><a href="portfolio-grid-3-3-col.html">3 Column</a></li>
                                                                <li ><a href="portfolio-grid-3-4-col.html">4 Column</a></li>
                                                                <li ><a href="portfolio-grid-3-sidebar.html">With Sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown ">
                                                            <a  class="dropdown-toggle" data-toggle="dropdown" href="index-blog.html#">Portfolio Fullwidth</a>
                                                            <ul class="dropdown-menu">
                                                                <li ><a href="portfolio-fullwidth-2-col.html">2 Column</a></li>
                                                                <li ><a href="portfolio-fullwidth-3-col.html">3 Column</a></li>
                                                                <li ><a href="portfolio-fullwidth-4-col.html">4 Column</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown ">
                                                            <a  class="dropdown-toggle" data-toggle="dropdown" href="index-blog.html#">Portfolio List</a>
                                                            <ul class="dropdown-menu">
                                                                <li ><a href="portfolio-list-1.html">List - Large Images</a></li>
                                                                <li ><a href="portfolio-list-2.html">List - Small Images</a></li>
                                                                <li ><a href="portfolio-list-sidebar.html">With Sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li ><a href="portfolio-item.html">Single Item 1</a></li>
                                                        <li ><a href="portfolio-item-2.html">Single Item 2</a></li>
                                                        <li ><a href="portfolio-item-3.html">Single Item 3</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown ">
                                                    <a href="index-shop.html" class="dropdown-toggle" data-toggle="dropdown">Shop</a>
                                                    <ul class="dropdown-menu">
                                                        <li ><a href="index-shop.html">Shop Home 1</a></li>
                                                        <li ><a href="index-shop-2.html">Shop Home 2</a></li>
                                                        <li ><a href="shop-listing-4col.html">Grid - 4 Columns</a></li>
                                                        <li ><a href="shop-listing-3col.html">Grid - 3 Columns</a></li>
                                                        <li ><a href="shop-listing-2col.html">Grid - 2 Columns</a></li>
                                                        <li ><a href="shop-listing-sidebar.html">Grid - With Sidebar</a></li>
                                                        <li ><a href="shop-listing-list.html">List</a></li>
                                                        <li ><a href="shop-product.html">Product Page</a></li>
                                                        <li ><a href="shop-product-2.html">Product Page 2 <span class="badge">v1.3</span></a></li>
                                                        <li ><a href="shop-cart.html">Shopping Cart</a></li>
                                                        <li ><a href="shop-checkout.html">Checkout Page - Step 1</a></li>
                                                        <li ><a href="shop-checkout-payment.html">Checkout Page - Step 2</a></li>
                                                        <li ><a href="shop-checkout-review.html">Checkout Page - Step 3</a></li>
                                                        <li ><a href="shop-invoice.html">Invoice</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown ">
                                                    <a href="blog-large-image-right-sidebar.html" class="dropdown-toggle" data-toggle="dropdown">Blog</a>
                                                    <ul class="dropdown-menu">
                                                        <li class="active"><a href="index-blog.html">Blog Home <span class="badge">v1.1</span></a></li>
                                                        <li ><a href="index-blog-2.html">Blog Home 2 <span class="badge">v1.3</span></a></li>
                                                        <li class="dropdown ">
                                                            <a  class="dropdown-toggle" data-toggle="dropdown" href="index-blog.html#">Large Image</a>
                                                            <ul class="dropdown-menu to-left">
                                                                <li ><a href="blog-large-image-right-sidebar.html">Right Sidebar</a></li>
                                                                <li ><a href="blog-large-image-left-sidebar.html">Left Sidebar</a></li>
                                                                <li ><a href="blog-large-image-no-sidebar.html">Without Sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown ">
                                                            <a  class="dropdown-toggle" data-toggle="dropdown" href="index-blog.html#">Medium Image</a>
                                                            <ul class="dropdown-menu to-left">
                                                                <li ><a href="blog-medium-image-right-sidebar.html">Right Sidebar</a></li>
                                                                <li ><a href="blog-medium-image-left-sidebar.html">Left Sidebar</a></li>
                                                                <li ><a href="blog-medium-image-no-sidebar.html">Without Sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown ">
                                                            <a  class="dropdown-toggle" data-toggle="dropdown" href="index-blog.html#">Masonry</a>
                                                            <ul class="dropdown-menu to-left">
                                                                <li ><a href="blog-masonry-right-sidebar.html">Right Sidebar</a></li>
                                                                <li ><a href="blog-masonry-left-sidebar.html">Left Sidebar</a></li>
                                                                <li ><a href="blog-masonry-no-sidebar.html">Without Sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li ><a href="blog-timeline.html">Timeline</a></li>
                                                        <li ><a href="blog-post.html">Blog Post</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <!-- main-menu end -->

                                        </div>

                                    </div>
                                </nav>
                                <!-- navbar end -->

                            </div>
                            <!-- main-navigation end -->
                        </div>
                        <!-- header-second end -->

                    </div>
                </div>
            </div>

        </header>
        <!-- header end -->
    </div>
    <!-- header-container end -->

    <!-- banner start -->
    <!-- ================ -->
    <div class="light-gray-bg banner pv-40">
        <div class="container clearfix">

            <!-- slideshow start -->
            <!-- ================ -->
            <div class="slideshow">

                <!-- slider revolution start -->
                <!-- ================ -->
                <div class="slider-revolution-5-container">
                    <div id="slider-banner-boxedwidth" class="slider-banner-boxedwidth rev_slider" data-version="5.0">
                        <ul class="slides">
                            <!-- slide 1 start -->
                            <!-- ================ -->
                            <li data-transition="random" data-slotamount="default" data-masterspeed="default" data-title="Premium HTML5 Template">

                                <!-- main image -->
                                <img src="/images/blog-slide-1.jpg" alt="slidebg2" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover" class="rev-slidebg">

                                <!-- Transparent Background -->
                                <div class="tp-caption dark-translucent-bg"
                                     data-x="center"
                                     data-y="center"
                                     data-start="0"
                                     data-transform_idle="o:1;"
                                     data-transform_in="o:0;s:600;e:Power2.easeInOut;"
                                     data-transform_out="o:0;s:600;"
                                     data-width="5000"
                                     data-height="450">
                                </div>

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption large_white"
                                     data-x="left"
                                     data-y="110"
                                     data-start="500"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];sX:1;sY:1;o:0;s:1150;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">Premium HTML5 Template
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption large_white tp-resizeme hidden-xs"
                                     data-x="left"
                                     data-y="175"
                                     data-start="750"
                                     data-transform_idle="o:1;"
                                     data-transform_in="o:0;s:2000;e:Power4.easeInOut;">
                                    <div class="separator-2 light"></div>
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption medium_white hidden-xs"
                                     data-x="left"
                                     data-y="190"
                                     data-start="750"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];sX:1;sY:1;s:850;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Nesciunt, maiores, aliquid. Repellat eum numquam <br> culpa offici, tenetur fugiat dolorum sapiente...
                                </div>

                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption small_white hidden-xs"
                                     data-x="left"
                                     data-y="310"
                                     data-start="1000"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];sX:1;sY:1;o:0;s:600;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"><a href="index-blog.html#" class="btn btn-default btn-animated">Read More <i class="fa fa-arrow-right"></i></a>
                                </div>

                            </li>
                            <!-- slide 1 end -->

                            <!-- slide 2 start -->
                            <!-- ================ -->
                            <li data-transition="random" data-slotamount="default" data-masterspeed="default" data-title="Clean and Simple Design">

                                <!-- main image -->
                                <img src="/images/blog-slide-2.jpg" alt="slidebg1" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover" class="rev-slidebg">

                                <!-- Transparent Background -->
                                <div class="tp-caption dark-translucent-bg"
                                     data-x="center"
                                     data-y="center"
                                     data-start="0"
                                     data-transform_idle="o:1;"
                                     data-transform_in="o:0;s:600;e:Power2.easeInOut;"
                                     data-transform_out="o:0;s:600;"
                                     data-width="5000"
                                     data-height="450">
                                </div>

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption large_white"
                                     data-x="left"
                                     data-y="110"
                                     data-start="500"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];sX:1;sY:1;o:0;s:1150;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">Clean and Simple Design
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption large_white tp-resizeme hidden-xs"
                                     data-x="left"
                                     data-y="175"
                                     data-start="750"
                                     data-transform_idle="o:1;"
                                     data-transform_in="o:0;s:2000;e:Power4.easeInOut;">
                                    <div class="separator-2 light"></div>
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption medium_white hidden-xs"
                                     data-x="left"
                                     data-y="190"
                                     data-start="750"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];sX:1;sY:1;s:850;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Nesciunt, maiores, aliquid. Repellat eum numquam <br> culpa offici, tenetur fugiat dolorum sapiente...
                                </div>

                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption small_white hidden-xs"
                                     data-x="left"
                                     data-y="310"
                                     data-start="1000"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[100%];sX:1;sY:1;o:0;s:600;e:Power4.easeInOut;"
                                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"><a href="index-blog.html#" class="btn btn-default btn-animated">Read More <i class="fa fa-arrow-right"></i></a>
                                </div>

                            </li>
                            <!-- slide 2 end -->
                        </ul>
                        <div class="tp-bannertimer"></div>
                    </div>
                </div>
                <!-- slider revolution end -->

            </div>
            <!-- slideshow end -->

        </div>
    </div>
    <!-- banner end -->

    <!-- main-container start -->
    <!-- ================ -->
    <section class="main-container">

        <div class="container">
            <div class="row">

                <!-- main start -->
                <!-- ================ -->
                <div class="main col-md-8">

                    <!-- page-title start -->
                    <!-- ================ -->
                    <h1 class="page-title">Home Blog</h1>
                    <div class="separator-2"></div>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    <!-- page-title end -->

                    <!-- blogpost start -->
                    <article class="blogpost">
                        <div id="carousel-blog-post" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators bottom margin-clear">
                                <li data-target="#carousel-blog-post" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-blog-post" data-slide-to="1"></li>
                                <li data-target="#carousel-blog-post" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="overlay-container">
                                        <img src="/images/blog-1.jpg" alt="">
                                        <a class="overlay-link" href="blog-post.html"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="overlay-container">
                                        <img src="/images/blog-3.jpg" alt="">
                                        <a class="overlay-link" href="blog-post.html"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="overlay-container">
                                        <img src="/images/blog-4.jpg" alt="">
                                        <a class="overlay-link" href="blog-post.html"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <header>
                            <h2><a href="blog-post.html">Blogpost with slider</a></h2>
                            <div class="post-info">
										<span class="post-date">
											<i class="icon-calendar"></i>
											<span class="day">12</span>
											<span class="month">May 2015</span>
										</span>
                                <span class="submitted"><i class="icon-user-1"></i> by <a href="index-blog.html#">John Doe</a></span>
                                <span class="comments"><i class="icon-chat"></i> <a href="index-blog.html#">22 comments</a></span>
                            </div>
                        </header>
                        <div class="blogpost-content">
                            <p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim. Aenean viverra semper sollicitudin.</p>
                        </div>
                        <footer class="clearfix">
                            <div class="tags pull-left"><i class="icon-tags"></i> <a href="index-blog.html#">tag 1</a>, <a href="index-blog.html#">tag 2</a>, <a href="index-blog.html#">long tag 3</a></div>
                            <div class="link pull-right"><i class="icon-link"></i><a href="index-blog.html#">Read More</a></div>
                        </footer>
                    </article>
                    <!-- blogpost end -->

                    <!-- blogpost start -->
                    <article class="blogpost">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/91J8pLHdDB0"></iframe>
                        </div>
                        <header>
                            <h2><a href="blog-post.html">Blogpost with embedded youtube video</a></h2>
                            <div class="post-info">
										<span class="post-date">
											<i class="icon-calendar"></i>
											<span class="day">11</span>
											<span class="month">May 2015</span>
										</span>
                                <span class="submitted"><i class="icon-user-1"></i> by <a href="index-blog.html#">John Doe</a></span>
                                <span class="comments"><i class="icon-chat"></i> <a href="index-blog.html#">22 comments</a></span>
                            </div>
                        </header>
                        <div class="blogpost-content">
                            <p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim. Aenean viverra semper sollicitudin.</p>
                        </div>
                        <footer class="clearfix">
                            <div class="tags pull-left"><i class="icon-tags"></i> <a href="index-blog.html#">tag 1</a>, <a href="index-blog.html#">tag 2</a>, <a href="index-blog.html#">long tag 3</a></div>
                            <div class="link pull-right"><i class="icon-link"></i><a href="index-blog.html#">Read More</a></div>
                        </footer>
                    </article>
                    <!-- blogpost end -->

                    <!-- blogpost start -->
                    <article class="blogpost">
                        <div class="audio-wrapper">
                            <iframe height="166" class="margin-clear" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/231321623&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
                        </div>
                        <header>
                            <h2><a href="blog-post.html">Audio post</a></h2>
                            <div class="post-info">
										<span class="post-date">
											<i class="icon-calendar"></i>
											<span class="day">10</span>
											<span class="month">May 2015</span>
										</span>
                                <span class="submitted"><i class="icon-user-1"></i> by <a href="index-blog.html#">John Doe</a></span>
                                <span class="comments"><i class="icon-chat"></i> <a href="index-blog.html#">22 comments</a></span>
                            </div>
                        </header>
                        <div class="blogpost-content">
                            <p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim. Aenean viverra semper sollicitudin.</p>
                        </div>
                        <footer class="clearfix">
                            <div class="tags pull-left"><i class="icon-tags"></i> <a href="index-blog.html#">tag 1</a>, <a href="index-blog.html#">tag 2</a>, <a href="index-blog.html#">long tag 3</a></div>
                            <div class="link pull-right"><i class="icon-link"></i><a href="index-blog.html#">Read More</a></div>
                        </footer>
                    </article>
                    <!-- blogpost end -->

                    <!-- blogpost start -->
                    <article class="blogpost">
                        <header>
                            <h2><a href="blog-post.html">Text Post</a></h2>
                            <div class="post-info">
										<span class="post-date">
											<i class="icon-calendar"></i>
											<span class="day">09</span>
											<span class="month">May 2015</span>
										</span>
                                <span class="submitted"><i class="icon-user-1"></i> by <a href="index-blog.html#">John Doe</a></span>
                                <span class="comments"><i class="icon-chat"></i> <a href="index-blog.html#">22 comments</a></span>
                            </div>
                        </header>
                        <div class="blogpost-content">
                            <p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim. Aenean viverra semper sollicitudin.</p>
                        </div>
                        <footer class="clearfix">
                            <div class="tags pull-left"><i class="icon-tags"></i> <a href="index-blog.html#">tag 1</a>, <a href="index-blog.html#">tag 2</a>, <a href="index-blog.html#">long tag 3</a></div>
                            <div class="link pull-right"><i class="icon-link"></i><a href="index-blog.html#">Read More</a></div>
                        </footer>
                    </article>
                    <!-- blogpost end -->

                    <!-- blogpost start -->
                    <article class="blogpost">
                        <div class="overlay-container">
                            <img src="/images/blog-2.jpg" alt="">
                            <a class="overlay-link" href="blog-post.html"><i class="fa fa-link"></i></a>
                        </div>
                        <header>
                            <h2><a href="blog-post.html">Cute Robot</a></h2>
                            <div class="post-info">
										<span class="post-date">
											<i class="icon-calendar"></i>
											<span class="day">08</span>
											<span class="month">May 2015</span>
										</span>
                                <span class="submitted"><i class="icon-user-1"></i> by <a href="index-blog.html#">John Doe</a></span>
                                <span class="comments"><i class="icon-chat"></i> <a href="index-blog.html#">22 comments</a></span>
                            </div>
                        </header>
                        <div class="blogpost-content">
                            <p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim. Aenean viverra semper sollicitudin.</p>
                        </div>
                        <footer class="clearfix">
                            <div class="tags pull-left"><i class="icon-tags"></i> <a href="index-blog.html#">tag 1</a>, <a href="index-blog.html#">tag 2</a>, <a href="index-blog.html#">long tag 3</a></div>
                            <div class="link pull-right"><i class="icon-link"></i><a href="index-blog.html#">Read More</a></div>
                        </footer>
                    </article>
                    <!-- blogpost end -->

                    <!-- pagination start -->
                    <nav>
                        <ul class="pagination">
                            <li><a href="index-blog.html#" aria-label="Previous"><i class="fa fa-angle-left"></i></a></li>
                            <li class="active"><a href="index-blog.html#">1</a></li>
                            <li><a href="index-blog.html#">2</a></li>
                            <li><a href="index-blog.html#">3</a></li>
                            <li><a href="index-blog.html#">4</a></li>
                            <li><a href="index-blog.html#">5</a></li>
                            <li><a href="index-blog.html#" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                    <!-- pagination end -->

                </div>
                <!-- main end -->

                <!-- sidebar start -->
                <!-- ================ -->
                <aside class="col-md-4 col-lg-3 col-lg-offset-1">
                    <div class="sidebar">
                        <div class="block clearfix">
                            <h3 class="title">Sidebar menu</h3>
                            <div class="separator-2"></div>
                            <nav>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="index.html">Home</a></li>
                                    <li class="active"><a href="blog-large-image-right-sidebar.html">Blog</a></li>
                                    <li><a href="portfolio-grid-2-3-col.html">Portfolio</a></li>
                                    <li><a href="page-about.html">About</a></li>
                                    <li><a href="page-contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="block clearfix">
                            <h3 class="title">Featured Project</h3>
                            <div class="separator-2"></div>
                            <div id="carousel-portfolio-sidebar" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-portfolio-sidebar" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-portfolio-sidebar" data-slide-to="1"></li>
                                    <li data-target="#carousel-portfolio-sidebar" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <div class="image-box shadow bordered text-center mb-20">
                                            <div class="overlay-container">
                                                <img src="/images/portfolio-5.jpg" alt="">
                                                <a href="portfolio-item.html" class="overlay-link">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image-box shadow bordered text-center mb-20">
                                            <div class="overlay-container">
                                                <img src="/images/portfolio-1-2.jpg" alt="">
                                                <a href="portfolio-item.html" class="overlay-link">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="image-box shadow bordered text-center mb-20">
                                            <div class="overlay-container">
                                                <img src="/images/portfolio-1-3.jpg" alt="">
                                                <a href="portfolio-item.html" class="overlay-link">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block clearfix">
                            <h3 class="title">Latest tweets</h3>
                            <div class="separator-2"></div>
                            <ul class="tweets">
                                <li>
                                    <i class="fa fa-twitter"></i>
                                    <p><a href="index-blog.html#">@lorem</a> ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, aliquid, et molestias nesciunt <a href="index-blog.html#">http://t.co/dzLEYGeEH9</a>.</p><span>16 hours ago</span>
                                </li>
                                <li>
                                    <i class="fa fa-twitter"></i>
                                    <p><a href="index-blog.html#">@lorem</a> ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, aliquid, et molestias nesciunt <a href="index-blog.html#">http://t.co/dzLEYGeEH9</a>.</p><span>16 hours ago</span>
                                </li>
                            </ul>
                        </div>
                        <div class="block clearfix">
                            <h3 class="title">Popular Tags</h3>
                            <div class="separator-2"></div>
                            <div class="tags-cloud">
                                <div class="tag">
                                    <a href="index-blog.html#">energy</a>
                                </div>
                                <div class="tag">
                                    <a href="index-blog.html#">business</a>
                                </div>
                                <div class="tag">
                                    <a href="index-blog.html#">food</a>
                                </div>
                                <div class="tag">
                                    <a href="index-blog.html#">fashion</a>
                                </div>
                                <div class="tag">
                                    <a href="index-blog.html#">finance</a>
                                </div>
                                <div class="tag">
                                    <a href="index-blog.html#">culture</a>
                                </div>
                                <div class="tag">
                                    <a href="index-blog.html#">health</a>
                                </div>
                                <div class="tag">
                                    <a href="index-blog.html#">sports</a>
                                </div>
                                <div class="tag">
                                    <a href="index-blog.html#">life style</a>
                                </div>
                                <div class="tag">
                                    <a href="index-blog.html#">books</a>
                                </div>
                                <div class="tag">
                                    <a href="index-blog.html#">lorem</a>
                                </div>
                                <div class="tag">
                                    <a href="index-blog.html#">ipsum</a>
                                </div>
                                <div class="tag">
                                    <a href="index-blog.html#">responsive</a>
                                </div>
                                <div class="tag">
                                    <a href="index-blog.html#">style</a>
                                </div>
                                <div class="tag">
                                    <a href="index-blog.html#">finance</a>
                                </div>
                                <div class="tag">
                                    <a href="index-blog.html#">sports</a>
                                </div>
                                <div class="tag">
                                    <a href="index-blog.html#">technology</a>
                                </div>
                                <div class="tag">
                                    <a href="index-blog.html#">support</a>
                                </div>
                                <div class="tag">
                                    <a href="index-blog.html#">life style</a>
                                </div>
                                <div class="tag">
                                    <a href="index-blog.html#">books</a>
                                </div>
                            </div>
                        </div>
                        <div class="block clearfix">
                            <h3 class="title">Testimonial</h3>
                            <div class="separator-2"></div>
                            <blockquote class="margin-clear">
                                <p>Design is not just what it looks like and feels like. Design is how it works.</p>
                                <footer><cite title="Source Title">Steve Jobs </cite></footer>
                            </blockquote>
                            <blockquote class="margin-clear">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos dolorem.</p>
                                <footer><cite title="Source Title">Steve Doe </cite></footer>
                            </blockquote>
                        </div>
                        <div class="block clearfix">
                            <h3 class="title">Latest News</h3>
                            <div class="separator-2"></div>
                            <div class="media margin-clear">
                                <div class="media-left">
                                    <div class="overlay-container">
                                        <img class="media-object" src="/images/blog-thumb-1.jpg" alt="blog-thumb">
                                        <a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
                                    <p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 23, 2015</p>
                                </div>
                                <hr>
                            </div>
                            <div class="media margin-clear">
                                <div class="media-left">
                                    <div class="overlay-container">
                                        <img class="media-object" src="/images/blog-thumb-2.jpg" alt="blog-thumb">
                                        <a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
                                    <p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 22, 2015</p>
                                </div>
                                <hr>
                            </div>
                            <div class="media margin-clear">
                                <div class="media-left">
                                    <div class="overlay-container">
                                        <img class="media-object" src="/images/blog-thumb-3.jpg" alt="blog-thumb">
                                        <a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
                                    <p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 21, 2015</p>
                                </div>
                                <hr>
                            </div>
                            <div class="media margin-clear">
                                <div class="media-left">
                                    <div class="overlay-container">
                                        <img class="media-object" src="/images/blog-thumb-4.jpg" alt="blog-thumb">
                                        <a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
                                    <p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 21, 2015</p>
                                </div>
                            </div>
                            <div class="text-right space-top">
                                <a href="blog-large-image-right-sidebar.html" class="link-dark"><i class="fa fa-plus-circle pl-5 pr-5"></i>More</a>
                            </div>
                        </div>
                        <div class="block clearfix">
                            <h3 class="title">Text Sample</h3>
                            <div class="separator-2"></div>
                            <p class="margin-clear">Debitis eaque officia illo impedit ipsa earum <a href="index-blog.html#">cupiditate repellendus</a> corrupti nisi nemo, perspiciatis optio harum, hic laudantium nulla maiores rem sit magni neque nihil sequi temporibus. Laboriosam ipsum reiciendis iste, nobis obcaecati, a autem voluptatum odio? Recusandae officiis dicta quod qui eligendi.</p>
                        </div>
                        <div class="block clearfix">
                            <form role="search">
                                <div class="form-group has-feedback">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <i class="fa fa-search form-control-feedback"></i>
                                </div>
                            </form>
                        </div>
                    </div>
                </aside>
                <!-- sidebar end -->

            </div>
        </div>
    </section>
    <!-- main-container end -->

    <!-- footer top start -->
    <!-- ================ -->
    <div class="dark-bg  default-hovered footer-top animated-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-action text-center">
                        <div class="row">
                            <div class="col-sm-8">
                                <h2>Powerful Bootstrap Template</h2>
                                <h2>Waste no more time</h2>
                            </div>
                            <div class="col-sm-4">
                                <p class="mt-10"><a href="index-blog.html#" class="btn btn-animated btn-lg btn-gray-transparent ">Purchase<i class="fa fa-cart-arrow-down pl-20"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer top end -->
    <!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
    <!-- ================ -->
    <footer id="footer" class="clearfix ">

        <!-- .footer start -->
        <!-- ================ -->
        <div class="footer">
            <div class="container">
                <div class="footer-inner">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="footer-content">
                                <div class="logo-footer"><img id="logo-footer" src="/images/logo_light_blue.png" alt=""></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus illo vel dolorum soluta consectetur doloribus sit. Delectus non tenetur odit dicta vitae debitis suscipit doloribus. Ipsa, aut voluptas quaerat... <a href="page-about.html">Learn More<i class="fa fa-long-arrow-right pl-5"></i></a></p>
                                <div class="separator-2"></div>
                                <nav>
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a target="_blank" href="../../../../node/1.html">Support</a></li>
                                        <li><a href="index-blog.html#">Privacy</a></li>
                                        <li><a href="index-blog.html#">Terms</a></li>
                                        <li><a href="page-about.html">About</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-content">
                                <h2 class="title">Latest From Blog</h2>
                                <div class="separator-2"></div>
                                <div class="media margin-clear">
                                    <div class="media-left">
                                        <div class="overlay-container">
                                            <img class="media-object" src="/images/blog-thumb-1.jpg" alt="blog-thumb">
                                            <a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
                                        <p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 23, 2017</p>
                                    </div>
                                    <hr>
                                </div>
                                <div class="media margin-clear">
                                    <div class="media-left">
                                        <div class="overlay-container">
                                            <img class="media-object" src="/images/blog-thumb-2.jpg" alt="blog-thumb">
                                            <a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
                                        <p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 22, 2017</p>
                                    </div>
                                    <hr>
                                </div>
                                <div class="media margin-clear">
                                    <div class="media-left">
                                        <div class="overlay-container">
                                            <img class="media-object" src="/images/blog-thumb-3.jpg" alt="blog-thumb">
                                            <a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
                                        <p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 21, 2017</p>
                                    </div>
                                    <hr>
                                </div>
                                <div class="media margin-clear">
                                    <div class="media-left">
                                        <div class="overlay-container">
                                            <img class="media-object" src="/images/blog-thumb-4.jpg" alt="blog-thumb">
                                            <a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
                                        <p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 21, 2017</p>
                                    </div>
                                </div>
                                <div class="text-right space-top">
                                    <a href="blog-large-image-right-sidebar.html" class="link-dark"><i class="fa fa-plus-circle pl-5 pr-5"></i>More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-content">
                                <h2 class="title">Portfolio Gallery</h2>
                                <div class="separator-2"></div>
                                <div class="row grid-space-10">
                                    <div class="col-xs-4 col-md-6">
                                        <div class="overlay-container mb-10">
                                            <img src="/images/gallery-1.jpg" alt="">
                                            <a href="portfolio-item.html" class="overlay-link small">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-md-6">
                                        <div class="overlay-container mb-10">
                                            <img src="/images/gallery-2.jpg" alt="">
                                            <a href="portfolio-item.html" class="overlay-link small">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-md-6">
                                        <div class="overlay-container mb-10">
                                            <img src="/images/gallery-3.jpg" alt="">
                                            <a href="portfolio-item.html" class="overlay-link small">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-md-6">
                                        <div class="overlay-container mb-10">
                                            <img src="/images/gallery-4.jpg" alt="">
                                            <a href="portfolio-item.html" class="overlay-link small">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-md-6">
                                        <div class="overlay-container mb-10">
                                            <img src="/images/gallery-5.jpg" alt="">
                                            <a href="portfolio-item.html" class="overlay-link small">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-md-6">
                                        <div class="overlay-container mb-10">
                                            <img src="/images/gallery-6.jpg" alt="">
                                            <a href="portfolio-item.html" class="overlay-link small">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right space-top">
                                    <a href="portfolio-grid-2-3-col.html" class="link-dark"><i class="fa fa-plus-circle pl-5 pr-5"></i>More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-content">
                                <h2 class="title">Find Us</h2>
                                <div class="separator-2"></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium odio voluptatem necessitatibus illo vel dolorum soluta.</p>
                                <ul class="social-links circle animated-effect-1">
                                    <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                    <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                    <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="xing"><a target="_blank" href="http://www.xing.com"><i class="fa fa-xing"></i></a></li>
                                </ul>
                                <div class="separator-2"></div>
                                <ul class="list-icons">
                                    <li><i class="fa fa-map-marker pr-10 text-default"></i> One infinity loop, 54100</li>
                                    <li><i class="fa fa-phone pr-10 text-default"></i> +00 1234567890</li>
                                    <li><a href="mailto:info@theproject.com"><i class="fa fa-envelope-o pr-10"></i>info@theproject.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .footer end -->

        <!-- .subfooter start -->
        <!-- ================ -->
        <div class="subfooter">
            <div class="container">
                <div class="subfooter-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-center">Copyright ?? 2017 The Project by <a target="_blank" href="../../../../index.html">HtmlCoder</a>. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .subfooter end -->

    </footer>
    <!-- footer end -->

</div>
<!-- page-wrapper end -->
 
<?php $this->endBody() ?>
<div class="style-switcher closed">
    <div class="header">
        <a class="trigger" href="index-blog.html#"><i class="icon-cog-1"></i></a>
        <h2>Style Switcher</h2>
    </div>
    <div class="clearfix body">
        <h3>Predifined Colors</h3>
        <ul class="styleChange">
            <li class="light-blue selected" data-style="light_blue" title="light_blue"></li>
            <li class="blue" data-style="blue" title="blue"></li>
            <li class="green" data-style="green" title="green"></li>
            <li class="dark-cyan" data-style="dark_cyan" title="dark_cyan"></li>
            <li class="brown" data-style="brown" title="brown"></li>
            <li class="dark-red" data-style="dark_red" title="dark_red"></li>
            <li class="gold" data-style="gold" title="gold"></li>
            <li class="gray" data-style="gray" title="gray"></li>
            <li class="cool-green" data-style="cool_green" title="cool_green"></li>
            <li class="pink" data-style="pink" title="pink"></li>
            <li class="purple" data-style="purple" title="purple"></li>
            <li class="orange" data-style="orange" title="orange"></li>
            <li class="red" data-style="red" title="red"></li>
            <li class="vivid-red" data-style="vivid_red" title="vivid_red"></li>
        </ul>
        <hr>
        <h3>Layout Mode</h3>
        <ul class="layoutChange">
            <li class="wide selected" data-style="wide" title="wide"><i class="fa fa-arrow-left pr-10"></i>Wide<i class="fa fa-arrow-right pl-10"></i></li>
            <li class="boxed" data-style="boxed" title="boxed"><i class="fa fa-arrow-right pr-5"></i>Boxed<i class="fa fa-arrow-left pl-5"></i></li>
        </ul>
        <h3>Patterns</h3>
        <ul class="patternChange">
            <li class="pattern-0" data-style="pattern-0" title="white background"></li>
            <li class="pattern-1" data-style="pattern-1" title="pattern-1"></li>
            <li class="pattern-2" data-style="pattern-2" title="pattern-2"></li>
            <li class="pattern-3" data-style="pattern-3" title="pattern-3"></li>
            <li class="pattern-4" data-style="pattern-4" title="pattern-4"></li>
            <li class="pattern-5" data-style="pattern-5" title="pattern-5"></li>
            <li class="pattern-6" data-style="pattern-6" title="pattern-6"></li>
            <li class="pattern-7" data-style="pattern-7" title="pattern-7"></li>
            <li class="pattern-8" data-style="pattern-8" title="pattern-8"></li>
            <li class="pattern-9" data-style="pattern-9" title="pattern-9"></li>
        </ul>
        <ul class="resetAll">
            <li class="btn btn-default btn-sm" title="Reset"><a href="../index.html">Demos</a></li>
            <li class="btn btn-dark btn-sm" title="Reset">Reset All</li>
        </ul>
    </div>
</div>
<!-- Color Switcher End -->
<!-- Color Switcher (Remove these lines) -->

</body>
</html>
<?php $this->endPage() ?>