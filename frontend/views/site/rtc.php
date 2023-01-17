<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
$this->registerMetaTag(['name' => 'keywords', 'content' => 'студия, веб-разработка, сайты, веб-сервисы']);
$this->registerMetaTag(['name' => 'description', 'content' => 'Контакты ООО Инфомаркет']);

?>
<h1>Realtime communication with WebRTC</h1>



<video id="localVideo" autoplay></video>








<script type="application/javascript">
    'use strict';

    navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia;

    var constraints = {
        audio: false,
        video: true
    };
    var video = document.querySelector('video');

    function successCallback(stream) {
        window.stream = stream; // stream available to console
        if (window.URL) {
            video.src = window.URL.createObjectURL(stream);
        } else {
            video.src = stream;
        }
    }

    function errorCallback(error) {
        console.log('navigator.getUserMedia error: ', error);
    }

    navigator.getUserMedia(constraints, successCallback, errorCallback);
</script>


