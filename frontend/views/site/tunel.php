<?php
/* @var $this yii\web\View */
$this->title = \common\modules\widget\widgets\DbText::widget(['key' => 'seo.title.site.chatbot']);
$this->registerMetaTag(['name' => 'keywords', 'content' => \common\modules\widget\widgets\DbText::widget(['key' => 'seo.keywords.site.tunel'])]);
$this->registerMetaTag(['name' => 'description', 'content' => \common\modules\widget\widgets\DbText::widget(['key' => 'seo.description.site.tunel'])]);

$bundlePath = Yii::$app->getAssetManager()->getBundle('\frontend\assets\FrontendAsset')->baseUrl;

?>
<div id="page-start"></div>
<style type="text/css">

    .chatboth2{
        color:white;
    }
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
         style="   height: 650px; background: url(<?= $bundlePath;?>/images/service/chatbots/chatbot.jpeg) no-repeat scroll 0 0; background-position: 0px;  background-size: cover; padding-top: -100px;display: block; box-shadow: 0 0 0 330px rgba(0, 0, 0, 0.6) inset; ">
    <div class="container-fluid">
        <div class="row" style="padding-top: 80px;">
            <div class="col-md-2 col-sm-2">

            </div> <!-- END col-md-7 col-sm-6-->
            <div class="col-md-5 col-sm-5">
                <h1 class="hero-title">
                    Интеллектуальный бот для Вашего бизнеса
                </h1>
                <p class="hero-tagline fact top-15">
                    <span class="topfact">Увеличение продаж за счет прямых уведомлений, рассылки</span><br>
                    <span class="topfact">и допродаж в привычной покупателю среде - мессенджере</span><br>
                    <span class="topfact">Продавать Ваши товары 24/7 в привычной для Вас и Ваших клиентов форме</span><br>
                    <span class="topfact">Делать рассылки, уведомления по Вашей базе клиентов</span><br>
                    <span class="topfact">Собирать обратную связь, отзывы и комментарии</span>
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
                <h3>Протестируйте чат-бота в вашем бизнесе</h3>
                <p class="large hero-tagline top-15">
                    Чат-бот задает вопросы по порядку, тем самым линейно приближая пользователя к достижению конечной
                    цели, например, заказу пиццы
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
                <h2 class="text-center"><strong>Что такое чат-бот? </strong></h2>
                <div class="separator"></div>
                <p class="large text-center">
                    Чат-бот — виртуальный собеседник, который встраивается в мессенджеры и помогает бизнесу
                    быть ближе к клиентам. Это автоматизированная интеллектуальная система общения с пользователями
                </p>
                <br>
            </div>
        </div>
    </div>
    <div class="owl-carousel content-slider-with-large-controls">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="feature-2-left-col col-sm-5">
                        <div class="double-screen-left">
                            <img class="screen top" src="<?= $bundlePath;?>/images/service/chatbots/feature-phone-3.png" alt="">

                        </div>
                    </div>
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
                            <h3 class="media-heading mob-pad-30"><strong>Продает</strong></h3>
                            <div style="margin-top:20px; font-size:16px;">
                                Чат-бот продает товары и услуги в автоматическом режиме:
                                отвечает на стандартные вопросы, сообщает статусы
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
                            <h3 class="media-heading"><strong>Принимает оплаты</strong></h3>
                            <div style="font-size:16px;margin-top:20px">
                                Принимает оплаты от любых систем: Visa, Mastercard, Yandex.Деньги, а так же таких
                                банков, как Тинькоф, Альфабанк, Сбербанк
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
                            <h3 class="media-heading"><strong>Подбирает</strong></h3>
                            <div style="font-size:16px;margin-top:20px">
                                Подбирает и предоставляет информацию в соответствии с запросом пользователя

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
                            <h3 class="media-heading"><strong>Уведомляет</strong></h3>
                            <div style="margin-top:20px; font-size:16px;">
                                Уведомляет о событиях и делает рассылку

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
                            <h3 class="media-heading"><strong>Интегрируется</strong></h3>
                            <div style="margin-top:20px; font-size:16px;">
                                Интегрируется и получает информацию с
                                внешних сервисов и сайтов
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
                            <h3 class="media-heading"><strong>Информирует</strong></h3>
                            <div style="margin-top:20px; font-size:16px;">
                                Информирует о новых поступлениях и скидках, предлагает дополнительные товары

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
                    <div class="feature-2-left-col col-sm-5">
                        <div class="double-screen-left">
                            <img class="screen top" src="<?= $bundlePath;?>/images/service/chatbots/feature-phone-4.png" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section end -->
