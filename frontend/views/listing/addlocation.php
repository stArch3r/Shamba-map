<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Location */
/* @var $form ActiveForm */
?>
	<section class="panel">
         <div style="display: block;" class="panel-body">
			<fieldset class="custom-border autoscroll"><legend class="custom-border"> Add listing</legend>
			<?php $form = ActiveForm::begin(); ?>
			
			  <?= $form->field($model, 'listingId')->hiddenInput(['value'=>$listingId])->label(false) ?>
				<div class="row">
				        <div class="col-md-4 col-sm-6">
				                <div class="form-horizontal">
				                
				                     <div class="form-group">
				                        <label class="col-md-4 control-label" for="latitude">Latitude:</label>
				                        <div class="col-md-8">
				                        
				                        	<?= $form->field($model, 'lattitude')->textInput(['id'=>'latitude', 'class'=>'form-control latitude'])->label(false) ?>
				                        	
				                        </div>
				                    </div>
				                    <div class="form-group">
				                        <label class="col-md-4 control-label" for="longitude">Longitude:</label>
				                        <div class="col-md-8">
				                        
				                        <?= $form->field($model, 'longitude')->textInput(['id'=>'longitude', 'class'=>'form-control longitude'])->label(false) ?>
				                       
				                        </div>
				                    </div>
				                    <div class="form-group">
				                        <label class="col-md-4 control-label" for="longitude">Country </label>
				                        <div class="col-md-8">
				                         <?= $form->field($model, 'country')->textInput(['maxlength' => true, 'id'=>'country', 'class'=>'form-control country'])->label(false)?>
				                		
				                        </div>
				                    </div>
				                    <div class="form-group">
				                        <label class="col-md-4 control-label" for="longitude">Country Region:</label>
				                        <div class="col-md-8">
				                        <?= $form->field($model, 'countryRegion')->textInput(['maxlength' => true, 'id'=>'countryRegion', 'class'=>'form-control country-region'])->label(false)?>
				                		
				                        </div>
				                    </div>
				                    <div class="form-group">
				                        <label class="col-md-4 control-label" for="longitude">City/Locality:</label>
				                        <div class="col-md-8">
				                        
				                        	 <?= $form->field($model, 'city')->textInput(['maxlength' => true, 'id'=>'localityCity', 'class'=>'form-control locality'])->label(false) ?>
				                        
				                        </div>
				                    </div>      
				                    <div class="form-group">
				                        <label class="col-md-4 control-label" for="street">Street/Road:</label>
				                        <div class="col-md-8">
				                        
				                        	 <?= $form->field($model, 'streetRoad')->textInput(['maxlength' => true, 'id'=>'street', 'class'=>'form-control street'])->label(false) ?>
				                            
				                        </div>
				                    </div>
				                  
				                                                       
				                </div>
				                
								   
								   
				                
				            </div>
				           
				             	<div class="col-md-7 col-sm-6">
				             	
				             	    <input id="pac-input" class="controls" type="text" placeholder="Search locations"/>
				                    <div id="map" style="width: 100%; height: 480px; border-radius: 5px">
				                    
				                    </div>                    
				                </div>
						
						
						</div>				
						
			
								
								
								<div class="form-group">					
									<label class="col-sm-3 control-label required-content">
										<div class="summary">
											<span class="btn bold600 font14">Process Name: <a href="">
												<span class="text-danger">(Step 1)</span>
												</a>
											</span>
										</div>
									</label>					
									<div class="col-sm-9">
										<?= Html::submitButton($model->isNewRecord ? 'Save <span class="fa fa-forward"></span> ' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success float_right' : 'btn btn-primary float_right']) ?>
									</div>
								</div>
	
	 <?php ActiveForm::end(); ?>
	
				<br><br></fieldset>
            </div>
        </section>
