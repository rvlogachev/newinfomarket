<?php
/**
 * Created by PhpStorm.
 * User: visural
 * Date: 16.02.17
 * Time: 23:44
 */

?>


<div class="col-sm-6 isotope-item <?= $model->category_id; ?>" style="position: absolute; left: 576px; top: 0px;">
    <div class="image-box shadow bordered text-center mb-20">
        <div class="overlay-container">
            <?= $model->image ? \common\components\Html::img($model->getUploadUrl('image'), ['class' => 'img-thumbnail']) : ''; ?>
            <div class="overlay-top">
                <div class="text">
                    <h3><a href="portfolio-item.html"><?= $model->title; ?> </a></h3>
                    <p class="small"><?= substr($model->category_id, 0, 50) . " ..."; ?></p>
                </div>
            </div>
            <div class="overlay-bottom">
                <div class="links">
                     <?= \common\components\Html::a('посмотреть детали <i class="pl-10 fa fa-arrow-right"></i>3',\yii\helpers\Url::to(['/cases/view','id'=>$model->id]),['class'=>'btn btn-gray-transparent btn-animated btn-sm']);?>

                </div>
            </div>
        </div>
    </div>
</div>

