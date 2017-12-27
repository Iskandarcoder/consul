<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Quotation */

$this->title = 'Добавить котировка';
$this->params['breadcrumbs'][] = ['label' => 'Котировка', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quotation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
