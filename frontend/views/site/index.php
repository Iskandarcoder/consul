<?php $lang = Yii::$app->language;?>
<?php use yii\helpers\Url;?>
<div class="col-lg-10 col-lg-offset-1" id="wrapper">
                <div class="container">
                    <div class="row" style="margin-top:10px; margin-bottom:10px;">
                        <div class="col-md-12">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"  >
                              <!-- Indicators -->
                              <ol class="carousel-indicators" style="left:6%; width: 7%; top:0px;">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                              </ol>

                              <!-- Wrapper for slides -->
                              <div class="carousel-inner" role="listbox">
                                <?php $i=0;?>
                                <?php foreach ($slide_news as $key => $slider):?>
                                     <?php if ($slider->{$lang.'_thema'}): ?>
                                    <?php $i++;?>
                                <div class="item <?php if($i==1):?>active <?php endif;?>">
                                 <div class="col-sm-7" id="img_resp">
                                     <a href="<?= Url::to(['/news/view', 'id' => $slider->id]) ?>">
                                        <img src="<?= Yii::getAlias('@web') ?>/uploads/<?= $slider->img;?>"  class="img-responsive" alt="Responsive image">
                                    </a>
                                  </div>
                                  <div class="col-sm-5" id="slide_text" >
                                    <a href='<?= Url::to(['/news/view', 'id' => $slider->id]) ?>' class="text">
                                        <?= $slider->{$lang.'_thema'}?>                       
                                    </a>
                                    <div class="span_text">
                                    <span>
                                        
                                        <?= $slider->{$lang.'_description'}?>   

                                    </span>
                                    </div><br>

                                        <div class="info"> <?= $slider->date;?> | <span class="cat"><a href="<?= Url::to(['/news/index']) ?>">Yangiliklar</a></span></div>
                                  </div>
                                </div>
                                <?php endif;?>
                                <?php endforeach;?>
                            </div>

                            </div>
                    </div>
                    
                </div>

                <div class="container">

                    <div class="row center">
                        <div class="col-md-12">
                            <div class="featured-boxes featured-boxes-style-3 featured-boxes-flat">
                        <div class="row">
                            <?php foreach ($services as $key => $service):?>
                            <div class="col-md-3 col-sm-6">
                                <div class="featured-box featured-box-primary featured-box-effect-3">
                                    <div class="box-content">
                                        <a href="#"><i class="icon-featured fa <?= $service->icon;?>"></i>
                                        <h4><?= $service->{$lang.'_name'};?></h4>
                                        <p><?= $service->{$lang.'_description'};?></p></a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;?>
                           
                        </div>
                    </div>
                        </div>
                    </div>



                </div>

                
                    <div class="container">

                        <div class="row">
                                <div class="col-md-6">
                                    <div class="recent-posts mb-xl">
                                        <h2><?= Yii::t('app', 'Events') ?></h2>
                                        <div class="row">
                                            <div class="owl-carousel owl-theme mb-none" data-plugin-options='{"items": 1}'>
                                                
                                                <div>

                                                    <?php foreach ($eventsone as $key => $eventone):?>
                                                        <?php if ($eventone->{$lang.'_thema'}): ?>
                                                    <div class="col-md-6">
                                                        <article>
                                                            <div class="dat1e">
                                                                <span class="month"><?= $eventone->date?></span>
                                                            </div>
                                                            <h4 class="heading-primary"><a href="<?= Url::to(['/news/view', 'id' => $eventone->id]) ?>"><?= $eventone->{$lang.'_thema'}?></a></h4>
                                                            <p><?= $eventone->{$lang.'_description'}?><a href="<?= Url::to(['/news/view', 'id' => $eventone->id])?>" class="read-more">  &nbsp;&nbsp;<?= Yii::t('app', 'read more'); ?>...</a></p>
                                                        </article>
                                                    </div>
                                                <?php endif;?>
                                                <?php endforeach;?>
                                                </div>
                                                
                                                <div>
                                                    <?php foreach ($eventstwo as $key => $eventtwo):?>
                                                        <?php if ($eventtwo->{$lang.'_thema'}): ?>
                                                    <div class="col-md-6">
                                                        <article>
                                                            <div class="da1te">
                                                                <span class="month"><?= $eventtwo->date?></span>
                                                            </div>
                                                            <h4 class="heading-primary"><a href="<?= Url::to(['/news/view', 'id' => $eventtwo->id])?>"><?= $eventtwo->{$lang.'_thema'}?></a></h4>
                                                            <p><?= $eventtwo->{$lang.'_description'}?><a href="<?= Url::to(['/news/view', 'id' => $eventtwo->id])?>" class="read-more"><?= Yii::t('app', 'read more') ?> ...</a></p>
                                                        </article>
                                                    </div>
                                                <?php endif;?>
                                                <?php endforeach;?>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h2><?= Yii::t('app', 'Quote') ?></h2>
                                    <div class="row">
                                        <div class="owl-carousel owl-theme mb-none" data-plugin-options='{"items": 1}'>
                                            <?php foreach ($quotation as $key => $quota):?>
                                            <div>
                                                <div class="col-md-12">
                                                    <div class="testimonial testimonial-primary">
                                                        <blockquote>
                                                            <p><?= $quota->{$lang.'_quotation'}?></p>
                                                        </blockquote>
                                                        <div class="testimonial-arrow-down"></div>
                                                        <div class="testimonial-author">
                                                            <div class="testimonial-author-thumbnail img-thumbnail">
                                                                <img src="<?= Yii::getAlias('@web') ?>/uploads/<?= $quota->img;?>" alt="">
                                                            </div>
                                                            <p><strong><?= $quota->{$lang.'_author'}?></strong><span><?= $quota->{$lang.'_position'}?></span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach;?>
                                            

                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
                

                <div class="container">

                    <div class="row">
                        <hr class="tall">
                    </div>

                </div>

                <div class="container">

                    <div class="row" id="text1">

                    <?php foreach ($embassy_news as $key => $e_news):?>
                        <?php if ($e_news->{$lang.'_thema'}): ?>
                        <div class="col-md-3 col-sm-6 col-xs-12" id="h_news" >
                            <span class="thumb-info thumb-info-hide-wrapper-bg" id="h_news_ch" <?php if($e_news->img==NULL):?> style=" height: 405px; overflow: hidden;"<?php endif;?>>
                                
                                <span class="thumb-info-wrapper" style=" max-width: 253px; max-height: 171px; overflow: hidden;">
                                    <?php if($e_news->img!=NULL):?>
                                    <a href="<?= Url::to(['/news/view', 'id' => $e_news->id]) ?>" >
                                        <img src="<?= Yii::getAlias('@web') ?>/uploads/<?= $e_news->img;?>" class="img-responsive" alt="">
                                    </a>
                                    <?php endif;?>
                                    <span class="thumb-info-caption-text" "><a href="<?= Url::to(['/news/view', 'id' => $e_news->id]) ?>"><?= $e_news->{$lang.'_thema'}?></a></span><hr>
                                </span>
                                <span style="padding: 10px;">
                                        <a href="#"><i class="fa fa-calendar"></i> <?= $e_news->date;?></a>|
                                        <a href="#"><i class="fa fa-eye"></i> <?= $e_news->show_n?></a>
                                </span>
                               
                                <span class="thumb-info-caption">
                                    <?php if($e_news->img!=NULL):?>
                                    <span class="thumb-info-caption-text">
                                        <a href="<?= Url::to(['/news/view', 'id' => $e_news->id]) ?>"><?= $e_news->{$lang.'_thema'}?></a>
                                    <!-- </span> -->
                                    <hr>
                                    <?php endif;?>
                                    <!-- <span class="thumb-info-caption-text" style="text-align: justify;"> -->
                                        <?= $e_news->{$lang.'_description'}?>
                                            
                                        </span>  
                                </span>

                               

                            </span>
                        </div>
                    <?php endif;?>
                    <?php endforeach;?>
                       
                    </div>
                    <div class="row" id="text2">

                    <?php foreach ($embassy_news1 as $key => $e_news1):?>
                        <?php if ($e_news1->{$lang.'_thema'}): ?>
                        <div class="col-md-3 col-sm-6 col-xs-12" id="h_news" >
                            <span class="thumb-info thumb-info-hide-wrapper-bg" id="h_news_ch" <?php if($e_news1->img==NULL):?> style=" height: 405px; overflow: hidden;"<?php endif;?>>
                                
                                <span class="thumb-info-wrapper" style=" max-width: 253px; max-height: 171px; overflow: hidden;">
                                    <?php if($e_news1->img!=NULL):?>
                                    <a href="<?= Url::to(['/news/view', 'id' => $e_news1->id]) ?>" >
                                        <img src="<?= Yii::getAlias('@web') ?>/uploads/<?= $e_news1->img;?>" class="img-responsive" alt="">
                                    </a>
                                    <?php endif;?>
                                    <span class="thumb-info-caption-text" "><a href="<?= Url::to(['/news/view', 'id' => $e_news1->id]) ?>"><?= $e_news1->{$lang.'_thema'}?></a></span><hr>
                                </span>
                                <span style="padding: 10px;">
                                        <a href="#"><i class="fa fa-calendar"></i> <?= $e_news1->date;?></a>|
                                        <a href="#"><i class="fa fa-eye"></i> <?= $e_news1->show_n?></a>
                                </span>
                               
                                <span class="thumb-info-caption">
                                    <?php if($e_news1->img!=NULL):?>
                                    <span class="thumb-info-caption-text">
                                        <a href="<?= Url::to(['/news/view', 'id' => $e_news1->id]) ?>"><?= $e_news1->{$lang.'_thema'}?></a>
                                </span><hr>
                                    <?php endif;?>
                                    <span class="thumb-info-caption-text" style="text-align: justify;"><?= $e_news1->{$lang.'_description'}?></span>  
                                </span>

                               

                            </span>
                        </div>
                    <?php endif;?>
                    <?php endforeach;?>
                       
                    </div>
                    <div class="row" id="text3">

                    <?php foreach ($embassy_news2 as $key => $e_news2):?>
                        <?php if ($e_news2->{$lang.'_thema'}): ?>
                        <div class="col-md-3 col-sm-6 col-xs-12" id="h_news" >
                            <span class="thumb-info thumb-info-hide-wrapper-bg" id="h_news_ch" <?php if($e_news2->img==NULL):?> style=" height: 405px; overflow: hidden;"<?php endif;?>>
                                
                                <span class="thumb-info-wrapper" style=" max-width: 253px; max-height: 171px; overflow: hidden;">
                                    <?php if($e_news2->img!=NULL):?>
                                    <a href="<?= Url::to(['/news/view', 'id' => $e_news2->id]) ?>" >
                                        <img src="<?= Yii::getAlias('@web') ?>/uploads/<?= $e_news2->img;?>" class="img-responsive" alt="">
                                    </a>
                                    <?php endif;?>
                                    <span class="thumb-info-caption-text" "><a href="<?= Url::to(['/news/view', 'id' => $e_news2->id]) ?>"><?= $e_news2->{$lang.'_thema'}?></a></span><hr>
                                </span>
                                <span style="padding: 10px;">
                                        <a href="#"><i class="fa fa-calendar"></i> <?= $e_news2->date;?></a>|
                                        <a href="#"><i class="fa fa-eye"></i> <?= $e_news2->show_n?></a>
                                </span>
                               
                                <span class="thumb-info-caption">
                                    <?php if($e_news2->img!=NULL):?>
                                    <span class="thumb-info-caption-text">
                                        <a href="<?= Url::to(['/news/view', 'id' => $e_news2->id]) ?>"><?= $e_news2->{$lang.'_thema'}?></a>
                                    </span><hr>
                                    <?php endif;?>
                                    <span class="thumb-info-caption-text" style="text-align: justify;"><?= $e_news2->{$lang.'_description'}?></span>  
                                </span>

                               

                            </span>
                        </div>
                    <?php endif;?>
                    <?php endforeach;?>
                       
                    </div>

                    <center>
                   <button type="button" class="mb-xs mt-xs mr-xs btn btn-primary" id="button"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i> Barcha yangiliklar</button>
                    </center>
                     <center>
                    <a href="<?= Url::to(['/news/index']) ?>"><button type="button" class="mb-xs mt-xs mr-xs btn btn-primary" id="buttonon">Barcha yangiliklar</button></a>
                    </center>

                    <hr>
                    <br>
                    <br>

                    <div class="row">
                        <div class="col-md-12">
                            <h4 style="text-align: left;"><i class="fa fa-film"></i>  Mediateka</h4> 
                            <hr>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">

                            <div class="tabs tabs-bottom tabs-center tabs-simple">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tabsNavigationSimple1" data-toggle="tab" aria-expanded="true">Video</a>
                                    </li>
                                    <li class="">
                                        <a href="#tabsNavigationSimple2" data-toggle="tab" aria-expanded="false">Photo</a>
                                    </li>
                                    
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tabsNavigationSimple1">
                                        <div class="center">
                                            <div class="owl-carousel owl-theme manual" id="videos">
                                    <?php foreach($videos as $key=>$Video):?>
                                        <div class="item-video" data-merge="3"><a class="owl-video" href="<?= $Video->frame;?>"></a></div>
                                    <?php endforeach;?>
                                        
                                    </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabsNavigationSimple2">
                                        <div class="center">
                                            <ul class="thumbnail-gallery" data-plugin-lightbox data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
                                        
                                            <?php foreach($photos as $key=>$photo):?>
                                        <li>
                                            <a title="Benefits 6" href="<?= Yii::getAlias('@web') ?>/uploads/<?= $photo->img;?>">
                                                <span class="thumbnail mb-none" style="width: 150px; height: 150px; overflow: hidden;">
                                                    <img src="<?= Yii::getAlias('@web') ?>/uploads/<?= $photo->img;?>" alt="">
                                                </span>
                                            </a>
                                        </li>
                                            <?php endforeach;?>
                                        
                                        
                                    </ul>
                                    
                                        </div>
                                    </div>
                                    
                                    
                            </div>
                        </div>
                    </div>
                    

                    </div>
                    
                               

                    <div class="container">
                        <div class="row"  style="margin-right: 0px;">
                            <div class="col-md-12">
                                <hr>
                                <h4><?= Yii::t('app', 'Useful links') ?></h4>
                                <div class="owl-carousel owl-theme stage-margin" data-plugin-options='{"items": 4, "margin": 10, "loop": false, "nav": true, "dots": false, "stagePadding": 40}'>
                                    <?php foreach ($links as $key => $link):?>
                                    <div>
                                        <a href="<?= $link->link;?>" target="_blank">
                                            <img alt="" class="img-responsive img-rounded" src="<?= Yii::getAlias('@web') ?>/uploads/<?= $link->{$lang.'_img'};?>">
                                        </a>
                                    </div>
                                    <?php endforeach;?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                </div>
            </div>
