<?php
/**
 * @var $this \yii\web\View
 * @var $model \common\models\Page
 */
$this->title = $model->title;
$this->registerMetaTag(['name' => 'keywords', 'content' =>   $model->seo_keywords ]);
$this->registerMetaTag(['name' => 'description', 'content' =>   $model->seo_description ]);

$this -> params['breadcrumbs'][] = $this -> title;
?>
<div class="divider40"></div>
<div class="container ">
    <div class="row">
        <div class="col-md-12">
            <div class="content">
                <h1><?php echo $model->title ?></h1>
                <?php echo $model->body ?>


            </div>
        </div>
    </div>
</div>
