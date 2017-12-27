<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Links */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="links-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'uz_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ru_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'en_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'x_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fileuz')->fileInput() ?>

    <?= $form->field($model, 'fileru')->fileInput() ?>

    <?= $form->field($model, 'fileen')->fileInput() ?>

    <?= $form->field($model, 'filex')->fileInput() ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'active')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
