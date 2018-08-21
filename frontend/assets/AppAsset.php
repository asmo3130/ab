<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/dataTables.css',
        'css/style.css',
        'js/slick/slick.css',
        'js/slick/slick-theme.css',
        '//fonts.googleapis.com/css?family=Montserrat:400,700',
    ];
    public $js = [
    'js/slick/slick.css',
    'js/slick/slick.min.js',
    'js/dataTable/datatables.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    //public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
}
