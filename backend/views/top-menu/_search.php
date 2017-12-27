<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TopMenuSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="top-menu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'uz_name') ?>

    <?= $form->field($model, 'ru_name') ?>

    <?= $form->field($model, 'en_name') ?>

    <?= $form->field($model, 'x_name') ?>

    <?php // echo $form->field($model, 'link') ?>

    <?php // echo $form->field($model, 'page') ?>

    <?php // echo $form->field($model, 'target') ?>

    <?php // echo $form->field($model, 'order') ?>

    <?php // echo $form->field($model, 'active') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
