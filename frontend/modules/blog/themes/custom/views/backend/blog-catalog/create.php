<?php

use yii\helpers\Html;
use common\modules\blog\Module;

/* @var $this yii\web\View */
/* @var $model common\modules\blog\models\BlogCatalog */

$this->title = Module::t('blog', 'Create ') . Module::t('blog', 'Blog Catalog');
$this->params['breadcrumbs'][] = ['label' => Module::t('blog', 'Blog Catalogs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-catalog-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
