<?php
/* @var $this yii\web\View */
$this->title = \common\modules\widget\widgets\DbText::widget(['key' => 'seo.title.site.analytic']);
$this->registerMetaTag(['name' => 'keywords', 'content' => \common\modules\widget\widgets\DbText::widget(['key' => 'seo.keywords.site.analytic'])]);
$this->registerMetaTag(['name' => 'description', 'content' => \common\modules\widget\widgets\DbText::widget(['key' => 'seo.description.site.analytic'])]);
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


<!-- section start форма захвата -->
<section id="intro-hero hero-content" style="height: 650px; background: url(/images/slider-fullscreen-slide-1.jpg) no-repeat scroll 0 0; background-position: 0px;  background-size: cover; padding-top: -100px;display: block;">
    <div class="container-fluid">
        <div class="row" style="padding-top: 80px;">
            <div class="col-md-2 col-sm-6">

            </div> <!-- END col-md-7 col-sm-6-->
            <div class="col-md-5 col-sm-6">
                <h1 class="hero-title" style="color:white;padding-top:25px">
                    <?= \common\modules\widget\widgets\DbText::widget([
                        'key' => 'main.block1.utp'
                    ]); ?>
                </h1>
                <p class="hero-tagline top-15" style="color:white; font-size:18px">
                    Привлекаем трафик и оптимизируем <br> кампании с фокусом на ROI. <br>Внедряем системы сквозной
                    аналитики.
                    <br>Полная прозрачность и реальный <br>результат в деньгах!
                </p>
                <div class="">
                    <a href="/service" class="btn btn-default btn-hvr hvr-shutter-out-horizontal btn-lg hidden-iphone5">
                        Услуги <span class="icon_t icon-play-button2"></span>
                    </a>
                    <b href="#zakazSiteModal" data-toggle="modal" data-target="#zakazSiteModal"
                       class="btn btn-gray btn-animated btn-lg">
                        Заказать сайт <i class="fa fa-cart-arrow-down pl-20"></i>
                    </b>
                </div>
            </div> <!-- END col-md-7 col-sm-6-->
            <div class="col-md-5 col-sm-6 hidden-xs">
                <?php $form = \kartik\form\ActiveForm::begin([
                    'id' => 'getaudit',
                    'action'=>'getaudit',
                    'method' => 'post',
                    'options' => [
                        'class' => 'registration-form text-center',
                    ]
                ]); ?>
                <?= $form->field($contactForm, 'source_form')->hiddenInput(['value' => 'getaudit'])->label(false); ?>
                <div class="row">
                    <div class="col-md-9">
                        <h3>Закажите бесплатный <br>аудит вашего сайта</h3>
                    </div>
                    <div class="col-md-3">
                        <img src="/images/pdf.gif" style="padding-top:13px;">
                    </div>
                </div>

                <p style="font-size:16px;" class="hero-tagline top-15">
                    Узнайте какие инструменты необходимо <br> использовать для Вашего бизнеса чтоб увеличить продажи
                    вдвое!
                </p>
                <div class="form-group ">
                    <?= $form->field($contactForm, 'name')->textInput(['class' => 'form-control', 'placeholder' => 'Введите имя'])->label(false); ?>
                </div>
                <div class="form-group">
                    <?php echo \borales\extensions\phoneInput\PhoneInput::widget([
                        'name'=>'phone',
                        'jsOptions' => [
                            'allowExtensions' => true,
                            'onlyCountries' => ['ru'],
                        ]
                    ]); ?>
                </div>

                <div class="form-group text-center">
                    <button type="submit" href="/" class="btn btn-default btn-animated btn-lg">
                        <i class="fa fa-shopping-basket"></i>Получить аудит
                    </button>
                </div>
                <p class="reg-term" style="font-size:16px;">Свяжемся в течение 15 мин</p>
                <?php \kartik\form\ActiveForm::end(); ?>
            </div> <!-- END col-md-5 col-sm-6-->
        </div> <!-- END row-->
    </div> <!-- END container-->
</section>
<!-- section end -->

