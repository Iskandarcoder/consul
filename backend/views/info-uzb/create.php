<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\InfoUzb */

$this->title = 'Create Info Uzb';
$this->params['breadcrumbs'][] = ['label' => 'Info Uzbs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="info-uzb-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
