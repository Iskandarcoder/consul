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


$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">
<div class="col-lg-10 col-lg-offset-1" id="wrapper"><br>
<div class="container">
                    <div class="row">
                        <div class="col-md-9">
                        	<form id="searchForm" action="<?= Url::to(['/site/search']) ?>" method="get">
                                            <div class="input-group">
                                                 <?php // $form = ActiveForm::begin(); ?>
                                                <input type="text" class="form-control" name="q" id="q" placeholder="Search..."  value="<?= @$_GET['q']; ?>" required>
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                                </span>
                                                <?php // ActiveForm::end(); ?>
                                            </div>
                                        </form><br>
                            <div class="blog-posts">
                            	<h4>Siz qidirgan ma'lumotlar</h4><hr>
                            	<?php 	

                            	  $i = 0;
								    $stop = false;
								    foreach ($result as $sectionKey => $sectionValue) {
								        if ($stop) {
								            break;
								        }
								        if (is_array($sectionValue)) {
								            foreach ($sectionValue as $item) {
								                if ($sectionKey == 'news') {
								                    $link = Html::a($item[$lang.'_thema'], ['/news/view', 'id' => $item['id']]);
								                    $content = strip_tags($item[$lang.'_description']);
								                } elseif ($sectionKey == 'page') {
								                    $link = Html::a(strip_tags($item[$lang.'_name']), ['/page/view', 'id' => $item['id']]);
								                    $content = substr(strip_tags($item[$lang.'_text']), 0, 600) . "...";
								                }

								                echo "<div>
								                    <p>$link</p>
								                    <div>
								                    {$content}
								                    </div>
								                    </div><hr>";

								                $i++;
								                if ($i == 25) {
								                    $stop = TRUE;
								                    break;
								                }
								            }
								        }
								    }


                            	?>
                                
                               
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





  