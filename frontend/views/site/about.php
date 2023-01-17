<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \frontend\models\ContactForm */


$this->title = \common\modules\widget\widgets\DbText::widget(['key' => 'seo.title.site.about']);
$this->registerMetaTag(['name' => 'keywords', 'content' => \common\modules\widget\widgets\DbText::widget(['key' => 'seo.keywords.site.about'])]);
$this->registerMetaTag(['name' => 'description', 'content' => \common\modules\widget\widgets\DbText::widget(['key' => 'seo.description.site.about'])]);
$this -> params['breadcrumbs'][] = $this -> title;

$bundlePath = Yii::$app->getAssetManager()->getBundle('\frontend\assets\FrontendAsset')->baseUrl;

?>
<!-- header-container end -->
	<div class="banner dark-translucent-bg" style="background-image:url('<?= $bundlePath;?>/images/page-about-banner-1.jpg'); background-position: 50% 27%;">
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
					<h1 style="font-size: 30px;" class="page-title text-center"><?= $this->title;?></h1><h3 class="title logo-font object-non-visible animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="100"> <span class="text-default">Infomarketstudio</span> Inc.</h3>
					<div class="separator object-non-visible mt-10 animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="100"></div>
					<p style="font-size: 18px;" class="text-center object-non-visible animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="100">Мы любим свою работу и стараемся отдаваться каждому проекту на 100%</p>
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
								<div class="col-md-6" style="font-size: 18px;">
									<p>Агенство "Инфомаркет" — один из ведущих российских web-разработчиков</p>
									<p>С 2011 года разрабатываем и поддерживаем интернет-проекты различной сложности — от корпоративных и продуктовых сайтов до высокотехнологичных порталов и интегрированных web-систем.</p>
                                     Наша основная специализация – продвижение бизнеса в интернете за счет внедрения новых технологий. Мы помогаем клиентам получить трафик и конвертировать его в продажи. И делаем это хорошо.
                                    "Инфомаркет" сочетает консалтинговую экспертизу, широкие технологические компетенции, богатый опыт в области дизайна и юзабилити.</p>
									<p>Наши услуги ориентированы на средний и крупный бизнес.</p>

								</div>
								<div class="col-md-6">
									<div class="owl-carousel content-slider-with-controls">
										<div class="overlay-container overlay-visible">
											<img alt="Агенство Инфомаркет — один из ведущих российских web-разработчиков" title="Агенство Инфомаркет — один из ведущих российских web-разработчиков" src="<?= $bundlePath;?>/images/page-about-2.jpg" alt="">
											<div class="overlay-bottom hidden-xs">
												<div class="text">
													<h3 class="title" style="font-size: 24px;"> </h3>
												</div>
											</div>
											<a href="<?= $bundlePath;?>/images/page-about-2.jpg" class="popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
										</div>
										<div class="overlay-container overlay-visible">
											<img src="<?= $bundlePath;?>/images/page-about-1.jpg" alt="">
											<div class="overlay-bottom hidden-xs">
												<div class="text">
													<h3 class="title" style="font-size: 24px;"> </h3>
												</div>
											</div>
											<a href="<?= $bundlePath;?>/images/page-about-1.jpg" class="popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- main end -->

					</div>
					<!-- section start -->
				<!-- ================ -->
