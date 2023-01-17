<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class FrontendAsset extends AssetBundle
{
   // public $basePath = '@webroot';
    public $sourcePath = '@frontend/assets/bundle';

    public $baseUrl = '@web';

    public $css = [
        '//fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic',
        '//fonts.googleapis.com/css?family=Raleway:700,400,300',
        '//fonts.googleapis.com/css?family=Pacifico',
        '//fonts.googleapis.com/css?family=PT+Serif',

         //'css/bootstrap.css',

        'fonts/font-awesome/css/font-awesome.css',

        'fonts/fontello/css/fontello.css',

        'plugins/magnific-popup/magnific-popup.css',
        'plugins/rs-plugin-5/css/settings.css',
        'plugins/rs-plugin-5/css/layers.css',
        'plugins/rs-plugin-5/css/navigation.css',
        'css/animations.css',
        'plugins/owlcarousel2/assets/owl.carousel.min.css',
        'plugins/owlcarousel2/assets/owl.theme.default.min.css',
        'plugins/hover/hover-min.css',
        'plugins/slick/slick.css',

        'css/style.css',


       // 'css/typography-default.css',

        'css/custom.css',

        // mobile
        'css/mobile/ipad-land-pc.css',
        'css/mobile/ipad-port.css',
        'css/mobile/iphone345port.css',
        'css/mobile/iphone34land.css',
        'css/mobile/iphone5land.css',
        'css/mobile/iphone66port.css',
        'css/mobile/iphone6land.css',
        'css/mobile/iphone6port.css',
        'css/mobile/min-iphone.css',
        'css/mobile/pc-full-full-hd.css',
        'css/mobile/pc-full-hd.css',
        'css/mobile/pc-hd.css',
        'js/intlTelInput.css',

    ];

    public $js = [

        // 'plugins/jquery.min.js',
         // 'bootstrap/js/bootstrap.min.js',
        'plugins/modernizr.js',
        'plugins/rs-plugin-5/js/jquery.themepunch.tools.min.js',
        'plugins/rs-plugin-5/js/jquery.themepunch.revolution.min.js',
        'plugins/isotope/isotope.pkgd.min.js',
        'plugins/magnific-popup/jquery.magnific-popup.min.js',
        'plugins/waypoints/jquery.waypoints.min.js',
        'plugins/jquery.countTo.js',
        'plugins/jquery.parallax-1.1.3.js',
        'plugins/jquery.validate.js',
        'plugins/vide/jquery.vide.js',
        'plugins/slick/slick.min.js',
        'plugins/owlcarousel2/owl.carousel.min.js',
        'plugins/jquery.browser.js',
        'plugins/SmoothScroll.js',
        'js/template.js',
        'js/custom.js',
        'js/intlTelInput.js',
        'js/app.js',
       // 'js/imagesloaded.pkgd.min.js'


    ];

    public $depends = [
        'yii\web\YiiAsset',
         'yii\jui\JuiAsset',
        'yii\bootstrap\BootstrapAsset',
        'common\assets\Html5shiv',
    ];
    public function init()
    {

//        $this->cssOptions = ['position' => \yii\web\View::POS_HEAD];
//        $this->jsOptions = ['position' => \yii\web\View::POS_HEAD];

        parent::init();
    }
}
