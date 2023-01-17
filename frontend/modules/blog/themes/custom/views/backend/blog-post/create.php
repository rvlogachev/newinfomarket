<?php

use yii\helpers\Html;
use common\modules\blog\Module;


/* @var $this yii\web\View */
/* @var $model common\modules\blog\models\BlogPost */

$this->title = Module::t('blog', 'Create ') . Module::t('blog', 'Blog Post');
$this->params['breadcrumbs'][] = ['label' => Module::t('blog', 'Blog Posts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-post-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
