<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \frontend\modules\user\models\LoginForm */

$this->title = Yii::t('backend', 'Login');
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
    <div class="site-login">
    <h1><?php echo Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <?php echo $form->field($model, 'identity') ?>
                <?php echo $form->field($model, 'password')->passwordInput() ?>
                <?php echo $form->field($model, 'rememberMe')->checkbox() ?>
            <?= $form->field($model, 'reCaptcha')->widget(\himiklab\yii2\recaptcha\ReCaptcha::className()) ?>
                <div style="color:#999;margin:1em 0">
                    <?php echo Yii::t('frontend', 'If you forgot your password you can reset it <a href="{link}">here</a>', [
                        'link'=>yii\helpers\Url::to(['sign-in/request-password-reset'])
                    ]) ?>
                </div>
                <div class="form-group">
                    <?php echo Html::submitButton(Yii::t('frontend', 'Login'), ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
                <div class="form-group">
                    <?php echo Html::a(Yii::t('frontend', 'Need an account? Sign up.'), ['signup']) ?>
                </div>
                <h2><?php echo Yii::t('frontend', 'Log in with')  ?>:</h2>
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