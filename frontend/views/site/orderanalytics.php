<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = 'Заявка  получена.';
$this->params['breadcrumbs'][] = $this->title;
?>



<div class="banner video-background-banner pv-40 dark-translucent-bg hovered">
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

    <div  class="video-background-poster" style="background-image: url('videos/video-banner-poster.jpg');"></div>
    <video autoplay="" loop="" muted="" style="top:-100%; left: 0;" poster="videos/video-banner-poster.jpg">
        <source src="videos/background-video-banner.mp4" type="video/mp4">
        <source src="videos/background-video-banner.webm" type="video/webm">
    </video>


    <div class="container">
        <div class="row justify-content-lg-center text-center">
            <div class="col-lg-12 text-center pv-20">
                <h2 class="title object-non-visible animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="100"><?= $this->title?></h2>
                <div class="separator object-non-visible mt-10 animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="100"></div>
                <p class="text-center object-non-visible animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="100">
                    В ближайшее время с Вами свяжется специалист нашей компании. Для уточнения необходимой информации.
                </p>
            </div>
        </div>
    </div>

</div>

<!-- breadcrumb end -->
<section style="min-height: 560px;" class="main-container border-clear light-gray-bg padding-bottom-clear">

    <div class="container">
        <div class="row">

            <!-- main start -->
            <!-- ================ -->
            <div class="main col-12">

                <!-- page-title start -->
                <!-- ================ -->
                <h1 class="page-title text-center">Наш сервис</h1>
                <!-- page-title end -->

                <div class="image-box space-top style-4">
                    <div class="row grid-space-0">
                        <div class="col-lg-6">
                            <div class="overlay-container">
                                <img src="images/service-1.jpg" alt="">
                                <div class="overlay-to-top">
                                    <p class="small margin-clear"><em>аудит для  <br> Вашего сайта</em></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="body">
                                <div class="pv-30 hidden-lg-down"></div>
                                <h3>Параметры для аудита</h3>
                                <div class="separator-2"></div>
                                <p class="margin-clear">
                                    Для получения аудита нем необходимо уточнить некоторую информацию, например домен сайта. Для этого Сотрудник нашей компании свяжется с Вами в ближайшее время.
                                </p>
                                <br>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- main end -->

        </div>
    </div>
</section>