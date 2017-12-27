<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\LinkPager;
use backend\models\Menu;
use backend\models\SubMenu;
use backend\models\TopMenu;

$menus = Menu::find()->all();
$topmenus = TopMenu::find()->all();

$lang = Yii::$app->language;


/* @var $this yii\web\View */
/* @var $searchModel frontend\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">
<div class="col-lg-10 col-lg-offset-1" id="wrapper"><br>
<div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="blog-posts">

                                <?php foreach ($models as $key => $model):?>
                                    <?php if ($model->{$lang.'_thema'}): ?>

                                <article class="post post-medium">
                                    <div class="row">
                                        <?php if($model->img!=NULL):?>
                                        <div class="col-md-4">
                                            <div class="post-image">
                                                <div class="owl-carousel owl-theme" data-plugin-options='{"items":1}'>
                                                    <div>
                                                        <div class="img-thumbnail">
                                                            <img class="img-responsive" src="<?= Yii::getAlias('@web') ?>/uploads/<?= $model->img;?>" alt="" style=" max-width: 300px; max-height: 200px; overflow: hidden;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif;?>
                                        <div <?php if($model->img!=NULL):?> class="col-md-8" <?php endif;?> class="col-md-12">

                                            <div class="post-content">

                                                <h4><a href="<?= Url::to(['/news/view', 'id' => $model->id]) ?>"><?= $model->{$lang.'_thema'}?></a></h4>
                                                <p><?= $model->{$lang.'_description'}?></p>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="post-meta">
                                                <span><i class="fa fa-calendar"></i> <?= $model->date;?> </span>
                                                <span><i class="fa fa-eye"></i> <a href="#"><?= $model->show_n;?></a></span>
                                                <a href="<?= Url::to(['/news/view', 'id' => $model->id]) ?>" class="btn btn-xs btn-primary pull-right"><?= Yii::t('app', 'read more'); ?></a>
                                            </div>
                                        </div>
                                    </div>

                                </article>
                            <?php endif;?>
                            <?php endforeach;?>
                                <div class="pagination pagination-lg pull-right">

                                    <?php
                                        echo LinkPager::widget([
                                            'pagination' => $pages,
                                        ]);
                                    ?>

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
                    </div>

                </div>

</div>





</div>