<!-- section start представляемся -->
<section class="pv-30">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="text-center"><strong>Развивайте бизнес </strong> <br>поручите комплексный маркетинг нам</h2>
                <div class="separator"></div>
                <p class="large text-center">
                    Улучшаем синтетические и бизнес показатели. Даём измеряемый в деньгах результат. Показываем
                    результат в любой отрасли.
                </p>
                <br>
            </div>
        </div>
    </div>
    <div class="owl-carousel content-slider-with-large-controls">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="" src="/images/ascending-graph.jpg" alt="">
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
                            <h3 class="media-heading mob-pad-30"><strong>Профессиональная команда</strong></h3>
                            <div style="margin-top:20px; font-size:16px;">
                                Более 20 специалистов берут на себя задачи требующие разный уроверь подготовки и
                                квалификации.
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
                            <h3 class="media-heading"><strong>Гибкое управление проектами</strong></h3>
                            <div style="font-size:16px;margin-top:20px">
                                Работаем по проверенной схеме из 12 шагов, за счет чего вы получаете постоянную обратную
                                связь и отчеты по индивидуальному календарному плану.
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
                            <h3 class="media-heading"><strong>Комплексный подход</strong></h3>
                            <div style="font-size:16px;margin-top:20px">
                                Проводим регулярный анализ показателей, подкручиваем эффективные каналы и отключаем те,
                                которые не дают результата.
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
                            <h3 class="media-heading"><strong>Мобильный тренд</strong></h3>
                            <div style="margin-top:20px; font-size:16px;">
                            Веб-разработка все больше уходит в мобильные устройства, <br> интернет-траффика от туда очень много
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
                            <h3 class="media-heading"><strong>Фирменный стиль, брендинг</strong></h3>
                            <div style="margin-top:20px; font-size:16px;">
                                Создание бренда, разработка маркетинг-китов, продающих презентаций, дизайн логотипов, баннеров</div>
                        </div>
                        <div class="media-right pl-20">
                            <!-- <a href="#">
                                <span class="icon circle small default-bg"><i class="icon-trophy"></i> </span>
                            </a> -->
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <h3 class="media-heading"><strong>Настраиваем поток клиентов</strong></h3>
                            <div style="margin-top:20px; font-size:16px;">
                            С помощью различных техник и методик, имея наш опыт настройки реклам в разных нишах, мы
                            можем гарантировать Вам поток клиентов при бюджете от 30 000 р.
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
                    <img src="images/sait-dlya-telefona.png" alt="">
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
                <h2 class="text-center"><strong> Индивидуальный подход к клиенту </strong></h2>
                <div class="separator"></div>
                <p class="large text-center">
                    Мы умеем считать показатели и не просто увеличиваем конверсию, трафик или другой отдельный
                    показатель,
                    а предлагаем использовать множество инструментов маркетинга для повышения продаж и увеличения
                    прибыли с каждого клиента
                </p>
            </div>
            <div class="col-md-4 ">
                <div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible"
                     data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                    <span class="icon default-bg circle"><i class="fa fa-diamond"></i></span>
                    <h3><strong>Digital-Production</strong></h3>
                    <div class="separator clearfix"></div>
                    <p style="font-size:16px;">Веб-разработка на основе данных, с фокусом на ROI. Создаём новые и
                        развиваем действующие
                        проекты. Работаем в рамках заданных KPI.</p>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible"
                     data-animation-effect="fadeInDownSmall" data-effect-delay="150">
                    <span class="icon default-bg circle"><i class="fa fa-connectdevelop"></i></span>
                    <h3><strong>Performance-маркетинг</strong></h3>
                    <div class="separator clearfix"></div>
                    <p style="font-size:16px;">Привлекаем трафик и оптимизируем кампании с фокусом на ROI. Применяем
                        лучшие технологии. Полная
                        прозрачность и реальный результат в деньгах.  </p>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible"
                     data-animation-effect="fadeInDownSmall" data-effect-delay="200">
                    <span class="icon default-bg circle"><i class="fa icon-snow"></i></span>
                    <h3><strong>Глубокая аналитика</strong></h3>
                    <div class="separator clearfix"></div>
                    <p style="font-size:16px;">Строим системы сквозной аналитики и добиваемся полной прозрачности в
                        отчетности, считаем
                        синтетические и бизнес-показатели.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section end -->