<!-- ================ -->
<section class="pv-30 padding-bottom-clear light-gray-bg">
    <div class="container">
        <div class="row justify-content-lg-center">
            <div class="col-lg-12">
                <h2 class="text-center mt-4 large">Почему <strong>Выбирают</strong> <span class="text-default">Инфомаркет</span>
                </h2>
                <div class="separator"></div>
                <p class="large text-center">Несколько аргументов "за" сотрудничество с нами
                    или почему Вам следует выбрать именно нас</p>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-lg-6">
                <div class="feature-box-2 object-non-visible right" data-animation-effect="fadeInDownSmall"
                     data-effect-delay="100">
                    <span class="icon without-bg"><i class="fa fa-arrows"></i></span>
                    <div class="body">
                        <h4 class="title" style="font-family: Arial;">ЭКСПЕРТИЗА 5+ ЛЕТ</h4>
                        <p>Вы можете быть уверены, что разработкой Вашего проекта будут заниматься профессионалы.
                            Мы начали заниматься разработкой чат-ботов задолго до того, как это стало мейнстримом
                        </p>
                        <div class="separator-3"></div>
                    </div>
                </div>
                <div class="feature-box-2 object-non-visible right" data-animation-effect="fadeInDownSmall"
                     data-effect-delay="100">
                    <span class="icon without-bg"><i class="fa fa-bullhorn"></i></span>
                    <div class="body">
                        <h4 class="title" style="font-family: Arial;">30+ ЗАВЕРШЕННЫХ ПРОЕКТОВ</h4>
                        <p>Вы можете ознакомиться с нашими проектами в портфолио и при необходимости, запросить
                            дополнительные отзывы у наших клиентов</p>
                        <div class="separator-3"></div>
                    </div>
                </div>
                <div class="feature-box-2 object-non-visible right" data-animation-effect="fadeInDownSmall"
                     data-effect-delay="100">
                    <span class="icon without-bg"><i class="fa fa-umbrella"></i></span>
                    <div class="body">
                        <h4 class="title" style="font-family: Arial;">РАЗРАБОТКА "ПОД КЛЮЧ"</h4>
                        <p>У Вас нет необходимости обращаться к смежным специалистам. Закрываем весь цикл разработки
                            чат-ботов -
                            от идеи до креатива, от стратегии до внедрения</p>
                        <div class="separator-3"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall"
                     data-effect-delay="100">
                    <span class="icon without-bg"><i class=" fa fa-cogs"></i></span>
                    <div class="body">
                        <h4 class="title" style="font-family: Arial;">ПОЧЕМУ БОТЫ?</h4>
                        <p>Боты дешевле и проще в разработке, чем мобильные приложения. Боты работают без отпуска и
                            выходных и им не нужно платить зарплату </p>
                        <div class="separator-2"></div>
                    </div>
                </div>
                <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall"
                     data-effect-delay="100">
                    <span class="icon without-bg"><i class=" fa fa-cogs"></i></span>
                    <div class="body">
                        <h4 class="title" style="font-family: Arial;">СКОРОСТЬ РАЗРАБОТКИ И ВНЕДРЕНИЯ</h4>
                        <p>Мы оптимизировали процесс разработки за счет использования собственных конструкторов и
                            инструментов</p>
                        <div class="separator-2"></div>
                    </div>
                </div>
                <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall"
                     data-effect-delay="100">
                    <span class="icon without-bg"><i class="fa fa-star-o"></i></span>
                    <div class="body">
                        <h4 class="title" style="font-family: Arial;">ГАРАНТИЙНЫЙ СРОК</h4>
                        <p>Один месяц бесплатной поддержки и сопровождения после запуска чат-бота</p>
                        <div class="separator-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider revolution start -->
    <!-- ================ -->
    <h3 class="text-center mt-4 large"><strong>Посмотрите</strong> как можно легко <br>организовать процесс записи на
        автосервис
        <span class="text-default">с помощью бота</span></h3>
    <div class="separator"></div>
    <div class="slider-revolution-5-container">
        <div id="slider-banner-carousel" class="slider-banner-carousel rev_slider" data-version="5.0">


            <ul class="slides">

                <!-- slide 1 start -->
                <!-- ================ -->
                <li data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default"
                    data-masterspeed="300" data-saveperformance="off" data-title="Slide Title">

                    <!-- main image -->
                    <img src="<?= $bundlePath;?>/images/new/lexus-image-2.png" alt="slidebg1" data-bgposition="center center"
                         data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                </li>
                <!-- slide 1 end -->

                <!-- slide 2 start -->
                <!-- ================ -->
                <li data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default"
                    data-masterspeed="300" data-saveperformance="off" data-title="Slide Title">

                    <!-- main image -->
                    <img src="<?= $bundlePath;?>/images/new/lexus-image-3.png" alt="slidebg1" data-bgposition="center center"
                         data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                </li>
                <!-- slide 2 end -->

                <!-- slide 3 start -->
                <!-- ================ -->
                <li data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default"
                    data-masterspeed="300" data-saveperformance="off" data-title="Slide Title">

                    <!-- main image -->
                    <img src="<?= $bundlePath;?>/images/new/lexus-image-4.png" alt="slidebg1" data-bgposition="center center"
                         data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                </li>
                <!-- slide 3 end -->

                <!-- slide 4 start -->
                <!-- ================ -->
                <li data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default"
                    data-masterspeed="300" data-saveperformance="off" data-title="Slide Title">

                    <!-- main image -->
                    <img src="<?= $bundlePath;?>/images/new/lexus-image-5.png" alt="slidebg1" data-bgposition="center center"
                         data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                </li>
                <!-- slide 4 end -->
                <!-- ================ -->
                <li data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default"
                    data-masterspeed="300" data-saveperformance="off" data-title="Slide Title">

                    <!-- main image -->
                    <img src="<?= $bundlePath;?>/images/new/lexus-image-6.png" alt="slidebg1" data-bgposition="center center"
                         data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                </li>
                <!-- slide 4 end -->
                <!-- ================ -->
                <li data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default"
                    data-masterspeed="300" data-saveperformance="off" data-title="Slide Title">

                    <!-- main image -->
                    <img src="<?= $bundlePath;?>/images/new/lexus-image-7.png" alt="slidebg1" data-bgposition="center center"
                         data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                </li>
                <!-- slide 4 end -->
                <!-- ================ -->
                <li data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default"
                    data-masterspeed="300" data-saveperformance="off" data-title="Slide Title">

                    <!-- main image -->
                    <img src="<?= $bundlePath;?>/images/new/lexus-image-8.png" alt="slidebg1" data-bgposition="center center"
                         data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                </li>
                <!-- slide 4 end -->
                <!-- ================ -->
                <li data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default"
                    data-masterspeed="300" data-saveperformance="off" data-title="Slide Title">

                    <!-- main image -->
                    <img src="<?= $bundlePath;?>/images/new/lexus-image-9.png" alt="slidebg1" data-bgposition="center center"
                         data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                </li>
                <!-- slide 4 end -->
                <!-- ================ -->
                <li data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default"
                    data-masterspeed="300" data-saveperformance="off" data-title="Slide Title">

                    <!-- main image -->
                    <img src="<?= $bundlePath;?>/images/new/lexus-image-10.png" alt="slidebg1" data-bgposition="center center"
                         data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                </li>
                <!-- slide 4 end -->
                <!-- ================ -->
                <li data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default"
                    data-masterspeed="300" data-saveperformance="off" data-title="Slide Title">

                    <!-- main image -->
                    <img src="<?= $bundlePath;?>/images/new/lexus-image-11.png" alt="slidebg1" data-bgposition="center center"
                         data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                </li>
                <!-- slide 4 end -->
                <!-- ================ -->
                <li data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default"
                    data-masterspeed="300" data-saveperformance="off" data-title="Slide Title">

                    <!-- main image -->
                    <img src="<?= $bundlePath;?>/images/new/lexus-image-12.png" alt="slidebg1" data-bgposition="center center"
                         data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                </li>
                <!-- slide 4 end -->
            </ul>
        </div>
    </div>
    <!-- slider revolution end -->
