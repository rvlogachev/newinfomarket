<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\RssChanels */

$this->title = 'Update Rss Chanels: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Rss Chanels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rss-chanels-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
