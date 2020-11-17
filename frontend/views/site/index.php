<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'SHAMBANI';
?>

<div class="site-index">

    <div class="serchbar">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search Property">
            <div class="input-group-append">
            <button class="btn btn-secondary" type="button">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </div>

    <div class="explore">
        <h1>Properties</h1>
        <h1>Near Me</h1>
       <p><a href="<?= Url::to(['property/index'])?>"><button type="button" class="btn btn-outline-secondary">Explore Nearby Properties</button></a></p>
    </div>
    <br><br>

</div>

<div class="row1">
<div class="row">
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
            <img src="<?= Yii::$app->request->baseUrl;?>/images/hse1.jpeg" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This</p>
            </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="row">
                <div class="col-md-6">
                    
                <img class="card-img" src="<?= Yii::$app->request->baseUrl;?>/images/hse1.jpeg" alt="Card image cap">
                </div>
                <div class="col-md-6">
            <h3> Mombasa </h3> 
                <h6>7 hours drive  </h6> 
                </div>
            </div>
        </div>
    <div class="col-md-3">
        <div class="row">
            <div class="col-md-8">
             <img class="card-img" src="<?= Yii::$app->request->baseUrl;?>/images/hse1.jpeg" alt="Card image cap">
            </div>
            <div class="col-md-4">
           <h3> Mombasa </h3> 
            <h6>7 hours drive  </h6> 
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="row">
            <div class="col-md-8">
             <img class="card-img" src="<?= Yii::$app->request->baseUrl;?>/images/hse2.jpeg" alt="Card image cap">
            </div>
            <div class="col-md-4">
           <h3> Mombasa </h3> 
            <h6>7 hours drive  </h6> 
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="row">
           <div class="col-md-8">
             <img class="card-img" src="<?= Yii::$app->request->baseUrl;?>/images/hse3.jpeg" alt="Card image cap">
            </div>
            <div class="col-md-4">
           <h3> Mombasa </h3> 
            <h6>7 hours drive  </h6> 
            </div>
        </div>
    </div>
</div>
</div>
</div>

<div class="row1">
<div class="row">
    <div class="col-md-3">
        <div class="row">
            <div class="col-md-8">
             <img class="card-img" src="<?= Yii::$app->request->baseUrl;?>/images/hse4.jpeg" alt="Card image cap">
            </div>
            <div class="col-md-4">
           <h3> Mombasa </h3> 
            <h6>7 hours drive  </h6> 
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="row">
            <div class="col-md-8">
             <img class="card-img" src="<?= Yii::$app->request->baseUrl;?>/images/hse5.jpeg" alt="Card image cap">
            </div>
            <div class="col-md-4">
           <h3> Mombasa </h3> 
            <h6>7 hours drive  </h6> 
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="row">
            <div class="col-md-8">
             <img class="card-img" src="<?= Yii::$app->request->baseUrl;?>/images/land.jpeg" alt="Card image cap">
            </div>
            <div class="col-md-4">
           <h3> Mombasa </h3> 
            <h6>7 hours drive  </h6> 
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="row">
           <div class="col-md-8">
             <img class="card-img" src="<?= Yii::$app->request->baseUrl;?>/images/land1.jpeg" alt="Card image cap">
            </div>
            <div class="col-md-4">
           <h3> Mombasa </h3> 
            <h6>7 hours drive  </h6> 
            </div>
        </div>
    </div>
</div>
</div>

    <div class="row1">
    <div class="row">
        <div class="col">
         <h1> Live Anywhere</h1>
        </div>
    </div>

     <div class="row">
        <div class="col-md-3">
            <img class="card-img1" src="<?= Yii::$app->request->baseUrl;?>/images/sale.jpeg" alt="Card image cap">
            Entire Plots
        </div>
        <div class="col-md-3">
            <img class="card-img1" src="<?= Yii::$app->request->baseUrl;?>/images/land.jpeg" alt="Card image cap">
            Entire Plots
        </div>
        <div class="col-md-3">
            <img class="card-img1" src="<?= Yii::$app->request->baseUrl;?>/images/hse4.jpeg" alt="Card image cap">
            Entire Plots
        </div>
        <div class="col-md-3">
            <img class="card-img1" src="<?= Yii::$app->request->baseUrl;?>/images/land1.jpeg" alt="Card image cap">
            Entire Plots
        </div>
    </div>
</div>
    <div class="jumbotron">
        <div class="container">

            <h3 class="text-white"> Meet Online Experiences </h3> 
            <h6 class="text-white"> Interactive activities you can do together, led by expert hosts.</h6> 
       
        
            <div class="row">
                <div class="col-md-6">
                    <img class="card-img1" src="<?= Yii::$app->request->baseUrl;?>/images/land.jpeg" alt="Card image cap">
                    Craft cocktails and talk gender with a bartender
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="card-img2" src="<?= Yii::$app->request->baseUrl;?>/images/hse3.jpeg" alt="Card image cap">
                            Craft cocktails and talk gender with a bartender
                        </div>
                        <div class="col-md-6">
                            <img class="card-img2" src="<?= Yii::$app->request->baseUrl;?>/images/hse4.jpeg" alt="Card image cap">
                            Craft cocktails and talk gender with a bartender
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <img class="card-img3" src="<?= Yii::$app->request->baseUrl;?>/images/sale.jpeg" alt="Card image cap">
                        Craft cocktails and talk gender with a bartender
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
 
  

    <div class="row1">
    <div class="row">
        <div class="col">
         <h1> Join millions of hosts on Shamba-Map</h1>
        </div>
    </div>

     <div class="row">
        <div class="col-md-3">
            <img class="card-img1" src="<?= Yii::$app->request->baseUrl;?>/images/sale.jpeg" alt="Card image cap">
            Entire Plots
        </div>
        <div class="col-md-3">
            <img class="card-img1" src="<?= Yii::$app->request->baseUrl;?>/images/land.jpeg" alt="Card image cap">
            Entire Plots
        </div>
        <div class="col-md-3">
            <img class="card-img1" src="<?= Yii::$app->request->baseUrl;?>/images/hse4.jpeg" alt="Card image cap">
            Entire Plots
        </div>
        <div class="col-md-3">
            <img class="card-img1" src="<?= Yii::$app->request->baseUrl;?>/images/land1.jpeg" alt="Card image cap">
            Entire Plots
        </div>
    </div>
    </div>

    <div class="row1">
    <div class="row">
        <div class="col-md-3">
            <h1>About</h1>
            <h6> How Shamba-Map works</h6>
            <h6> Newsroom</h6>
            <h6> Shamba-Map for work</h6>
            <h6> Contact Us</h6>
        </div>
        <div class="col-md-3">
            <h1>Community</h1>
            <h6> How Shamba-Map worksDiversity & Belonging</h6>
            <h6> Against Discrimination</h6>
            <h6>Accessibility</h6>
            <h6>Invite friends</h6>
        </div>
        <div class="col-md-3">
            <h1>Host</h1>
            <h6> Host your Plot</h6>
            <h6> Resource Center</h6>
            <h6> Community Center</h6>
        </div>
        <div class="col-md-3">
            <h1>Support</h1>
            <h6> Our COVID-19 Response</h6>
            <h6> Help Center</h6>
            <h6> Cancellation Options</h6>
            <h6>Trust & Safety</h6>
        </div> 
    </div>
    </div>



</div>