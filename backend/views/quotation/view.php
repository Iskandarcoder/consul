<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Quotation */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Котировка', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quotation-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
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
            'uz_quotation:ntext',
            'ru_quotation:ntext',
            'en_quotation:ntext',
            'x_quotation:ntext',
            'uz_author',
            'ru_author',
            'en_author',
            'x_author',
            'uz_position',
            'ru_position',
            'en_position',
            'x_position',
            'img',
            'active',
        ],
    ]) ?>

</div>
