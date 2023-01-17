<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

 \frontend\assets\FrontendAsset::register($this);
 \common\modules\chat\assets\DefaultAsset::register($this);
 $bundlePath = Yii::$app->getAssetManager()->getBundle('\frontend\assets\FrontendAsset')->baseUrl;
 $bundlePathChat = Yii::$app->getAssetManager()->getBundle('\common\modules\chat\assets\DefaultAsset')->baseUrl;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if gt IE 9]>
<html lang="en" class="ie"> <![endif]-->
<!--[if !IE]><!-->

<html dir="ltr" lang="<?php echo Yii::$app->language ?>">
<!--<![endif]-->
<!--<link rel="manifest" href="/frontend/web/manifest.json">-->


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta charset="<?php echo Yii::$app->charset ?>"/>
    <meta name="author" content="Студия Инфомаркет - info@infomarketstudio.ru">
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="iwHJQZ60qwjJBwpdlKFiUtmNVQpCMUyivE9qI2xD4UQ"/>
    <!-- 06.02.2018 добавление https -->
    <meta name="google-site-verification" content="iwHJQZ60qwjJBwpdlKFiUtmNVQpCMUyivE9qI2xD4UQ"/>
    <meta name="yandex-verification" content="8b9020997f5ecb10"/>
    <meta name="telegram:channel" content="@chatbotbusiness">
    <!-- Favicon -->
    <link rel="canonical"
          href="<?php echo Yii::$app->request->getHostInfo() . '/' . Yii::$app->request->getPathInfo(); ?>"/>
    <link rel="shortcut icon" href="/favicon.ico">

    <title><?php echo Html::encode($this->title); ?> | <?php echo Yii::$app->name; ?> </title>
    <?php $this->head() ?>
    <?php echo Html::csrfMetaTags(); ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <?php if (!YII_DEBUG) { ?>
        <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async></script>
        <script type="application/javascript">
          var FRONTEND_DOMAIN = '<?= env("FRONTEND_DOMAIN")?>';
        </script>
        <script type="application/javascript">
            var OneSignal = window.OneSignal || [];
            OneSignal.push(["init", {
                appId: "e9684fa3-1578-4703-a186-726136f152d0",
                safari_web_id: 'web.onesignal.auto.220e9b0b-02d4-465b-a5d3-49d3d287ceee',


                notifyButton: {
                    enable: true, /* Set to false to hide */
                    size: 'small',
                    position: 'bottom-left',
                    text: {
                        'tip.state.unsubscribed': 'Подписка на новости',
                        'tip.state.subscribed': "Вы подписались на новости",
                        'tip.state.blocked': "Вы заблокировали подписку",
                        'message.prenotify': 'Нажмите чтобы подписаться на новости',
                        'message.action.subscribed': "Спасибо за подписку!",
                        'message.action.resubscribed': "Вы подписались на новости",
                        'message.action.unsubscribed': "Вы отписались",
                        'dialog.main.title': 'Управление подпиской',
                        'dialog.main.button.subscribe': 'Подписаться',
                        'dialog.main.button.unsubscribe': 'Отписаться',
                        'dialog.blocked.title': 'Разблокировать уведомления',
                        'dialog.blocked.message': "Следуйте инструкции чтобы подписаться на новости:"
                    }
                },
            }]);
            OneSignal.push(function () {

                OneSignal.setDefaultNotificationUrl("https://infomarketstudio.ru");
                OneSignal.registerForPushNotifications({});
                OneSignal.getUserId(function (userId) {
                    console.log("OneSignal User ID:", userId);

                });
            });


        </script>

        <?php //echo \common\widgets\Counter::widget(['type' => 'infomarket_metrika', 'alias' => 'infomarketstudio']); ?>
        <?php //echo \common\widgets\Counter::widget(['type' => 'infomarket_google_tagmanager', 'alias' => 'infomarketstudio']); ?>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-63060558-13"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-63060558-13');
        </script>

        <!-- Yandex.Metrika counter -->
        <script type="text/javascript"> (function (m, e, t, r, i, k, a) {
                m[i] = m[i] || function () {
                        (m[i].a = m[i].a || []).push(arguments)
                    };
                m[i].l = 1 * new Date();
                k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
            })(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
            ym(43584959, "init", {
                clickmap: true,
                trackLinks: true,
                accurateTrackBounce: true,
                webvisor: true,
                ecommerce: "dataLayer"
            }); </script>
         <!-- /Yandex.Metrika counter -->
         <!-- Marquiz script start -->
        <script src="//script.marquiz.ru/v1.js" type="application/javascript"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                Marquiz.init({
                    id: '5ab545386aecfb001872bcd3',
                    autoOpen: false,
                    autoOpenFreq: 'once',
                    openOnExit: false
                });
            });
        </script>
        <!-- Marquiz script end -->
        <!-- Rating@Mail.ru counter -->
        <script type="text/javascript">
            var _tmr = window._tmr || (window._tmr = []);
            _tmr.push({id: "3103509", type: "pageView", start: (new Date()).getTime(), pid: "USER_ID"});
            (function (d, w, id) {
                if (d.getElementById(id)) return;
                var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
                ts.src = "https://top-fwz1.mail.ru/js/code.js";
                var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
                if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
            })(document, window, "topmailru-code");
        </script><noscript><div>
                <img src="https://top-fwz1.mail.ru/counter?id=3103509;js=na" style="border:0;position:absolute;left:-9999px;" alt="Top.Mail.Ru" />
            </div></noscript>
        <!-- //Rating@Mail.ru counter -->
        <!-- Facebook Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window, document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '987749404624266');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id=987749404624266&ev=PageView&noscript=1"
            /></noscript>
        <!-- End Facebook Pixel Code -->

    <?php } ?>