<!-- section start инструменты-->
<section class="pv-30" style="height:500px">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="text-center"><strong>Какие инструмены мы используем</strong></h2>
                <div class="separator"></div>
                <p class="large text-center">
                    Мы применяем необходимые инструменты на определенном шаге Вашей воронки продаж, мы никогда не
                    советуем лишнего и используем Ваш бюджет максимально эффективно
                </p>

            </div>
        </div>
        <div class="row ">
            <div class="container ">
                <div class="row">
                    <div class="col-md-1 hidden-xs" style="padding-right: 0px !important; padding-left: 0px !important;">
                        <div style="width: 0; height: 130px;border-top: 130px solid #007bff; border-left: 98px solid transparent;"></div>
                    </div>
                    <div class="col-md-10" style="padding-right: 0px !important; padding-left: 0px !important;">
                        <div class="ohvat"  >
                            Охват всей возможной аудитории
                            <div class="row">

                                <div class="container-fluid">
                                    <p class="large text-center  hidden-xs"
                                       style="font-size:16px;font-weight: normal;padding-left:15%;padding-right:15%;padding-top:15px;">
                                        Повышаем узнаваемость компании в Интернете <br>и формируем потребность в
                                        продукте, <br>делаем первое касание
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-1 hidden-xs" style="padding-right: 0px !important; padding-left: 0px !important;">
                        <div style="  width: 0; height: 130px;border-top: 130px solid #007bff; border-right: 98px solid transparent;"></div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row " style="padding-top:30px;">
            <div class="container ">
                <div class="row">
                    <div class="col-md-1 hidden-xs"></div>
                    <div class="col-md-1 hidden-xs" style="padding-right: 0px !important; padding-left: 0px !important;">
                        <div style="width: 0; height: 130px;border-top: 130px solid #c82333; border-left: 98px solid transparent;"></div>
                    </div>
                    <div class="col-md-8" style="padding-right: 0px !important; padding-left: 0px !important;">
                        <div  class="pklients">
                          <span class="mob-pad-60">Привлечение клиентов</span>
                            <div class="row">

                                <div class="container-fluid">
                                    <p class="large text-center hidden-xs"
                                       style="font-size:16px;font-weight: normal;padding-left:15%;padding-right:15%;padding-top:15px;">
                                        Настраиваем поток целевого трафика, <br>за счет чего вы постоянно получаете <br>потенциальных
                                        клиентов
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-1 hidden-xs" style="padding-right: 0px !important; padding-left: 0px !important;">
                        <div style="  width: 0; height: 130px;border-top: 130px solid #c82333; border-right: 96px solid transparent;"></div>
                    </div>
                    <div class="col-md-1 hidden-xs"></div>
                </div>
            </div>
        </div>
        <div class="row" style="padding-top:30px;">
            <div class="container ">
                <div class="row">
                    <div class="col-md-1 hidden-xs"></div>
                    <div class="col-md-1 hidden-xs"></div>
                    <div class="col-md-1 hidden-xs" style="padding-right: 0px !important; padding-left: 0px !important;">
                        <div style="width: 0; height: 130px;border-top: 130px solid #218838; border-left: 98px solid transparent;"></div>
                    </div>
                    <div class="col-md-6 " style="padding-right: 0px !important; padding-left: 0px !important;">
                        <div class="convertation"  >
                            Конвертация
                            <div class="row">

                                <div class="container-fluid">
                                    <p class="large text-center hidden-xs"
                                       style="font-size:16px;font-weight: normal;padding-left:15%;padding-right:15%;padding-top:15px;">
                                        Повышаем конверсию сайта улучшая показатели в аналитике, подключаем сервисы
                                        повышения конверсии сайта и
                                        конвертируем лидов в клиентов
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-1 hidden-xs" style="padding-right: 0px !important; padding-left: 0px !important;">
                        <div style="  width: 0; height: 130px;border-top: 130px solid #218838; border-right: 98px solid transparent;"></div>
                    </div>
                    <div class="col-md-1 hidden-xs"></div>
                    <div class="col-md-1 hidden-xs"></div>
                </div>
            </div>
        </div>
        <div class="row" style="padding-top:30px;">
            <div class="container ">
                <div class="row">
                    <div class="col-md-1 hidden-xs"></div>
                    <div class="col-md-1 hidden-xs"></div>
                    <div class="col-md-1 hidden-xs" style="padding-right: 0px !important; padding-left: 0px !important;">
                        <div style="  width: 0; height: 130px;border-bottom: 130px solid #ffc107; border-left: 98px solid transparent;"></div>
                    </div>

                    <div class="col-md-6" style="padding-right: 0px !important; padding-left: 0px !important;">
                        <div class="otnoshenia" >
                            Отношения с клиентом
                            <div class="row">

                                <div class="container-fluid">
                                    <p class="large text-center hidden-xs"
                                       style="font-size:16px;font-weight: normal;padding-left:15%;padding-right:15%;padding-top:15px">
                                        Улучшаем клиентский сервис, коммуникации, удовольствие от использования продукта
                                        играют важную роль в послеконверсионном периоде
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-1 hidden-xs" style="padding-right: 0px !important; padding-left: 0px !important;">
                        <div style="width: 0; height: 130px;border-bottom: 130px solid #ffc107; border-right: 98px solid transparent;"></div>
                    </div>
                    <div class="col-md-1 hidden-xs"></div>

                    <div class="col-md-1 hidden-xs"></div>
                </div>
            </div>
        </div>
        <div class="row" style="padding-top:30px;">
            <div class="container ">
                <div class="row">
                    <div class="col-md-1 hidden-xs"></div>

                    <div class="col-md-1 hidden-xs" style="padding-right: 0px !important; padding-left: 0px !important;">
                        <div style="  width: 0; height: 130px;border-bottom: 130px solid #343a40; border-left: 98px solid transparent;"></div>
                    </div>

                    <div class="col-md-8" style="padding-right: 0px !important; padding-left: 0px !important;">
                        <div class="uderganie">
                            Удержание
                            <div class="row">

                                <div class="container-fluid">
                                    <p class="large text-center hidden-xs"
                                       style="font-size:16px;font-weight: normal;padding-left:15%;padding-right:15%;padding-top:15px;">
                                        Если у клиентов был положительный опыт, они будут возвращаться на
                                        сайт. Возвращаем клиентов, работаем со старой базой, <br>увеличивая средний
                                        чек.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-1 hidden-xs" style="padding-right: 0px !important; padding-left: 0px !important;">
                        <div style="width: 0; height: 130px;border-bottom: 130px solid #343a40; border-right: 98px solid transparent;"></div>
                    </div>


                    <div class="col-md-1 hidden-xs"></div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- section end -->

