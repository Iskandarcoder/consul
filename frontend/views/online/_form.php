<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model backend\models\Online */
/* @var $form yii\widgets\ActiveForm */
$reference_subject = [
    'Konsullik masalalari' => Yii::t('app', 'Konsullik masalalari'),
    'Boshqalar' => Yii::t('app', 'Boshqalar'),
];

?>
<div class="col-lg-10 col-lg-offset-1" id="wrapper"><br>

    <div class="container">

        <div class="row">
            <h4><?= Yii::t('app', 'Online_reception') ?></h4>
            <div class="col-md-7">
                <div class="online-form">

                    <?php $form = ActiveForm::begin(); ?>

                    <?= $form->field($model, 'fio')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'reference_subject')->dropDownList($reference_subject,['prompt'=>Yii::t('app', 'variant')]) ?>

                    <?= $form->field($model, 'telefon')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'reference_text')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>

                    <div class="form-group" style="float: right;">
                        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'send') : Yii::t('app', 'update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>
            <div class="col-md-5" >
                <p>Public offer</p>
            </div>
        </div>
    </div>
</div>
