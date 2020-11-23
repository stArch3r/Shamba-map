<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Message */

$this->title = 'Update Message: ' . $model->subjectId;
$this->params['breadcrumbs'][] = ['label' => 'Messages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->subjectId, 'url' => ['view', 'id' => $model->subjectId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="message-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