</section>
<!-- section end -->
<!-- section start уникальный подход-->
<section class="light-gray-bg pv-30 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="text-center"><strong> В каких сферах бизнеса?</strong></h2>
                <div class="separator"></div>
                <p class="large text-center">
                    Чат-боты подходят практически для любой сферы и любой отрасли, везде можно найти применение
                    чат-ботам
                </p>
            </div>
            <div class="col-md-4 ">
                <div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible"
                     data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                    <span class="icon default-bg circle"><i class="fa fa-diamond"></i></span>
                    <h3><strong>Банки и фонды</strong></h3>
                    <div class="separator clearfix"></div>
                    <p style="font-size:16px;">Первая линия поддержки</p>
                    <p style="font-size:16px;">Внутренние процессы</p>
                    <p style="font-size:16px;">Эффективный маркетинг</p>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible"
                     data-animation-effect="fadeInDownSmall" data-effect-delay="150">
                    <span class="icon default-bg circle"><i class="fa fa-connectdevelop"></i></span>
                    <h3><strong>Страховые компании</strong></h3>
                    <div class="separator clearfix"></div>
                    <p style="font-size:16px;">Первая линия поддержки </p>
                    <p style="font-size:16px;">Маркетинг и продажи </p>
                    <p style="font-size:16px;">Сообщения от клиентов</p>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible"
                     data-animation-effect="fadeInDownSmall" data-effect-delay="200">
                    <span class="icon default-bg circle"><i class="fa icon-snow"></i></span>
                    <h3><strong>Недвижимость</strong></h3>
                    <div class="separator clearfix"></div>
                    <p style="font-size:16px;">Продажа объектов</p>
                    <p style="font-size:16px;">Назначение встреч</p>
                    <p style="font-size:16px;">Внутренние процессы</p>
                </div>
            </div>

        </div>
        <div class="row">

            <div class="col-md-4 ">
                <div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible"
                     data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                    <span class="icon default-bg circle"><i class="fa fa-diamond"></i></span>
                    <h3><strong>Сфера услуг</strong></h3>
                    <div class="separator clearfix"></div>
                    <p style="font-size:16px;">Приём заказов</p>
                    <p style="font-size:16px;">Информирование</p>
                    <p style="font-size:16px;">Маркетинг</p>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible"
                     data-animation-effect="fadeInDownSmall" data-effect-delay="150">
                    <span class="icon default-bg circle"><i class="fa fa-connectdevelop"></i></span>
                    <h3><strong>Розничная торговля</strong></h3>
                    <div class="separator clearfix"></div>
                    <p style="font-size:16px;">Приём заказов </p>
                    <p style="font-size:16px;">Обратная связь</p>
                    <p style="font-size:16px;">Про-активные продажи</p>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible"
                     data-animation-effect="fadeInDownSmall" data-effect-delay="200">
                    <span class="icon default-bg circle"><i class="fa icon-snow"></i></span>
                    <h3><strong>Отдых и развлечения</strong></h3>
                    <div class="separator clearfix"></div>
                    <p style="font-size:16px;">Рестораны</p>
                    <p style="font-size:16px;">Спортивные клубы
                    </p>
                    <p style="font-size:16px;">Туризм
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- section end -->

