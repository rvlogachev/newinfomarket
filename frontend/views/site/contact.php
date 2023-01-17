<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = \common\modules\widget\widgets\DbText::widget(['key' => 'seo.title.site.contact']);
$this->registerMetaTag(['name' => 'keywords', 'content' => \common\modules\widget\widgets\DbText::widget(['key' => 'seo.keywords.site.contact'])]);
$this->registerMetaTag(['name' => 'description', 'content' => \common\modules\widget\widgets\DbText::widget(['key' => 'seo.description.site.contact'])]);
$this -> params['breadcrumbs'][] = $this -> title;
$bundlePath = Yii::$app->getAssetManager()->getBundle('\frontend\assets\FrontendAsset')->baseUrl;
?>


<div class="banner dark-translucent-bg" style="background-image:url('<?= $bundlePath;?>/images/page-contact-banner.jpg'); background-position: 50% 27%;">
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
                <div class="separator"></div>
                <div class="icon default-bg circle large gray-bg object-non-visible animated object-visible zoomInDown"
                     data-animation-effect="zoomInDown" data-effect-delay="800">
                    <i class="fa fa-thumbs-o-up"></i>
                </div>
                <br>

                <p class="lead text-center">Мы очень рады что вы выбрали именно нас! Свяжитесь удобным Вам способом с
                    менеджером для обсуждения деталей проекта!</p>
                <ul class="list-inline mb-20 text-center">
                    <li><i class="text-default fa fa-map-marker pr-5"></i>г. 119119 Москва Ленинский пр. 42 корп.1</li>
                    <li><a href="tel:+74957683332" class="link-dark"><i class="text-default fa fa-phone pl-10 pr-5"></i>+7
                            (495) 133-16-49</a></li>
                    <li><a href="mailto:info@infomarketstudio.ru" class="link-dark"><i
                                    class="text-default fa fa-envelope-o pl-10 pr-5"></i>info@infomarketstudio.ru</a>
                    </li>

                </ul>
                <div class="separator"></div>
                <ul class="social-links circle animated-effect-1 margin-clear text-center space-bottom">
                    <li class="vkontakte"><a target="_blank" href="https://vk.com/infomarketstudio"><i
                                    class="fa fa-vk"></i></a></li>
                    <li class="odnoklassniki"><a target="_blank" href="https://ok.ru/group/54498255634686"><i
                                    class="fa fa-odnoklassniki"></i></a></li>
                    <li class="facebook"><a target="_blank" href="https://fb.me/infomarketstudio"><i
                                    class="fa fa-facebook"></i></a></li>
                    <!--                                <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>-->
                    <li class="insta"><a target="_blank" href="https://www.instagram.com/infomarketstudio"><i
                                    class="fa fa-instagram"></i></a></li>
                    <li class="twitter"><a target="_blank" href="https://twitter.com/infomarketst"><i
                                    class="fa fa-twitter"></i></a></li>
                    <li  >
                        <a target="_blank" href="https://telegram.me/infostudiobot" style="color:#777777;">
                            <i class="glyphicon glyphicon-send   text-white"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section class="main-container">
    <div class="container">
					<div class="row">

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-12 space-bottom">
							<h2 class="title">Напишите нам</h2>
							<div class="row">
								<div class="col-md-6">
									<!-- <div class="alert alert-success hidden" id="MessageSent">
										We have received your message, we will contact you very soon.
									</div>-->
									
									<!-- <div class="alert alert-danger hidden" id="MessageNotSent">
										Oops! Something went wrong, please verify that you are not a robot or refresh the page and try again.
									</div> -->
									<div class="contact-form">
										<?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
				                        <?php echo $form->field($model, 'name') ?>
				                        <?php echo $form->field($model, 'email') ?>
				                        <?php echo $form->field($model, 'subject') ?>
				                        <?php echo $form->field($model, 'body')->textArea(['rows' => 6]) ?>
                                        <?= $form->field($model, 'reCaptcha')->widget(\himiklab\yii2\recaptcha\ReCaptcha::className()) ?>
				                        <div class="form-group">
				                            <?php echo Html::submitButton(Yii::t('frontend', 'Отправить'), ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
				                        </div>
				                        <?php ActiveForm::end(); ?>
									</div>
								</div>
								<div class="col-md-6">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2248.2191131290915!2d37.5644593154267!3d55.702563003333786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54c839aaa0f95%3A0xd62948b52bbf850f!2z0JvQtdC90LjQvdGB0LrQuNC5INC_0YDQvtGB0L8uLCA0MiDQutC-0YDQv9GD0YEgMSwg0JzQvtGB0LrQstCwLCAxMTkxMTk!5e0!3m2!1sru!2sru!4v1517911962310" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
                            <h2>Хотите стать нашим клиентом?</h2>
                            <h2>Вы не пожалеете</h2>
                        </div>
                        <div class="col-sm-4">
                            <p class="mt-10"><a href="#zakazKpModal" data-toggle="modal" data-target="#zakazKpModal"
                                                class="btn btn-animated btn-lg btn-gray-transparent ">Стать клиентом<i
                                            class="fa fa-cart-arrow-down pl-20"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>