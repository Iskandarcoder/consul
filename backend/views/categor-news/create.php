<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\CategorNews */

$this->title = 'Категория';
$this->params['breadcrumbs'][] = ['label' => 'Категория', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="categor-news-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
