<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Symbol */

$this->title = 'Добавить';
$this->params['breadcrumbs'][] = ['label' => 'Symbols', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="symbol-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
