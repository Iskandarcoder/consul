<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Page;

/* @var $this yii\web\View */
/* @var $model backend\models\Book */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'uz_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ru_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'en_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'x_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uz_author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ru_author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'en_author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'x_author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'page')->textInput() ?>
    <?= $form->field($model, 'page')->dropDownList(
        ArrayHelper::map(Page::find()->all(), 'id','uz_name'),
        ['prompt'=>'Выберите cтраницы']
        ) ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'active')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