<!-- section start анализируем данные-->
<section class="pv-30 " style="margin-top:550px; height:500px">
    <div class="container mob-pad-60">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="text-center"><strong>Анализируем данные</strong></h2>
                <div class="separator"></div>

            </div>


            <div class="col-md-6">
                <h2 style="font-size:22px; padding-top: 20px;"> Управляйте бизнесом на основе данных</h2>
                <div class="separator-2"></div>
                <p style="font-size:16px; padding-top: 20px;text-indent: 25px;">
                    Настроим сбор и визуализацию любых показателей Бизнеса для простого отслеживания, анализа и
                    прогнозирования.
                </p>
                <p style="font-size:16px;">
                    Внедряемые нами решения ежедневно выгружают данные из множества источников и помогают быстро перейти
                    к их эффективному анализу.
                </p>
                <br>
                <ul class="list-icons">
                    <li style="font-size: 16px !important;" class="object-non-visible"
                        data-animation-effect="fadeInUpSmall" data-effect-delay="100"><i
                                class="icon-check-1"></i> Делаем ваши продажи прозрачными и управляемыми
                    </li>
                    <li style="font-size: 16px !important;" class="object-non-visible"
                        data-animation-effect="fadeInUpSmall" data-effect-delay="150"><i
                                class="icon-check-1"></i> Консолидируем финансовую отчетность
                    </li>
                    <li style="font-size: 16px !important;" class="object-non-visible"
                        data-animation-effect="fadeInUpSmall" data-effect-delay="200"><i
                                class="icon-check-1"></i> Визуализируем структуру клиентской базы
                    </li>
                    <li style="font-size: 16px !important;" class="object-non-visible"
                        data-animation-effect="fadeInUpSmall" data-effect-delay="250"><i
                                class="icon-check-1"></i> Создаём омниканальные воронки для анализа маркетинга
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
                               data-toggle="tab"><i class="fa fa-bar-chart pr-10"></i>Маркетинг</a>
                        </li>
                        <li role="presentation">
                            <a href="#klienti" style="font-size: 16px" aria-controls="profile" role="tab"
                               data-toggle="tab"><i class="icon-users-1 pr-10"></i>Клиенты</a>
                        </li>
                        <li role="presentation">
                            <a href="#sale" style="font-size: 16px" aria-controls="messages" role="tab"
                               data-toggle="tab"><i class="fa fa-shopping-bag pr-10"></i>Продажи</a>
                        </li>
                        <li role="presentation">
                            <a href="#finance" style="font-size: 16px" aria-controls="messages" role="tab"
                               data-toggle="tab"><i class="fa fa-usd pr-10"></i>Финансы</a>
                        </li>

                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="marketing">
                            <div class="overlay-container overlay-visible">
                                <img src="/images/marketinf_bi.png" alt="">
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade " id="klienti">
                            <div class="overlay-container overlay-visible">
                                <img src="/images/klienti.png" alt="">
                                <a class="overlay-link"> </a>

                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade " id="sale">
                            <div class="overlay-container overlay-visible">
                                <img src="/images/sale.png" alt="">
                                <a class="overlay-link"> </a>

                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade " id="finance">
                            <div class="overlay-container overlay-visible">
                                <img src="/images/finance.png" alt="">
                                <a class="overlay-link"> </a>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
<!-- section end -->



<!-- section end акция-->
<section class="akcia section default-bg clearfix" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="call-to-action text-center">
                    <div class="row">
                        <div class="col-sm-8">
                            <h1 class="title" style="margin-top:15px;font-size: 24px">Хотите получить выгодное
                                предолжение?</h1>
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




