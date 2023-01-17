<?php

use common\components\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Cases */

$this->title = Yii::t('frontend', 'Create {modelClass}', [
    'modelClass' => 'Cases',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('frontend', 'Cases'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