<section class="section   clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="text-center"><strong>Последние проекты</strong></h2>
                <div class="separator"></div>
                <p class="large text-center">
                    Чат-боты подходят практически для любой сферы и любой отрасли, везде можно найти применение
                    чат-ботам
                </p>
            </div>
        </div>
        <div class="row">
            <!-- main start -->
            <!-- ================ -->
            <div class="col-lg-12">
                <!-- pills start -->
                <!-- ================ -->
                <!-- Nav tabs -->
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item"><a class="nav-link active" href="#pill-1" role="tab" data-toggle="tab"
                                            title="ЧБ Вконтакте"><i class="fa fa-vk"></i>&nbsp; Вконтакте</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pill-2" role="tab" data-toggle="tab"
                                            title="ЧБ Telegram"><i class="glyphicon glyphicon-send "></i> &nbsp;
                            Telegram</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content clear-style">
                    <div class="tab-pane active" id="pill-1">

                        <div class="listing-item mb-20">
                            <div class="row grid-space-0">
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <img src="<?= $bundlePath;?>/images/new/111.png" alt="">

                                </div>
                                <div class="col-md-6 col-lg-8 col-xl-9">
                                    <h3 class="title"><a href="/cases/21/2-be-a-model">ЧБ Вконтакте - 2BE A MODEL</a>
                                    </h3>
                                    <div class="separator-2"></div>
                                    <div class="col-md-6">

                                        <video width="340" height="480" style=" " controls>
                                            <source src="<?= $bundlePath;?>/images/new/video3.mp4" type="video/mp4">
                                            Ваш браузер не поддерживает WebPlayer.
                                        </video>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="sidebar">

                                            <div class="block clearfix">

                                                <br>
                                                <p class="margin-clear">Проект создан для помощи заказчикам искать
                                                    моделей, а моделям получать информацию о работе в любимом VK</p>
                                                <div class="separator-2"></div>
                                                <p>Cервис для моделей и заказчиков, в котором они могут
                                                    взаимодействовать между собой. <br>
                                                    Заказчики могут создавать мероприятия и смотреть моделей, которые
                                                    откликнулись. <br>
                                                    Модели могут просматривать все заказы и откликаться на них</p>
                                                <p>В проекте реализовано:
                                                <ul>
                                                    <li>Интерфейс управления ботом</li>
                                                    <li>Роль заказчика</li>
                                                    <li>Роль модели</li>
                                                    <li>Автоматические скрипты</li>
                                                </ul>
                                                </p>
                                                <div class="elements-list clearfix">

                                                    <a href="/cases/21/2-be-a-model"
                                                       class="pull-right btn btn-sm btn-default-transparent btn-animated">Подробнее<i
                                                                class="fa fa-shopping-cart"></i></a>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane" id="pill-2">
                        <div class="listing-item mb-20">
                            <div class="row grid-space-0">
                                <div class="col-md-6 col-lg-4 col-xl-3">
                                    <img src="<?= $bundlePath;?>/images/new/222.png" alt="">

                                </div>
                                <div class="col-md-6 col-lg-8 col-xl-9">
                                    <h3 class="title"><a href="/cases/18/semoshi">ЧБ Telegram - SeMoShi</a></h3>
                                    <div class="separator-2"></div>
                                    <div class="col-md-6">

                                        <video width="340" height="480" style=" " controls>
                                            <source src="<?= $bundlePath;?>/images/new/video2.mp4" type="video/mp4">
                                            Ваш браузер не поддерживает WebPlayer.
                                        </video>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="sidebar">

                                            <div class="block clearfix">

                                                <br>
                                                <p class="margin-clear">Online-запись на самые популярные автомобильные
                                                    услуги в вашем городе</p>
                                                <div class="separator-2"></div>
                                                <p>Сервис для владельцев автомоек с возможностью предоставления клиентам
                                                    онлайн записи</p>
                                                <p>Используемые технологии:
                                                <ul>
                                                    <li>ОС Linux</li>
                                                    <li>PHP7</li>
                                                    <li>JavaScript</li>
                                                    <li>Framework Yii2</li>
                                                    <li>СУБД: mySQ</li>
                                                </ul>
                                                </p>
                                                <div class="elements-list clearfix">

                                                    <a href="/cases/18/semoshi"
                                                       class="pull-right btn btn-sm btn-default-transparent btn-animated">Подробнее<i
                                                                class="fa fa-shopping-cart"></i></a>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- pills end -->


                <!-- pagination end -->

            </div>
            <!-- main end -->
            <!-- sidebar start -->
            <!-- ================ -->

            <!-- sidebar end -->
        </div>
    </div>
