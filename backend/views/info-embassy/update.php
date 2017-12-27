<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\InfoEmbassy */

$this->title = 'Update Info Embassy: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Info Embassies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="info-embassy-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