<!-- section start -->
<!-- ================ -->
<section class="section pv-30">
    <div class="container">
        <div class="row justify-content-lg-center">
            <div class="container ">
                <div class="row  ">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-center  ">Наши <strong>Проекты</strong></h2>
                        <div class="separator"></div>
                        <p class="large text-center">Здесь Вы можете посмотреть примеры наших работ для наших клиентов</p>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <!-- isotope filters start -->
        <div class="filters d-flex justify-content-center">
            <ul class="nav nav-pills style-2">
                <?php foreach(\common\models\ArticleCategory::find()->active()->all() as $key=>$category) {?>
                    <li  class="nav-item"><a  class="nav-link <?= $key==0?"active":""?>"  href="#" data-filter=".<?= $category->slug;?>"><?= $category->title;?></a></li>
                <?php }?>
                <li class="nav-item"><a class="nav-link active" href="#" data-filter="*">All</a></li>
            </ul>
        </div>

        <!-- isotope filters end -->
        <div class="isotope-container row grid-space-0">

            <?php echo \common\widgets\Cases\CasesWidget::widget(['type' => 'project_all']); ?>

        </div>
        <div class="space-bottom"></div>
        <hr>
    </div>

</section>
<!-- section end -->





<!-- section start наши отзывы-->
<section class="pv-30" style="color: white;">
    <div class="col-lg-12">
        <h1 class="text-center" style="color: white;">Наши отзывы</h1>

    </div>
    <div class="testimonial  " style="background-color: #0156d6;">
        <div class="container">
            <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                <div class="carousel-inner">
                    <!-- QUOTE 1 -->
                    <div class="item">
                        <div class="row center-flex">
                            <div class="col-sm-3">
                                <img style="margin: 20px;" class="img-circle img-responsive" src="/images/team-member-2.jpg" alt="">
                            </div>
                            <div class="col-sm-9">
                                <i class="fa fa-quote-left"></i>
                                <p style="color: white;">Заказал в infomarket после 4-х неудачных моих попыток сделать у других: freelance- ров или фирм. Бот был сложный архитектурно и большой по обьему. Сделали без проблем, а главное в срок! Рекомендую infomarket, и вот почему:
                                    1. Скромная команда профессионалов.
                                    2. Не обещают, а делают!
                                    3. Не изменяют стоимость проекта: договор дороже денег!
                                    4. Редкое качество: не глухие к пожеланиям заказчика
                                    5. Воплотят в жизнь все капризы заказчика! Более того, всегда посоветуют как сделать изящнее, и терпеливо относятся, если вы что-то не понимаете.
                                    Недостатки: скромность команды , порой кажется, что в этом мире они видели все.
                                    Вывод: смело заказывайте у них сайт, бот, продвижение: вы сэкономите кучу нервов и денег!</p>
                                <cite>— Михаил Овчинников </cite>
                            </div>
                        </div>
                    </div>

                </div>
                <a data-slide="prev" href="index-6.html#quote-carousel" style="background: transparent;" class="left carousel-control"><i style="margin-top: 150px;margin-left: -180px;" class="fa fa-chevron-left"></i></a>
                <a data-slide="next" href="index-6.html#quote-carousel" style="background: transparent;" class="right carousel-control"><i style="margin-top: 150px;margin-right: -180px;" class="fa fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- section end -->

<!-- section start наша команда
<section class="pv-30">
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <h2 class="text-center">Наша команда<strong></strong></h2>
            <div class="separator"></div>
        </div>
        <div class="row grid-space-10">
            <div class="col-md-4">
                <div class="team-member image-box style-2 bordered light-gray-bg text-center">
                    <img src="images/team-member-1.jpg" alt="">
                    <div class="body">
                        <h3 class="margin-clear">Роман Логачев</h3>
                        <div style="margin-top:15px;margin-bottom:15px;"><small>CEO</small></div>
                        <div class="separator mt-10"></div>
                        <p class="small margin-clear">, </p>
                        <div class="separator mt-10"></div>
                        <ul class="social-links colored margin-clear">
                            <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i
                                            class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i
                                            class="fa fa-twitter"></i></a></li>
                            <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i
                                            class="fa fa-google-plus"></i></a></li>
                        </ul>
                        <div class="separator mt-10 mb-10"></div>
                        <a href="tel:123123123123123" class="margin-clear btn btn-md-link link-dark"><i
                                    class="pr-10 fa fa-phone"></i>Call</a>
                        <a href="mailto:info@theproject.com" class="margin-clear btn btn-md-link link-dark"><i
                                    class="pr-10 fa fa-envelope-o"></i>Contact</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member image-box style-2 bordered light-gray-bg text-center">
                   <img src="images/team-member-2.jpg" alt="">
                    <div class="body">
                        <h3 class="margin-clear">Иван Логачев</h3>
                        <div style="margin-top:15px;margin-bottom:15px;"><small>CTO</small></div>
                        <div class="separator mt-10"></div>
                        <p class="small margin-clear">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Voluptates praesentium nulla cupiditate!</p>
                        <div class="separator mt-10"></div>
                        <ul class="social-links colored margin-clear">
                            <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i
                                            class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i
                                            class="fa fa-twitter"></i></a></li>
                            <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i
                                            class="fa fa-google-plus"></i></a></li>
                        </ul>
                        <div class="separator mt-10 mb-10"></div>
                        <a href="tel:123123123123123" class="margin-clear btn btn-md-link link-dark"><i
                                    class="pr-10 fa fa-phone"></i>Call</a>
                        <a href="mailto:info@theproject.com" class="margin-clear btn btn-md-link link-dark"><i
                                    class="pr-10 fa fa-envelope-o"></i>Contact</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member image-box style-2 bordered light-gray-bg text-center">
                  <img src="images/team-member-3.jpg" alt="">
                    <div class="body">
                        <h3 class="margin-clear">Александр Мельников</h3>
                        <div style="margin-top:15px;margin-bottom:15px;"><small>Project Manager</small></div>
                        <div class="separator mt-10"></div>
                        <p class="small margin-clear">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Voluptates praesentium nulla cupiditate!</p>
                        <div class="separator mt-10"></div>
                        <ul class="social-links colored margin-clear">
                            <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i
                                            class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i
                                            class="fa fa-twitter"></i></a></li>
                            <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i
                                            class="fa fa-google-plus"></i></a></li>
                        </ul>
                        <div class="separator mt-10 mb-10"></div>
                        <a href="tel:123123123123123" class="margin-clear btn btn-md-link link-dark"><i
                                    class="pr-10 fa fa-phone"></i>Call</a>
                        <a href="mailto:info@theproject.com" class="margin-clear btn btn-md-link link-dark"><i
                                    class="pr-10 fa fa-envelope-o"></i>Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->
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
                    Мы стараемся выполнять свою работу качественно и в срок.
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
                                <p class="mt-10"><a href="#zakazBotModal" data-toggle="modal" data-target="#zakazBotModal"
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


