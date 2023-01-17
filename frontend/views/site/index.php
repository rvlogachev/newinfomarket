<?php
/* @var $this yii\web\View */

$bundlePath = Yii::$app->getAssetManager()->getBundle('\frontend\assets\FrontendAsset')->baseUrl;

$this->title = \common\modules\widget\widgets\DbText::widget(['key' => 'seo.title.site.index']);
$this->registerMetaTag(['name' => 'keywords', 'content' => \common\modules\widget\widgets\DbText::widget(['key' => 'seo.keywords.site.index'])]);
$this->registerMetaTag(['name' => 'description', 'content' => \common\modules\widget\widgets\DbText::widget(['key' => 'seo.description.site.index'])]);
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
         style="height: 650px; background: url(<?= $bundlePath; ?>/images/front_img2.png) no-repeat scroll 0 0; background-position: 0px;  background-size: cover; padding-top: -100px;display: block; box-shadow: 0 0 0 330px rgba(0, 0, 0, 0.6) inset; ">
    <div class="container-fluid">
        <div class="row" style="padding-top: 40px;">
            <div class="col-md-1 col-sm-1"> </div>
            <div class="col-md-5 col-sm-5 hidden-xs">
                <h1 class="hero-title">
                    Туннель продаж в мессенджерах<br>
                    «под ключ» для вашего бизнеса
                </h1>
                <p class="hero-tagline fact top-15">
                    <span class="topfact">Снижение затрат на рекламу</span><br>
                    <span class="topfact">Авторассылки и допродажи в привычной покупателю среде - мессенджере </span><br>
                    <span class="topfact">Возможность продавать ваши товары/услуги 24/7 </span><br>
                    <span class="topfact">Делать рассылки, уведомления по вашей базе клиентов </span><br>
                    <span class="topfact">Собирать обратную связь, отзывы и комментарии</span>
                </p>
                <div class="btnclass">
                    <a href="/chatbot" class="btn btn-danger   btn-lg" style="">
                        Чат-боты <span class="icon_t icon-play-button2"></span>
                    </a>
                    <!--                    <a href="#zakazBotModal" data-toggle="modal" data-target="#zakazBotModal" class="btn btn-gray btn-animated btn-lg">-->
                    <!--                        Заказать  <i class="fa fa-cart-arrow-down pl-20"></i>-->
                    <!--                    </a>-->
                </div>
            </div> <!-- END col-md-7 col-sm-6-->
            <div class="col-md-5 col-sm-5">
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
                <h3>Закажи туннель продаж и получай клиентов на автомате</h3>
                <p class="large hero-tagline top-15">
                    Стань одним из первых, кто кто внедрит мессенджеры в свой бизнес и получит больше новых клиентов в
                    своей нише
                </p>
                <div class="form-group ">
                    <div class="row">
                        <div class="col-md-2 col-xs-2"></div>
                        <div class="col-md-8 col-xs-8">
                            <?= $form->field($contactForm, 'name')->textInput(['class' => 'form-control', 'placeholder' => 'Введите имя'])->label(false); ?>
                        </div>
                        <div class="col-md-2 col-xs-2"></div>
                    </div>
                </div>
                <div class="form-group">

                    <div class="row">
                        <div class="col-md-2 col-xs-2"></div>
                        <div class="col-md-8 col-xs-8">
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
                        <div class="col-md-2 col-xs-2"></div>
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
            <div class="col-md-1 col-sm-1"> </div>
        </div> <!-- END row-->
    </div> <!-- END container-->
</section>
<!-- section end -->


