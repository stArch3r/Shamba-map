<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Listing */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="listing-form">

    <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'status')->hiddenInput(['value'=>1])->label(false) ?>
    

    <?= $form->field($model, 'listingName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'listingDesc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'videoUrl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'size')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('<span class="fa fa-forward"></span> Next', ['class' => 'btn btn-success pull-right']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
