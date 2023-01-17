<?php
use yii\bootstrap\NavBar;
/* @var $this \yii\web\View */
/* @var $content string */
$this->beginContent('@frontend/views/layouts/_clear.php');
 $bundlePath = Yii::$app->getAssetManager()->getBundle('\frontend\assets\FrontendAsset')->baseUrl;
?>
<?php //= \onmotion\telegram\Telegram::widget();  ?>
<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>
<!-- page wrapper start -->
<!-- ================ -->
<div class="page-wrapper">

    <!-- header-container start -->
    <div class="header-container">


        <div class="header-top dark  hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-3 col-sm-6 col-md-9">
                        <!-- header-top-first start -->
                        <!-- ================ -->
                        <div class="header-top-first clearfix">
                            <ul class="social-links circle small clearfix hidden-xs">
                                <li class="vkontakte"><a target="_blank" href="https://vk.com/infomarketstudio"><i
                                                class="fa fa-vk"></i></a></li>

                                <li class="facebook"><a target="_blank" href="https://fb.me/infomarketstudio"><i
                                                class="fa fa-facebook"></i></a></li>
                                <!-- <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>-->
                                <li class="insta"><a target="_blank"
                                                     href="https://www.instagram.com/infomarketstudio"><i
                                                class="fa fa-instagram"></i></a></li>
                                <li class="twitter"><a target="_blank" href="https://twitter.com/infomarket11"><i
                                                class="fa fa-twitter"></i></a></li>
                                <li  >
                                    <a target="_blank" href="https://telegram.me/infostudiobot" style="color:#777777;">
                                        <i class="glyphicon glyphicon-send   text-white"></i></a>
                                </li>

                            </ul>
                            <div class="social-links hidden-lg hidden-md hidden-sm circle small">
                                <div class="btn-group dropdown">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i
                                                class="fa fa-share-alt"></i></button>
                                    <ul class="dropdown-menu dropdown-animation">
                                        <li class="twitter"><a target="_blank" href="http://www.vk.com"><i
                                                        class="fa fa-vk"></i></a></li>
                                        <li class="skype"><a target="_blank" href="http://www.ok.ru"><i
                                                        class="fa fa-odnoklassniki"></i></a></li>
                                        <li class="linkedin"><a target="_blank" href="http://www.facebook.com"><i
                                                        class="fa fa-facebook"></i></a></li>
                                        <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i
                                                        class="fa fa-google-plus"></i></a></li>
                                        <li class="youtube"><a target="_blank" href="http://www.twitter.com"><i
                                                        class="fa fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="list-inline hidden-sm hidden-xs font-size16b">
                                <li style="font-weight: normal;"><i class="fa fa-map-marker pr-5 pl-10" ></i>Москва, Ленинский пр. 42 к1</li>
                                <li style="font-weight: normal;"><a href="mailto:info@infomarketstudio.ru" style="color:#ffffff;"><i
                                                class="fa fa-envelope-o pr-5 pl-10"></i> info@infomarketstudio.ru</a>
                                </li>
                                <li style="font-weight: normal;"><a href="tel:+74951331649" style="color:#ffffff;"><i
                                                class="fa fa-phone pr-5 pl-10"></i>+7 (495) 133-16-49</a></li>
                                <!--                                        <li><div id='cc_AxMDg3In0' class='superlongandununderstandableblockclassname'></div></li>-->

                            </ul>
                        </div>
                        <!-- header-top-first end -->
                    </div>
                    <div class="col-xs-9 col-sm-6 col-md-3">

                        <!-- header-top-second start -->
                        <!-- ================ -->
                        <div id="header-top-second" class="clearfix">

                            <!-- header top dropdowns start -->
                            <!-- ================ -->
                            <div class="header-top-dropdown text-right">
                                <div class="btn-group">
                                    <?php if (Yii::$app->user->isGuest): ?>
                                        <a href="/signup"  class="btn btn-default btn-sm formsend mob-font-13" style="font-size:16px;"><i
                                                class="fa fa-user pr-10  "></i> Регистрация</a>
                                    <?php endif; ?>
                                    <?php if (!Yii::$app->user->isGuest): ?>
                                        <a href="/profile" class="btn btn-default btn-sm" style="font-size:16px;"><i
                                                    class="fa fa-user pr-10 font-size16b mob-font-13"></i> Профиль</a>
                                    <?php endif; ?>
                                </div>
                                <div class="btn-group">
                                    <?php if (Yii::$app->user->isGuest): ?>
                                        <!-- <a  href="/user/sign-in/login" class="btn dropdown-toggle btn-default btn-sm" data-toggle="dropdown"><i class="fa fa-lock pr-10"></i> Войти</a> -->
                                        <a style="font-size:16px;" href="/login" class="btn btn-default btn-sm mob-font-13"><i class="fa fa-lock pr-10 font-size16b"></i>
                                            Войти</a>
                                    <?php endif; ?>
                                    <?php if (!Yii::$app->user->isGuest): ?>
                                        <a style="font-size:16px;" data-method="post" href="/logout" class="btn   btn-default btn-sm font-size16b mob-font-13"><i
                                                    class="fa fa-lock pr-10"></i> Выйти</a>
                                    <?php endif; ?>
                                    <!-- <ul class="dropdown-menu dropdown-menu-right dropdown-animation">
                                        <li>
                                            <form class="login-form margin-clear">
                                                <div class="form-group has-feedback">
                                                    <label class="control-label">Имя пользователя</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                    <i class="fa fa-user form-control-feedback"></i>
                                                </div>
                                                <div class="form-group has-feedback">
                                                    <label class="control-label">Пароль</label>
                                                    <input type="password" class="form-control" placeholder="">
                                                    <i class="fa fa-lock form-control-feedback"></i>
                                                </div>
                                                <button type="submit" class="btn btn-gray btn-sm">Войти</button>
                                                <span class="pl-5 pr-5">или</span>
                                                <button type="submit" class="btn btn-default btn-sm">Регистрация</button>
                                                <ul style="list-style: none;">
                                                    <li><a href="#">Забыли пароль?</a></li>
                                                </ul>
                                                <span class="text-center">Войти с помощью</span>
                                                <ul style="padding-left: 15px !important;" class="social-links circle small colored clearfix">
                                                    <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                                    <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                                    <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                                </ul>
                                            </form>
                                        </li>
                                    </ul> -->
                                </div>
                            </div>
                            <!--  header top dropdowns end -->
                        </div>
                        <!-- header-top-second end -->
                    </div>
                </div>
            </div>
        </div>

        <header class="header  fixed    clearfix">

            <div class="container">
                <div class="row">
                    <div class="col-md-3 ">
                        <!-- header-first start -->
                        <!-- ================ -->
                        <div class="header-first clearfix" style="height: 75px;">

                            <!-- header dropdown buttons -->

                            <!-- header dropdown buttons end-->

                            <!-- logo -->
                            <div id="logo" class="logo">
                                <a href="/">
											<span class=" ">