<!-- section start представляемся -->
<section class="pv-30">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="text-center"><strong>Почему</strong> надо продвигать бизнес <br>в мессенджерах уже сегодня?
                </h2>
                <div class="separator"></div>
                <p class="large text-center">
                    Будь в числе первых, кто внедрит туннель продаж в свой бизнес и увеличит свою прибыль в 2 раза уже
                    сегодня
                </p>
                <br>
            </div>
        </div>
    </div>
    <div class="owl-carousel content-slider-with-large-controls">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="imgslider" src="<?= $bundlePath; ?>/images/_423123.png" alt="">
                </div>
                <div class="col-md-6">
                    <!-- <p class="space-top">Здесь хочу привести самые сильные стороны отличающие нас от конкурентов</p> -->


                    <div class="media">
                        <div class="media-body">
                            <h3 class="media-heading"><strong>Продажи 24/7</strong></h3>
                            <p class="large">
                                Правильно настроенный чат-бот будет продавать без остановок, отвечать на стандартные
                                вопросы вместо менеджеров, автоматически запускать рекламу и отправлять ссылки на оплату
                            </p>
                        </div>
                        <div class="media-right pl-20">
                            <!-- <a href="#">
                                <span class="icon circle small default-bg"><i class="icon-eye"></i> </span>
                            </a> -->
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <h3 class="media-heading"><strong>В 10 раз круче писем</strong></h3>
                            <p class="large">
                                Ваш меседж увидит в 8 раз больше людей чем через e-mail, ведь открываемость сообщений
                                сейчас доходит до 87%, а кликабльность до 69%
                        </div>
                        <div class="media-right pl-20">
                            <!-- <a href="#">
                                <span class="icon circle small default-bg"><i class="icon-trophy"></i> </span>
                            </a> -->
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <h3 class="media-heading"><strong>Даем готовый инструмент </strong></h3>
                            <p class="large">
                                Всё необходимые знания в маркетинге и весь наш опыт создания чат ботов уже в готовом
                                решении.
                            </p>
                        </div>
                        <div class="media-right pl-20">
                            <!-- <a href="#">
                                <span class="icon circle small default-bg"><i class="icon-lifebuoy"></i> </span>
                            </a> -->
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
                        <div class="media-left pr-20">
                            <!-- <a href="#">
                                <span class="icon circle small default-bg"><i class="icon-eye"></i> </span>
                            </a> -->
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading mob-pad-30"><strong>Мобильный трафик </strong></h3>
                            <p class="large">
                                Не секрет что мобильный траффик уже обогнал десктопный
                            </p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left pr-20">
                            <!-- <a href="#">
                                <span class="icon circle small default-bg"><i class="icon-trophy"></i> </span>
                            </a> -->
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading"><strong>Низкая конкуренция</strong></h3>
                            <p class="large">
                                Низкая конкуренция а как следствие снижение стоимости лида
                            </p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left pr-20">
                            <!-- <a href="#">
                                <span class="icon circle small default-bg"><i class="icon-lifebuoy"></i> </span>
                            </a> -->
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading"><strong>Удобный стандарт коммуникации</strong></h3>
                            <p class="large">
                                Люди привыкли пользоваться мессенджерами для общения и бизнеса
                            </p>
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
                <div class="col-md-6">
                    <img style="    height: 474px;width: auto;" src="<?= $bundlePath; ?>/images/pjons.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section end -->

<!-- section start уникальный подход-->
<section class="light-gray-bg pv-30 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="text-center"><strong>Что входит в услугу <br>Разработка туннеля продаж "под ключ"</strong>
                </h2>
                <div class="separator"></div>
                <p class="large text-center">
                    Сделаем всё - от стратегии до реализации и тестирования! Результат - готовый инструмент, которого
                    нет у Ваших конкурентов такого еще нет
                </p>
            </div>
            <div class="col-md-4 ">
                <div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible"
                     data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                    <span class="icon default-bg circle"><i class="fa fa-diamond"></i></span>
                    <h3><strong>Маркетинг-исследование</strong></h3>
                    <div class="separator clearfix"></div>
                    <p class="large">Анализ болей, клиента, сегментация, подбор целевой аудитории, создание и проработка
                        УТП, мафия-оффер</p>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible"
                     data-animation-effect="fadeInDownSmall" data-effect-delay="150">
                    <span class="icon default-bg circle"><i class="fa fa-connectdevelop"></i></span>
                    <h3><strong>Разработка стратегии</strong></h3>
                    <div class="separator clearfix"></div>
                    <p class="large">Составляем контент план воронки продаж, прорабатываем этапы продаж, прописываем
                        путь клиента </p>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible"
                     data-animation-effect="fadeInDownSmall" data-effect-delay="200">
                    <span class="icon default-bg circle"><i class="fa icon-snow"></i></span>
                    <h3><strong>Копирайтинг</strong></h3>
                    <div class="separator clearfix"></div>
                    <p class="large">Пишем контент (статьи, видео, посты), пишем цепочку прогревающих сообщений с
                        триггерами
                    </p>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible"
                     data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                    <span class="icon default-bg circle"><i class="fa fa-diamond"></i></span>
                    <h3><strong>Дизайн</strong></h3>
                    <div class="separator clearfix"></div>
                    <p class="large">Дизайн картинок для туннеля, рекламных картинок, контентных страниц</p>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible"
                     data-animation-effect="fadeInDownSmall" data-effect-delay="150">
                    <span class="icon default-bg circle"><i class="fa fa-connectdevelop"></i></span>
                    <h3><strong>Тестирование стратегии</strong></h3>
                    <div class="separator clearfix"></div>
                    <p class="large">Тесты которые дают цифры и аналитику для дальнейшего масштабирования и внесения
                        необходимых правок в цепочке касаний и трафике
                    </p>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible"
                     data-animation-effect="fadeInDownSmall" data-effect-delay="200">
                    <span class="icon default-bg circle"><i class="fa icon-snow"></i></span>
                    <h3><strong>Сборка и настройка </strong></h3>
                    <div class="separator clearfix"></div>
                    <p class="large">Сборка и настройка туннеля по заданным критериям и с необходимым контентом

                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section end -->

