<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\StringHelper;
use frontend\models\Location;
use frontend\models\Listing;
use frontend\models\ListingImage;

/* @var $this yii\web\View */

$this->title = 'Property Index';

$markers = Location::find()->innerJoinWith('listing')->asArray()->all();
$listingdetails = Listing::find()->innerJoinWith('locations')->all();

$imagedetails = Listing::find()->innerJoinWith('listingImage')->all();
?>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmnULnIcTW4J_9NxGeHhLSVLme6Ba36AE&callback=initMap&libraries=&v=weekly" defer></script>

<div class="row" style="margin-top: 80px">
    <div class="col-md-8">
    <div class="row">
    <div class="col-md-6">
             <!-- Search form -->
         <div class="input-group">
            <input type="text" class="form-control" placeholder="Search Property" >
            <div class="input-group-append">
              <button class="btn btn-secondary" type="button">
                <i class="fa fa-search"></i>
              </button>
            </div>
        </div>

    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-2">
                <button type="button" class="btn btn-outline-dark">Price</button>
            </div>
            <div class="col-md-3">
                <button type="button" class="btn btn-outline-dark">Property Type</button>
            </div>
            <div class="col-md-2">
               <button type="button" class="btn btn-outline-dark">More</button>
            </div>  
            <div class="col-md-3">
               <button type="button" class="btn btn-primary">Save Search</button>
            </div>
            <div class="col-md-2">

            </div>
            </div>
            

        </div>
        </div>
    </div>
        <div class="col-md-4">
        <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
                <button type="button" class="btn btn-primary pull-right">Get Loan</button>
            </div>
            <div class="col-md-4">
               
                 <p><a href="<?= Url::to(['listing/create'])?>"> <button type="button" class="btn btn-primary pull-right">List Property</button></a></p>
            
            </div>
            
        </div>
        </div>
    </div>
     

<div class="row" style="margin-top: 20px">

    <div class="col-sm-8  col-md-8 col-lg-8">
       
        
        <div id="homemap" style="width: 100%; height: 850px; border-radius: 5px"></div>

    </div>

    <div class="col-sm-4 col-md-4 col-lg-4 d-flex flex-wrap">
     <div class="container">
    <div class="row">
        <div class="col-md-7">
            <h3>Ruiru Plots For Sale</h3>
            <h6>4,248 results</h6>
        </div>
        <div class="col-md-5">
            <div class="row">
              <div class="col-md-5">
            <h5> Sort By: </h5> 
              </div>
              <div class="col-md-7">
                    <button type="button" class="btn btn-outline-dark pull-up dropdown-toggle" data-toggle="dropdown">Newest</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Price (High to Low)</a>
                        <a class="dropdown-item" href="#">Price (Low to High)</a>
                        <a class="dropdown-item" href="#">Homes for you</a>
                        <a class="dropdown-item" href="#">Bedrooms</a>
                        <a class="dropdown-item" href="#">Bathrooms</a>
                        <a class="dropdown-item" href="#">Square feet</a>
                    </div>   
                   </div>    
            </div>
        </div> 
    </div>
    <div class="row">

    <?php foreach ($imagedetails as $pic ) {?>

      <?php   var_dump( \Yii::$app->request->baseUrl.'/'.$pic['image']); ?>
      <?php } ?>

   <?php foreach ($listingdetails as $listing ) {?>
        <div class="col-md-6">
         <div class="card" style="width: 18rem;">

        <img src="<?=$listing->image ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?=$listing->listingName ?></h5>
          <p class="card-text"> <?=$listing->price ?>
            <br> <?=$listing->size ?>
            <br><?=$listing->locations[0]->city?>
          </p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <br>
      <?php } ?>
    </div>

</div>
</div>
</div>
    


<div class="btn-group-fab" role="group" aria-label="FAB Menu">
  <div>
    <button type="button" class="btn btn-main btn-primary has-tooltip" data-placement="left" title="Menu"> <i class="fa fa-bars"></i> </button>
    <button type="button" class="btn btn-sub btn-info has-tooltip" data-placement="left" title="Fullscreen"> <i class="fa fa-arrows-alt"></i> </button>
    <button type="button" class="btn btn-sub btn-danger has-tooltip" data-placement="left" title="Save"> <i class="fa fa-floppy-o"></i> </button>
    <?= Html::a('<i class="fa fa-plus"></i>', ['listing/create'], ['class' => 'btn btn-sub btn-success has-tooltip','title'=>'Add Listing']) ?>
  </div>
</div>



<script type="text/javascript">
      // Initialize and add the map
      function initMap() {
        // The location of Nairobi
        const nairobi = { lat: -1.286389, lng: 36.817223 };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("homemap"), {
          zoom: 7,
          center: nairobi,
        });
        
        
        
        // Put a marker foreach listing
        var markers = <?php echo json_encode($markers)?>;
        markers.forEach(putMarkers);
       
        function putMarkers(item) {
        
            const contentString =
                '<div id="content">' +
                '<div id="siteNotice">' +
                "</div>" +
                '<h1 id="firstHeading" class="firstHeading">'+item.listing.listingName+'</h1>' +
                '<div id="bodyContent">' +
                "<p>"+item.listing.listingDesc+"</p>" +
                '<p>If you want to lern more About: '+item.listing.listingName+' visit, <a href="'+item.listing.videoUrl+'">' +
                ""+item.listing.listingName+"</a> " +
                "(Date Posted: "+item.listing.createdAt+").</p>" +
                "</div>" +
                "</div>";
            
              const infowindow = new google.maps.InfoWindow({
                content: contentString,
              });
        
        
        
        
        console.log(item);
             var  lat = parseFloat(item.lattitude);
             var  lng = parseFloat(item.longitude);
            const marker = new google.maps.Marker({
              position: { lat: lat, lng: lng },
              map: map,
              title: item.listing.listingName+" ("+item.city+")",
            });
            
          marker.addListener("click", () => {
            infowindow.open(map, marker);
          });
        }


      }

</script>