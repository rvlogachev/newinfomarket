<?php
/* @var $this yii\web\View */


$this->title = 'Блог | '.$model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('frontend', 'Блог'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->registerMetaTag(['name' => 'keywords', 'content' => \common\modules\widget\widgets\DbText::widget(['key' => 'seo.keywords.article.category'])]);
$this->registerMetaTag(['name' => 'description', 'content' => \common\modules\widget\widgets\DbText::widget(['key' => 'seo.description.article.category'])]);

?>

<!-- page-title start -->
<!-- ================ -->
<h1 class="page-title"><?= $model->title;?></h1>
<p class="lead"><?= $model->body;?></p>
<div class="separator-2"></div>
<?php echo \yii\widgets\ListView::widget([
    'dataProvider'=>$dataProvider,
    'summary' => '<div  style="color:#CCC" class="pull-left">Показано {count} из {totalCount}</div><br><br>',
    'pager'=>[
        'hideOnSinglePage'=>true,
    ],
    'itemView'=>'_item'
])?>
<!--                -->

<!-- pagination start -->
<!--                <nav>-->
<!--                    <ul class="pagination">-->
<!--                        <li><a href="#" aria-label="Previous"><i class="fa fa-angle-left"></i></a></li>-->
<!--                        <li class="active"><a href="#">1</a></li>-->
<!--                        <li><a href="#">2</a></li>-->
<!--                        <li><a href="#">3</a></li>-->
<!--                        <li><a href="#">4</a></li>-->
<!--                        <li><a href="#">5</a></li>-->
<!--                        <li><a href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>-->
<!--                    </ul>-->
<!--                </nav>-->
<!-- pagination end -->









