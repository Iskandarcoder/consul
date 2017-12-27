<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Online */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Onlines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="col-lg-10 col-lg-offset-1" id="wrapper"><br>

    <div class="container">

        <div class="row">
            <h4>Online reception</h4>
            <div class="col-md-7">
                <table class="table table-hover">
                                        
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><?= Yii::t('app', 'fio');?></td>
                                                <td><?= $model->fio;?></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td><?= Yii::t('app', 'reference_s');?></td>
                                                <td><?= $model->reference_subject;?></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td><?= Yii::t('app', 'tel');?></td>
                                                <td><?= $model->telefon;?></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td><?= Yii::t('app', 'email');?></td>
                                                <td><a href="mailto:<?= $model->email;?>"><?= $model->email;?></a></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td><?= Yii::t('app', 'reference_text');?></td>
                                                <td  style="text-align: justify;"><?= $model->reference_text;?></td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td><?= Yii::t('app', 'date');?></td>
                                                <td><?= $model->date;?></td>
                                            </tr>
                                        </tbody>
                                    </table>
               
            </div>
            <div class="col-md-5" >
                <div class="alert alert-info fade in nomargin">
                    <h4><?= Yii::t('app', 'Sizning murojaatingiz yborildi');?></h4>
                    <p style="text-align: justify;"><?= Yii::t('app', 'sendtex');?></p>
                                        
                </div>
                
            </div>
        </div>
    </div>
</div>