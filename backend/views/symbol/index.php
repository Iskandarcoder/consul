<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SymbolSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Symbols';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="symbol-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'uz_name',
            'ru_name',
            'en_name',
            'x_name',
            // 'img',
            // 'link:ntext',
            // 'page',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
