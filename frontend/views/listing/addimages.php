<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Add Listing Images'

/* @var $this yii\web\View */
/* @var $model frontend\models\Location */
/* @var $form ActiveForm */
?>

 <div class="container" style="margin-top: 70px;">
    <div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="progress" id="progress1">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">                
            </div>
            <span class="progress-type">Overall Progress</span>
            <span class="progress-completed">100%</span>
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

    <div class="panel panel-primary">
     <div class="panel-body">
      <h3 class="text-on-pannel text-primary"><strong class="text-uppercase"> <?= Html::encode($this->title) ?> </strong></h3>
            <div class="row">

                <?php $form = ActiveForm::begin([
                	'options'=> ['enctype'=> 'multipart/form-data']
                ]); ?>
                     <?= $form->field($model, 'listingid')->hiddenInput(['value'=>$listingId])->label(false) ?>
      				        <div class="col-md-4 col-sm-6">
				                <div class="form-horizontal">
				                
				                    <div class="form-group">
										<div class="file-field">
										    <div class="btn btn-primary btn-sm float-left">
										      <span>Choose file</span>

										      <input type="file"  name="image" id="imageurl">
										    </div>
										    <div class="file-path-wrapper">
										     <div class="form-group">
										        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
										    </div>
										    </div>
										  </div>
				                    </div>



            </div>
        <?php ActiveForm::end(); ?>

     </div>
 	</div>

