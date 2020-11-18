<?php
use yii\helpers\Html;

use yii\bootstrap4;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Modal;

$this->title = 'SHAMBANI';
 ?>
 <div class="container-fluid" style="margin-Top:6%">

 <div class="row">
   <div class="col-sm-4">
     <div class="container">
  <h2> Ruiru land </h2>
  <p> our 50 x 100 plots in Ruiru </p>
  <img src="../assets/images/shambani.png" class="float-right" alt="Paris" width="180" height="180">
  <img src="../assets/images/shambani.png" class="float-left" alt="Paris" width="180" height="180">
  <img src="../assets/images/shambani.png" class="float-down"style="margin-left:5%" alt="Paris" width="100" height="90">
<img src="../assets/images/shambani.png" class="float-down"  style="margin-right:5%" alt="Paris" width="100" height="90">

</div>
   </div>
   <div class="row">
     <div class="col-sm-8" style="margin-left:52%">
    <h4>Over view</h4>
   <div class="card border-success mb-3" style="max-width: 120rem;">
  <div class="card-header">Property details</div>
  <div class="card-body text-dark">
    <h5 class="card-title">Ruiru land</h5>
    <p class="card-text"> this prime real easte is located within Ruiru town just off exit 14 on thika road</p
      <br> <p>for only 2000usd</p>
      <button type="button" class="btn btn-primary" > contact seller </button>

  </div>
 </div>
</div>
</div>
<div class="ds-divider">
</div>
<div class="row"  class="float-up">
  <div class="col-sm-4" style="margin-left:155%">
    <form action="/action_page.php">
    <label for="w3review">contact seller</label>
    <textarea id="w3review" name="w3review" rows="4" cols="50">
   Get a free qoutation and site tour now !
    </textarea>
    <br><br>
    <input type="submit" value="Submit" class="btn btn-dark">
    </form>

    <p>by clicking submit seller will recive your email and phone number </p>
  </div>
</div>

<?php
            Modal::begin([
                'header'=>'<h4> contact seller </h4>',
                'id'=>'contact',
                'size'=>'modal-lg',
                ]);
            echo "<div id='contactContent'></div>";
            Modal::end();
          ?>
