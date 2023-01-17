<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = \common\modules\widget\widgets\DbText::widget(['key' => 'seo.title.site.analytics']);
$this->registerMetaTag(['name' => 'keywords', 'content' => \common\modules\widget\widgets\DbText::widget(['key' => 'seo.keywords.site.analytics'])]);
$this->registerMetaTag(['name' => 'description', 'content' => \common\modules\widget\widgets\DbText::widget(['key' => 'seo.description.site.analytics'])]);
$this -> params['breadcrumbs'][] = $this -> title;

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
            <div class="main col-md-12 ">

                    <div class="text-center">
                        <iframe width="100%" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiZjc3MWFjYjgtNGUyNy00MDM5LWFhMDQtYjBmYjA3N2NkNzgzIiwidCI6IjRjNjVhMzE5LTBlOWItNDRmMy1hOTA5LTRkZmViNDMxZWI5NiIsImMiOjl9" frameborder="0" allowFullScreen="true"></iframe>222
                </div>
            </div>
            <!-- main end -->

        </div>
        <div class="row">
            <!-- main start -->
            <!-- ================ -->
            <div class="main col-md-12 ">&nbsp;
            </div>


        </div>
    </div>
</section>


