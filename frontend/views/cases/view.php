<?php

use common\components\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Cases */

$this->title = $model->title.' | Кейсы';
$this->params['breadcrumbs'][] = ['label' => Yii::t('frontend', 'Кейсы'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$this->registerMetaTag(['name' => 'keywords', 'content' => $model->seo_keywords]);
$this->registerMetaTag(['name' => 'description', 'content' => $model->seo_description]);
?>
<div class="breadcrumb-container mybreadcrumbs"  >
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

<div class=" banner light-gray-bg " style=" padding-top: 40px;">
    <div class="container clearfix">

        <!-- main start -->
        <!-- ================ -->
        <div class="row">
            <div class="main col-md-7">

                <!-- page-title start -->
                <!-- ================ -->
                <?php  if (count($model->getCasesImage()->all())>=1) {     ?>


                    <?php if ($model->getCasesImage()->all()) {
                        $i = 0;
                        foreach ($model->getCasesImage()->all() as $image) {
                            if ($i==0) { ?>
                                <div class="shadow bordered">
                                    <div class="overlay-container">
                                        <?= \common\components\Html::img($image->getUrl(), ['class' => '']); ?>
                                        <a href="<?= $image->getUrl();?>" class="overlay-link popup-img" title="<?= $image->name;?>">
                                            <i class="fa fa fa-search"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="space-bottom"></div>

                            <?php   }
                            $i++;
                        } ?>

                        <div class="row grid-space-20">
                            <?php $i = 0;
                            foreach ($model->getCasesImage()->all() as $image) {

                                if ($i > 0) { ?>

                                    <div class="col-xs-3">
                                        <div class="overlay-container">
                                            <?= \common\components\Html::img($image->getUrl(), ['class' => '', 'width'=>'200']); ?>
                                            <a href="<?= $image->getUrl();?>" class="overlay-link small popup-img"
                                               title="<?= $image->name;?>">
                                                <i class="fa fa fa-search"></i>
                                            </a>
                                        </div>
                                    </div>
                                <?php  }
                                $i++;
                            } ?>

                        </div>

                    <?php } }?>




                <div class="space-bottom"></div>
            </div>

            <aside class="col-md-5   ">
                <div class="sidebar">
                    <div class="block clearfix">
                        <h3  style="font-size: 24px;" class="title">Информация </h3>
                        <div class="separator-2"></div>
                        <ul class="list margin-clear">

                            <?php if (!empty($model->getCategory()->one()->title)){ ?>
                            <li style="font-size: 18px;" ><strong>Категория: </strong> <span class="text-right"><?= $model->getCategory()->one()->title; ?></span></li>
                            <?php } ?>
                            <?php if (!empty($model->client)){ ?>
                            <li style="font-size: 18px;" ><strong>Клиент: </strong> <span class="text-right"><?= $model->client;?></span></li>
                            <?php } ?>
                            <?php if (!empty($model->times)){ ?>
                            <li style="font-size: 18px;" ><strong>Срок проекта: </strong> <span class="text-right"><?= $model->times ?> </span></li>
                            <?php } ?>
                            <?php if (!empty($model->price)){ ?>
                            <li style="font-size: 18px;" ><strong>Стоимость проекта: </strong> <span class="text-right"><?= $model->price ?> </span></li>
                            <?php } ?>


                        </ul>
                        <?php if (!empty($model->url)){ ?>
                        <a target="_blank" href="<?=$model->url;?>" class="btn btn-animated btn-default btn-lg">Перейти <i
                                    class="fa fa-external-link"></i></a>
                        <?php } ?>

                        <?php if (!empty($model->social_ok) || !empty($model->social_vk) || !empty($model->social_facebook) || !empty($model->social_google) || !empty($model->social_twitter)){ ?>
                        <h3 style="font-size: 24px;" >Социальные аккаунты</h3>
                        <div class="separator-2"></div>
                        <ul class="social-links colored circle small">
                            <?php if (!empty($model->social_ok)){ ?>
                            <li class="linkedin"><a target="_blank" href="<?= $model->social_ok;?>"><i
                                            class="fa fa-odnoklassniki"></i></a></li>
                            <?php } ?>
                            <?php if (!empty($model->social_vk)){ ?>
                            <li class="xing"><a target="_blank" href="<?= $model->social_vk;?>"><i
                                            class="fa fa-vk"></i></a></li>
                            <?php } ?>
                            <?php if (!empty($model->social_facebook)){ ?>
                            <li class="facebook"><a target="_blank" href="<?= $model->social_facebook;?>"><i
                                            class="fa fa-facebook"></i></a></li>
                            <?php } ?>
                            <?php if (!empty($model->social_google)){ ?>
                            <li class="googleplus"><a target="_blank" href="<?= $model->social_google;?>"><i
                                            class="fa fa-google-plus"></i></a></li>
                            <?php } ?>
                            <?php if (!empty($model->social_twitter)){ ?>
                            <li class="twitter"><a target="_blank" href="<?= $model->social_twitter;?>"><i
                                            class="fa fa-twitter"></i></a></li>
                            <?php } ?>

                        <?php } ?>

                        </ul>
                    </div>
                </div>
            </aside>

        </div>


        <!-- main end -->



        <!-- slideshow end -->

    </div>
</div>


<section class="main-container padding-ver-clear">
    <div class="container pv-40">
        <div class="row">

            <!-- main start -->
            <!-- ================ -->
            <div class="main col-md-8">
                <h1 style="font-size: 28px;"  class="title"><?= $model->title;?></h1>
                <div class="separator-2"></div>
                <span style="font-size: 16px;" ><?= $model->body;?></span>
                <div class="space-bottom"></div>
<!--                 <h3  style="font-size: 28px;" >Отзыв клиента</h3>-->
<!--                <blockquote class="margin-clear">-->
<!--                     <p>Взаимодействие сотрудников компании Инфомаркет очень порадовало, исполнение задач в срок и все четко по плану.</p>-->
<!--                     <footer><cite title="Source Title">Генеральный директор - ООО Турдоступ</cite></footer>-->
<!--                 </blockquote>-->
            </div>
            <!-- main end -->

            <!-- sidebar start -->
            <!-- ================ -->

            <!-- sidebar end -->
        </div>
    </div>
</section>

<section class="section light-gray-bg pv-40 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="call-to-action text-center">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <h3 class="title">Запросить больше информации </h3>
                            <p>Если вы хотите узнать подробнее о проекте оставьте пожалуйста Вашу почту и мы Вам вышлем необходимую информацию</p>
                            <div class="separator"></div>
                            <form class="form-inline margin-clear" action="/site/index" >
                                <div class="form-group has-feedback">
                                    <label class="sr-only" for="subscribe">Email </label>
                                    <input type="email" class="form-control" id="subscribe" placeholder="Введите email"  name="subscribe" required="">
                                    <i class="fa fa-envelope form-control-feedback"></i>
                                </div>
                                <button type="submit" class="btn btn-gray-transparent btn-animated margin-clear">Отправить
                                    <i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section pv-40 clearfix">
    <div class="container">
        <h2 style="font-size: 24px;" >Другие <strong>Проекты</strong></h2>
        <div class="row grid-space-10">
            <?php  $i=0;
                foreach ($otherProjects as $project) {
                    if (count($project->getCasesImage()->all())>1) { ?>
                        <div class="col-sm-4">
                            <div class="image-box style-2 mb-20 bordered text-center">
                                <div id="carousel-portfolio" class="carousel slide" data-ride="carousel">
                                    <?php if ($project->getCasesImage()->all()) {
                                        $j = 0; ?>
                                    <ol class="carousel-indicators bottom margin-clear">
                                         <?php foreach ($project->getCasesImage()->all() as $image) { ?>
                                            <li data-target="#carousel-portfolio" data-slide-to="<?= $j;?>" class="<?= ($j==0)?'active':'';?>"></li>
                                         <?php   $j++; } ?>
                                    </ol>
                                      <?php   } ?>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <?php if ($project->getCasesImage()->all()) {
                                            $k = 0;
                                            foreach ($project->getCasesImage()->all() as $image) { ?>
                                            <div class="item <?= ($k == 0) ? 'active' : ''; ?>">
                                                <div class="overlay-container">
                                                    <?= \common\components\Html::img($image->getUrl(), ['class' => '']); ?>
                                                    <?php echo \yii\helpers\Html::a('<i class="fa fa-search"></i>', ['/cases/view', 'id' => $project->id], ['class' => ' overlay-link']) ?>
                                                </div>
                                            </div>
                                            <?php $k++; }  } ?>
                                    </div>
                                </div>
                                <div class="body shadow light-gray-bg " >
                                    <h3><div style=" "><?= $project->title;?></div></h3>
                                    <div class="separator" ></div>

                                    <div  style="<?= ($i==0)? 'min-height: 25px;':'';?>">
                                        <p><?= $project->short_body;?></p>
                                    </div>
                                    <?php echo \yii\helpers\Html::a('Подробнее<i class="fa fa-arrow-right pl-10"></i>', ['/cases/view', 'id' => $project->id], ['class' => 'btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear', 'target'=>'_blank']) ?>
                                </div>
                            </div>
                        </div>
                    <?php } else {
                        if ($project->getCasesImage()->all()) {
                            $j = 0;
                            foreach ($project->getCasesImage()->all() as $image) {?>
                                <div class="col-sm-4">
                                    <div class="image-box style-2 mb-20 shadow bordered light-gray-bg text-center">
                                        <div class="overlay-container">
                                            <?= \common\components\Html::img($image->getUrl(), ['class' => '']); ?>
                                            <?php echo \yii\helpers\Html::a('<i class="fa fa-search"></i>', ['/cases/view', 'id' => $project->id,'slug'=>$project->slug], ['class' => ' overlay-link']) ?>
                                        </div>
                                        <div class="body">
                                            <h3><div style=" "><?= $project->title;?></div></h3>
                                            <div class="separator"></div>
                                            <div  style="<?= ($i==0)? 'min-height: 25px;':'';?>">
                                            <p><?= $project->short_body;?></p>
                                            </div>
                                            <?php echo \yii\helpers\Html::a('Подробнее<i class="fa fa-arrow-right pl-10"></i>', ['/cases/view', 'id' => $project->id,'slug'=>$project->slug], ['class' => 'btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear', 'target'=>'_blank']) ?>
                                        </div>
                                    </div>
                                </div>
                    <?php  } } } $i++; }?>




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
                            <h2>Вы не пожалеете</h2>
                        </div>
                        <div class="col-sm-4">
                            <p class="mt-10">
                                <a href="#zakazKpModal" data-toggle="modal" data-target="#zakazKpModal" class="btn btn-animated btn-lg btn-gray-transparent ">
                                    Стать клиентом<i class="fa fa-cart-arrow-down pl-20"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


