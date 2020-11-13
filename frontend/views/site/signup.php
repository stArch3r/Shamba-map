<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

<div class="container" style="width:75%; margin-top:4%">
    <div class="card card0 border-2" style ="background:#6e6c69;">
      <div class="row">
      <div class="col-md-7">

        <img src="../assets/images/shambani.png" style="margin-top: 17%; margin-left:3% "
        "class="rounded" alt="Cinque Terre" >

      </div>
      <div class="col-md-5">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="d-flex sign-form">

  <div class="right" style="background:white; width: 350px; height: 550px; padding:2px;">
        <div class="col-lg-8">
                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                <h4>Signup</h4>
                <a href="#" class="google btn">
                 <i class="fa fa-google fa-fw"></i> continue with Google account
                   </a>
                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>



                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
      </div>
</div>
      </div>
