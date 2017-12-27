<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_category_news')->textInput() ?>

    <?= $form->field($model, 'uz_thema')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ru_thema')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'en_thema')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'x_thema')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'uz_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ru_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'en_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'x_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'uz_text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ru_text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'en_text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'x_text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slider')->textInput() ?>

    <?= $form->field($model, 'active')->textInput() ?>

    <?= $form->field($model, 'show_n')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
