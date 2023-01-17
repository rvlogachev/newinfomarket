<?php
use yii\bootstrap\NavBar;
/* @var $this \yii\web\View */
/* @var $content string */
$this->beginContent('@frontend/views/layouts/base.php') ?>

<div class="breadcrumb-container " >
    <div class="container">
        <?php echo \yii\widgets\Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            'activeItemTemplate'=>'<!--noindex--><li class="active">{link}</li><!--/noindex-->',
        ]) ?>

    </div>
</div>

<?php echo $content ?>


<?php $this->endContent() ?>


