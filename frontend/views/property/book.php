<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Listing */
/* @var $form ActiveForm */
?>
<div class="frontend-views-book">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'listingName') ?>
        <?= $form->field($model, 'listingDesc') ?>
        <?= $form->field($model, 'videoUrl') ?>
        <?= $form->field($model, 'size') ?>
        <?= $form->field($model, 'price') ?>
        <?= $form->field($model, 'status') ?>
        <?= $form->field($model, 'createdAt') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- frontend-views-book -->