</section>

<!-- section end акция-->
<section class="section default-bg clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="call-to-action text-center">
                    <div class="row">
                        <div class="col-sm-8">
                            <h1 class="title" style="margin-top:15px;font-size: 24px">Получите дополнительную информацию</h1>
                            <p style="margin-top:15px;font-size: 18px">Оставьте контакты и наши менеджеры свяжутся с Вами для обсуждения деталей проекта</p>
                        </div>
                        <div class="col-sm-4">
                            <br>
                            <p>
                                <a href="#zakazKpModal" data-toggle="modal" data-target="#zakazKpModal"
                                   class="btn btn-lg btn-gray-transparent btn-animated">Получить информацию<i
                                            class="fa fa-arrow-right pl-20"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section start -->


<!-- section start тарифы-->
<section class="pv-40">
    <div class="container">
        <h1 class=" text-center mt-4" style="font-size: 30px;">Соберите бота по <strong>модулям</strong></h1>
        <div class="separator with-icon"><i class="fa fa-rocket bordered"></i></div>
        <p class="large text-center">Мессенджеры - это привычная среда общения для клиентов. <br>
            Не требует отдельной установки в устройство, сразу работает и на Android и на IOS устройствах</p>

        <div style="margin-top:100px;"
             class="pricing-tables stripped object-non-visible animated object-visible fadeInUpSmall"
             data-animation-effect="fadeInUpSmall" data-effect-delay="0">
            <div class="row grid-space-0">
                <!-- pricing table start -->
                <!-- ================ -->
                <div class="col-md-3 plan stripped best-value">
                    <div class="header default-bg">
                        <h3>Базовый</h3>
                        <div class="price"><span style="    font-size: 18px;">25 тыс.руб. |   7 дней</span></div>
                    </div>
                    <div class="tasks">

                        <ul>
                            <li>Обеспечивает работоспособность и развитие чат-бота</li>
                            <li>Web-сервер обработки запросов, регистрация домена, виртуального сервера на сайте
                                simplecloud.ru, SSL-сертификата
                            </li>
                            <li>Web-интерфейс для администрирования и управления чат-ботом</li>
                            <li>Хранилище медиа файлов для работы чат-бота</li>
                            <li>Базовые 7-15 экранов</li>

                            <li><a href="#zakazTarifModal" data-toggle="modal" data-target="#zakazTarifModal"
                                   class="btn btn-default-transparent btn-animated">Выбрать <i
                                            class="fa fa-shopping-cart"></i></a></li>
                        </ul>

                    </div>

                </div>
                <!-- pricing table end -->

                <!-- pricing table start -->
                <!-- ================ -->
                <div class="col-md-3 plan stripped">
                    <div class="header default-bg">
                        <h3>Консультант</h3>
                        <div class="price"><span style="font-size: 18px;">7 тыс.руб. |   2 дня</span></div>
                    </div>
                    <ul>


                        <li>
                            <a href="#" class="pt-popover" data-toggle="popover" data-placement="top"
                               data-content="* 20 вопросов исходя из базовой стоимости"
                               title="" data-original-title="Искуственный интеллект">Ответы на часто задаваемые
                                вопросы</a>
                        </li>

                        <li>Ответы на вопросы берутся из заранее подготовленной базы знаний
                        </li>
                        <li>Возможность обучать бота вводя новые вопросы и ответы
                        </li>
                        <li>Вопросы идентифицируются по ключевым словам
                        </li>
                        <li>
                            <a href="#" class="pt-popover" data-toggle="popover" data-placement="top"
                               data-content="* настраивается дополнительно"
                               title="" data-original-title="Искуственный интеллект">В случае отсутствия ответа в базе
                                знаний чат-бот сообщает об отсутствии ответа на вопрос или связывается с Консультантом
                            </a>
                        </li>


                        <li><a href="#zakazTarifModal" data-toggle="modal" data-target="#zakazTarifModal" href="#"
                               class="btn btn-default-transparent btn-animated">Выбрать <i
                                        class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
                <!-- pricing table end -->

                <!-- pricing table start -->
                <!-- ================ -->
                <div class="col-md-3 plan stripped ">
                    <div class="header default-bg">
                        <h3>Рассылка</h3>
                        <div class="price"><span style="font-size: 18px;">18 тыс.руб. |   4 дня</span></div>
                    </div>
                    <ul>
                        <li>Делает рассылку сообщений</li>
                        <li>Возможность индивидуальных сообщений</li>
                        <li>Рассылка может проходить по расписанию всем пользователям чат-бота</li>
                        <li> Расписание рассылки (дата, время, контент) настраиваются в интерфейсе администратора</li>

                        <li>Модуль позволяет отправлять текст, ссылки и медиафайлы
                        </li>
                        <li>Выстраивание цепочек сообщений
                        </li>
                        <li><a href="#zakazTarifModal" data-toggle="modal" data-target="#zakazTarifModal" href="#"
                               class="btn btn-default-transparent btn-animated">Выбрать <i
                                        class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
                <!-- pricing table end -->

                <!-- pricing table start -->
                <!-- ================ -->
                <div class="col-md-3 plan">
                    <div class="header default-bg">
                        <h3>Эквайринг</h3>
                        <div class="price"><span style="font-size: 18px;">15 тыс.руб. |   6 дней</span></div>
                    </div>
                    <ul>
                        <li>Принимает платежи</li>
                        <li>Пользователи оплачивают покупки, а владельцы бизнеса получают оплаты через
                            интернет-эквайринг и электронные системы оплаты
                        </li>
                        <li>Для подключения модуля необходимо заключить договор с банком или платежным сервисом
                            (например Robokassa...)
                        </li>
                        <li>Подключение Интернет-эквайринг от "Тинькофф"
                        </li>
                        <li>Подключение Интернет-эквайринг от "Сбербанк"
                        </li>

                        <li><a href="#zakazTarifModal" data-toggle="modal" data-target="#zakazTarifModal" href="#"
                               class="btn btn-default-transparent btn-animated">Выбрать <i
                                        class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
                <!-- pricing table end -->

            </div>
            <div class="separator"></div>
            <div class="row grid-space-0">
                <!-- pricing table start -->
                <!-- ================ -->
                <div class="col-md-3 plan stripped">
                    <div class="header default-bg">
                        <h3>Витрина</h3>
                        <div class="price"><span style="    font-size: 18px;">20 тыс.руб. |   6 дней</span></div>
                    </div>
                    <div class="tasks">

                        <ul>

                            <li>Просмотр управление товарами/услугами
                            </li>
                            <li>Просмотр управление категориями
                            </li>
                            <li>Интеграция со сторонними системами CRM, email, сайт
                                (обязательно подключение модуля «Интеграции»)
                            </li>
                            <li>Есть возможность просматривать товары списками или с помощью поиска по ключевым словам.
                                Каждый товар можно просматривать отдельно
                            </li>

                            <li><a href="#zakazTarifModal" data-toggle="modal" data-target="#zakazTarifModal"
                                   class="btn btn-default-transparent btn-animated">Выбрать <i
                                            class="fa fa-shopping-cart"></i></a></li>
                        </ul>

                    </div>

                </div>
                <!-- pricing table end -->

                <!-- pricing table start -->
                <!-- ================ -->
                <div class="col-md-3 plan stripped">
                    <div class="header default-bg">
                        <h3>Онлайн-запись </h3>
                        <div class="price"><span style="font-size: 18px;">25 тыс.руб. |   7 дней</span></div>
                    </div>
                    <ul>
                        <li>Записывает на прием или бронирует место</li>
                        <li>Модуль сравнивает уже занятые часы и записывает клиента только на свободное время или
                            свободные места
                        </li>

                        <li>
                            <a href="#" class="pt-popover" data-toggle="popover" data-placement="top"
                               data-content="* настраивается дополнительно"
                               title="" data-original-title="Искуственный интеллект">В случае отсутствия ответа в базе
                                знаний чат-бот сообщает об отсутствии ответа на вопрос или связывается с Консультантом
                            </a>
                        </li>
                        <li>
                            <a href="#" class="pt-popover" data-toggle="popover" data-placement="top"
                               data-content="* обязательно подключение модуля «Интеграции»"
                               title="" data-original-title="Искуственный интеллект">Интеграция со сторонними сервисами:
                                CRM, 1С, email, сайт.
                            </a>
                        </li>
                        <li><a href="#zakazTarifModal" data-toggle="modal" data-target="#zakazTarifModal" href="#"
                               class="btn btn-default-transparent btn-animated">Выбрать <i
                                        class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
                <!-- pricing table end -->

                <!-- pricing table start -->
                <!-- ================ -->
                <div class="col-md-3 plan stripped ">
                    <div class="header default-bg">
                        <h3>Интеграции</h3>
                        <div class="price"><span style="font-size: 18px;">8 тыс.руб. |   4 дня</span></div>
                    </div>
                    <ul>
                        <li>Подключает бота к разным системам</li>
                        <li>Взаимодействие онлайн или настройка запуск скриптов по расписанию, настройка под задачи
                            автоматизации
                        </li>
                        <li>Интеграция с любыми сторонними сервисами, с учетными системами 1С, МИС, ERP, системы
                            управления продажами и др
                        </li>

                        <li>Настройка автоматических скриптов</li>
                        <li><a href="#zakazTarifModal" data-toggle="modal" data-target="#zakazTarifModal" href="#"
                               class="btn btn-default-transparent btn-animated">Выбрать <i
                                        class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
                <!-- pricing table end -->

                <!-- pricing table start -->
                <!-- ================ -->
                <div class="col-md-3 plan">
                    <div class="header default-bg">
                        <h3>Продвинутый</h3>
                        <div class="price"><span style="font-size: 18px;">индивидуально |   6 дней</span></div>
                    </div>
                    <ul>
                        <li>Строит диалог с клиентом по сценариям
                            Обладает крутой аналитикой
                        </li>
                        <li>Разработка модуля происходит по требованиям оророорор ор ро ор заказчика
                        </li>
                        <li>Подключение нейронных сетей для самообучающегося алгоритма и обучение первым набором данных
                        </li>
                        <li>Построение аналитических панелей по данным о посещениях, состоявшихся диалогах и др.
                        </li>


                        <li><a href="#zakazTarifModal" data-toggle="modal" data-target="#zakazTarifModal" href="#"
                               class="btn btn-default-transparent btn-animated">Выбрать <i
                                        class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
                <!-- pricing table end -->

            </div>
        </div>
        <!-- pricing tables end -->
    </div>
