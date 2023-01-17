<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \frontend\models\ContactForm */


$this->title = 'Получите индивидуальное   коммерческое предложение ';
$this -> params['breadcrumbs'][] = $this -> title; ?>

<style>
    .registration-form {
        background: #fff;

        border-radius: 6px;
        max-width: 400px;
        margin: 0 auto;
    }
    .telegram {
        width: 42%;
        height: 54px;
        font-size: 14px;
        border:0px;
        background-color:#2ca5e0;
    }
    .vkontakte {
        width: 42%;
        height: 54px;
        border:0px;
        font-size: 14px;
        background-color:#5181b8;
    }

    .iti-flag {background-image: url("/frontend/web/tonnel/flags.png");}

    @media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
        .iti-flag {background-image: url("/frontend/web/tonnel/flags@2x.png");}
    }

</style>




    <?php $form = \kartik\form\ActiveForm::begin([

        'options' => [
            'class' => 'registration-form text-center',
        ]
    ]); ?>
<img src="/frontend/web/images/1080_607.jpg">


<div class="row">
    <div class="container-fluid">
        <div class="col-md-12">
            <h3> Получите индивидуальное <br> коммерческое предложение  </h3>
            <p style="font-size:16px;" class="hero-tagline top-15">
                Узнайте какие инструменты необходимо <br> использовать для Вашего бизнеса для того, чтобы увеличить продажи
                вдвое!
            </p>
                <input id="phone" type="tel" style="padding-left: 100px; width: 300px; height:50px;border:0px">
        </div>
    </div>
</div>

    <div class="separator" style="margin: 5px auto 15px;"></div>
<div class="row">
    <p class="reg-term" style="margin-bottom: 0px !important;font-size:14px;">Выберите удобный мессенджер</p>

    <button type="button" id="vk_button" class="vkontakte btn btn-info btn-xl">  <i class="fa fa-vk"></i> &nbsp;&nbsp;Vkontakte </button>
    <button type="button" id="tlg_button" class="telegram btn btn-default btn-xl"><i class="glyphicon glyphicon-send   text-white"></i>&nbsp;&nbsp; Telegram </button>


<!-- href="https://vk.com/im?sel=-144890336"  href="https://tele.click/infomarketstudiobot?start=doc";?>


</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <p class="reg-term" style="font-size:16px;">Свяжемся в течение 15 мин</p>
        </div>
    </div>
    <div class="row">
        <p   style="font-size:12px; padding-right: 15px;text-align:right;color:black;">powered by <a href="https://infomarketstudio.ru">Infomarket</a></p>
    </div>
</div>
<?php \kartik\form\ActiveForm::end(); ?>

<!-- Load jQuery from CDN so can run demo immediately -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="/frontend/web/tonnel/intlTelInput.js"></script>
<script>
    $("#phone").intlTelInput({
        // allowDropdown: false,
        // autoHideDialCode: false,
        // autoPlaceholder: "off",
        // dropdownContainer: "body",
        // excludeCountries: ["us"],
         formatOnDisplay: false,
//         geoIpLookup: function(callback) {
//           $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
//             var countryCode = (resp && resp.country) ? resp.country : "";
//             callback(countryCode);
//           });
//         },
        // hiddenInput: "full_number",
//         initialCountry: "auto",
        // localizedCountries: { 'de': 'Deutschland' },
         //nationalMode: false,
         onlyCountries: ['ru','us', 'en','ch', 'de'],
          placeholderNumberType: "MOBILE",
         preferredCountries: ['ru','us'],
         separateDialCode: true,
        utilsScript: "/tonnel/utils.js"
    });
    $(document).ready(function () {


        $("#vk_button").click(function () {

            yaCounter43584959.reachGoal('VKONTAKTE');

            dial_code = $('.selected-dial-code').text()
            phone = $('#phone').val();

            $.ajax({
                type: "get",
                url: "/frontend/web/messenger",
                data: {
                    "phone": dial_code + phone,
                    "button": "vk"
                },
                beforeSend: function () {
                   // $content.append('<div class="ajax-loading-wrapper"><div class="ajax-loading-inner"><div class="ajax-loading-item">?<img src="/img/ajax-loading.gif" alt="Загрузка ..."></div></div></div>');
                },
                success: function (data) {

                }
            });

        });

        $("#tlg_button").click(function () {

            yaCounter43584959.reachGoal('TELEGRAM');

            dial_code = $('.selected-dial-code').text()
            phone = $('#phone').val();

            $.ajax({
                type: "get",
                url: "/frontend/web/messenger",
                data: {
                    "phone": dial_code + phone,
                    "button": "tlg"
                },
                beforeSend: function () {
                    // $content.append('<div class="ajax-loading-wrapper"><div class="ajax-loading-inner"><div class="ajax-loading-item">?<img src="/img/ajax-loading.gif" alt="Загрузка ..."></div></div></div>');
                },
                success: function (data) {

                }
            });

        });
    });
</script>
