<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'main_pages' => [
            'class' => 'backend\modules\main_pages\Module',
        ],
        'articles' => [
            'class' => 'backend\modules\articles\Module',
        ],
        'news' => [
            'class' => 'backend\modules\news\Module',
        ],
        'market_news' => [
            'class' => 'backend\modules\market_news\Module',
        ],
        'gas_s' => [
            'class' => 'backend\modules\gas_s\Module',
        ],
        'gas_p' => [
            'class' => 'backend\modules\gas_p\Module',
        ],
        'fuel92' => [
            'class' => 'backend\modules\fuel92\Module',
        ],
        'fuel95' => [
            'class' => 'backend\modules\fuel95\Module',
        ],
        'diesel' => [
            'class' => 'backend\modules\diesel\Module',
        ],
        'mazut' => [
            'class' => 'backend\modules\mazut\Module',
        ],
        'bitum' => [
            'class' => 'backend\modules\bitum\Module',
        ],
    ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
            'baseUrl' => '/admin',
        ],
        'view' => [
             'theme' => [
                 'pathMap' => [
                    '@app/views' => '@vendor/dmstr/yii2-adminlte-asset/example-views/yiisoft/yii2-app'
                 ],
             ],
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            '' => 'site/index',                                
        '<controller:\w+>/<action:\w+>/' => '<controller>/<action>',
            ],
        ],
        
    ],
    'params' => $params,
];