<!-- section start тарифы-->
<section class="pv-40">
    <div class="container">
        <h1 class=" text-center mt-4" style="font-size: 30px;">Выберите <strong>план</strong></h1>
        <div class="separator with-icon"><i class="fa fa-rocket bordered"></i></div>
        <p class="large text-center">Действуя по индивидуально разработанной для вас стратегии, мы каждый месяц <br>оцениваем
            KPI и обновляем список задач.
            Объем услуг зависит от выбранного вами тарифа. <br>Количество часов, потраченных за каждый месяц, определяет
            скорость получения результата.</p>
        <!-- pricing tables start -->
        <!-- ================ -->
        <div style="margin-top:100px;"
             class="pricing-tables stripped object-non-visible animated object-visible fadeInUpSmall"
             data-animation-effect="fadeInUpSmall" data-effect-delay="0">
            <div class="row grid-space-0">
                <!-- pricing table start -->
                <!-- ================ -->
                <div class="col-md-3 plan stripped">
                    <div class="header default-bg">
                        <h3>Basic</h3>
                        <div class="price"><span style="    font-size: 18px;">30 тыс.руб./мес. |   20 часов</span></div>
                    </div>
                    <ul>
                        <li>Консультации специалистов</li>
                        <li>Оптимизация сайта</li>
                        <li>Landing Page (1-2 экрана)</li>
                        <li>Онлайн-консультанты, лид-формы</li>
                        <li>SMM продвижение</li>
                        <li>Интеграция с CRM</li>
                        <li>Техподдержка</li>
                        <li><a href="#zakazTarifModal"  data-toggle="modal" data-target="#zakazTarifModal"  class="btn btn-default-transparent btn-animated">Выбрать <i
                                        class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
                <!-- pricing table end -->

                <!-- pricing table start -->
                <!-- ================ -->
                <div class="col-md-3 plan stripped">
                    <div class="header default-bg">
                        <h3>Premium</h3>
                        <div class="price"><span style="font-size: 18px;">60 тыс.руб./мес. |   40 часов</span></div>
                    </div>
                    <ul>


                        <li>
                            <a href="#" class="pt-popover" data-toggle="popover" data-placement="top"
                               data-content="* предлагаем 2-3 варианта эскиза на выбор"
                               title="" data-original-title="Landing Page">Landing Page</a>
                        </li>

                        <li>Первичная оптимизация, наполнение</li>

                        <li>Семантическое ядро</li>
                        <li>Контекстная реклама (до 500 ключей)</li>
                        <li>SMM продвижение</li>
                        <li>Интеграция с CRM</li>
                        <li>
                            <a href="#" class="pt-popover" data-toggle="popover" data-placement="top"
                               data-content="* включены все услуги тарифа Basic"
                               title="" data-original-title="Услуги тарифа Basic">Услуги тарифа Basic</a>
                        </li>
                        <li><a  href="#zakazTarifModal"  data-toggle="modal" data-target="#zakazTarifModal"   href="#" class="btn btn-default-transparent btn-animated">Выбрать <i
                                        class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
                <!-- pricing table end -->

                <!-- pricing table start -->
                <!-- ================ -->
                <div class="col-md-3 plan stripped best-value">
                    <div class="header default-bg">
                        <h3>Pro</h3>
                        <div class="price"><span style="font-size: 18px;">100 тыс.руб./мес. |   80 часов</span></div>
                    </div>
                    <ul>
                        <li>Фирменный цвет, логотип</li>
                        <li>Маркетинг-кит</li>
                        <li>
                            <a href="#" class="pt-popover" data-toggle="popover" data-placement="top"
                               data-content="* предлагаем 2-3 комплекта эскизов на выбор"
                               title="" data-original-title="Разработка сайта">Разработка сайта</a>
                        </li>
                        <li>Настройка поиска, фильтров, навигации</li>
                        <li>Контент-маркетинг</li>
                        <li>Оптимизация под мобильные устройства</li>
                        <li>
                            <a href="#" class="pt-popover" data-toggle="popover" data-placement="top"
                               data-content="* включены все услуги тарифа Premium"
                               title="" data-original-title="Услуги тарифа Premium">Услуги тарифа Premium</a>
                        </li>
                        <li><a  href="#zakazTarifModal"  data-toggle="modal" data-target="#zakazTarifModal"   href="#" class="btn btn-default-transparent btn-animated">Выбрать <i
                                        class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
                <!-- pricing table end -->

                <!-- pricing table start -->
                <!-- ================ -->
                <div class="col-md-3 plan">
                    <div class="header default-bg">
                        <h3>Luxury</h3>
                        <div class="price"><span style="font-size: 18px;">200 тыс.руб./мес. |   100 часов</span></div>
                    </div>
                    <ul>
                        <li>Сайт любой сложности под ключ</li>
                        <li>Коллтрекинг</li>
                        <li>Обучение отдела продаж</li>
                        <li>Внедрение авто-воронок</li>
                        <li>Внедрение сквозной аналитики</li>
                        <li>Внедрение омни-канальных воронок</li>
                        <li>Аналитические дашборды</li>
                        <li><a  href="#zakazTarifModal"  data-toggle="modal" data-target="#zakazTarifModal"   href="#" class="btn btn-default-transparent btn-animated">Выбрать <i
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

