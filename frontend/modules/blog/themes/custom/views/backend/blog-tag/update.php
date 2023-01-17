<?php

use yii\helpers\Html;
use common\modules\blog\Module;

/* @var $this yii\web\View */
/* @var $model common\modules\blog\models\BlogTag */

$this->title = Module::t('blog', 'Update ') . Module::t('blog', 'Blog Tag') . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Module::t('blog', 'Blog Tags'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Module::t('blog', 'Update');
?>
<div class="blog-tag-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
