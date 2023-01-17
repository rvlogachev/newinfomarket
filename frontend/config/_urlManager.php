<?php
return [
    'class' => \common\components\MyUrlManager::class,
    'enablePrettyUrl' => true,
    'showScriptName' => false,
//    'suffix' => '/',
    'rules'=> [
        // Главная страница
        '' => 'site/index',
        // Кейсы
        'cases' => '/prpart/cases/index',
        'alice' => 'site/alice',

        'chatbot' => 'site/chatbot',
        'webdev' => 'site/webdev',
        'messenger' => 'site/messenger',
        //'analytic' => 'site/analytic',
        //'advertise' => 'site/advertise',

        'cases/page/<page:\d+>' => '/prpart/cases/index',
        //   'cases/<id:\d+>' => 'cases/view',
        //  'cases/<id:\d+>/<slug:[\w_-]+>' => 'cases/view',

        'cases/<id:\d+>/<slug:[\w_-]+>' => '/prpart/cases/view',
//        'cases/<id:\d+>' => 'cases/view',

    // ['pattern'=>'cases/view', 'route'=>'cases/view'],
        // Услуги
        'service' =>'site/service',
        // О нас
        'about' => 'site/about',


        'rtc' => 'site/rtc',
        '/site/infostudiobot' => '/site/infostudiobot',

        '/site/infostudiobotwebhook' => '/site/infostudiobotwebhook',

        '/getaudit' => '/site/getaudit',
        '/support' => '/site/support',
        '/agreement' => '/site/agreement',
        '/condition' => '/site/condition',

        '/analytics' => '/site/analytics',

        '/orderanalytics' => '/site/orderanalytics',
        '/orderkp' => '/site/orderkp',
        '/orderbot' => '/site/orderbot',
        '/ordersite' => '/site/ordersite',
        '/search' => '/site/search',


        '/site/auth' => '/site/auth',
        '/tunel' => '/site/tunel',
        '/inst' => '/site/inst',



        // Партнеры
        'partners' => '/prpart/partners',



// Блог
//      'blog/<category:.+>/page/<page:\w+>'=>'blog/default/category',
//      'blog/<category:[\w_\/-]+>/sort/<sort:[\w\.]+>/page/<page:\d+>/per-page/<per-page:\d+>'=>'blog/default/category',
//      'blog/<category:[\w_\/-]+>/sort/<sort:[\w\.]+>/page/<page:\d+>'=>'blog/default/category',
//      'blog/<category:[\w_\/-]+>/sort/<sort:[\w\.]+>'=>'blog/default/category',
        'blog/<category:[\w_\/-]+>/page/<page:\w+>/per-page/<per-page:\w+>'=>'blog/default/category',
        'blog/<category:[\w_\/-]+>/page/<page:\w+>'=>'blog/default/category',
        'blog/<category:[\w_\/-]+>'=>'blog/default/category',
        'blog'=>'blog/default/index',



        // Контакты
        'contact'=>'site/contact',
        'site/success'=>'site/success',
        'site/captcha'=>'site/captcha',
        '/profile'=>'/user/default/index',
        '/signup'=>'/user/sign-in/signup',

        '/login'=>'/user/sign-in/login',
        '/logout'=>'/user/sign-in/logout',

        '/user/sign-in/oauth'=>'/user/sign-in/oauth',
        '/user/sign-in/request-password-reset' => '/user/sign-in/request-password-reset',
        '/user/default/index'=>'/user/default/index',
        '/join'=>'/join',
        '/user/default/avatar-upload'=>'/user/default/avatar-upload',

        '/telegram/default/init-chat'=>'/telegram/default/init-chat',
        '/telegram/chat/get-all-messages'=>'/telegram/chat/get-all-messages',
        '/telegram/chat/send-msg'=>'/telegram/chat/send-msg',
        '/telegram/chat/get-last-messages'=>'/telegram/chat/get-last-messages',
        '/telegram/default/hook'=>'/telegram/default/hook',
        '/telegram/default/destroy-chat'=>'/telegram/default/destroy-chat',

        // Api
        ['class' => 'yii\rest\UrlRule', 'controller' => 'api/v1/article', 'only' => ['index', 'view', 'options']],
        ['class' => 'yii\rest\UrlRule', 'controller' => 'api/v1/user', 'only' => ['index', 'view', 'options']],



        ['pattern' => 'sitemap', 'route' => 'sitemap/default/index', 'suffix' => '.xml'],
        ['pattern' => 'yandex_turbo', 'route' => 'yandexTurbo/yandex-turbo/index', 'suffix' => '.xml'],


        ['class' => 'common\components\SefRule',
            'connectionID' => 'db',
        ],

    ]
];
