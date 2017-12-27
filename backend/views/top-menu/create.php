<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TopMenu */

$this->title = 'Create Top Menu';
$this->params['breadcrumbs'][] = ['label' => 'Top Menus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="top-menu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
