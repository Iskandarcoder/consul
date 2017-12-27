<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Menu;
use backend\models\Page;

/* @var $this yii\web\View */
/* @var $model backend\models\SubMenu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sub-menu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'parent')->dropDownList(
        ArrayHelper::map(Menu::find()->all(), 'id','uz_name'),
        ['prompt'=>'Выберите меню']
        ) ?>

    <?= $form->field($model, 'uz_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ru_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'en_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'x_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'page')->dropDownList(
        ArrayHelper::map(Page::find()->all(), 'id','uz_name'),
        ['prompt'=>'Выберите cтраницы']
        ) ?>

    
    <?= $form->field($model, 'order_m')->textInput() ?>

    <?= $form->field($model, 'target')->checkbox() ?>

    <?= $form->field($model, 'sidebar')->checkbox() ?>

    <?= $form->field($model, 'active')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