<!--				<div class="section">-->
<!--					<div class="container">-->
<!--						<h2>Почему <strong>выбирают Нас</strong></h2>-->
<!--						<div class="separator-2"></div>-->
<!--						<div class="row">-->
<!--							<!-- accordion start -->
<!--							<!-- ================ -->
<!--							<div class="col-md-6">-->
<!--								<div class="panel-group collapse-style-1" id="accordion">-->
<!--									<div class="panel panel-default">-->
<!--										<div class="panel-heading">-->
<!--											<h4 class="panel-title">-->
<!--												<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">-->
<!--													<i class="fa fa-rocket pr-10"></i>Персональный подход -->
<!--												</a>-->
<!--											</h4>-->
<!--										</div>-->
<!--										<div id="collapseOne" class="panel-collapse collapse in">-->
<!--											<div class="panel-body">-->
<!--												Вдумчивый и разборчивый подход к каждому проекту дает гарантию результата-->
<!--											</div>-->
<!--										</div>-->
<!--									</div>-->
<!--									<div class="panel panel-default">-->
<!--										<div class="panel-heading">-->
<!--											<h4 class="panel-title">-->
<!--												<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">-->
<!--													<i class="fa fa-leaf pr-10"></i>У нас работают только лучшие в своем деле-->
<!--												</a>-->
<!--											</h4>-->
<!--										</div>-->
<!--										<div id="collapseTwo" class="panel-collapse collapse">-->
<!--											<div class="panel-body">-->
<!--												У нас разделение труда. Каждый делает только то, что умеет лучше всего. Результат — быстрая и качественная работа!-->
<!--											</div>-->
<!--										</div>-->
<!--									</div>-->
<!--									<div class="panel panel-default">-->
<!--										<div class="panel-heading">-->
<!--											<h4 class="panel-title">-->
<!--												<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">-->
<!--													<i class="fa fa-heart pr-10"></i>Личная ответственность Project Manager'a-->
<!--												</a>-->
<!--											</h4>-->
<!--										</div>-->
<!--										<div id="collapseThree" class="panel-collapse collapse">-->
<!--											<div class="panel-body">-->
<!--												Вы можете познакомиться с вашим личным Руководителем проекта, приехав в офис студии Инфомаркет в Москве. Дизайн и функциональность сайта обсудим за чашкой ароматного кофе.-->
<!--											</div>-->
<!--										</div>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--							<!-- accordion end -->
<!--							<!-- progress bars start -->
<!--							<!-- ================ -->
<!--							<div class="col-md-6">-->
<!--								<div class="progress mt-20 style-1">-->
<!--									<span class="text"></span>-->
<!--									<div class="progress-bar progress-bar-default" data-animate-width="80%">-->
<!--										<span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">Маркетинг</span>-->
<!--									</div>-->
<!--								</div>-->
<!--								<div class="progress style-1">-->
<!--									<span class="text"></span>-->
<!--									<div class="progress-bar progress-bar-default" data-animate-width="75%">-->
<!--										<span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">Брендинг и дизайн</span>-->
<!--									</div>-->
<!--								</div>-->
<!--								<div class="progress style-1">-->
<!--									<span class="text"></span>-->
<!--									<div class="progress-bar progress-bar-default" data-animate-width="95%">-->
<!--										<span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">Web-разработка</span>-->
<!--									</div>-->
<!--								</div>-->
<!--								<div class="progress style-1">-->
<!--									<span class="text"></span>-->
<!--									<div class="progress-bar progress-bar-default" data-animate-width="85%">-->
<!--										<span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">Реклама и продвижение</span>-->
<!--									</div>-->
<!--								</div>-->
<!--								 -->
<!--							</div>-->
<!--							<!-- progress bars end -->
<!--						</div>-->
<!--						-->
<!--					</div>-->
<!--				</div>-->
				<!-- section end -->
				</div>
			</section>
				<!-- section start -->
			<!-- ================ -->
			<section class="object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100" style="margin-bottom: 60px;">
				<div class="container">
					<div class="full-width-section">
						<div class="full-image-container hovered">
							<img class="to-right-block" src="<?= $bundlePath;?>/images/page-about-3.jpg" alt="">
							<div class="full-image-overlay text-right">
								<h3> <strong>Основные направления</strong></h3>
								<ul class="list-icons">
									<li>Разработка туннелей продаж "под ключ"<i class="icon-check-1"></i></li>
									<li>Разработка корпоративных чат-ботов <i class="icon-check-1"></i></li>
									<li>Разработка сайтов, посадочных страниц<i class="icon-check-1"></i></li>
									<li>Поисковое продвижение<i class="icon-check-1"></i></li>
									<li>Продвижение в социальных медиа<i class="icon-check-1"></i></li>
									<li>Внедрение инструментов повышающих конверсию сайта<i class="icon-check-1"></i></li>
								</ul>
							</div>
						</div>
						<div class="full-text-container light-gray-bg border-bottom-clear">
							<h2>Студия <strong>Инфомаркет</strong></h2>
							<div class="separator-2 visible-lg"></div>
							<p>Мы рады предложить Вам интересные маркетинговые инструменты, для решения именно той задачи которая Вам необходима</p>
							<div class="separator-3 visible-lg"></div>
							<a href="/contact" class="btn btn-default btn-animated">Связаться <i class="pl-5 fa fa-envelope-o"></i></a>
						</div>
					</div>
				</div>
			</section>
			<!-- section end -->


