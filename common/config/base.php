<?php
$config = [
    'name' => 'Infomarketstudio.ru',
    'vendorPath' => __DIR__ . '/../../vendor',
    'extensions' => require(__DIR__ . '/../../vendor/yiisoft/extensions.php'),
    'sourceLanguage' => 'en-US',
    'language' => 'en-US',
    'bootstrap' => ['log'], //,'queue','common\modules\shop\modules\order\Bootstrap'
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'modules' => [

        'tree' => [
            'class' => 'common\modules\shop\modules\tree\Module',
            'adminRoles' => ['@'],
        ],
        'gallery' => [
            'class' => 'common\modules\shop\modules\gallery\Module',
            'imagesStorePath' => Yii::getAlias('@storage').'/web/source/store', //path to origin images
            'imagesCachePath' => Yii::getAlias('@storage').'/web/source/cache', //path to resized copies
            'graphicsLibrary' => 'GD',
            'placeHolderPath' => '@frontendUrl/images/placeHolder.png',
            'adminRoles' => ['administrator', 'admin', 'superadmin'],
        ],
        'field' => [
            'class' => 'common\modules\shop\modules\field\Module',
            'relationModels' => [
                'common\models\User' => 'Пользователи',
                'common\modules\shop\models\Product' => 'Продукты',
            ],
            'adminRoles' => ['administrator'],
        ],
        'filter' => [
            'class' => 'common\modules\shop\modules\filter\Module',
            'relationFieldName' => 'category_id', //Наименование поля, по значению которого будут привязыватья опции
            //callback функция, которая возвращает варианты relationFieldName
            'relationFieldValues' =>
                function() {
                    //Пример с деревом:
                    $return = [];
                    $categories = \common\modules\shop\models\Category::find()->all();
                    foreach($categories as $category) {
                        if(empty($category->parent_id)) {
                            $return[] = $category;
                            foreach($categories as $category2) {
                                if($category2->parent_id == $category->id) {
                                    $category2->name = ' --- '.$category2->name;
                                    $return[] = $category2;
                                }
                            }
                        }
                    }
                    return \yii\helpers\ArrayHelper::map($return, 'id', 'name');
                },
        ],
        'relations' => [
            'class' => 'common\modules\shop\modules\relations\Module',
            'fields' => ['code'],
        ],
        'cart' => [
            'class' => 'common\modules\shop\modules\cart\Module',
        ],
        'bot' => [
            'class' => common\modules\bot\BotModule::class,
        ],
//        'system' => [
//            'class' => common\modules\system\Module::class,
//        ],
        'integration' => [
            'class' => common\modules\integration\IntegrationModule::class,
        ],

//        'shop' => [
//            'class' => 'common\modules\shop\Module',
//            'adminRoles' => ['administrator', 'superadmin', 'admin'],
//            'defaultPriceTypeId' => 1, //Цена по умолчанию
//        ],
//        'order' => [
//            'class' => 'common\modules\shop\modules\order\Module',
//            'layoutPath' => 'frontend\views\layouts',
//            'successUrl' => '/page/thanks', //Страница, куда попадает пользователь после успешного заказа
//            'adminNotificationEmail' => 'logachev.work@gmail.com', //Мыло для отправки заказов
//        ],

    ],
    'components' => [
        'ajax' => ['class' => common\modules\integration\components\ajax\AsyncResponse::class],
        'session' => [
            'class' => 'yii\web\DbSession',
            'sessionTable' => 'system_session', // название таблицы для хранения данных сессии. По умолчанию 'session'.
        ],
        'amqp' => [
            'class' => \devmustafa\amqp\components\Amqp::class,
            'host' =>       getenv('HOST_RABBITMQ'),
            'port' =>       getenv('PORT_RABBITMQ'),
            'user' =>       getenv('USER_RABBITMQ'),
            'password' =>   getenv('PASSWORD_RABBITMQ'),
            'vhost' =>      getenv('VHOST_RABBITMQ'),

        ],
        'amocrm' => [
            'class' => yii\amocrm\Client::class,
            'subdomain' => 'infomarketstudio', // Персональный поддомен на сайте amoCRM
            'login' => 'ilogachev@infomarketstudio.ru', // Логин на сайте amoCRM
            'hash' => 'b886c4e53f24e92404062240c42b8ba01b743c31', // Хеш на сайте amoCRM

            // Для хранения ID полей можно воспользоваться хелпером
            'fields' => [
                'StatusId' => 10525225,
                'ResponsibleUserId' => 697344,
            ],
        ],
        'treeSettings' => [
            'class' => 'common\modules\shop\modules\tree\TreeSettings',
            'models' => [
                'common\modules\shop\models\Category' => [1=>'33'], //массив с настройками. Если не чего не передать, будут установлены дефолтные настройки. Все настроки описаны ниже.
            ],
        ],
        'authManager' => [
            'class' => yii\rbac\DbManager::class,
            'itemTable' => '{{%rbac_auth_item}}',
            'itemChildTable' => '{{%rbac_auth_item_child}}',
            'assignmentTable' => '{{%rbac_auth_assignment}}',
            'ruleTable' => '{{%rbac_auth_rule}}'
        ],
        'redis' => [
            'class' => 'yii\redis\Connection',
            'hostname' => 'localhost',
            'port' => 6379,
            'database' => 0,
        ],
        'reCaptcha' => [
            'name' => 'reCaptcha',
            'class' => 'himiklab\yii2\recaptcha\ReCaptcha',
            'siteKey' => '6Lfe8YwUAAAAAI4Q63KZT3ZPyVPEWRC-4UOldjwU',
            'secret' => '6Lfe8YwUAAAAAE9BBiHRu8ieHDNxyXG9BXsMyX4v',
        ],
//        'zadorma' => array(
//            'class' => \common\modules\zadarma\components\Zadorma::className(),
//        ),
        'cache' => [
            'class' => yii\caching\FileCache::class,
            'cachePath' => '@common/runtime/cache'
        ],
//        'commandBus' => [
//            'class' => trntv\bus\CommandBus::class,
//            'middlewares' => [
//                [
//                    'class' => trntv\bus\middlewares\BackgroundCommandMiddleware::class,
//                    'backgroundHandlerPath' => '@console/yii',
//                    'backgroundHandlerRoute' => 'command-bus/handle',
//                ]
//            ]
//        ],

        'commandBus' => [
            'class' => '\trntv\tactician\Tactician',
            'commandNameExtractor' => '\League\Tactician\Handler\CommandNameExtractor\ClassNameExtractor',
            'methodNameInflector' => '\League\Tactician\Handler\MethodNameInflector\HandleInflector',
            'commandToHandlerMap' => [
                'common\modules\queuemanager\commands\command\SendEmailCommand' => '\common\modules\queuemanager\commands\handler\SendEmailHandler',
                'common\modules\queuemanager\commands\command\SendSMSCommand' => '\common\modules\queuemanager\commands\handler\SendSMSHandler',
                'common\modules\queuemanager\commands\command\SendSlackCommand' => '\common\modules\queuemanager\commands\handler\SendSlackHandler',
                'common\modules\queuemanager\commands\command\SendCommand' => '\common\modules\queuemanager\commands\handler\SendHandler',
                'common\modules\queuemanager\commands\command\SendSocketCommand' => '\common\modules\queuemanager\commands\handler\SendSocketHandler',
                'common\modules\queuemanager\commands\command\AddToTimelineCommand' => '\common\modules\queuemanager\commands\handler\AddToTimelineHandler',
                'common\modules\queuemanager\commands\command\AddLeadCommand' => '\common\modules\queuemanager\commands\handler\AddLeadHandler',
            ]
        ],
        'formatter' => [ //for the showing of date datetime
            'dateFormat' => 'yyyy-MM-dd',
            'datetimeFormat' => 'yyyy-MM-dd HH:mm:ss',
            'decimalSeparator' => ',',
            'thousandSeparator' => ' ',
            'currencyCode' => 'CNY',
        ],
        'glide' => [
            'class' => trntv\glide\components\Glide::class,
            'sourcePath' => '@storage/web/source',
            'cachePath' => '@storage/cache',
            'urlManager' => 'urlManagerStorage',
            'maxImageSize' => env('GLIDE_MAX_IMAGE_SIZE'),
            'signKey' => env('GLIDE_SIGN_KEY')
        ],
        'mailer' => [
            'class' => \yii\swiftmailer\Mailer::className(),
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => getenv('ADMIN_EMAIL_HOST'),
                'username' =>  getenv('ADMIN_EMAIL'),
                'password' =>  getenv('ADMIN_EMAIL_PASS'),
                'port' => '465',
                'encryption' => 'ssl',
            ],
        ],
        'db' => [
            'class' => yii\db\Connection::class,
            'dsn' => env('DB_DSN'),
            'username' => env('DB_USERNAME'),
            'password' => env('DB_PASSWORD'),
            'tablePrefix' => env('DB_TABLE_PREFIX'),
            'charset' => env('DB_CHARSET', 'utf8'),
            'enableSchemaCache' => YII_ENV_PROD,
        ],
        'log' => [
            'traceLevel' =>  0 ,
            'targets' => [
                'db' => [
                    'class' => 'yii\log\DbTarget',
                    'levels' => ['error', 'warning'],
                    'except' => ['yii\web\HttpException:*', 'yii\i18n\I18N\*'],
                    'prefix' => function () {
                        $url = !Yii::$app->request->isConsoleRequest ? Yii::$app->request->getUrl() : null;
                        return sprintf('[%s][%s]', Yii::$app->id, $url);
                    },
                    'logVars' => [],
                    'logTable' => '{{%system_log}}'
                ],
                'file' => [
                    'class' => 'yii\log\FileTarget',
                    'categories' => ['chat'],
                    'levels' => ['error', 'warning','info'],
                    'logVars' => [],
                    'logFile' => '@frontend/runtime/logs/log.log',
                ],
            ],
        ],
        'i18n' => [
            'translations' => [
                'app' => [
                    'class' => yii\i18n\PhpMessageSource::class,
                    'basePath' => '@common/messages',
                ],
                     'backend' => [
                      'class' => yii\i18n\PhpMessageSource::class,
                      'basePath' => '@common/messages',
                      'fileMap' => [
                          'common' => 'common.php',
                          'backend' => 'backend.php',
                          'frontend' => 'frontend.php',
                      ],
                      'on missingTranslation' => [common\modules\translation\Module::class, 'missingTranslation']
                  ],
                  /* Uncomment this code to use DbMessageSource*/
                 '*'=> [
                    'class' => 'yii\i18n\DbMessageSource',
                    'sourceMessageTable'=>'{{%i18n_source_message}}',
                    'messageTable'=>'{{%i18n_message}}',
                    'enableCaching' => YII_ENV_DEV,
                    'cachingDuration' => 3600,
                    'on missingTranslation' => [common\modules\translation\Module::class, 'missingTranslation']
                ],

            ],
        ],
        //        'fileStorage' => [
//            'class' => trntv\filekit\Storage::class,
//            'baseUrl' => '@storageUrl/source',
//            'filesystem' => [
//                'class' => common\components\filesystem\LocalFlysystemBuilder::class,
//                'path' => '@storage/web/source'
//            ],
//            'as log' => [
//                'class' => common\behaviors\FileStorageLogBehavior::class,
//                'component' => 'fileStorage'
//            ]
//        ],
        'fileStorage' => [
            'class' => trntv\filekit\Storage::class,
            'baseUrl' => '@storageUrl/source',
            'filesystem'=> function() {
                $adapter = new \League\Flysystem\Adapter\Local(dirname(dirname(__DIR__)).'/storage/web/source');
                return new League\Flysystem\Filesystem($adapter);
            },
        ],
        'keyStorage' => [
            'class' => \common\modules\system\components\keyStorage\KeyStorage::class
        ],
        'urlManagerBackend' => \yii\helpers\ArrayHelper::merge(
            [
                'hostInfo' => env('BACKEND_HOST_INFO'),
                'baseUrl' => env('BACKEND_BASE_URL'),
            ],
            require(Yii::getAlias('@backend/config/_urlManager.php'))
        ),
        'urlManagerFrontend' => \yii\helpers\ArrayHelper::merge(
            [
                'hostInfo' => env('FRONTEND_HOST_INFO'),
                'baseUrl' => env('FRONTEND_BASE_URL'),
            ],
            require(Yii::getAlias('@frontend/config/_urlManager.php'))
        ),
        'urlManagerStorage' => \yii\helpers\ArrayHelper::merge(
            [
                'hostInfo' => env('STORAGE_HOST_INFO'),
                'baseUrl' => env('STORAGE_BASE_URL'),
            ],
            require(Yii::getAlias('@storage/config/_urlManager.php'))
        ),
        'queue' => [
            'class' => \yii\queue\redis\Queue::class,
            'redis' => 'redis', // connection ID
            'channel' => 'queue', // queue channel
        ],
        'cart' => [
            'class' => 'common\modules\shop\modules\cart\Cart',
            'currency' => 'р.', //Валюта
            'currencyPosition' => 'after', //after или before (позиция значка валюты относительно цены)
            'priceFormat' => [2,'.', ''], //Форма цены
        ],
        'promocode' => [
            'class' => 'common\modules\shop\modules\promocode\Module',
            'informer' => 'common\modules\shop\modules\cart\widgets\CartInformer', // namespace to custom cartInformer widget
            'informerSettings' => [], //settings for custom cartInformer widget
            'clientsModel' => 'common\models\User', //Модель пользователей
            //Указываем модели, к которым будем привязывать промокод
            'targetModelList' => [
                'Категории' => [
                    'model' => 'common\modules\shop\models\Category',
                    'searchModel' => 'common\modules\shop\models\category\CategorySearch'
                ],
                'Продукты' => [
                    'model' => 'common\modules\shop\models\Product',
                    'searchModel' => 'common\modules\shop\models\product\ProductSearch'
                ],
            ],
        ],
    ],
    'params' => [
        'adminEmail' => env('ADMIN_EMAIL'),
        'robotEmail' => env('ROBOT_EMAIL'),
        'blogTitle' =>'blogTitle',
        'blogTitleSeo' =>'blogTitleSeo',
        'blogFooter' =>'blogFooter',
        'availableLocales' => [
            'en-US' => 'English (US)',
            'ru-RU' => 'Русский (РФ)',
            'uk-UA' => 'Українська (Україна)',
            'es' => 'Español',
            'vi' => 'Tiếng Việt',
            'zh-CN' => '简体中文',
            'pl-PL' => 'Polski (PL)',
        ],
        'blogPostPageCount' => '10',
        'blogLinks' => [
            'Infomarket' => 'https://infomarketstudio.ru',

        ],
        'blogUploadPath' => 'upload/', //default to frontend/web/upload
    ],

];

if (YII_ENV_PROD) {
    $config['components']['log']['targets']['email'] = [
        'class' => yii\log\EmailTarget::class,
        'except' => ['yii\web\HttpException:*'],
        'levels' => ['error', 'warning'],
        'message' => ['from' => env('ROBOT_EMAIL'), 'to' => env('ADMIN_EMAIL')]
    ];
}

if (YII_ENV_DEV) {
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => yii\gii\Module::class,
        'generators' => [
            'job' => [
                'class' => \yii\queue\gii\Generator::class,
            ],
        ],
    ];

    $config['components']['cache'] = [
        'class' => yii\caching\DummyCache::class
    ];

}

return $config;