</head>
<body class="<?= (strstr($this->title, '///')) ? 'no-trans front-page transparent-header boxed pattern-3' : 'no-trans front-page transparent-header wide'; ?>">
<!-- Google Tag Manager (noscript) -->
<?php if (!YII_DEBUG) { ?>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/43584959" style="position:absolute; left:-9999px;" alt=""/></div>
    </noscript>

<?php } ?>
<!-- End Google Tag Manager (noscript) -->
<?php $this->beginBody() ?>

<!-- /////////////////////////////////////////////////////////////////Форма заказа сайта///////////////////// -->

<?php \yii\bootstrap\Modal::begin([
    'id' => 'zakazSiteModal',

    'header' => '<h2>Заказать сайт</h2>',
    'footer' => ' <p class="" style="font-size:16px;" >Свяжемся в течение 15 мин</p>',
]);
$contactForm = new \frontend\models\ContactForm() ?>
<?php $form = \kartik\form\ActiveForm::begin([
    'id' => 'zakazSiteForm',
    'action' => 'orderbot',
    'method' => 'post',
    'options' => [
        'class' => ' text-center',
    ]
]); ?>
<?= $form->field($contactForm, 'source_form')->hiddenInput(['value' => 'zakazSite'])->label(false); ?>
<div style="    margin: 0 auto; padding: 0px  30px  0px  30px;">
    <p style="font-size:16px;" class="hero-tagline top-15">
        Закажите веб разработку и получите результат в цифрах.
    </p>
    <div class="form-group ">
        <?= $form->field($contactForm, 'name')->textInput(['class' => 'form-control', 'placeholder' => 'Введите имя'])->label(false); ?>
    </div>
    <div class="form-group">
        <?= $form->field($contactForm, 'tel')->textInput(['class' => 'form-control', 'placeholder' => 'Введите телефон'])->label(false); ?>
    </div>
    <div class="form-group">
        <button type="button" class="btn   btn-dark" data-dismiss="modal">Закрыть</button>
        <button type="submit" href="/" class="btn btn-default btn-animated  ">
            <i class="fa fa-shopping-basket"></i>Заказать
        </button>
    </div>
