<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;
use backend\models\Page;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model backend\models\Service */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="service-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'uz_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ru_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'en_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'x_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uz_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ru_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'en_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'x_description')->textarea(['rows' => 6]) ?>

    <h4><a href="http://fontawesome.io/icons/" target="_blank">The Icons</a></h4>
    <?= $form->field($model, 'icon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

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

    <?= $form->field($model, 'order_s')->textInput() ?>

    <?= $form->field($model, 'date')->widget(DatePicker::classname(), [
        'language' => 'ru',
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true
        ],
    ]); ?>

    <?= $form->field($model, 'active')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
