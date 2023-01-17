<?php

use common\components\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CasesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = \common\modules\widget\widgets\DbText::widget(['key' => 'seo.title.cases.index']);
$this->registerMetaTag(['name' => 'keywords', 'content' => \common\modules\widget\widgets\DbText::widget(['key' => 'seo.keywords.cases.index'])]);
$this->registerMetaTag(['name' => 'description', 'content' => \common\modules\widget\widgets\DbText::widget(['key' => 'seo.description.cases.index'])]);
$this->params['breadcrumbs'][] = $this->title;
$bundlePath = Yii::$app->getAssetManager()->getBundle('\frontend\assets\FrontendAsset')->baseUrl;
?>

<div class="banner default-translucent-bg" style="background-image:url('<?= $bundlePath;?>/images/page-about-me-banner.jpg'); background-position: 50% 27%;">
		<!-- breadcrumb start -->
		<!-- ================ -->
		<div class="breadcrumb-container mybreadcrumbs">
			<div class="container mybreadcrumbs_container">
				<?php echo \yii\widgets\Breadcrumbs::widget([
				'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    'activeItemTemplate'=>'<!--noindex--><li class="active">{link}</li><!--/noindex-->',
				]) ?>
			</div>
		</div>
		<!-- breadcrumb end -->
		<div class="container">
			<div class="row">
				<div class="col-md-8 text-center col-md-offset-2 pv-20">
					<h1 style="font-size: 30px;" class="page-title text-center"><?= $this->title;?></h1>
                    <h3 class="title logo-font object-non-visible animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="100"> <span class="text-default">Infomarketstudio</span> Inc.</h3>
					<div class="separator object-non-visible mt-10 animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="100"></div>
					<p style="font-size: 18px;" class="text-center object-non-visible animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="100">В этом разделе вы можете посмотреть наши работы - наша гордость</p>
				</div>
			</div>
		</div>
	</div>


<section style="min-height: 600px;" class="main-container" >
    <div class="container">
    	<div class="row">
    		<div class="col-md-12">
                    <p class="lead" style="font-size: 18px;">В этом разделе Вы можете посмотреть наши работы, кейсы разных компаний, с которыми мы работали.</p>
                </div>
    	</div>
        <div class="row">
            <div class="main col-md-12">
                
                    <?php echo \common\widgets\Cases\CasesWidget::widget([  'cat'=>$categories ]); ?>

            </div>
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
                            <h2>Хотите стать нашим клиентом</h2>
                            <h2>Оставьте заявку прямо сейчас</h2>
                        </div>
                        <div class="col-sm-4">
                            <p class="mt-10"><a   href="#zakazSiteModal" data-toggle="modal" data-target="#zakazSiteModal" class="btn btn-animated btn-lg btn-gray-transparent ">Стать клиентом<i class="fa fa-cart-arrow-down pl-20"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




