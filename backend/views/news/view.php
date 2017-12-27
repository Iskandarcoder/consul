<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\News */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Новости', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить этот элемент?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'categorNews.name',
            'uz_thema:ntext',
            'ru_thema:ntext',
            'en_thema:ntext',
            'x_thema:ntext',
            'uz_description:ntext',
            'ru_description:ntext',
            'en_description:ntext',
            'x_description:ntext',
            'uz_text:ntext',
            'ru_text:ntext',
            'en_text:ntext',
            'x_text:ntext',
            'date',
            'img',
            'slider',
            'active',
            'show_n',
        ],
    ]) ?>

</div>
