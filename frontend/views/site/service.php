<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = \common\modules\widget\widgets\DbText::widget(['key' => 'seo.title.site.service']);
$this->registerMetaTag(['name' => 'keywords', 'content' => \common\modules\widget\widgets\DbText::widget(['key' => 'seo.keywords.site.service'])]);
$this->registerMetaTag(['name' => 'description', 'content' => \common\modules\widget\widgets\DbText::widget(['key' => 'seo.description.site.service'])]);
$this -> params['breadcrumbs'][] = $this -> title;
$bundlePath = Yii::$app->getAssetManager()->getBundle('\frontend\assets\FrontendAsset')->baseUrl;

?>



<div class="banner dark-translucent-bg" style="background-image:url('<?= $bundlePath;?>/images/page-about-me-banner.jpg'); background-position: 50% 27%;">
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
					<h1><?= $this->title;?></h1><h3 class="title logo-font object-non-visible animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="100"> <span class="text-default">Infomarketstudio</span> Inc.</h3>
					<div class="separator object-non-visible mt-10 animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="100"></div>
					<p class="text-center object-non-visible animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="100">У нас достаточно большой перечень услуг.</p>
				</div>
			</div>
		</div>
	</div>
<section class="full-width-section"><a name="marketing"></a>
    <div class="full-image-container light-gray-bg border-bottom-clear">
        <img class="to-right-block" src="<?= $bundlePath;?>/images/section-image-4.jpg" alt="">
        <div class="full-image-overlay text-right" style="margin-top: -130px;">
            
            <ul class="list-icons">
                <li>Разработка эксклюзивного УТП <i class="icon-check-1"></i></li>
                <li>Профессиональный копирайтинг <i class="icon-check-1"></i></li>
                <li>Разработка комплексных мультиканальных маркетинговых стратегий повышения продаж<i class="icon-check-1"></i></li>
                <li>Email маркетинг<i class="icon-check-1"></i></li>
                <li>Маркетинг в SMM<i class="icon-check-1"></i></li>
                <li>Сбор семантических ядер, SEO-оптимизация<i class="icon-check-1"></i></li>
            </ul>
        </div>
    </div>
    <div class="full-text-container light-gray-bg border-bottom-clear">
        <h2>Маркетинг</h2>
        <div class="separator-2 visible-lg"></div>
        <p>Маркетинг</p>
        <div class="separator-3 visible-lg"></div>
        <a href="#zakazKpModal" data-toggle="modal" data-target="#zakazKpModal" class="btn btn-default">Стать клиентом <i class="pl-10 fa fa-envelope-o"></i></a>
    </div>
</section>

<section class="full-width-section"><a name="dizain"></a>
    <div class="full-text-container left light-gray-bg border-bottom-clear text-right">
        <h2>Брендинг и дизайн</h2>
        <div class="separator-3 visible-lg"></div>
        <p>Брендинг и дизайн</p>
        <div class="separator-2 visible-lg"></div>
        <a href="#zakazKpModal" data-toggle="modal" data-target="#zakazKpModal" class="btn btn-default">Стать клиентом<i class="pl-10 fa fa-envelope-o"></i></a>
    </div>
    <div class="full-image-container light-gray-bg">
        <img src="<?= $bundlePath;?>/images/dr.jpg" alt="">
        <div class="full-image-overlay" style="margin-top: -130px;">
           
            <ul class="list-icons">
                <li><i class="icon-check-1"></i>Разработка корпоративной символики, инфографики</li>
                <li><i class="icon-check-1"></i>Разработка логотипа</li>
                <li><i class="icon-check-1"></i>Маркетинг Кит</li>
                <li><i class="icon-check-1"></i>Деловая презентация о компании</li>
                <li><i class="icon-check-1"></i>Дизайн сайтов</li>
            </ul>
        </div>
    </div>
</section>

<section class="full-width-section"><a name="services"></a>
    <div class="full-image-container light-gray-bg border-bottom-clear">
        <img class="to-right-block" src="<?= $bundlePath;?>/images/web-development.jpg" alt="">
        <div class="full-image-overlay text-right" style="margin-top: -130px;">
            
            <ul class="list-icons">
                <li> </li>
                <li> </li>
                <li>Сайты-визитки, Landing-page<i class="icon-check-1"></i></li>
                <li>Корпоративные сайты <i class="icon-check-1"></i></li>
                <li>Веб-сервисы (REST FULL API, web-services)<i class="icon-check-1"></i></li>
                <li>Интернет-магазины<i class="icon-check-1"></i></li>
                <li>Интерфейсы и user experience<i class="icon-check-1"></i></li>
            </ul>
        </div>
    </div>
    <div class="full-text-container light-gray-bg border-bottom-clear">
        <h2>Web-разработка</h2>
        <div class="separator-2 visible-lg"></div>
        <p>Web-разработка</p>
        <div class="separator-3 visible-lg"></div>
        <a href="#zakazKpModal" data-toggle="modal" data-target="#zakazKpModal" class="btn btn-default">Стать клиентом <i class="pl-10 fa fa-envelope-o"></i></a>
    </div>
</section>

<section class="full-width-section"><a name="add"></a>
    <div class="full-text-container left light-gray-bg border-bottom-clear text-right">
        <h2>Реклама и продвижение</h2>
        <div class="separator-3 visible-lg"></div>
        <p>Реклама и продвижение</p>
        <div class="separator-2 visible-lg"></div>
        <a href="#zakazKpModal" data-toggle="modal" data-target="#zakazKpModal" class="btn btn-default">Стать клиентом<i class="pl-10 fa fa-envelope-o"></i></a>
    </div>
    <div class="full-image-container default-bg">
        <img src="<?= $bundlePath;?>/images/seoandcontext.png" alt="">
        <div class="full-image-overlay" style="margin-top: -130px;">
            
            <ul class="list-icons">
            	<li> </li>
            	<li> </li>
                <li><i class="icon-check-1"></i>Настройка прозрачной веб-аналитики</li>
                <li><i class="icon-check-1"></i>Контекстная реклама  </li>
                <li><i class="icon-check-1"></i>Таргетированная реклама </li>
                <li><i class="icon-check-1"></i>Реклама в Social Media (facebook, instagram, vkontakte)</li>
            </ul>
        </div>
    </div>
    
</section>

<section>
	<div class="dark-bg  default-hovered footer-top animated-text">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="call-to-action text-center">
								<div class="row">
									<div class="col-sm-8">
										<h2>Хотите стать нашим клиентом?</h2>
										<h2>Вы не пожалеете</h2>
									</div>
									<div class="col-sm-4">
										<p class="mt-10"><a href="#zakazKpModal" data-toggle="modal" data-target="#zakazKpModal" class="btn btn-animated btn-lg btn-gray-transparent ">Стать клиентом<i class="fa fa-cart-arrow-down pl-20"></i></a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
</section>





 
