<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Menu;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SubMenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sub Menus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-menu-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sub Menu', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
           // 'parent',
            [
                'attribute'=>'parent',
                'value'=>'menu.uz_name',
            ],
            'uz_name',
            'ru_name',
            'en_name',
            // 'x_name',
            // 'link',
            // 'page',
            // 'target',
            // 'order_m',
            // 'sidebar',
            // 'active',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
