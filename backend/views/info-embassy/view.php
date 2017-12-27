<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\InfoEmbassy */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Info Embassies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="info-embassy-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'uz_name',
            'ru_name',
            'en_name',
            'x_name',
            'uz_text:ntext',
            'ru_text:ntext',
            'en_text:ntext',
            'x_text:ntext',
            'img',
            'date',
        ],
    ]) ?>

</div>
