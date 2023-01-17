<?php
/* @var $this yii\web\View */
$this->title = \common\modules\widget\widgets\DbText::widget(['key' => 'seo.title.site.webdev']);
$this->registerMetaTag(['name' => 'keywords', 'content' => \common\modules\widget\widgets\DbText::widget(['key' => 'seo.keywords.site.webdev'])]);
$this->registerMetaTag(['name' => 'description', 'content' => \common\modules\widget\widgets\DbText::widget(['key' => 'seo.description.site.webdev'])]);

$bundlePath = Yii::$app->getAssetManager()->getBundle('\frontend\assets\FrontendAsset')->baseUrl;

?>
<div id="page-start"></div>
<style type="text/css">


    .registration-form {
        background: #fff;
        padding: 30px;
        border-radius: 4px;
        max-width: 400px;
        margin: 0 auto;
    }

    [class^="icon-"], [class*=" icon-"] {
        /* use !important to prevent issues with browser extensions that change fonts */
        font-family: 'icomoon' !important;
        speak: none;
        font-style: normal;
        font-weight: normal;
        font-variant: normal;
        text-transform: none;
        line-height: 1;

        /* Better Font Rendering =========== */
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .top-15 {
        padding-top: 15px;
    }

    .top-12 {
        padding-top: 12px;
    }
</style>

<section id="intro-hero hero-content"
         style="   height: 650px; background: url(<?= $bundlePath;?>/images/slider-fullscreen-slide-2.jpg) no-repeat scroll 0 0; background-position: 0px;  background-size: cover; padding-top: -100px;display: block; box-shadow: 0 0 0 330px rgba(0, 0, 0, 0.6) inset; ">
    <div class="container-fluid">
        <div class="row" style="padding-top: 80px;">
            <div class="col-md-2 col-sm-2">

            </div> <!-- END col-md-7 col-sm-6-->
            <div class="col-md-5 col-sm-5">
                <h1 class="hero-title">
                    Разработка веб-сайтов и сервисов
                </h1>
                <p class="hero-tagline fact top-15">
                    <span class="topfact">красивый адаптивный дизайн</span><br>
                    <span class="topfact">прототипирование и разработка подробного технического задания</span><br>
                    <span class="topfact">удобная система управления сайтом</span><br>
                    <span class="topfact">широкие возможности по интеграции с сторонними системами (1С, SAP ...)</span><br>
                    <span class="topfact">круглосуточный мониторинг и поддержка проекта</span>
                </p>
                <div class="btnclass">
                    <a href="/tunel" class="btn btn-danger   btn-lg" style="">
                        Услуги <span class="icon_t icon-play-button2"></span>
                    </a>
                    <!--                    <a href="#zakazBotModal" data-toggle="modal" data-target="#zakazBotModal" class="btn btn-gray btn-animated btn-lg">-->
                    <!--                        Заказать  <i class="fa fa-cart-arrow-down pl-20"></i>-->
                    <!--                    </a>-->
                </div>
            </div> <!-- END col-md-7 col-sm-6-->
            <div class="col-md-5 col-sm-5 hidden-xs">
                <?php $form = \kartik\form\ActiveForm::begin([
                    'id' => 'login-form',
                    'action' => 'orderbot',
                    'enableAjaxValidation' => true,
                    'enableClientValidation' => true,
                    'method' => 'post',
                    'options' => [
                        'class' => 'registration-form text-center',
                    ]
                ]); ?>
                <?= $form->field($contactForm, 'source_form')->hiddenInput(['value' => 'orderbot1'])->label(false); ?>
                <h3>Закажите разработку сайта</h3>
                <p class="large hero-tagline top-15">
                    Узнайте какие инструменты необходимо <br> использовать для Вашего бизнеса чтобы увеличить продажи
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


                    <?php //  $form->field($contactForm, 'phone')->widget(borales\extensions\phoneInput\PhoneInput::class, [
                    //
                    //
                    //                        'jsOptions' => [
                    //                            'allowExtensions' => true,
                    //                            'onlyCountries' => ['ru'],
                    //                            // 'nationalMode' => true
                    //                        ]
                    //                    ])->label(false);
                    //                    ?>
                </div>

                <div class="form-group text-center">
                    <button type="submit" href="/" style="    color: #fff !important;
    background-color: #007bff !important;
    border-color: #007bff !important;" class="btn btn-default btn-animated btn-lg"><i
                                class="fa fa-shopping-basket"></i>Заказать
                    </button>
                </div>
                <p class="reg-term">Свяжемся в течение 15 мин</p>
                <?php \kartik\form\ActiveForm::end(); ?>
            </div> <!-- END col-md-5 col-sm-6-->
        </div> <!-- END row-->
    </div> <!-- END container-->
</section>


<!-- section start представляемся -->
<section class="pv-30">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="text-center"><strong>Развивайте бизнес </strong> <br>внедряйте новейшие технологии в своей
                    отрасли</h2>
                <div class="separator"></div>
                <p class="large text-center">
                    Узнай подробней из кейсов, скачай дополнительную информацию или задай вопрос нашему боту <a
                            href="http://t.me/infomarketstudiobot">@infomarketstudiobot</a>
                </p>
                <div class="text-center">


                    <a href="#zakazAnalyticsModal" data-toggle="modal" data-target="#zakazAnalyticsModal"
                       class="btn btn-default btn-hvr hvr-shutter-out-horizontal btn-lg" id="formsend"><i
                                class="fa fa-phone-arrow-down pr-10"></i>Узнать подробней</a>
                </div>
            </div>
        </div>
    </div>
    <div class="pv-30 owl-carousel content-slider-with-large-controls">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="" src="<?= $bundlePath;?>/images/info_main_1.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <!-- <p class="space-top">Здесь хочу привести самые сильные стороны отличающие нас от конкурентов</p> -->
                    <div class="media">
                        <div class="media-left pr-20">
                            <!-- <a href="#">
                                <span class="icon circle small default-bg"><i class="icon-eye"></i> </span>
                            </a> -->
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading mob-pad-30"><strong>Разработка интернет магазинов</strong></h3>
                            <div style="margin-top:20px; font-size:16px;">
                                Современные  интернет магазины с адаптивным дизайном. Разработка интернет магазинов для разных сфер бизнеса.
                                Недвижимость, медицина, юридические услуги, торговля, производство
                            </div>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left pr-20">
                            <!-- <a href="#">
                                <span class="icon circle small default-bg"><i class="icon-trophy"></i> </span>
                            </a> -->
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading"><strong>Проекты по интеграции отраслевых систем</strong></h3>
                            <div style="font-size:16px;margin-top:20px">
                                Проекты по интеграции различных систем CRM, ERP, CMS. Реализация интерфейсов ввода
                                данных и интеграция с основной системой учета по Rest API, XML, SOAP
                            </div>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left pr-20">
                            <!-- <a href="#">
                                <span class="icon circle small default-bg"><i class="icon-lifebuoy"></i> </span>
                            </a> -->
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading"><strong>Комплекскная разработка IT систем </strong></h3>
                            <div style="font-size:16px;margin-top:20px">
                                Многопользовательские системы различной функциональности интегрированные как в
                                IT инфраструктуру предприятия, так и с внешними источниками: социальные сети, месенджеры, общедоступные информационыыей ресурсы
                            </div>
                            <!--                            -->
                            <!--                            Мы используем технологии машинного обучения построенные на базе нейронных сетей, позволяющие-->
                            <!--                            упростить взаимодействие с клиентами, повысить уровень сервиса. <br>Внедряя чат-ботов в своем бизнесе а так же механизмы автоворонок-->
                            <!--                            реально увеличить продажи на более 30%, при том сокращая издержек вдвое.-->
                            <!---->
                            <!---->
                            <!--                            гарантию, для того чтоб в процессе запуска проекта у заказчика была возможность что то-->
                            <!--                            доработать в рамках одного бюджета.-->
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-right">
                    <!-- <p class="space-top">Мы можем предложить Вам разработку для мобильных устройств</p> -->

                    <div class="media">
                        <div class="media-body">
                            <h3 class="media-heading"><strong>Безопасность </strong></h3>
                            <div style="margin-top:20px; font-size:16px;">
                                Все больше и больше клиентов устанавливают сертификаты https для своих проектов, тем самым защищая
                                передаваемые данные
                            </div>
                        </div>
                        <div class="media-right pl-20">
                            <!-- <a href="#">
                                <span class="icon circle small default-bg"><i class="icon-eye"></i> </span>
                            </a> -->
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <h3 class="media-heading"><strong>Поэтапная разработка</strong></h3>
                            <div style="margin-top:20px; font-size:16px;">
                                Для каждого проекта формируется план и детальное техническое задание в виде интерактивного дашборда,
                                в котором отражены все тонкости и детали проекта
                            </div>
                        </div>
                        <div class="media-right pl-20">
                            <!-- <a href="#">
                                <span class="icon circle small default-bg"><i class="icon-trophy"></i> </span>
                            </a> -->
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <h3 class="media-heading"><strong>Тестирование </strong></h3>
                            <div style="margin-top:20px; font-size:16px;">
                                Каждый проект проходит несколько этапов тестирования  как на стороне исполнителя, так и на стороне заказчика,
                                тем самым  снижается вероятность появления ошибок в IT системах
                            </div>
                        </div>
                        <div class="media-right pl-20">
                            <!-- <a href="#">
                                <span class="icon circle small default-bg"><i class="icon-lifebuoy"></i> </span>
                            </a> -->
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <img src="<?= $bundlePath;?>/images/info_main_2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section end -->
<!-- section end акция-->
<section class="akcia section default-bg clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="call-to-action text-center">
                    <div class="row">
                        <div class="col-sm-8">
                            <h1 class="title" style="margin-top:15px;font-size: 24px">Хотите получить выгодное
                                предолжение?</h1>
                            <p style="margin-top:15px;font-size: 18px">Отправляйте заявку, наши менеджеры с Вами
                                свяжутся, уточнят у Вас все детали проеткта и
                                предоставят Вам  предложение</p>
                        </div>
                        <div class="col-sm-4">
                            <br>
                            <p>
                                <a href="#zakazKpModal" data-toggle="modal" data-target="#zakazKpModal"
                                   class="btn btn-lg btn-gray-transparent btn-animated">Стать клиентом<i
                                            class="fa fa-arrow-right pl-20"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section start -->



<!-- section start анализируем данные-->
<section class="pv-30 "  >
    <div class="container mob-pad-60">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="text-center"><strong>Автоматизация бизнес процессов</strong></h2>
                <div class="separator"></div>

            </div>


            <div class="col-md-6">
                <h2 style="font-size:22px; padding-top: 20px;"> Автоматизация бизнес процессов позволяет повысить результат </h2>
                <div class="separator-2"></div>
                <p style="font-size:16px; padding-top: 20px;text-indent: 25px;">
                    Автоматизируя различные бизнес процессы своих заказчиков команда студии web разработки "Инфомаркет" приобрела отличный опыт работы.
                    Тренд на мобильный трафик подтверждается числом растущих проектов по интеграции эквайринга различных банков, таких как Тиньков, Альфа банк, Сбербанк.
                </p>
                <p style="font-size:16px;">
                    Интеграция социальных сетей и месcенджеров  в IT инфраструктуру предприятия растет, наши заказчики автоматизируют некоторые из процессов взаимодействия
                    со своими клиентами, используя при этом бесплатный канал для доставки контента
                </p>
                <br>
                <ul class="list-icons">
                    <li style="font-size: 16px !important;" class="object-non-visible"
                        data-animation-effect="fadeInUpSmall" data-effect-delay="100"><i
                                class="icon-check-1"></i> Безопасность SSL
                    </li>
                    <li style="font-size: 16px !important;" class="object-non-visible"
                        data-animation-effect="fadeInUpSmall" data-effect-delay="150"><i
                                class="icon-check-1"></i> Надежность
                    </li>
                    <li style="font-size: 16px !important;" class="object-non-visible"
                        data-animation-effect="fadeInUpSmall" data-effect-delay="200"><i
                                class="icon-check-1"></i> Тестирование
                    </li>
                    <li style="font-size: 16px !important;" class="object-non-visible"
                        data-animation-effect="fadeInUpSmall" data-effect-delay="250"><i
                                class="icon-check-1"></i> Сопровождение
                    </li>

                </ul>
                <br>

                <a href="#zakazAnalyticsModal" data-toggle="modal" data-target="#zakazAnalyticsModal"
                   class="btn btn-default btn-hvr hvr-shutter-out-horizontal btn-lg" id="formsend"><i
                            class="fa fa-cart-arrow-down pr-10"></i>Оставить заявку</a>
            </div>
            <div class="col-md-6 hidden-xs">
                <br>
                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs style-1" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#marketing" style="font-size: 16px" aria-controls="home" role="tab"
                               data-toggle="tab"><i class="fa fa-bar-chart pr-10"></i>Визитка </a>
                        </li>
                        <li role="presentation">
                            <a href="#klienti" style="font-size: 16px" aria-controls="profile" role="tab"
                               data-toggle="tab"><i class="icon-users-1 pr-10"></i>Лендинг</a>
                        </li>
                        <li role="presentation">
                            <a href="#sale" style="font-size: 16px" aria-controls="messages" role="tab"
                               data-toggle="tab"><i class="fa fa-shopping-bag pr-10"></i>Магазин</a>
                        </li>
                        <li role="presentation">
                            <a href="#finance" style="font-size: 16px" aria-controls="messages" role="tab"
                               data-toggle="tab"><i class="fa fa-usd pr-10"></i>Промо</a>
                        </li>

                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="marketing">
                                <div class="row">
                                    <div class="col-md-4 ">
                                            <img class="pv-60"   style="vertical-align: middle;" src="<?= $bundlePath;?>/images/vizitka.jpg">
                                    </div>
                                    <div class="col-md-8 ">
                                        <ul class="list-icons">
                                            <li style="font-size: 16px !important;" class="object-non-visible"
                                                data-animation-effect="fadeInUpSmall" data-effect-delay="100"><i
                                                        class="icon-check-1"></i>  Срок создания сайта - 4 дня
                                            </li>
                                            <li style="font-size: 16px !important;" class="object-non-visible"
                                                data-animation-effect="fadeInUpSmall" data-effect-delay="150"><i
                                                        class="icon-check-1"></i> Домен и хостинг
                                            </li>
                                            <li style="font-size: 16px !important;" class="object-non-visible"
                                                data-animation-effect="fadeInUpSmall" data-effect-delay="200"><i
                                                        class="icon-check-1"></i>  Готовый дизайн
                                            </li>
                                            <li style="font-size: 16px !important;" class="object-non-visible"
                                                data-animation-effect="fadeInUpSmall" data-effect-delay="250"><i
                                                        class="icon-check-1"></i> CMS система управления сайтом
                                            </li>
                                            <li style="font-size: 16px !important;" class="object-non-visible"
                                                data-animation-effect="fadeInUpSmall" data-effect-delay="250"><i
                                                        class="icon-check-1"></i>  Семь блоков
                                            </li>
                                            <li style="font-size: 16px !important;" class="object-non-visible"
                                                data-animation-effect="fadeInUpSmall" data-effect-delay="250"><i
                                                        class="icon-check-1"></i>   Триггеры продаж
                                            </li>
                                            <li style="font-size: 16px !important;" class="object-non-visible"
                                                data-animation-effect="fadeInUpSmall" data-effect-delay="250"><i
                                                        class="icon-check-1"></i>   Продающие тексты
                                            </li>
                                            <li style="font-size: 16px !important;" class="object-non-visible"
                                                data-animation-effect="fadeInUpSmall" data-effect-delay="250"><i
                                                        class="icon-check-1"></i> Социальные кнопки
                                            </li>
                                            <li style="font-size: 16px !important;" class="object-non-visible"
                                                data-animation-effect="fadeInUpSmall" data-effect-delay="250"><i
                                                        class="icon-check-1"></i>  Подключение аналитики
                                            </li>
                                            <li style="font-size: 16px !important;" class="object-non-visible"
                                                data-animation-effect="fadeInUpSmall" data-effect-delay="250"><i
                                                        class="icon-check-1"></i>  Музыкальный/видео-плеер
                                            </li>


                                        </ul>
                                    </div>
                                </div>

                        </div>
                        <div role="tabpanel" class="tab-pane fade " id="klienti">

                            <div class="row">
                                <div class="col-md-4 ">
                                    <img class="pv-60"  style="vertical-align: middle;" src="<?= $bundlePath;?>/images/landing.jpg">
                                </div>
                                <div class="col-md-8 ">
                                    <ul class="list-icons">
                                        <li style="font-size: 16px !important;" class="object-non-visible"
                                            data-animation-effect="fadeInUpSmall" data-effect-delay="100"><i
                                                    class="icon-check-1"></i>  Срок создания сайта - 2 дня
                                        </li>
                                        <li style="font-size: 16px !important;" class="object-non-visible"
                                            data-animation-effect="fadeInUpSmall" data-effect-delay="150"><i
                                                    class="icon-check-1"></i> Домен и хостинг
                                        </li>
                                        <li style="font-size: 16px !important;" class="object-non-visible"
                                            data-animation-effect="fadeInUpSmall" data-effect-delay="200"><i
                                                    class="icon-check-1"></i>  Наполнение 5 страниц
                                        </li>
                                        <li style="font-size: 16px !important;" class="object-non-visible"
                                            data-animation-effect="fadeInUpSmall" data-effect-delay="250"><i
                                                    class="icon-check-1"></i> Новостная лента
                                        </li>
                                        <li style="font-size: 16px !important;" class="object-non-visible"
                                            data-animation-effect="fadeInUpSmall" data-effect-delay="250"><i
                                                    class="icon-check-1"></i>  Форма для связи или заказа
                                        </li>
                                        <li style="font-size: 16px !important;" class="object-non-visible"
                                            data-animation-effect="fadeInUpSmall" data-effect-delay="250"><i
                                                    class="icon-check-1"></i>  Готовый дизайн
                                        </li>
                                        <li style="font-size: 16px !important;" class="object-non-visible"
                                            data-animation-effect="fadeInUpSmall" data-effect-delay="250"><i
                                                    class="icon-check-1"></i>  CMS система управления сайтом
                                        </li>
                                        <li style="font-size: 16px !important;" class="object-non-visible"
                                            data-animation-effect="fadeInUpSmall" data-effect-delay="250"><i
                                                    class="icon-check-1"></i>  Социальные кнопки
                                        </li>
                                        <li style="font-size: 16px !important;" class="object-non-visible"
                                            data-animation-effect="fadeInUpSmall" data-effect-delay="250"><i
                                                    class="icon-check-1"></i>  Слайд-шоу
                                        </li>
                                        <li style="font-size: 16px !important;" class="object-non-visible"
                                            data-animation-effect="fadeInUpSmall" data-effect-delay="250"><i
                                                    class="icon-check-1"></i>  Лайтбокс
                                        </li>


                                    </ul>
                                </div>
                            </div>


                        </div>
                        <div role="tabpanel" class="tab-pane fade " id="sale">
                            <div class="row">
                                <div class="col-md-4 ">
                                    <img class="pv-60"  style="vertical-align: middle;" src="<?= $bundlePath;?>/images/magaz.gif">
                                </div>
                                <div class="col-md-8 ">
                                    <ul class="list-icons">
                                        <li style="font-size: 16px !important;" class="object-non-visible"
                                            data-animation-effect="fadeInUpSmall" data-effect-delay="100"><i
                                                    class="icon-check-1"></i>  Срок создания сайта - от 5 дней
                                        </li>
                                        <li style="font-size: 16px !important;" class="object-non-visible"
                                            data-animation-effect="fadeInUpSmall" data-effect-delay="150"><i
                                                    class="icon-check-1"></i> Домен и хостинг
                                        </li>
                                        <li style="font-size: 16px !important;" class="object-non-visible"
                                            data-animation-effect="fadeInUpSmall" data-effect-delay="200"><i
                                                    class="icon-check-1"></i>  Неограниченное количество страниц
                                        </li>

                                        <li style="font-size: 16px !important;" class="object-non-visible"
                                            data-animation-effect="fadeInUpSmall" data-effect-delay="250"><i
                                                    class="icon-check-1"></i>  Форма для связи или заказа
                                        </li>
                                        <li style="font-size: 16px !important;" class="object-non-visible"
                                            data-animation-effect="fadeInUpSmall" data-effect-delay="250"><i
                                                    class="icon-check-1"></i>  Готовый дизайн
                                        </li>
                                        <li style="font-size: 16px !important;" class="object-non-visible"
                                            data-animation-effect="fadeInUpSmall" data-effect-delay="250"><i
                                                    class="icon-check-1"></i>   Каталог товаров или услуг
                                        </li>
                                        <li style="font-size: 16px !important;" class="object-non-visible"
                                            data-animation-effect="fadeInUpSmall" data-effect-delay="250"><i
                                                    class="icon-check-1"></i>  Стандартная карточка товара
                                        </li>
                                        <li style="font-size: 16px !important;" class="object-non-visible"
                                            data-animation-effect="fadeInUpSmall" data-effect-delay="250"><i
                                                    class="icon-check-1"></i>  Регистрация и кабинет покупателя
                                        </li>
                                        <li style="font-size: 16px !important;" class="object-non-visible"
                                            data-animation-effect="fadeInUpSmall" data-effect-delay="250"><i
                                                    class="icon-check-1"></i>   Корзина товаров
                                        </li>
                                        <li style="font-size: 16px !important;" class="object-non-visible"
                                            data-animation-effect="fadeInUpSmall" data-effect-delay="250"><i
                                                    class="icon-check-1"></i>   Удобное перемещение товаров
                                        </li>
                                        <li style="font-size: 16px !important;" class="object-non-visible"
                                            data-animation-effect="fadeInUpSmall" data-effect-delay="250"><i
                                                    class="icon-check-1"></i>    Массовая загрузка товаров
                                        </li>

                                    </ul>
                                </div>
                            </div>


                        </div>
                        <div role="tabpanel" class="tab-pane fade " id="finance">


                            <div class="row">
                                <div class="col-md-4 ">
                                    <img class="pv-60"  style="vertical-align: middle;" src="<?= $bundlePath;?>/images/promo.jpg">
                                </div>
                                <div class="col-md-8 ">
                                    <ul class="list-icons">
                                        <li style="font-size: 16px !important;" class="object-non-visible"
                                            data-animation-effect="fadeInUpSmall" data-effect-delay="100"><i
                                                    class="icon-check-1"></i>  Срок создания сайта - 6 дней
                                        </li>
                                        <li style="font-size: 16px !important;" class="object-non-visible"
                                            data-animation-effect="fadeInUpSmall" data-effect-delay="150"><i
                                                    class="icon-check-1"></i> Доменное имя .RU / .РФ (1 год)
                                        </li>
                                        <li style="font-size: 16px !important;" class="object-non-visible"
                                            data-animation-effect="fadeInUpSmall" data-effect-delay="200"><i
                                                    class="icon-check-1"></i>  CMS система управления сайтом
                                        </li>
                                        <li style="font-size: 16px !important;" class="object-non-visible"
                                            data-animation-effect="fadeInUpSmall" data-effect-delay="250"><i
                                                    class="icon-check-1"></i> Готовый дизайн сайта
                                        </li>
                                        <li style="font-size: 16px !important;" class="object-non-visible"
                                            data-animation-effect="fadeInUpSmall" data-effect-delay="250"><i
                                                    class="icon-check-1"></i>  Форма для связи или заказа
                                        </li>

                                        <li style="font-size: 16px !important;" class="object-non-visible"
                                            data-animation-effect="fadeInUpSmall" data-effect-delay="250"><i
                                                    class="icon-check-1"></i>  Социальные кнопки
                                        </li>
                                        <li style="font-size: 16px !important;" class="object-non-visible"
                                            data-animation-effect="fadeInUpSmall" data-effect-delay="250"><i
                                                    class="icon-check-1"></i>   Модуль «Новости сайта»
                                        </li>
                                        <li style="font-size: 16px !important;" class="object-non-visible"
                                            data-animation-effect="fadeInUpSmall" data-effect-delay="250"><i
                                                    class="icon-check-1"></i>   Счетчик посещаемости сайта
                                        </li>

                                        <li style="font-size: 16px !important;" class="object-non-visible"
                                            data-animation-effect="fadeInUpSmall" data-effect-delay="250"><i
                                                    class="icon-check-1"></i>    Яндекс Метрика и Google Analytics
                                        </li>

                                    </ul>
                                </div>
                            </div>


                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
<!-- section end -->


<!-- section start показатели-->
<section class="pv-40 stats padding-bottom-clear dark-translucent-bg hovered background-img-8"
         style="background-position: 0% 100%;">
    <div class="container">
        <div class="row justify-content-lg-center">
            <div class="col-lg-12">
                <h1 class="text-center">Наши показатели</h1>
                <div class="separator with-icon"><i class="fa fa-thumbs-up bordered"></i></div>
                <p class="text-center">
                    Мы стараемся выполнять свою работу качественно и в срок
                </p>
            </div>
        </div>
    </div>
    <div class="clearfix">
        <div class="col-md-3 col-xs-6 text-center">
            <div class="feature-box object-non-visible" data-animation-effect="fadeIn" data-effect-delay="300">
                <span class="icon default-bg large circle"><i class="fa fa-diamond"></i></span>
                <h3><strong>Проектов</strong></h3>
                <span class="counter" data-to="109" data-speed="5000">0</span>
            </div>
        </div>
        <div class="col-md-3 col-xs-6 text-center">
            <div class="feature-box object-non-visible" data-animation-effect="fadeIn" data-effect-delay="300">
                <span class="icon default-bg large circle"><i class="fa fa-users"></i></span>
                <h3><strong>Партнеров</strong></h3>
                <span class="counter" data-to="56" data-speed="5000">0</span>
            </div>
        </div>
        <div class="col-md-3 col-xs-6 text-center">
            <div class="feature-box object-non-visible" data-animation-effect="fadeIn" data-effect-delay="300">
                <span class="icon default-bg large circle"><i class="fa fa-cloud-download"></i></span>
                <h3><strong>Рекламных компаний</strong></h3>
                <span class="counter" data-to="583" data-speed="5000">0</span>
            </div>
        </div>
        <div class="col-md-3 col-xs-6 text-center">
            <div class="feature-box object-non-visible" data-animation-effect="fadeIn" data-effect-delay="300">
                <span class="icon default-bg large circle"><i class="fa fa-share"></i></span>
                <h3><strong>Аудитов</strong></h3>
                <span class="counter" data-to="324" data-speed="5000">0</span>
            </div>
        </div>
    </div>
    <!-- footer top start -->
    <!-- ================ -->
    <div class="footer-top animated-text" style="background-color: #0156d6;;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-action text-center">
                        <div class="row">
                            <div class="col-sm-8">
                                <h2 class="chatboth2">Интеллектуальный чат-бот для Вашего бизнеса</h2>
                                <h2 class="chatboth2">Получить предложение прямо сейчас!</h2>
                            </div>
                            <div class="col-sm-4">
                                <p class="mt-10"><a href="#zakazBotModal" data-toggle="modal"
                                                    data-target="#zakazBotModal"
                                                    class="btn btn-animated btn-lg btn-gray-transparent">Запросить<i
                                                class="fa fa-cart-arrow-down pl-20"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer top end -->
</section>
<!-- section end -->














