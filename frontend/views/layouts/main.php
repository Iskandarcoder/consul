<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use backend\models\Menu;
use backend\models\SubMenu;
use backend\models\TopMenu;
use backend\models\News;
use yii\widgets\ActiveForm;

$menus = Menu::find()->all();
$topmenus = TopMenu::find()->all();
$lang = Yii::$app->language;
$top_news = News::find()->andWhere(['active'=>[1],'id_category_news'=>[1]])->orderBy('id DESC')->limit(6)->all();

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/img/emblam.png" type="image/x-icon" />
        <link rel="apple-touch-icon" href="/img/apple-touch-icon.png">
    <?= Html::csrfMetaTags() ?>
    <title>Embassy</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="body">
            <header id="header" class="header-no-border-bottom" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 120, "stickySetTop": "-120px", "stickyChangeLogo": false}' >
                <div class="header-top header-top-colored header-top-primary">
                        <div class="container">
                                    <script type="text/javascript">
                                        tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
                                        tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

                                        function GetClock(){
                                        var d=new Date();
                                        var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getFullYear();
                                        var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

                                        if(nhour==0){ap=" AM";nhour=12;}
                                        else if(nhour<12){ap=" AM";}
                                        else if(nhour==12){ap=" PM";}
                                        else if(nhour>12){ap=" PM";nhour-=12;}

                                        if(nmin<=9) nmin="0"+nmin;
                                        if(nsec<=9) nsec="0"+nsec;

                                        document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
                                        }

                                        window.onload=function(){
                                        GetClock();
                                        setInterval(GetClock,1000);
                                        }
                                        </script>
                                        <div id="clockbox" style=" width: 288px; float: left; margin-top:10px;" class="ml-xs"></div>
                            <ul class="social-icons" style="float: right; margin-top: 5px; ">
                                <li class="social-icons-mobile"><a href="#" onclick="openWin(); return false;" target="_blank" title="Mobile"><i class="fa fa-mobile"></i></a></li>
                                <li class="social-icons-rss"><a href="#" target="_blank" title="RSS"><i class="fa fa-rss"></i></a></li>
                            </ul>

                                        
                            
                        </div>
                    </div>
                <div class="header-body">
                    <div class="header-container container" >
                        <div class="header-row" >
                            <div class="header-column" >
                                <div class="header-logo" style=" width:600px; ">
                                    <a href="<?= Url::to(['/']) ?>" style="text-decoration: none;">

                                        <img alt="Porto"  src="/img/logogb.png" style="float:left;">
                                        <h4 style="margin-top:15px; "><?= Yii::t('app', 'Embassy') ?></h4>
                                    </a>
                                </div>
                            </div>
                            <div class="header-column">
                                <div class="row">
                                    <nav class="header-nav-top">
                                        <ul class="nav nav-pills">
                                            <!-- <li class="hidden-xs">
                                                <a href="about-us.html"><i class="fa fa-angle-right"></i> Online reception</a>
                                            </li>
                                            <li class="hidden-xs">
                                                <a href="contact-us.html"><i class="fa fa-angle-right"></i> Contacts of diplomatic missions</a>
                                            </li> -->
                                            <li>

                                                <a href="#" class="dropdown-menu-toggle" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    <?php if (Yii::$app->language == 'en'): ?>
                                                        <img src="/img/blank.gif" class="flag flag-us" alt="English" /> English
                                                        <i class="fa fa-angle-down"></i>
                                                    <?php elseif  (Yii::$app->language == 'uz'):?>
                                                        <img src="/img/blank.gif" class="flag flag-uz" alt="Uzbek" /> O'zbekcha
                                                        <i class="fa fa-angle-down"></i>
                                                    <?php elseif  (Yii::$app->language == 'ru'):?>
                                                        <img src="/img/blank.gif" class="flag flag-ru" alt="Русский" /> Русский
                                                        <i class="fa fa-angle-down"></i>
                                                    <?php endif;?>    
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownLanguage">
                                                    <li>
                                                      <?= Html::a('<img src="/img/blank.gif" class="flag flag-us" alt="English" /> English', array_merge(
                                                          \Yii::$app->request->get(),
                                                          [\Yii::$app->controller->route, 'language' => 'en']
                                                        ),
                                                        [
                                                          'class' => 'language'
                                                        ]
                                                      ); ?>
                                                    </li>
                                                    <li>
                                                      <?= Html::a('<img src="/img/blank.gif" class="flag flag-uz" alt="Uzbek" /> O\'zbekcha', array_merge(
                                                          \Yii::$app->request->get(),
                                                          [\Yii::$app->controller->route, 'language' => 'uz']
                                                        ),
                                                        [
                                                          'class' => 'language'
                                                        ]
                                                      ); ?>
                                                    </li>
                                                    <li>
                                                      <?= Html::a('<img src="/img/blank.gif" class="flag flag-ru" alt="Russian" /> Русский', array_merge(
                                                          \Yii::$app->request->get(),
                                                          [\Yii::$app->controller->route, 'language' => 'ru']
                                                        ),
                                                        [
                                                          'class' => 'language'
                                                        ]
                                                      ); ?>
                                                    </li>
                                                </ul>
                                                <!-- <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownLanguage">
                                                    <li><a href="#"><img src="img/blank.gif" class="flag flag-us" alt="English" /> English</a></li>
                                                    <li><a href="#"><img src="img/blank.gif" class="flag flag-uz" alt="Español" /> Uzbek</a></li>
                                                    <li><a href="#"><img src="img/blank.gif" class="flag flag-ru" alt="Française" /> Русский</a></li>
                                                </ul> -->
                                            </li>
                                            <li class="social-icons-twitter">
                                                <a href="#" ><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="social-icons-youtube">
                                                <a href="#" ><i class="fa fa-youtube"></i></a>
                                            </li>
                                            <li class="social-icons-facebook">
                                                <a href="#" ><i class="fa fa-facebook"></i></a>
                                            </li>   
                                            </li>
                                            <li class="social-icons-envelope">
                                                <a href="mailto:info@uzbekistan.org" ><i class="fa fa-envelope"></i></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="row mb-md">
                                    <div class="header-search hidden-xs">
                                        <form id="searchForm" action="<?= Url::to(['/site/search']) ?>" method="get">
                                            <div class="input-group">
                                                 <?php // $form = ActiveForm::begin(); ?>
                                                <input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                                </span>
                                                <?php // ActiveForm::end(); ?>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-container header-nav header-nav-bar">
                        <div class="container">
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
                                <i class="fa fa-bars"></i>
                            </button>
                            <ul class="header-social-icons social-icons hidden-xs">
                                <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                
                            </ul>
                            <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
                                <nav>
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="dropdown">
                                            <a  href="<?= Url::to(['/']) ?>">
                                                <i class="fa fa-home"></i> <?= Yii::t('app', 'Home') ?>
                                            </a>                                            
                                        </li>
                                        <?php foreach ($menus as $key => $menu): ?>
                                        <li class="dropdown">
                                            <a  <?php if($menu->page!=NULL){echo 'href="'.$menu->page.'"'     
                                                ;}else{echo 'href="'.$menu->link.'"'; }?> <?php if($menu->target=='1'){echo 'target="_blank"';}?> >
                                                <?= $menu->{$lang.'_name'}?>
                                            </a>
                                             <?php $sub_menus = SubMenu::find()->where(['parent' => $menu->id])->all(); ?>
                                            <ul class="dropdown-menu">
                                                <?php foreach ($sub_menus as $key => $sub_menu): ?>
                                                <li><a <?php if($sub_menu->page!=NULL):?> href="<?= Url::to(['/page/view', 'id' => $sub_menu->page  ])?>"<?php endif;?> href="<?= $sub_menu->link;?>" <?php if($sub_menu->target==1):?> target="_blank"<?php endif;?>  ><?= $sub_menu->{$lang.'_name'}; ?></a></li>
                                            <?php endforeach?>
                                            </ul>
                                        </li>
                                          <?php endforeach ?>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="col-lg-10 col-lg-offset-1" id="breaknews">

                    <marquee scrollamount="5" scrolldelay="50" 
                        onmouseover="this.stop()" onmouseout="this.start()" >
                        <?php foreach ($top_news as $key => $news):?>
                        <span><?= $news->date;?> </span><a href="<?= Url::to(['/news/view', 'id' => $news->id]) ?>"><?= $news->{$lang.'_thema'}?></a> |
                        <?php endforeach;?>
                    </marquee>
                </div>
            <div role="main" class="main">


  <?= $content ?>


