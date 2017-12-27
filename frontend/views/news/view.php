<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Menu;
use backend\models\SubMenu;
use backend\models\TopMenu;

$menus = Menu::find()->all();
$topmenus = TopMenu::find()->all();
$lang = Yii::$app->language;
    $this->title = $model->{$lang.'_thema'};

/* @var $this yii\web\View */
/* @var $model backend\models\News */


?>
<div class="news-view">
<div class="col-lg-10 col-lg-offset-1" id="wrapper"><br>

    <div class="container">

                    <div class="row">
                        <div class="col-md-9">

                            <div class="row">
                                <div class="col-md-12">
                                    <h4 style="text-align: justify;">
                                        <?= $model->{$lang.'_thema'} ?>
                                    </h4>
                                </div>
                            </div>

                            <hr class="tall">

                            <div class="row">
                                <div class="col-md-12"><br>
                                    <?php if($model->img!=NULL):?>
                                    <center><img src="<?= Yii::getAlias('@web') ?>/uploads/<?= $model->img;?>"></center><br>
                                <?php endif;?>
                                    <?= $model->{$lang.'_text'} ?>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-3">
                            <div class="toggle toggle-primary" data-plugin-toggle>
                                <?php $i=0;?>
                                <?php foreach ($menus as $key => $menu): ?>
                                    <?php $i++;?>
                                    <section class="toggle <?php if($i==1):?>active<?php endif;?>">
                                        <label><?=$menu->{$lang.'_name'}?></label>
                                        <?php $sub_menus = SubMenu::find()->where(['parent' => $menu->id])->all(); ?>
                                        <div class="toggle-content">
                                            <ul class="dropdown-mega-sub-nav">
                                                <?php foreach ($sub_menus as $key => $sub_menu): ?>
                                                    <li><a href="shortcodes-accordions.html"><?= $sub_menu->{$lang.'_name'}; ?></a></li>
                                                 <?php endforeach?>    
                                            </ul>
                                        </div>
                                    </section>
                                <?php endforeach;?>
                                
                            </div>
                            
                        </div>
                    </div><br><br>

                
</div>
</div>







</div>
