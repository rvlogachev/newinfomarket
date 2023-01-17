<?php

use common\components\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Cases */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="container">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'body')->textarea(['rows' => 6]) ?>

		<?php echo $form->field($model, 'attachments')->widget(
		        Upload::className(),
		        [
		            'url' => ['/file-storage/upload'],
		            'sortable' => true,
		            'maxFileSize' => 10000000, // 10 MiB
		            'maxNumberOfFiles' => 10
		        ]);
		    ?>
		    
    <div class="row">
        <div class="col-lg-6">
            <!-- Original image -->
            <?= Html::img($model->getUploadUrl('image'), ['class' => 'img-thumbnail']) ?>
        </div>
        <div class="col-lg-4">
            <!-- Thumb 1 (thumb profile) -->
            <?= Html::img($model->getThumbUploadUrl('image'), ['class' => 'img-thumbnail']) ?>
        </div>
        <div class="col-lg-2">
            <!-- Thumb 2 (preview profile) -->
            <?= Html::img($model->getThumbUploadUrl('image', 'preview'), ['class' => 'img-thumbnail']) ?>
        </div>
    </div>
    <?= $form->field($model, 'image')->fileInput(['accept' => 'image/*']) ?>
    <?php echo $form->field($model, 'view')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'created_at')->textInput() ?>

    <?php echo $form->field($model, 'category_id')->textInput() ?>

    <?php echo $form->field($model, 'updated_at')->textInput() ?>

    <?php echo $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? Yii::t('frontend', 'Create') : Yii::t('frontend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
