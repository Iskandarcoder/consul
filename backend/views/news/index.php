<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\CategorNews;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Новости';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

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
            

            //'id',
            //'id_category_news',
            [
                'attribute'=>'id_category_news',
                'value'=>'categorNews.name',
            ],
            'uz_thema:ntext',
            'ru_thema:ntext',
            'en_thema:ntext',
            // 'x_thema:ntext',
            // 'uz_description:ntext',
            // 'ru_description:ntext',
            // 'en_description:ntext',
            // 'x_description:ntext',
            // 'uz_text:ntext',
            // 'ru_text:ntext',
            // 'en_text:ntext',
            // 'x_text:ntext',
             'date',
            // 'img',
            // 'slider',
            // 'active',
            // 'show_n',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
