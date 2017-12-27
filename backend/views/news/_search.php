<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NewsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_category_news') ?>

    <?= $form->field($model, 'uz_thema') ?>

    <?= $form->field($model, 'ru_thema') ?>

    <?= $form->field($model, 'en_thema') ?>

    <?php // echo $form->field($model, 'x_thema') ?>

    <?php // echo $form->field($model, 'uz_description') ?>

    <?php // echo $form->field($model, 'ru_description') ?>

    <?php // echo $form->field($model, 'en_description') ?>

    <?php // echo $form->field($model, 'x_description') ?>

    <?php // echo $form->field($model, 'uz_text') ?>

    <?php // echo $form->field($model, 'ru_text') ?>

    <?php // echo $form->field($model, 'en_text') ?>

    <?php // echo $form->field($model, 'x_text') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'img') ?>

    <?php // echo $form->field($model, 'slider') ?>

    <?php // echo $form->field($model, 'active') ?>

    <?php // echo $form->field($model, 'show_n') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