<!-- section start форма захвата ключевая услуга -->
<section id="intro-hero hero-content" style="height: 650px; background: url(/images/slider-fullwidth-slide-1.jpg) no-repeat scroll 0 0; background-position: 0px;  background-size: cover; padding-top: -100px;display: block;">
    <div class="container-fluid">
        <div class="row" style="padding-top: 80px;">
            <div class="col-md-2 col-sm-2">

            </div> <!-- END col-md-7 col-sm-6-->
            <div class="col-md-5 col-sm-5">
                <h1 class="hero-title" style="font-size: 28px; color: white; padding: 20px; background-color: #0156d6; ">
                    <?= \common\modules\widget\widgets\DbText::widget([
                        'key' => 'main.block.utp_key_services'
                    ]); ?>
                </h1>
                <p class="hero-tagline top-15" style="color:white;  font-size:18px">
                    <span style="padding: 3px;background-color: #0156d6; margin-top:35px;"> Увеличение продаж за счет прямых уведомлений,  </span><br>
                    <span style="padding: 3px;background-color: #0156d6; margin-top:35px;">рассылки и допродаж в привычной покупателю среде - мессенджере </span><br>
                    <span style="padding: 3px;background-color: #0156d6; margin-top:35px;">Продавать ваши товары 24/7 в привычной для вас и ваших клиентов форме;</span><br>
                    <span style="padding: 3px;background-color: #0156d6; margin-top:35px;">Делать рассылки, уведомления по вашей базе клиентов; </span><br>
                    <span style="padding: 3px;background-color: #0156d6; margin-top:35px;">Собирать обратную связь, отзывы и комментарии.</span>
                </p>
                <div class="">
                    <a href="/service" class="btn btn-default btn-hvr hvr-shutter-out-horizontal btn-lg" style="">
                        Услуги <span class="icon_t icon-play-button2"></span>
                    </a>
                    <a href="#zakazBotModal" data-toggle="modal" data-target="#zakazBotModal" class="btn btn-gray btn-animated btn-lg">
                        Заказать  <i class="fa fa-cart-arrow-down pl-20"></i>
                    </a>
                </div>
            </div> <!-- END col-md-7 col-sm-6-->
            <div class="col-md-5 col-sm-5 hidden-xs">
                <?php $form = \kartik\form\ActiveForm::begin([
                    'id' => 'login-form',
                    'action'=>'orderbot',
                    'method' => 'post',
                    'options' => [
                        'class' => 'registration-form text-center',
                    ]
                ]); ?>
                <?= $form->field($contactForm, 'source_form')->hiddenInput(['value' => 'orderbot1'])->label(false); ?>
                <h3>Протестируйте чат бота в вашем бизнесе.</h3>
                <p style="font-size:17px;" class="hero-tagline top-15">
                    Чат-бот задает вопросы по порядку, тем самым линейно приближая пользователя к достижению конечной цели, например, заказу пиццы.
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
                    <?php echo \borales\extensions\phoneInput\PhoneInput::widget([
                        'name'=>'phone',
                        'jsOptions' => [
                            'allowExtensions' => true,
                            'onlyCountries' => ['ru'],
                        ]
                    ]); ?>
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
<!-- section end -->