</section>
<!-- section end -->
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
                            <p class="mt-10"><a href="#zakazBotModal" data-toggle="modal" data-target="#zakazBotModal" style="color:white;" class="btn btn-animated btn-lg btn-gray-transparent">Запросить<i class="fa fa-cart-arrow-down pl-20"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- section start контакты -->
<section class="main-container">
    <div class="container">
        <div class="row">
            <!-- main start -->
            <!-- ================ -->
            <div class="main col-md-12 space-bottom">

                <div class="row">

                    <aside class="col-lg-6 col-xl-3 ml-xl-auto">
                        <div class="sidebar">
                            <div class="block clearfix">
                                <h3 class="title" style="font-size: 28px;font-family:Raleway,sans-serif !important;">
                                    Контакты</h3>
                                <div class="separator-2"></div>
                                <ul class="list">
                                    <li style="weight:80%;color: #777777; font-size: 18px;font-family:Raleway,sans-serif !important;">
                                        <i class="fa fa-home pr-10 text-default"></i>
                                        <span style="font-family:Arial,sans-serif !important;">191119</span>
                                        Москва, Ленинский пр. <span
                                                style="font-family:Arial,sans-serif !important;">42</span> к <span
                                                style="font-family:Arial,sans-serif !important;">1</span></li>
                                    <li>
                                        <i class="fa fa-phone pr-10 text-default"></i><a
                                                style="color: #777777; font-size: 18px;font-family:Arial,sans-serif !important; href="
                                                tel:+74951331618">
                                        +7(495) 133 16 18
                                        </a>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope pr-10 text-default"></i>
                                        <a style="color: #777777; font-size: 18px;font-family:Arial !important; href="
                                           mailto:info@infomarketstudio.ru">info@infomarketstudio.ru</a>
                                    </li>
                                    <li style="font-size: 18px;font-family:Raleway,sans-serif !important;">
                                        <a target="_blank" href="https://telegram.me/infostudiobot"
                                           style="color:#777777;">
                                            <i class="glyphicon glyphicon-send  pr-10 text-default"></i>Телеграм бот</a>
                                    </li>
                                </ul>
                                <a target="_blank" class="btn btn-gray collapsed map-show btn-animated"
                                   href="https://www.google.ru/maps/place/%D0%9B%D0%B5%D0%BD%D0%B8%D0%BD%D1%81%D0%BA%D0%B8%D0%B9+%D0%BF%D1%80%D0%BE%D1%81%D0%BF.,+42+%D0%BA%D0%BE%D1%80%D0%BF%D1%83%D1%81+1,+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+119119/@55.702563,37.5644593,17z/data=!3m1!4b1!4m5!3m4!1s0x46b54c839aaa0f95:0xd62948b52bbf850f!8m2!3d55.70256!4d37.566648?hl=ru"
                                   aria-expanded="false" aria-controls="collapseMap">Показать карту
                                    <i
                                            class="fa fa-external-link"></i></a>
                            </div>
                        </div>
                        <div class="sidebar">
                            <div class="block clearfix">
                                <h3 class="title" style="font-size: 28px;font-family:'Raleway, sans-serif'">Мы в
                                    социальных сетях</h3>
                                <div class="separator-2"></div>
                                <ul class="social-links circle small margin-clear clearfix animated-effect-1">

                                    <li class="vkontakte"><a target="_blank" href="https://vk.com/infomarketstudio"><i
                                                    class="fa fa-vk "></i></a></li>
                                    <li class="odnoklassniki"><a target="_blank"
                                                                 href="https://ok.ru/group/54498255634686"><i
                                                    class="fa fa-odnoklassniki"></i></a></li>
                                    <li class="facebook"><a target="_blank" href="https://fb.me/infomarketstudio"><i
                                                    class="fa fa-facebook"></i></a></li>
                                    <!-- <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>-->
                                    <li class="insta"><a target="_blank"
                                                         href="https://www.instagram.com/infomarketstudio"><i
                                                    class="fa fa-instagram"></i></a></li>
                                    <li class="twitter"><a target="_blank" href="https://twitter.com/infomarketst"><i
                                                    class="fa fa-twitter"></i></a></li>


                                </ul>
                            </div>
                        </div>
                    </aside>

                    <div class="col-md-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2248.2191131290915!2d37.5644593154267!3d55.702563003333786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54c839aaa0f95%3A0xd62948b52bbf850f!2z0JvQtdC90LjQvdGB0LrQuNC5INC_0YDQvtGB0L8uLCA0MiDQutC-0YDQv9GD0YEgMSwg0JzQvtGB0LrQstCwLCAxMTkxMTk!5e0!3m2!1sru!2sru!4v1517911962310"
                                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <!-- main end -->
        </div>
    </div>
</section>
<!-- section end -->