</div>
<?php \kartik\form\ActiveForm::end(); ?>
<?php \yii\bootstrap\Modal::end(); ?>

<!-- /////////////////////////////////////////////////////////////////Форма заказа бота///////////////////// -->
<?php \yii\bootstrap\Modal::begin([
    'id' => 'zakazBotModal',

    'header' => '<h2>Заказать бота для бизнеса</h2>',
    'footer' => ' <p class="" style="font-size:16px;" >Свяжемся в течение 15 мин</p>',
]);
$contactForm = new \frontend\models\ContactForm() ?>
<?php $form = \kartik\form\ActiveForm::begin([
    'id' => 'zakazBotForm',
    'method' => 'post',
    'action' => 'orderbot',
    'options' => [
        'class' => ' text-center',
    ]
]); ?>
<?= $form->field($contactForm, 'source_form')->hiddenInput(['value' => 'zakazBot'])->label(false); ?>
<div style="    margin: 0 auto; padding: 0px  30px  0px  30px;">
    <p style="font-size:16px;" class="hero-tagline top-15">
        Оставьте номер телефона и мы сможем более подробно <br>рассказать о применении чат ботов в вашем бизнесе.
    </p>
    <div class="form-group ">
        <?= $form->field($contactForm, 'name')->textInput(['class' => 'form-control', 'placeholder' => 'Введите имя'])->label(false); ?>
    </div>
    <div class="form-group">
        <?php echo  $form->field($contactForm, 'phone')->widget(borales\extensions\phoneInput\PhoneInput::className(), [
            'jsOptions' => [
                'allowExtensions' => true,
                'onlyCountries' => ['ru'],
                // 'nationalMode' => true
            ]
        ])->label(false);?>
    </div>
    <div class="form-group">
        <button type="button" class="btn   btn-dark" data-dismiss="modal">Закрыть</button>
        <button type="submit" href="/" class="btn btn-default btn-animated  ">
            <i class="fa fa-shopping-basket"></i>Заказать
        </button>
    </div>
</div>
<?php \kartik\form\ActiveForm::end(); ?>
<?php \yii\bootstrap\Modal::end(); ?>


<!-- /////////////////////////////////////////////////////////////////Форма заказа КП///////////////////// -->
<?php \yii\bootstrap\Modal::begin([
    'id' => 'zakazKpModal',

    'header' => '<h2>Получить коммерческое предложение</h2>',
    'footer' => ' <p class="" style="font-size:16px;" >Свяжемся в течение 15 мин</p>',
]);
$contactForm = new \frontend\models\ContactForm() ?>
<?php $form = \kartik\form\ActiveForm::begin([
    'id' => 'zakazKpForm',
    'action' => 'orderbot',
    'method' => 'post',
    'options' => [
        'class' => ' text-center',
    ]
]); ?>
<?= $form->field($contactForm, 'source_form')->hiddenInput(['value' => 'zakazKp'])->label(false); ?>
<div style="    margin: 0 auto; padding: 0px  30px  0px  30px;">
    <p style="font-size:16px;" class="hero-tagline top-15">
        Узнайте какие инструменты необходимо <br> использовать для Вашего бизнеса чтоб увеличить продажи
        вдвое!
    </p>
    <div class="form-group ">
         <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <?= $form->field($contactForm, 'name')->textInput(['class' => 'form-control', 'placeholder' => 'Введите имя'])->label(false); ?>

            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <?php echo \borales\extensions\phoneInput\PhoneInput::widget([
                    'name' => 'phone',
//                        'model'=>$contactForm,
//                        'attribute'=>'phone',
                    'jsOptions' => [
                        'allowExtensions' => true,
                        'onlyCountries' => ['ru'],
                    ]
                ]); ?>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <div class="form-group">
        <button type="button" class="btn   btn-dark" data-dismiss="modal">Закрыть</button>
        <button type="submit" href="/" class="btn btn-default btn-animated  ">
            <i class="fa fa-shopping-basket"></i>Заказать
        </button>
    </div>
