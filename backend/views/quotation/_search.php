<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\QuotationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="quotation-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'uz_quotation') ?>

    <?= $form->field($model, 'ru_quotation') ?>

    <?= $form->field($model, 'en_quotation') ?>

    <?= $form->field($model, 'x_quotation') ?>

    <?php // echo $form->field($model, 'uz_author') ?>

    <?php // echo $form->field($model, 'ru_author') ?>

    <?php // echo $form->field($model, 'en_author') ?>

    <?php // echo $form->field($model, 'x_author') ?>

    <?php // echo $form->field($model, 'uz_position') ?>

    <?php // echo $form->field($model, 'ru_position') ?>

    <?php // echo $form->field($model, 'en_position') ?>

    <?php // echo $form->field($model, 'x_position') ?>

    <?php // echo $form->field($model, 'img') ?>

    <?php // echo $form->field($model, 'active') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
