<?php

use common\components\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Cases */

$this->title = Yii::t('frontend', 'Update {modelClass}: ', [
    'modelClass' => 'Cases',
]) . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('frontend', 'Cases'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('frontend', 'Update');
?>
<div class="container">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
