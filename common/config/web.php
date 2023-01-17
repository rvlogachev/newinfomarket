<?php
$config = [
    'components' => [
        'assetManager' => [
            'class' => yii\web\AssetManager::class,
            'linkAssets' => env('LINK_ASSETS'),
            'appendTimestamp' => true,
//            'bundles' => array(
//                'yii\web\JqueryAsset' => array( // изменяем используемый файл/версию Jquery
//                    'sourcePath' => null,
//                    'js' => array(
//                        '//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', // путь к новому файлу
//                    ),
//                ),
//            )
        ]
    ],
    'as locale' => [
        'class' => common\behaviors\LocaleBehavior::class,
        'enablePreferredLanguage' => true
    ]
];

if (YII_DEBUG) {
//    $config['bootstrap'][] = 'debug';
//    $config['modules']['debug'] = [
//        'class' => yii\debug\Module::class,
//        'allowedIPs' => ['127.0.0.1', '::1', '109.188.82.149', '172.17.42.1', '172.17.0.1', '192.168.99.1'],
//    ];
}

if (YII_ENV_DEV) {
    $config['modules']['gii'] = [
        'allowedIPs' => ['127.0.0.1', '::1', '109.188.82.149', '172.17.42.1', '172.17.0.1', '192.168.99.1'],
    ];
}


return $config;