<!--												<font style="font-size:28px;color:#09afdf;">Infomarket </font>-->
                                                <img src="<?= $bundlePath;?>/images/logo_infomarket.png" class="infomarketlogo" >


											</span>
                                </a>
                            </div>




                            <!-- name-and-slogan -->

                        </div>
                        <!-- header-first end -->

                    </div>
                    <div class="col-md-9">

                        <!-- header-second start -->
                        <!-- ================ -->
                        <div class="header-second clearfix">

                            <!-- main-navigation start -->
                            <!-- classes: -->
                            <!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
                            <!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
                            <!-- "with-dropdown-buttons": Mandatory class that adds extra space, to the main navigation, for the search and cart dropdowns -->
                            <!-- ================ -->
                            <div class="main-navigation  animated with-dropdown-buttons">
                                <nav class="navbar navbar-default" role="navigation">
                                    <div class="container-fluid">

                                        <!-- Toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <div class="header-dropdown-buttons visible-xs" style="    float: right;">
                                                <div class="btn-group dropdown">
                                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i
                                                                class="icon-search"></i></button>
                                                    <ul class="dropdown-menu dropdown-menu-right dropdown-animation">
                                                        <li>
                                                            <form role="search" class="search-box margin-clear" id="searchForm">
                                                                <div class="form-group has-feedback">
                                                                    <input id="search" type="text" class="form-control" placeholder="Поиск">
                                                                    <i class="icon-search form-control-feedback"></i>
                                                                </div>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- <div class="btn-group dropdown">
                                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="icon-basket-1"></i><span class="cart-count default-bg">8</span></button>
                                                    <ul class="dropdown-menu dropdown-menu-right dropdown-animation cart">
                                                        <li>
                                                            <table class="table table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="quantity">QTY</th>
                                                                        <th class="product">Product</th>
                                                                        <th class="amount">Subtotal</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="quantity">2 x</td>
                                                                        <td class="product"><a href="shop-product.html">Android 4.4 Smartphone</a><span class="small">4.7" Dual Core 1GB</span></td>
                                                                        <td class="amount">$199.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="quantity">3 x</td>
                                                                        <td class="product"><a href="shop-product.html">Android 4.2 Tablet</a><span class="small">7.3" Quad Core 2GB</span></td>
                                                                        <td class="amount">$299.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="quantity">3 x</td>
                                                                        <td class="product"><a href="shop-product.html">Desktop PC</a><span class="small">Quad Core 3.2MHz, 8GB RAM, 1TB Hard Disk</span></td>
                                                                        <td class="amount">$1499.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="total-quantity" colspan="2">Total 8 Items</td>
                                                                        <td class="total-amount">$1997.00</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="panel-body text-right">
                                                                <a href="shop-cart.html" class="btn btn-group btn-gray btn-sm">View Cart</a>
                                                                <a href="shop-checkout.html" class="btn btn-group btn-gray btn-sm">Checkout</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div> -->
                                            </div>

                                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                                    data-target="#navbar-collapse-1">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>

                                        </div>

                                        <!-- Collect the nav links, forms, and other content for toggling -->
                                        <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                            <!-- main-menu -->

                                            <?= \yii\bootstrap\Nav::widget([
                                                'options' => ['class' => 'navbar-nav'],
                                                'encodeLabels' => false,

                                                'items' => [
                                                    ['label' => "<i class=\" icon-barcode pr-5 pl-10\"></i>Компания", 'url' => ['site/about'],
                                                        'items' => [
                                                            ['label' => "О нас", 'url' => ['/about']],
                                                            ['label' => "Партнеры", 'url' => ['/partners']],
                                                            ['label' => "Вакансии", 'url' => ['/page/view?slug=vakansia']],
                                                        ]
                                                    ],
                                                    [
                                                        'label' => "<i class=\"icon-globe pr-5 pl-10\"></i>Услуги",
                                                        'url' => ['/service'],
                                                        'items' => [
                                                         //   ['label' => "Туннели продаж", 'url' => ['/tunel']],
                                                            ['label' => "Чат-боты для бизнеса", 'url' => ['/chatbot']],
                                                            ['label' => "Web-разработка", 'url' => ['/webdev']],
                                                            // ['label' => "Интернет-реклама", 'url' => ['/advertise']],
                                                           // ['label' => "Аналитика", 'url' => ['/analytic']],
                                                          //  ['label' => "Аналитика on-line", 'url' => ['/analytics']],
                                                        ],
                                                        'options' => ['class' => '']
                                                    ],
                                                    ['label' => "<i class=\"icon-briefcase pr-5 pl-10\"></i>Проекты", 'url' => ['/cases/index'], 'options' => ['class' => 'mega-menu']],




                                                    ['label' => "<i class=\"icon-news pr-5 pl-10\"></i>Блог", 'url' => ['/blog'], 'options' => ['class' => 'mega-menu']],
                                                    ['label' => "<i class=\" icon-mobile pr-5 pl-10\"></i>Контакты", 'url' => ['/contact'], 'options' => ['class' => 'mega-menu']],


                                                ]
                                            ]); ?>
                                            <!-- main-menu end -->

                                            <!-- header dropdown buttons -->

                                            <div class="header-dropdown-buttons hidden-xs "  >
                                                <div class="btn-group">
                                                    <?php if (Yii::$app->user->isGuest) { ?>

                                                        <a href="/signup"
                                                           class="btn btn-sm hidden-xs btn-default info-btn-blue">! </a>
                                                    <?php } else { ?>
                                                        <a href="mailto:info@infomarketstudio.ru"
                                                           class="btn btn-lg visible-xs btn-block btn-default">Стать
                                                            клиентом </a>
                                                    <?php } ?>
                                                </div>
                                                <div class="btn-group dropdown">
                                                    <button type="button" class="btn dropdown-toggle"
                                                            data-toggle="dropdown"><i class="icon-search"></i></button>
                                                    <ul class="dropdown-menu dropdown-menu-right dropdown-animation">
                                                        <li>
                                                            <form role="search" class="search-box margin-clear">
                                                                <div class="form-group has-feedback">
                                                                    <input type="text" class="form-control"
                                                                           placeholder="Поиск">
                                                                    <i class="icon-search form-control-feedback"></i>
                                                                </div>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- <div class="btn-group dropdown">
                                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="icon-basket-1"></i><span class="cart-count default-bg">8</span></button>
                                                    <ul class="dropdown-menu dropdown-menu-right dropdown-animation cart">
                                                        <li>
                                                            <table class="table table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="quantity">QTY</th>
                                                                        <th class="product">Product</th>
                                                                        <th class="amount">Subtotal</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="quantity">2 x</td>
                                                                        <td class="product"><a href="shop-product.html">Android 4.4 Smartphone</a><span class="small">4.7" Dual Core 1GB</span></td>
                                                                        <td class="amount">$199.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="quantity">3 x</td>
                                                                        <td class="product"><a href="shop-product.html">Android 4.2 Tablet</a><span class="small">7.3" Quad Core 2GB</span></td>
                                                                        <td class="amount">$299.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="quantity">3 x</td>
                                                                        <td class="product"><a href="shop-product.html">Desktop PC</a><span class="small">Quad Core 3.2MHz, 8GB RAM, 1TB Hard Disk</span></td>
                                                                        <td class="amount">$1499.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="total-quantity" colspan="2">Total 8 Items</td>
                                                                        <td class="total-amount">$1997.00</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="panel-body text-right">
                                                                <a href="shop-cart.html" class="btn btn-group btn-gray btn-sm">View Cart</a>
                                                                <a href="shop-checkout.html" class="btn btn-group btn-gray btn-sm">Checkout</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div> -->
                                            </div>
                                            <!-- header dropdown buttons end-->

                                        </div>

                                    </div>
                                </nav>


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


    <?php  echo $content ?>

    <!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
    <!-- ================ -->
    <footer id="footer" class="clearfix clearfix dark">

        <!-- .footer start -->
        <!-- ================ -->
        <div class="footer">
            <div class="container">
                <div class="footer-inner">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="footer-content">
                                <div class="logo-footer">
                                    <img src="<?= $bundlePath;?>/images/logo_infomarket2.png" class="infomarketlogofooter">
                                </div>
                                <p>Мы очень любим свою работу поэтому, к каждому клиенту особый, очень внимательный
                                    подход.

                                </p>
                                <div class="separator-2"></div>
                                <nav>
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a target="_blank" href="/support">Поддержка</a></li>
                                        <li><a href="/agreement">Соглашение</a></li>
                                        <li><a href="/condition">Условия</a></li>
                                        <li><a href="/about">О нас</a></li>
                                        <li><a href="/page/view?slug=vakansia">Вакансии</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-content">

                                <?= \common\modules\widget\widgets\Articles\ArticlesWidget::widget([]); ?>

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-content">
                                <?php echo \common\modules\prpart\widgets\Cases\CasesWidget::widget(['type' => 'footer']); ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-content">
                                <h2 class="title">Связаться с нами</h2>
                                <div class="separator-2"></div>
                                <p>Вы можете связаться с нами любым из способов ниже, либо заполнить форму со страницы
                                    Контакты</p>
                                <ul class="social-links circle animated-effect-1">
                                    <li class="vkontakte">
                                        <a target="_blank" href="https://tele.click/infomarketstudiobot" style="color:#777777;">
                                            <i class="glyphicon glyphicon-send   text-white"></i></a>
                                    </li>
                                    <li class="vkontakte"><a target="_blank" href="https://vk.com/infomarketstudio"><i
                                                    class="fa fa-vk"></i></a></li>

                                    <li class="facebook"><a target="_blank" href="https://fb.me/infomarketstudio"><i
                                                    class="fa fa-facebook"></i></a></li>
                                    <!--<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>-->
                                    <li class="insta"><a target="_blank"
                                                         href="https://www.instagram.com/infomarketstudio"><i
                                                    class="fa fa-instagram"></i></a></li>
                                    <li class="twitter"><a target="_blank" href="https://twitter.com/infomarket11"><i
                                                    class="fa fa-twitter"></i></a></li>
                                </ul>
                                <div class="separator-2"></div>
                                <ul class="list-icons">
                                    <li style="color:#777777;font-size: 14px !important;"><i
                                                class="fa fa-map-marker pr-10 text-default"></i>Москва, Ленинский пр.
                                       42 корп. 1
                                    </li>
                                    <li style="font-size: 14px !important;"><a href="tel:+74951331649"
                                                                               style="color:#777777;"><i
                                                    class="fa fa-phone pr-10 text-default" class="link-dark"></i>+7
                                            (495) 133-16-49</a></li>
                                    <li style="font-size: 14px !important;"><a href="mailto:info@infomarketstudio.ru"
                                                                               style="color:#777777;"><i
                                                    class="fa fa-envelope-o pr-10 text-default"></i>info@infomarketstudio.ru</a></li>
                                    <li style="font-size: 14px !important;">
                                        <a target="_blank" href="https://telegram.me/infomarketstudiobot" style="color:#777777;">
                                            <i class="glyphicon glyphicon-send  pr-10 text-default"></i>Телеграм бот</a>
                                    </li>


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
                            <p class="text-center">
                                <a target="_blank" href="/">ООО "Инфомаркет"</a>
                                Copyright © 2011 - <?php echo date('Y') ?>  Все права защищены.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .subfooter end -->

    </footer>
    <!-- footer end -->

</div>
<?php $this->endContent() ?>


