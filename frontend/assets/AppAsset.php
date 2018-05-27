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
        "rember/css/bootstrap.css",
        "rember/css/bootstrap-responsive.css",
        "rember/css/prettyPhoto.css",
        "https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700",
        "rember/css/style.css",
        "rember/color/default.css",
    ];
    public $js = [
        "rember/js/jquery.js",
        "rember/js/jquery.easing.1.3.js",
        "rember/js/bootstrap.js",
        "rember/js/modernizr.custom.js",
        "rember/js/toucheffects.js",
        "rember/js/google-code-prettify/prettify.js",
        "rember/js/jquery.prettyPhoto.js",
        "rember/js/portfolio/jquery.quicksand.js",
        "rember/js/portfolio/setting.js",
        "rember/js/animate.js",
        "rember/js/custom.js",
        "https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY",

    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