<!-- section start наши партнеры -->
<section class="dark-translucent-bg parallax pv-30"
         style="background-image:url(images/corporate-5-section-image-2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="text-center">Наши <strong>Партнеры</strong></h2>
                <div class="separator with-icon"><i class="fa fa-suitcase bordered"></i></div>
                <p class="large text-center">Мы благодарим всех партнеров за хорошую и продуктивную деятельность,
                    которую мы вместе осуществляем уже более 6 лет.</p>
            </div>
        </div>

    </div>

    <div class="row ">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-8 col-md-offset-2">
                    <div class="text-center">
                        <div class="col-md-3 text-center">
                            <img   class="imgpartnersya" src="frontend/web/images/yandex.png" alt="">
                        </div>
                        <div class="col-md-3 text-center">
                            <img   class="imgpartnersgoogle" src="frontend/web/images/google.png" alt="">
                        </div>
                        <div class="col-md-3 text-center">
                            <img    class="imgpartners"  src="frontend/web/images/sc.png" alt="">
                        </div>
                        <div class="col-md-3 text-center">
                            <img   class="imgpartners"  src="frontend/web/images/microsoft.png" alt="">
                        </div>

                   </div>
                </div>

            </div>

        </div>
    </div>
</section>
<!-- section end -->


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
                                <h3 class="title" style="font-size: 28px;font-family:Raleway,sans-serif !important;">Контакты</h3>
                                <div class="separator-2"></div>
                                <ul class="list">
                                    <li style="weight:80%;color: #777777; font-size: 18px;font-family:Raleway,sans-serif !important;"><i class="fa fa-home pr-10 text-default"></i>
                                        <span style="font-family:Arial,sans-serif !important;">191119</span>
                                        Москва, Ленинский пр.  <span style="font-family:Arial,sans-serif !important;">42</span> к <span style="font-family:Arial,sans-serif !important;">1</span></li>
                                    <li>
                                        <i class="fa fa-phone pr-10 text-default"></i><a style="color: #777777; font-size: 18px;font-family:Arial,sans-serif !important; href="tel:+74951331618">
                                            +7(495) 133 16 18
                                        </a>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope pr-10 text-default"></i>
                                        <a style="color: #777777; font-size: 18px;font-family:Arial !important; href="mailto:info@infomarketstudio.ru">info@infomarketstudio.ru</a>
                                    </li>
                                    <li style="font-size: 18px;font-family:Raleway,sans-serif !important;">
                                        <a target="_blank" href="https://telegram.me/infostudiobot"
                                           style="color:#777777;">
                                            <i class="glyphicon glyphicon-send  pr-10 text-default"></i>Телеграм бот</a>
                                    </li>
                                </ul>
                                <a target="_blank" class="btn btn-gray collapsed map-show btn-animated"
                                   href="https://www.google.ru/maps/place/%D0%9B%D0%B5%D0%BD%D0%B8%D0%BD%D1%81%D0%BA%D0%B8%D0%B9+%D0%BF%D1%80%D0%BE%D1%81%D0%BF.,+42+%D0%BA%D0%BE%D1%80%D0%BF%D1%83%D1%81+1,+%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0,+119119/@55.702563,37.5644593,17z/data=!3m1!4b1!4m5!3m4!1s0x46b54c839aaa0f95:0xd62948b52bbf850f!8m2!3d55.70256!4d37.566648?hl=ru" aria-expanded="false" aria-controls="collapseMap">Показать карту
                                    <i
                                            class="fa fa-external-link"></i></a>
                            </div>
                        </div>
                        <div class="sidebar">
                            <div class="block clearfix">
                                <h3 class="title" style="font-size: 28px;font-family:'Raleway, sans-serif'">Мы в социальных сетях</h3>
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2248.2191131290915!2d37.5644593154267!3d55.702563003333786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54c839aaa0f95%3A0xd62948b52bbf850f!2z0JvQtdC90LjQvdGB0LrQuNC5INC_0YDQvtGB0L8uLCA0MiDQutC-0YDQv9GD0YEgMSwg0JzQvtGB0LrQstCwLCAxMTkxMTk!5e0!3m2!1sru!2sru!4v1517911962310" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <!-- main end -->
        </div>
    </div>
</section>
<!-- section end -->




