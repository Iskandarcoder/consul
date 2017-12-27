<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Quotation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="quotation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'uz_quotation')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ru_quotation')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'en_quotation')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'x_quotation')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'uz_author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ru_author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'en_author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'x_author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uz_position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ru_position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'en_position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'x_position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <?= $form->field($model, 'active')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
