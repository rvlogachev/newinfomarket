<?php

use common\components\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CasesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('frontend', 'Кейсы');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="banner default-translucent-bg" style="background-image:url('/images/page-about-me-banner.jpg'); background-position: 50% 27%;">
		<!-- breadcrumb start -->
		<!-- ================ -->
		<div class="breadcrumb-container ">
			<div class="container">
				<?php echo \yii\widgets\Breadcrumbs::widget([
				'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
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
					<p class="text-center object-non-visible animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="100">В этом разделе вы можете посмотреть наши работы - наша гордость</p>
				</div>
			</div>
		</div>
	</div>
	

<section class="main-container">

    <div class="container">
        <div class="row">

            <!-- main start -->
            <!-- ================ -->
            <div class="main col-md-12">

                 
                <!-- page-title end
                <p class="lead">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit Illo quaerat <br> commodi excepturi dignissimos!
                </p>-->

                <!-- isotope filters start -->
                <div class="filters">
                    <ul class="nav nav-pills">
                        <li class="active"><a href="#" data-filter="*">Все</a></li>
                        <li><a href="#" data-filter=".web-design">Брендинг и дизайн</a></li>
                        <li><a href="#" data-filter=".app-development">Web-разработка</a></li>
                        <li><a href="#" data-filter=".site-building">Реклама</a></li>
                    </ul>
                </div>
                <!-- isotope filters end -->

                <div class="isotope-container row grid-space-10" >


                                  <?php echo \yii\widgets\ListView::widget([
                                      'dataProvider' => $dataProvider,
                                      'pager'=>[
                                          'hideOnSinglePage'=>true,
                                      ],
                                      'layout' => '{items}',
                                      'itemView'=>'_item',
                                      'options'=>['class' => '']
                                  ])?>




                </div>

            </div>
            <!-- main end -->

        </div>
    </div>
</section>