</div>
<?php \kartik\form\ActiveForm::end(); ?>
<?php \yii\bootstrap\Modal::end(); ?>

<!-- /////////////////////////////////////////////////////////////////Форма заказа на Аналитику///////////////////// -->
<?php \yii\bootstrap\Modal::begin([
    'id' => 'zakazAnalyticsModal',

    'header' => '<h2>Получить предложение</h2>',
    'footer' => ' <p class="" style="font-size:16px;" >Свяжемся в течение 15 мин</p>',
]);
$contactForm = new \frontend\models\ContactForm() ?>
<?php $form = \kartik\form\ActiveForm::begin([
    'id' => 'zakazAnalyticsForm',
    'action' => 'orderbot',
    'method' => 'post',
    'options' => [
        'class' => ' text-center',
    ]
]); ?>
<?= $form->field($contactForm, 'source_form')->hiddenInput(['value' => 'zakazAnalytics'])->label(false); ?>
<div style="    margin: 0 auto; padding: 0px  30px  0px  30px;">
    <p style="font-size:16px;" class="hero-tagline top-15">
        Узнайте как можно управлять данными предприятия используя системы глубокой аналитики.
    </p>
    <div class="form-group ">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <?= $form->field($contactForm, 'name')->textInput(['class' => 'form-control', 'placeholder' => 'Введите имя'])->label(false); ?>

            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <?php echo \borales\extensions\phoneInput\PhoneInput::widget([
                    'name' => 'phone',
//                        'model'=>$contactForm,
//                        'attribute'=>'phone',
                    'jsOptions' => [
                        'allowExtensions' => true,
                        'onlyCountries' => ['ru'],
                    ]
                ]); ?>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <div class="form-group">
        <button type="button" class="btn   btn-dark" data-dismiss="modal">Закрыть</button>
        <button type="submit" href="/" class="btn btn-default btn-animated  ">
            <i class="fa fa-shopping-basket"></i>Заказать
        </button>
    </div>
</div>
<?php \kartik\form\ActiveForm::end(); ?>
<?php \yii\bootstrap\Modal::end(); ?>


<!-- /////////////////////////////////////////////////////////////////Форма заказа тарифа///////////////////// -->
<?php \yii\bootstrap\Modal::begin([
    'id' => 'zakazTarifModal',

    'header' => '<h2>Выбор тарифа</h2>',
    'footer' => ' <p class="" style="font-size:16px;" >Свяжемся в течение 15 мин</p>',
]);
$contactForm = new \frontend\models\ContactForm() ?>
<?php $form = \kartik\form\ActiveForm::begin([
    'id' => 'zakazTarifForm',
    'action' => 'orderbot',
    'method' => 'post',
    'options' => [
        'class' => ' text-center',
    ]
]); ?>
<?= $form->field($contactForm, 'source_form')->hiddenInput(['value' => 'zakazTarif'])->label(false); ?>
<div style="    margin: 0 auto; padding: 0px  30px  0px  30px;">
    <p style="font-size:16px;" class="hero-tagline top-15">
        Оставьте номер телефона и наш менеджер свяжется с Вами в ближайшее время для уточнения параметров тарифа.
    </p>
    <div class="form-group ">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <?= $form->field($contactForm, 'name')->textInput(['class' => 'form-control', 'placeholder' => 'Введите имя'])->label(false); ?>

            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <?php echo \borales\extensions\phoneInput\PhoneInput::widget([
                    'name' => 'phone',
//                        'model'=>$contactForm,
//                        'attribute'=>'phone',
                    'jsOptions' => [
                        'allowExtensions' => true,
                        'onlyCountries' => ['ru'],
                    ]
                ]); ?>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <div class="form-group">
        <button type="button" class="btn   btn-dark" data-dismiss="modal">Закрыть</button>
        <button type="submit" href="/" class="btn btn-default btn-animated  ">
            <i class="fa fa-shopping-basket"></i>Заказать
        </button>
    </div>
