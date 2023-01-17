<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = 'Успешно';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="light-gray-bg clearfix">
    <div class="container" style="min-height: 400px;">
        <div class="row">
            <div class="col-md-12">
                <h3>ПОЛУЧИТЕ БОЛЬШЕ ИНФОРМАЦИИ</h3>

                <p>
                    Данные по заявке отправлены, в ближайшее время с Вами свяжется наш специалист.
                </p>

                <p>
                    <?=$name?>
                    <?=$phone?>
                    <?=$email?>

                </p>
            </div>

        </div>
    </div>
</section>