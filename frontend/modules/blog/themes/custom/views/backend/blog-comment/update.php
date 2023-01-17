<?php

use yii\helpers\Html;
use common\modules\blog\Module;

/* @var $this yii\web\View */
/* @var $model common\modules\blog\models\BlogComment */

$this->title = Module::t('blog', 'Update ') . Module::t('blog', 'Blog Comment') . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Module::t('blog', 'Blog Comments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Module::t('blog', 'Update');
?>
<div class="blog-comment-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
