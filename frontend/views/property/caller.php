<?php
use yii\bootstrap4\modal;
use yii\helpers\Html;
use yii\models\ContactForm;
?>

<div class="card card0 border-2" style ="background:blue;">
  <div class="row">
  <div class="col-md-7" class="d-flex justify-content-center">
<h3> contact seller </h3>
<div class="row">
  <div class="col-md-7" style="background:white">

  </div>
      <div class="row">
          <div class="col-lg-5" style="margin-left:20%; margin-right:20%">
<input type="text" name="form" value="">
                  <div class="form-group">
                      <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                  </div>


  </div>

</div>
  </div>
</div>
