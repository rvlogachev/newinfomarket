<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = \common\modules\widget\widgets\DbText::widget(['key' => 'seo.title.site.partners']);
$this->registerMetaTag(['name' => 'keywords', 'content' => \common\modules\widget\widgets\DbText::widget(['key' => 'seo.keywords.site.partners'])]);
$this->registerMetaTag(['name' => 'description', 'content' => \common\modules\widget\widgets\DbText::widget(['key' => 'seo.description.site.partners'])]);
$this -> params['breadcrumbs'][] = $this -> title;
$bundlePath = Yii::$app->getAssetManager()->getBundle('\frontend\assets\FrontendAsset')->baseUrl;

?>
	<div class="banner dark-translucent-bg" style="background-image:url('<?= $bundlePath;?>/images/page-services-banner.jpg'); background-position: 50% 27%;">
		<!-- breadcrumb start -->
		<!-- ================ -->
		<div class="breadcrumb-container mybreadcrumbs">
			<div class="container mybreadcrumbs_container">
				<?php echo \yii\widgets\Breadcrumbs::widget([
				'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    'activeItemTemplate'=>'<!--noindex--><li class="active">{link}</li><!--/noindex-->',
				]) ?>
	
				<?php if(Yii::$app->session->hasFlash('alert')):?>
				<?php echo \yii\bootstrap\Alert::widget([
				'body'=>\yii\helpers\ArrayHelper::getValue(Yii::$app->session->getFlash('alert'), 'body'),
				'options'=>\yii\helpers\ArrayHelper::getValue(Yii::$app->session->getFlash('alert'), 'options'),
				])?>
				<?php endif; ?>
			</div>
		</div>
		<!-- breadcrumb end -->
		<div class="container">
			<div class="row">
				<div class="col-md-8 text-center col-md-offset-2 pv-20">
					<h1 class="page-title text-center"><?= $this->title;?></h1><h3 class="title logo-font object-non-visible animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="100"> <span class="text-default">Infomarketstudio</span> Inc.</h3>
					<div class="separator object-non-visible mt-10 animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="100"></div>
					<p class="text-center object-non-visible animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="100">Мы ценим своих партнеров и стараемся работать только с лучшими игроками рынка.</p>
				</div>
			</div>
		</div>
	</div>
	
<section class="main-container padding-bottom-clear">
    <div class="container">
        <div class="row">
            <!-- main start -->
            <!-- ================ -->
            <div class="main col-md-12">
                <div class="row">

                    <div class="col-sm-4">
                        <div class="image-box style-2 mb-20">
                            <div class="overlay-container overlay-visible" style="    min-height: 133px;">
                                <img height="222" src="<?= $bundlePath;?>/images/c-logo.png" alt="">
                                <a href="#" class="overlay-link"><i class="fa fa-link"></i></a>
                                <div class="overlay-bottom hidden-xs">
                                    <div class="text">
                                        <p class="lead margin-clear text-left">SIMPLE CLOUD</p>
                                    </div>
                                </div>
                            </div>
                            <div class="body padding-horizontal-clear">
                                <p>Облачный VDS-хостинг, максимальная производительность за минимальные деньги — основная стратегия облачного хостинга Simple Cloud.
                                    На наш счет лучшее предложение на рынке хостинга по соотношению цена-качество!</p>
                                <a class="link-default " style="margin-top:30px" href="http://www.simplecloud.ru/?code=29041">www.simplecloud.ru<i class="pl-5 fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- main end -->

        </div>
    </div>
</section>
