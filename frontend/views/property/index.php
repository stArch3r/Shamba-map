<?php
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\models\Location;

/* @var $this yii\web\View */

$this->title = 'Property Index';

$markers = Location::find()->innerJoinWith('listing')->asArray()->all();

?>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmnULnIcTW4J_9NxGeHhLSVLme6Ba36AE&callback=initMap&libraries=&v=weekly" defer></script>


<div class="row">
    <div class="col-sm-8  col-md-8 col-lg-8">
            
        
        <div id="homemap" style="width: 100%; height: 850px; border-radius: 5px"></div>

    </div>

    <div class="col-sm-4 col-md-4 col-lg-4 d-flex flex-wrap" style="margin-top: 80px">
    <div class="container">
        <div class="dropdown">
            <label for="male">Sort By</label>
          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
            Homes for you
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Price (High to Low)</a>
            <a class="dropdown-item" href="#">Price (Low to High)</a>
            <a class="dropdown-item" href="#">Newest</a>
            <a class="dropdown-item" href="#">Bedrooms</a>
            <a class="dropdown-item" href="#">Bathrooms</a>
            <a class="dropdown-item" href="#">Square feet</a>
          </div>
        </div>

    <div class="card-deck">
    <div class="card text-center">
        <img class="card-img-top" src="<?= Yii::$app->request->baseUrl;?>/images/hse2.jpeg" alt="Card image cap">
            <div class="card-block">
                <h4 class="card-title">Permits</h4>
                <p class="card-text">
                    Apply for parking permit
                    <br> View existing permit requests
                    <br> Activate Visitor permits
                    <br>
                </p>
            </div>
            <div class="card-footer">
                Link
            </div>
        </div>

        <div class="card text-center">
            <img class="card-img-top" src="<?= Yii::$app->request->baseUrl;?>/images/hse3.jpeg" alt="Card image cap">
            <div class="card-block">
                <h4 class="card-title">Parking Tickets</h4>
                <p class="card-text">
                    View your parking ticket history
                </p>
            </div>
            <div class="card-footer">
                Link
            </div>
        </div>
    </div>
    <div class="card-deck mt-4">
        <div class="card text-center">
           <img class="card-img-top" src="<?= Yii::$app->request->baseUrl;?>/images/hse.jpeg" alt="Card image cap">
            <div class="card-block">
                <h4 class="card-title">Funding Options</h4>
                <p class="card-text">
                    Add credit/debit card
                    <br> Top up Account
                    <br> Manage cards
                </p>
            </div>
            <div class="card-footer">
                Link
            </div>
        </div>

        
        <div class="card text-center">
            <img class="card-img-top" src="<?= Yii::$app->request->baseUrl;?>/images/land1.jpeg" alt="Card image cap">
            <div class="card-block">
                <h4 class="card-title">User Settings</h4>
                <p class="card-text">
                    Edit personal details
                    <br> Change top-up settings
                    <br> Change password
                </p>
            </div>
            <div class="card-footer">
                Link
            </div>
        </div>
    </div>
</div>
        
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