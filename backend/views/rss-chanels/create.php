<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\RssChanels */

$this->title = 'Create Rss Chanels';
$this->params['breadcrumbs'][] = ['label' => 'Rss Chanels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rss-chanels-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
