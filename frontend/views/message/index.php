<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MessageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Messages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="message-index">

<div class="col-container-fluid d-flex h-100 flex-column ">
  <div class="row">
    <div class="col-4 border-right border-top boarder-left">
		<h4>Messages
		
			<div class="btn-group align-right" style="float:right;">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false" align="right">
    
  </button>
  <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left dropdown-menu-justify-align-right">
    <button class="dropdown-item" type="button">All conversations</button>
    <button class="dropdown-item" type="button">Archived conversations</button>
    <button class="dropdown-item" type="button">Unread conversations</button>
  </div>
</div>
		
		</h4>
	</div>
	<div class="col-4 border-right border-top boarder-left"></div>
	<div class="col-4 border-right border-top boarder-left">
		<h4>Details
		<button type="button" class="close" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		</h4>
	</div>
  </div>
</div>
<div class="col-container-fluid d-flex h-100 flex-column">
  <div class="row d-flex h-100 flex-row">
    <div class="col-4 border-right border-top text-center" style="height: 36rem;">
	<br>
	<br>
		<h6><b>You have unread messages</b></h6>
		<br>
			<p>When you book a site trip or experience,<br>messages from your seller will show up here</p>
				<div class="col-auto">
					<button class="btn btn-outline-secondary border-left rounded rounded-right rounded-left" type="button">
						Explore shambani
					</button>
				</div>
	</div>
    <div class="col-4 border-right border-top" style="height: 36rem;"></div>
	<div class="col-4 border-right border-top" style="height: 36rem;"></div>
  </div>
</div>

</div>
