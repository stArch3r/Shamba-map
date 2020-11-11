<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Nav;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php 
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-lg navbar-light bg-light fixed-top',
        ],
    ]);
    echo Nav::widget([
        'items' => [
            ['label' => 'Search By Location', 'url' => ['/site/index'],'options'=>['class'=>'nav-location']],
            ['label' => 'Search By Company', 'url' => ['/site/about'],'options'=>['class'=>'navglobe-pright']],
            [
                'label' => '<i class="fa fa-globe fa-fw fa-lg"></i>',
                'items' => [
                    ['label' => 'English US', 'url' => '#'],
                    ['label' => '$ USD', 'url' => '#'],
                ],
            ],
            '&nbsp;&nbsp;',
            [
                'label' => '<i class="fa fa-bars" aria-hidden="true"></i>&nbsp;&nbsp;  <i class="fa fa-user-circle-o" aria-hidden="true"></i>',
                'items' => [
                    ['label' => 'Level 1 - Dropdown A', 'url' => '#'],
                    '<div class="dropdown-divider"></div>',
                    '<div class="dropdown-header">Dropdown Header</div>',
                    ['label' => 'Level 1 - Dropdown B', 'url' => '#'],
                ],
                'options'=>['class'=>'nav-button btn btn-outline-dark']
            ],
        ],
        'options' => ['class' => 'navbar-nav'],
        'encodeLabels' => false,
    ]);
    NavBar::end();
     
    ?>

    <div class="container-fluid">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