<!-- section start инструменты-->
<section class="pv-30 hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="text-center"><strong>Пройдите путь клиента через мессенджеры и ощутите на себе всю мощь автоворонки</strong></h2>
                <div class="separator"></div>
                <p class="large text-center">
                    Источником траффика для такого минилендинга может служить таргетированная реклама, контекстная реклама, ссылки в постах соц. сетей
                </p>

            </div>
        </div>
        <div class="row ">
            <div class="container ">
                <div class="row">

                    <div class="col-md-6">
                        <img src="<?= $bundlePath;?>/img/miniland.png">
                    </div>
                    <div class="col-md-6">
                        <h3 class="form-title">
                            Как чат-боты повышают продажи?
                        </h3>
                        <p class="form-tagline   top-15">
                            <span class=" ">напоминая об акциях</span><br>
                            <span class=" ">рассказывая о продукте и его преимуществах</span><br>
                            <span class=" ">подталкивая каждый раз к совершению покупки </span><br>
                            <span class=" ">предлагая менее дорогой товар </span><br>
                            <span class=" ">отвечая потребностям клиента</span>
                        </p>
                        <div class="btnclass">
                            <a href="/miniland?id=3" class="btn btn-danger   btn-lg" style="">
                                Протестировать <span class="icon_t icon-play-button2"></span>
                            </a>
                            <!--                    <a href="#zakazBotModal" data-toggle="modal" data-target="#zakazBotModal" class="btn btn-gray btn-animated btn-lg">-->
                            <!--                        Заказать  <i class="fa fa-cart-arrow-down pl-20"></i>-->
                            <!--                    </a>-->
                        </div>
                    </div>

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
                                предложение?</h1>
                            <p style="margin-top:15px;font-size: 18px">Отправляйте заявку, наши менеджеры с Вами
                                свяжутся, уточнят у Вас все потребности и
                                предоставят Вам индивидуальное специальное предложение</p>
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


<!-- section start наши кейсы-->
<!--<section style="height:500px;margin-top:150px;" class="pv-30 light-gray-bg padding-bottom-clear  mob-pad-330">-->
<!--    <div class="container ">-->
<!--        <div class="row  ">-->
<!--            <div class="col-md-8 col-md-offset-2">-->
<!--                <h2 class="text-center  ">Наши <strong>Проекты</strong></h2>-->
<!--                <div class="separator"></div>-->
<!--                <p class="large text-center">Здесь Вы можете посмотреть примеры наших работ для наших клиентов</p>-->
<!--                <br>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="space-bottom">-->
<!--        <div class="owl-carousel carousel">-->
<!--            --><?php //echo \common\widgets\Cases\CasesWidget::widget(['type' => 'mainPage']); ?>
<!---->
<!--        </div>-->
<!---->
<!--    </div>-->
<!--</section>-->
<!-- section end -->