</div>
<?php \kartik\form\ActiveForm::end(); ?>
<?php \yii\bootstrap\Modal::end(); ?>


<?php echo $content ?>
<!-- <script src='https://free.lead-academy.ru/cc/code/?cc=eyJjYyI6W3sidXRtIjoidXRtX3NvdXJjZSIsInV0bV92YWx1ZSI6InlhZGlyZWN0IiwiY29kZSI6Ilx1MDQxMlx1MDQzMFx1MDQ0OCBcdTA0M2RcdTA0M2VcdTA0M2NcdTA0MzVcdTA0NDAgXHUwNDNhXHUwNDNiXHUwNDM4XHUwNDM1XHUwNDNkXHUwNDQyXHUwNDMwIDEwODUifSx7InV0bSI6InV0bV9zb3VyY2UiLCJ1dG1fdmFsdWUiOiJnb29nbGUiLCJjb2RlIjoiXHUwNDEyXHUwNDMwXHUwNDQ4IFx1MDQzZFx1MDQzZVx1MDQzY1x1MDQzNVx1MDQ0MCBcdTA0M2FcdTA0M2JcdTA0MzhcdTA0MzVcdTA0M2RcdTA0NDJcdTA0MzAgMTA4NiJ9XSwiY2NfYWx0ZXIiOiJcdTA0MTJcdTA0MzBcdTA0NDggXHUwNDNkXHUwNDNlXHUwNDNjXHUwNDM1XHUwNDQwIFx1MDQzYVx1MDQzYlx1MDQzOFx1MDQzNVx1MDQzZFx1MDQ0Mlx1MDQzMCAxMDg3In0='></script>-->
<!--  Infomarket Widget Chat -->
<script type="text/javascript">
//  var widgetOptions = {
//    domain: 'infomarketstudio.loc',
//    url: window.location.href,
//    bot_image: 'http://infomarketstudio.loc<?//= $bundlePathChat;?>///img/widget/anim_close2.png',
//    bot_close: 'http://infomarketstudio.loc<?//= $bundlePathChat;?>///img/widget/anim_open2.png',
//    text_small: 'Хочешь узнать подробнее?'
//
//  };
//  (function () {
//    var script = document.createElement('script');
//    script.type = 'text/javascript';
//    script.async = true;
//    script.src =  'http://infomarketstudio.loc<?//= $bundlePathChat;?>///js/widget.js';
//    document.getElementsByTagName('head')[0].appendChild(script);
//
//    var scriptTooltip = document.createElement('script');
//    scriptTooltip.type = 'text/javascript';
//    scriptTooltip.async = true;
//    scriptTooltip.src =  'http://infomarketstudio.loc<?//= $bundlePathChat;?>///js/main.js';
//    document.getElementsByTagName('head')[0].appendChild(scriptTooltip);
//  })();

</script>
<!--  End Infomarket Widget Chat -->
<?php if (!YII_DEBUG) { ?>
    <link rel="stylesheet" href="https://cdn.envybox.io/widget/cbk.css">
    <script type="text/javascript" src="https://cdn.envybox.io/widget/cbk.js?wcb_code=09eeabb7b6bd7978cdacba795385332d"
            charset="UTF-8" async></script>


    <!--Start of UniSender PopUp Form script-->
    <script type="text/javascript" src="//popup-static.unisender.com/service/loader.js?c=6627"
            id="unisender-popup-forms"></script>
    <!--End of UniSender PopUp Form script-->




<?php } ?>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
