<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
$lang = Yii::$app->language;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OnlineSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Onlines';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="col-lg-10 col-lg-offset-1" id="wrapper"><br>

    <div class="container">

        <div class="row">

            <div class="featured-boxes featured-boxes-style-8">
                <div class="row">
                    <div class="col-md-7">
                          <h4><?= Yii::t('app', 'Online_reception') ?></h4>
                        <div class="featured-box featured-box-primary featured-box-text-left" style=" margin-top:15px;">
                            <div class="box-content">
                                <div class="row">
                                    <div class="col-md-10">
                                        <h4><?= Yii::t('app', 'online_res_app') ?></h4>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="align-right">
                                            <i class="icon-featured fa fa-edit"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <?= Yii::t('app', 'online_res_text') ?>
                                        
                                        <ul class="list list-icons list-primary list-borders">
                                            <li><i class="fa fa-check"></i>&nbsp;&nbsp;&nbsp;&nbsp; <?= Yii::t('app', 'online_res_pasport') ?></li>
                                            <li><i class="fa fa-check"></i>&nbsp;&nbsp;&nbsp;&nbsp; <?= Yii::t('app', 'online_res_1') ?></li>
                                            <li><i class="fa fa-check"></i>&nbsp;&nbsp;&nbsp;&nbsp; <?= Yii::t('app', 'online_res_2') ?></li>
                                        </ul>

                                        <a href="<?= Url::to(['/online/create']) ?>" style="float: right;"><button class="btn btn-lg btn-primary mr-xs mb-lg" type="button"><?= Yii::t('app', 'qabul') ?></button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                 </div>   
            </div>
        </div>
    </div>
</div>





