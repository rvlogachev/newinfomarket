<?php
/* @var $this \yii\web\View */
use yii\helpers\ArrayHelper;
use yii\widgets\Breadcrumbs;
use yii\helpers\Html;
/* @var $content string */



$this->beginContent('@frontend/views/layouts/base.php') ?>
<div class="breadcrumb-container ">
    <div class="container">
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
<section class="main-container">

        <div class="container">
            <!-- ================ -->

            <!-- banner end -->
                <div class="row">

                        <!-- main start -->
                        <!-- ================ -->
                        <div class="main col-md-8">
                            <?php echo $content ?>
                        </div>
                        <!-- main end -->

                        <!-- sidebar start -->
                        <!-- ================ -->
                        <aside class="col-md-4 col-lg-3 col-lg-offset-1">
                            <div class="sidebar">

                                <h3 class="title">Поиск</h3>
                                <div class="separator-2"></div>
                                <div class=" clearfix">
                                    <?= \common\modules\blog\widgets\Search::widget() ?>
                                </div>

                                <div class="block clearfix">
                                    <h3 class="title">Категории</h3>
                                    <div class="separator-2"></div>
                                    <!--noindex-->
                                    <?php echo  \yii\bootstrap\Nav::widget([
                                        'options' => ['class' => 'nav nav-pills nav-stacked'],
                                        'encodeLabels'=>false,
                                        'items' =>  \common\components\Helper::getItemsCategory()
                                    ]); ?>
                                    <!--/noindex-->

                                </div>

                                <div class="hidden-xs">
                                    <?= \common\modules\blog\widgets\Baner\BanerWidget::widget(['url'=>'/chatbot']);?>




                                <?php //echo \common\widgets\Cases\CasesWidget::widget(['type'=>'blog']);?>

                                <!--noindex-->
                                <?php \common\widgets\DNofollowWidget::begin([]); ?>
                                <?= \common\modules\blog\widgets\TagCloud::widget([
                                    'title' => '<i class="icon-st"></i>Популярные теги',
                                    'maxTags' => 5,
                                ]) ?>
                                <?php \common\widgets\DNofollowWidget::end(); ?>
                                <!--/noindex-->

                                <div class="block clearfix">
                                    <h3 class="title">Цитаты</h3>
                                    <div class="separator-2"></div>
                                    <blockquote style="padding-left:20px" class="margin-clear">
                                        <p>Компьютер — это самый удивительный инструмент, с каким я когда-либо сталкивался. Это велосипед для нашего сознания..</p>
                                        <footer><cite title="Source Title">Стив Джобс </cite></footer>
                                    </blockquote>
                                    <blockquote style="padding-left:20px" class="margin-clear">
                                        <p>С годами я перестал покупать многие вещи просто потому, что они теперь кажутся мне нелепыми.</p>
                                        <footer><cite title="Source Title">Стив Джобс </cite></footer>
                                    </blockquote>
                                </div>
                                </div>
                                <?= \common\modules\blog\widgets\RecentPosts::widget([
                                    'title' => '<i class="icon-st"></i>Последние посты',
                                    'maxPosts' => 5,
                                ]) ?>

                                <?= \common\modules\blog\widgets\RecentComments::widget([
                                    'title' => '<i class="icon-st"></i>Комментарии',
                                    'maxComments' => 5,
                                ]) ?>

                                <?= \common\modules\blog\widgets\Links::widget([
                                    'title' => '<i class="icon-st"></i>Ссылки',
                                    'links' => Yii::$app->params['blogLinks'],
                                ]) ?>

                                <?= \common\modules\blog\widgets\SiteStat::widget([
                                    'title' => '<i class="icon-st"></i>Статистика',
                                ]) ?>





                            </div>
                        </aside>
                        <!-- sidebar end -->

                </div>
        </div>
</section>
<section class="section dark-bg pv-40 clearfix">
        <div class="container">
                <div class="row">
                        <div class="col-md-12">
                                <div class="call-to-action text-center">
                                        <div class="row">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                        <h3 class="title"><strong>Подпишись</strong> на наши статьи по этим направлениям</h3>
                                                        <p>В блоге мы постоянно пишем на тему маркетинга, продвижения, разработки веб-сайтов, новых технологиях и много еще другого.</p>
                                                        <div class="separator"></div>
                                                        <form class="form-inline margin-clear">
                                                                <div class="form-group has-feedback">
                                                                        <label class="sr-only" for="subscribe3">Email address</label>
                                                                        <input type="email" class="form-control" id="subscribe" placeholder="Введи email" name="subscribe" required="">
                                                                        <i class="fa fa-envelope form-control-feedback"></i>
                                                                </div>
                                                                <button type="submit" class="btn btn-gray-transparent btn-animated margin-clear">Подписаться <i class="fa fa-send"></i></button>
                                                        </form>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</section>

<?php $this->endContent() ?>
