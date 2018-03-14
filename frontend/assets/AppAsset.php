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
        //'css/main.css',
    ];
    public $js = [
        'js/jquery-ui-1.12.0/jquery-ui.min.js',
        'js/analytics.js',
        'js/nav-btn-click.js',
        'js/updown.js',
        'js/sm_rules-btn.js',
        'js/heroes.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
