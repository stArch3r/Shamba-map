<?php


use yii\helpers\Html;
use yii\helpers\StringHelper;
use yii\common\models\Listingimage;

?>
<div class="media">
	<div class="embed-responsive embed-responsive-16by9 mr-3">
              <image class="embed-responsive-item" 
              	src="<?= $model->getImageLink()?>">
              </image>
    </div>	
</div>