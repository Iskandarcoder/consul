<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
       // 'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Главная', 'url' => ['/site/index']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
         
          $menuItems[] = ['label' => 'Новости', 'url' => ['/news']];
          $menuItems[] = ['label' => 'Категория', 'url' => ['/categor-news']]; 
          $menuItems[] = ['label' => 'Cтраница', 'url' => ['/page']];
          $menuItems[] = ['label' => 'Символ', 'url' => ['/symbol']];
          $menuItems[] =   [
                'label' => 'Меню',
                'items' => [
                     ['label' => 'Меню', 'url' => '@web/menu'],
                     '<li class="divider"></li>',
                     ['label' => 'Суб-меню', 'url' => '@web/sub-menu'],
                     ['label' => 'Топ-меню', 'url' => '@web/top-menu'],
                ],
           ];
           $menuItems[] =   [
                'label' => 'Услуга',
                'items' => [
                     ['label' => 'Полезные ссылки', 'url' => '@web/links'],
                     ['label' => 'Сервисы', 'url' => '@web/service'],
                ],
           ];
          $menuItems[] =   [
                'label' => 'Инфо',
                'items' => [
                     ['label' => 'Ппосольство', 'url' => '@web/info-embassy'],
                     ['label' => 'Узбекистан', 'url' => '@web/info-uzb'],
                     ['label' => 'Книга', 'url' => '@web/r=book'],
                     ['label' => 'Процитируем', 'url' => '@web/quotation'],
                     ['label' => 'Онлайн-приемная ', 'url' => '@web/online'],
                ],
           ];
          $menuItems[] =   [
                'label' => 'Галерея',
                'items' => [
                     ['label' => 'Фото', 'url' => '@web/photo'],
                     ['label' => 'Видео', 'url' => '@web/video'],
                ],
           ];
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )

            . Html::endForm()
            . '</li>';

    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
