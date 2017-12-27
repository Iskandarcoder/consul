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
        //'css/site.css',
        //Vendor CSS
        'http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light',
        'vendor/bootstrap/css/bootstrap.css',
        'vendor/font-awesome/css/font-awesome.css',
        'vendor/simple-line-icons/css/simple-line-icons.css',
        'vendor/owl.carousel/assets/owl.carousel.min.css',
        'vendor/owl.carousel/assets/owl.theme.default.min.css',
        'vendor/magnific-popup/magnific-popup.css',

        //<!-- Theme CSS -->

        'css/theme.css',
        'css/theme-elements.css',
        'css/theme-blog.css',
        'css/theme-shop.css',
        'css/theme-animate.css',

        // <!-- Current Page CSS -->

        'vendor/circle-flip-slideshow/css/component.css',
        'vendor/nivo-slider/nivo-slider.css',
        'vendor/nivo-slider/default/default.css',

        //<!-- Skin CSS -->

        'css/skins/default.css',

        //<!-- Theme Custom CSS -->

        'css/custom.css',

        //<!-- Head Libs -->

        // 'vendor/modernizr/modernizr.js',
    ];
    public $js = [
        // 'vendor/jquery/jquery.js',
        'vendor/jquery.appear/jquery.appear.js',
        'vendor/jquery.easing/jquery.easing.js',
        'vendor/jquery-cookie/jquery-cookie.js',
        'vendor/bootstrap/js/bootstrap.js',
        'vendor/common/common.js',
        'vendor/jquery.validation/jquery.validation.js',
        'vendor/jquery.stellar/jquery.stellar.js',
        'vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js',
        'vendor/jquery.gmap/jquery.gmap.js',
        'vendor/jquery.lazyload/jquery.lazyload.js',
        'vendor/isotope/jquery.isotope.js',
        'vendor/owl.carousel/owl.carousel.js',
        'vendor/magnific-popup/jquery.magnific-popup.js',
        'vendor/vide/vide.js',

        //<!-- Theme Base, Components and Settings -->

        'vendor/modernizr/modernizr.js',
        'js/theme.js',
        
        //<!-- Current Page Vendor and Views -->

        'vendor/circle-flip-slideshow/js/jquery.flipshow.js',
        'vendor/nivo-slider/jquery.nivo.slider.js',
        'js/views/view.home.js',

        //<!-- Theme Custom -->

        'js/custom.js',
        
        'js/examples/examples.carousels.js',

        //<!-- Theme Initialization Files -->

        'js/theme.init.js',
        

    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',

    ];
}
