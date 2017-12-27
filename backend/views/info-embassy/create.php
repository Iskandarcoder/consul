<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\InfoEmbassy */

$this->title = 'Create Info Embassy';
$this->params['breadcrumbs'][] = ['label' => 'Info Embassies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="info-embassy-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
