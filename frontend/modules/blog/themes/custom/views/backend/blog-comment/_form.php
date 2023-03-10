<?php

use yii\helpers\Html;
use common\modules\blog\Module;
use yii\widgets\ActiveForm;
use common\modules\blog\models\BlogPost;
use \yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\modules\blog\models\BlogComment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blog-comment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'post_id')->dropDownList(ArrayHelper::map(BlogPost::find()->all(), 'id', 'title')) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'status')->dropDownList(\common\modules\blog\models\Status::labels()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Module::t('blog', 'Create') : Module::t('blog', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