<footer id="footer">
                <div class="container">
                    <div class="row">
                       
                        
                        <div class="col-md-4">
                            <div class="contact-details">
                                <h4><?= Yii::t('app', 'Contact Us') ?></h4>
                                <ul class="contact">
                                    <li><p><i class="fa fa-map-marker"></i> <strong><?= Yii::t('app', 'Address') ?>:</strong> 1234 Street Name, City Name, United States</p></li>
                                    <li><p><i class="fa fa-phone"></i> <strong><?= Yii::t('app', 'Phone') ?>:</strong> (123) 456-789</p></li>
                                    <li><p><i class="fa fa-envelope"></i> <strong><?= Yii::t('app', 'Email') ?>:</strong> <a href="mailto:info@uzbekistan.org">info@uzbekistan.org</a></p></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <h4><?= Yii::t('app', 'Follow Us') ?></h4>
                            <ul class="social-icons">
                                <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container">
                        <div class="row">
                            
                            <div class="col-md-5">
                                <p>© Copyright 2017. <?= Yii::t('app', 'All Rights Reserved') ?>.</p>
                                <script type="text/javascript" src="<?= Yii::getAlias('@web') ?>/orphus/orphus.js?>"></script>
                                        <a href="http://orphus.ru" id="orphus" target="_blank"><img alt="Orphus tizimi" src="<?= Yii::getAlias('@web') ?>/orphus/orphus.gif" border="0" width="121" height="21" /></a>
                            </div>
                            <div class="col-md-7">
                                <nav id="sub-menu">
                                    <ul>
                                        
                                        <?php foreach ($topmenus as $key => $topmenu):?>
                                    <li class="ml-xs"><a <?php if($topmenu->page!=NULL){echo 'href="'.$topmenu->page.'"'     
                                                ;}else{echo 'href="'.$topmenu->link.'"'; }?> <?php if($topmenu->target=='1'){echo 'target="_blank"';}?>><?= $topmenu->{$lang.'_name'}?></a></li>
                                <?php endforeach;?>
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
<?php $this->endPage() ?>
 <script type="text/javascript">
    // <![CDATA[
    var myWindow;

    function openWin() {
        myWindow = window.open("<?= Url::to(['/'], true) ?>", "", "width=440px, height=800px");
    }
    // ]]>
</script>
<script type="text/javascript">
                var count=2;
            $( "#button" ).click(function() {
              $( "#text"+count ).show();
                count++;

                // if(count==5){$('#button').hide();}
                 if(count==4) {
                        document.getElementById('button').style.visibility = 'hidden';
                        $( "#buttonon" ).show();

                    } 
            });

        </script>