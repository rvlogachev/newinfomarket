<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\bot\models\UserBot */

$this->title = 'Update User Bot: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'User Bots', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-bot-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
