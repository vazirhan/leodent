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
        'css/plugins.css',
        'css/style.css'
    ];
    public $js = [
        'js/vendor/modernizr-3.5.0.min.js',
        'js/vendor/jquery-1.12.4.min.js',
        'js/plugins.js',
        'js/main.js'
    ];
    public $depends = [
        //'yii\web\YiiAsset',
      //  'yii\bootstrap\BootstrapAsset',
    ];
}
