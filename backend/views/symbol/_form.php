<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Page;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model backend\models\Symbol */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="symbol-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'uz_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ru_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'en_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'x_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <?
        echo $form->field($model, 'page')->widget(Select2::classname(), [
            'data' =>ArrayHelper::map(Page::find()->all(), 'id','uz_name'),
            'language' => 'uz',
            'options' => ['placeholder' => 'Select a state ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);


    ?>      

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

   
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
