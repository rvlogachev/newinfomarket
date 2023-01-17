<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \frontend\modules\user\models\SignupForm */

$this->title = Yii::t('backend', 'Signup');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="breadcrumb-container mybreadcrumbs">
    <div class="container mybreadcrumbs_container">
        <?php echo \yii\widgets\Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            'activeItemTemplate' => '<!--noindex--><li class="active">{link}</li><!--/noindex-->',
        ]) ?>

        <?php if (Yii::$app->session->hasFlash('alert')): ?>
            <?php echo \yii\bootstrap\Alert::widget([
                'body' => \yii\helpers\ArrayHelper::getValue(Yii::$app->session->getFlash('alert'), 'body'),
                'options' => \yii\helpers\ArrayHelper::getValue(Yii::$app->session->getFlash('alert'), 'options'),
            ]) ?>
        <?php endif; ?>
    </div>
</div>
<br>
<div class="container">
    <div class="site-signup">
        <h1><?php echo Html::encode($this->title) ?></h1>

        <div class="row">
            <div class="col-lg-5">
                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                    <?php echo $form->field($model, 'username') ?>
                    <?php echo $form->field($model, 'email') ?>
                    <?php echo $form->field($model, 'password')->passwordInput() ?>
                    <div class="form-group">
                        <?php echo Html::submitButton(Yii::t('backend', 'Signup'), ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                    </div>
                    <h2><?php echo Yii::t('frontend', 'Sign up with')  ?>:</h2>
                    <div class="form-group">
                        <?php echo yii\authclient\widgets\AuthChoice::widget([
                            'baseAuthUrl' => ['/user/sign-in/oauth']
                        ]) ?>
                    </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>