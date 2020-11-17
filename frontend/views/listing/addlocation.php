<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Add Listing Location'

/* @var $this yii\web\View */
/* @var $model frontend\models\Location */
/* @var $form ActiveForm */
?>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmnULnIcTW4J_9NxGeHhLSVLme6Ba36AE&libraries=places"></script>
   
    <div class="container" style="margin-top: 60px;">
    <div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="progress" id="progress1">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">                
            </div>
            <span class="progress-type">Overall Progress</span>
            <span class="progress-completed">60%</span>
        </div> 
     </div>
    </div>
    <div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="row step">
            <div id="div1" class="col-md-4" onclick="javascript: resetActive(event, 0);">
                <span class="fa fa-pencil"></span>
                <p>Listing Details</p>
            </div>
            <div class="col-md-4 activestep" onclick="javascript: resetActive(event, 60);">
                <span class="fa fa-map-marker"></span>
                <p>Location Details</p>
            </div>
            <div id="last" class="col-md-4" onclick="javascript: resetActive(event, 100);">
                <span class="fa fa-picture-o"></span>
                <p>Add Images</p>
            </div>
      </div>
      </div>
      </div>

      <div class="locate">
      <div class="row mt-80px" >
      	<div class="col-md-6">
      		 <h3 class="text-on-pannel text-primary"><strong class="text-uppercase"> <?= Html::encode($this->title) ?> </strong></h3>

      			<?php $form = ActiveForm::begin(); ?>
                     <?= $form->field($model, 'listingId')->hiddenInput(['value'=>$listingId])->label(false) ?>
      		<div class="row">
      		<div class="col-md-4">
      		<label class="col-md-4 control-label" for="latitude">Latitude:</label>
      	</div>
      	<div class="col-md-8">
      		<?= $form->field($model, 'lattitude')->textInput(['id'=>'latitude', 'class'=>'form-control latitude'])->label(false) ?>
      	</div>
      	</div>
      	<div class="row">
      		<div class="col-md-4">
      		<label class="col-md-4 control-label" for="longitude">Longitude:</label>
      	</div>
      	<div class="col-md-8">
      		 <?= $form->field($model, 'longitude')->textInput(['id'=>'longitude', 'class'=>'form-control longitude'])->label(false) ?>
      	</div>
      	</div>
      		<div class="row">
      		<div class="col-md-4">
      			<label class="col-md-4 control-label" for="longitude">Country </label>
      	</div>
      	<div class="col-md-8">
      		 <?= $form->field($model, 'country')->textInput(['maxlength' => true, 'id'=>'country', 'class'=>'form-control country'])->label(false)?>
      	</div>
      	</div>
      		<div class="row">
      		<div class="col-md-4">
      		<label class="col control-label" for="longitude">Country Region:</label>
      	</div>
      	<div class="col-md-8">
      		  <?= $form->field($model, 'countryRegion')->textInput(['maxlength' => true, 'id'=>'countryRegion', 'class'=>'form-control country-region'])->label(false)?>
      	</div>
      	</div>
      		<div class="row">
      		<div class="col-md-4">
      		<label class="col-md-4 control-label" for="longitude">City/Locality:</label>
      	</div>
      	<div class="col-md-8">
      		<?= $form->field($model, 'city')->textInput(['maxlength' => true, 'id'=>'locality', 'class'=>'form-control locality'])->label(false) ?>
      	</div>
      	</div>
      		<div class="row">
      		<div class="col-md-4">
      			<label class="col-md-4 control-label" for="street">Street/Road:</label>
      	</div>
      	<div class="col-md-8">
      		 <?= $form->field($model, 'streetRoad')->textInput(['maxlength' => true, 'id'=>'street', 'class'=>'form-control street'])->label(false) ?>
      	</div>
      	</div>
      		<div class="row">
      		<div class="col-md-4">
      		<label class="col-md-4 control-label" for="street">Address:</label>
      	</div>
      	<div class="col-md-8">
      		<?= $form->field($model, 'address')->textInput(['maxlength' => true, 'id'=>'address', 'class'=>'form-control address'])->label(false) ?>
      	</div>
      	</div>

      		<div class="row">
      		<div class="col-md-4">
      			<label class="col-md-4 control-label" for="street">Vicinity:</label>
      	</div>
      	<div class="col-md-8">
      		<?= $form->field($model, 'vicinity')->textInput(['maxlength' => true, 'id'=>'vicinity', 'class'=>'form-control vicinity'])->label(false) ?>
      	</div>
      	</div>
      	</div>
      	<div class="col-md-6">
      		<input id="searchInput" class="input-controls" type="text" placeholder="Search locations"/>
            <div class="map" id="map"></div>
      	</div>      	
     
		<div class="row">
		    <div class="col-md-12">
            <?= Html::submitButton('Next <span class="fa fa-forward"></span>', ['class' => 'btn btn-warning pull-right']) ?>
            </div>
		</div>	
                <?php ActiveForm::end(); ?>
             
       </div>
  </div>
</div>



    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
