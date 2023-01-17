<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = 'Проекты';
$this->params['breadcrumbs'][] = $this->title;
$this->registerMetaTag(['name' => 'keywords', 'content' => 'проекты, наши проекты, кейсы, наши работы, веб-разработка, сайты, веб-сервисы']);
$this->registerMetaTag(['name' => 'description', 'content' => 'Здесь вы можете увидеть наши работы для клиентов']);

?>


<section class="main-container">

    <div class="container">
        <div class="row">

            <!-- main start -->
            <!-- ================ -->
            <div class="main col-md-12">

                <!-- page-title start -->
                <!-- ================ -->
                <h1 class="page-title">Grid 1 - 2 columns</h1>
                <div class="separator-2"></div>
                <!-- page-title end -->
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit Illo quaerat <br> commodi excepturi dignissimos!</p>

                <!-- isotope filters start -->
                <div class="filters">
                    <ul class="nav nav-pills">
                        <li class="active"><a href="#" data-filter="*">All</a></li>
                        <li><a href="#" data-filter=".web-design">Web design</a></li>
                        <li><a href="#" data-filter=".app-development">App development</a></li>
                        <li><a href="#" data-filter=".site-building">Site building</a></li>
                    </ul>
                </div>
                <!-- isotope filters end -->

                <div class="isotope-container row grid-space-10" style="display: block; position: relative; height: 1112.34px;">
                    <div class="col-sm-6 isotope-item web-design" style="position: absolute; left: 0px; top: 0px;">
                        <div id="carousel-portfolio" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-portfolio" data-slide-to="0" class=""></li>
                                <li data-target="#carousel-portfolio" data-slide-to="1" class="active"></li>
                                <li data-target="#carousel-portfolio" data-slide-to="2" class=""></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item">
                                    <div class="image-box shadow bordered text-center mb-20">
                                        <div class="overlay-container">
                                            <img src="/images/portfolio-1.jpg" alt="">
                                            <div class="overlay-top">
                                                <div class="text">
                                                    <h3><a href="portfolio-item.html">Project Title</a></h3>
                                                    <p class="small">Web Design</p>
                                                </div>
                                            </div>
                                            <div class="overlay-bottom">
                                                <div class="links">
                                                    <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated btn-sm">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item active">
                                    <div class="image-box shadow bordered text-center mb-20">
                                        <div class="overlay-container">
                                            <img src="/images/portfolio-1-2.jpg" alt="">
                                            <div class="overlay-top">
                                                <div class="text">
                                                    <h3><a href="portfolio-item.html">Project Title</a></h3>
                                                    <p class="small">Web Design</p>
                                                </div>
                                            </div>
                                            <div class="overlay-bottom">
                                                <div class="links">
                                                    <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated btn-sm">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="image-box shadow bordered text-center mb-20">
                                        <div class="overlay-container">
                                            <img src="/images/portfolio-1-3.jpg" alt="">
                                            <div class="overlay-top">
                                                <div class="text">
                                                    <h3><a href="portfolio-item.html">Project Title</a></h3>
                                                    <p class="small">Web Design</p>
                                                </div>
                                            </div>
                                            <div class="overlay-bottom">
                                                <div class="links">
                                                    <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated btn-sm">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 isotope-item app-development" style="position: absolute; left: 576px; top: 0px;">
                        <div class="image-box shadow bordered text-center mb-20">
                            <div class="overlay-container">
                                <img src="/images/portfolio-2.jpg" alt="">
                                <div class="overlay-top">
                                    <div class="text">
                                        <h3><a href="portfolio-item.html">Project Title</a></h3>
                                        <p class="small">App Development</p>
                                    </div>
                                </div>
                                <div class="overlay-bottom">
                                    <div class="links">
                                        <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated btn-sm">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 isotope-item app-development" style="position: absolute; left: 0px; top: 370px;">
                        <div class="image-box shadow bordered text-center mb-20">
                            <div class="overlay-container">
                                <img src="/images/portfolio-3.jpg" alt="">
                                <div class="overlay-top">
                                    <div class="text">
                                        <h3><a href="portfolio-item.html">Project Title</a></h3>
                                        <p class="small">App Development</p>
                                    </div>
                                </div>
                                <div class="overlay-bottom">
                                    <div class="links">
                                        <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated btn-sm">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 isotope-item web-design" style="position: absolute; left: 576px; top: 370px;">
                        <div class="image-box shadow bordered text-center mb-20">
                            <div class="overlay-container">
                                <img src="/images/portfolio-4.jpg" alt="">
                                <div class="overlay-top">
                                    <div class="text">
                                        <h3><a href="portfolio-item.html">Project Title</a></h3>
                                        <p class="small">Web Design</p>
                                    </div>
                                </div>
                                <div class="overlay-bottom">
                                    <div class="links">
                                        <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated btn-sm">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 isotope-item site-building" style="position: absolute; left: 0px; top: 741px;">
                        <div class="image-box shadow bordered text-center mb-20">
                            <div class="overlay-container">
                                <img src="/images/portfolio-5.jpg" alt="">
                                <div class="overlay-top">
                                    <div class="text">
                                        <h3><a href="portfolio-item.html">Project Title</a></h3>
                                        <p class="small">Site Building</p>
                                    </div>
                                </div>
                                <div class="overlay-bottom">
                                    <div class="links">
                                        <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated btn-sm">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 isotope-item app-development" style="position: absolute; left: 576px; top: 741px;">
                        <div class="image-box shadow bordered text-center mb-20">
                            <div class="overlay-container">
                                <img src="/images/portfolio-6.jpg" alt="">
                                <div class="overlay-top">
                                    <div class="text">
                                        <h3><a href="portfolio-item.html">Project Title</a></h3>
                                        <p class="small">App Development</p>
                                    </div>
                                </div>
                                <div class="overlay-bottom">
                                    <div class="links">
                                        <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated btn-sm">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- main end -->

        </div>
    </div>
</section>


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
                            <p class="mt-10"><a href="portfolio-grid-1-2-col.html#" class="btn btn-animated btn-lg btn-gray-transparent ">Purchase<i class="fa fa-cart-arrow-down pl-20"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>