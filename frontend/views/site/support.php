<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = 'Поддержка';
$this->params['breadcrumbs'][] = $this->title;
$this->title = \common\modules\widget\widgets\DbText::widget(['key' => 'seo.title.site.support']);
$this->registerMetaTag(['name' => 'keywords', 'content' => \common\modules\widget\widgets\DbText::widget(['key' => 'seo.keywords.site.support'])]);
$this->registerMetaTag(['name' => 'description', 'content' => \common\modules\widget\widgets\DbText::widget(['key' => 'seo.description.site.support'])]);


?>
<!-- header-container end -->
<div class="banner dark-translucent-bg"
     style="background-image:url('/images/page-about-banner-1.jpg'); background-position: 50% 27%;">
    <!-- breadcrumb start -->
    <!-- ================ -->
    <div class="breadcrumb-container mybreadcrumbs">
        <div class="container mybreadcrumbs_container">
            <?php echo \yii\widgets\Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                'activeItemTemplate' => '<!--noindex--><li class="active">{link}</li><!--/noindex-->',
            ]) ?>

            <?php if (Yii::$app->session->hasFlash('alert')): ?>
                <?php echo \yii\bootstrap\Alert::widget([
                    'body' => \yii\helpers\ArrayHelper::getValue(Yii::$app->session->getFlash('alert'), 'body'),
                    'options' => \yii\helpers\ArrayHelper::getValue(Yii::$app->session->getFlash('alert'), 'options'),
                ]) ?>
            <?php endif; ?>
        </div>
    </div>
    <!-- breadcrumb end -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-center col-md-offset-2 pv-20">
                <h1 class="page-title text-center"><?= $this->title; ?></h1>
                <h3 class="title logo-font object-non-visible animated object-visible fadeIn"
                    data-animation-effect="fadeIn" data-effect-delay="100"><span
                        class="text-default">Infomarketstudio</span> Inc.</h3>
                <div class="separator object-non-visible mt-10 animated object-visible fadeIn"
                     data-animation-effect="fadeIn" data-effect-delay="100"></div>
                <p class="text-center object-non-visible animated object-visible fadeIn" data-animation-effect="fadeIn"
                   data-effect-delay="100">Мы любим свою работу и стараемся отдаваться каждому проекту на 100%</p>
            </div>
        </div>
    </div>
</div>

<section style="min-height: 560px;" class="main-container padding-bottom-clear">

    <div class="container">
        <div class="row">

            <!-- main start -->
            <!-- ================ -->
            <div class="main col-md-12">

                <div class="row">
                    <div class="col-md-6">
                        <p>Агенство "Инфомаркет" — один из ведущих российских web-разработчиков</p>
                        <p>С 2005 года разрабатываем и поддерживаем интернет-проекты различной сложности — от
                            корпоративных и продуктовых сайтов до высокотехнологичных порталов и интегрированных
                            web-систем.</p><br>
                        "Инфомаркет" сочетает консалтинговую экспертизу, широкие технологические компетенции, богатый
                        опыт в области дизайна и юзабилити.</p><br>
                        <p>Наши услуги ориентированы на средний и крупный бизнес.</p><br>

                    </div>
                    <div class="col-md-6">
                        <div class="owl-carousel content-slider-with-controls">
                            <div class="overlay-container overlay-visible">
                                <img src="/images/page-about-2.jpg" alt="">
                                <div class="overlay-bottom hidden-xs">
                                    <div class="text">
                                        <h3 class="title">Вы можете доверять нам</h3>
                                    </div>
                                </div>
                                <a href="images/page-about-2.jpg" class="popup-img overlay-link" title="image title"><i
                                        class="icon-plus-1"></i></a>
                            </div>
                            <div class="overlay-container overlay-visible">
                                <img src="/images/page-about-1.jpg" alt="">
                                <div class="overlay-bottom hidden-xs">
                                    <div class="text">
                                        <h3 class="title">Мы любим писать код</h3>
                                    </div>
                                </div>
                                <a href="images/page-about-1.jpg" class="popup-img overlay-link" title="image title"><i
                                        class="icon-plus-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main end -->

        </div>

    </div>
</section>



