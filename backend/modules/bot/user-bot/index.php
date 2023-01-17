<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\modules\bot\models\UserBotSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Bots';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-bot-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User Bot', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'first_name',
            'last_name',
            'username',
            'created_at',
            //'updated_at',
            //'email:email',
            //'phone',
            //'bonus',
            //'platform',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
