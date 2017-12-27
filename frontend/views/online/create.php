<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Online */

$this->title = 'Create Online';
$this->params['breadcrumbs'][] = ['label' => 'Onlines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="online-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
