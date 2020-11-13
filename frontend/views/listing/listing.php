<?php
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\models\Location;

/* @var $this yii\web\View */

$this->title = 'Listing Index';

$markers = Location::find()->innerJoinWith('listing')->asArray()->all();

?>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmnULnIcTW4J_9NxGeHhLSVLme6Ba36AE&callback=initMap&libraries=&v=weekly" defer></script>

<div class="listing-index">
<div class="row">
    <div class="col-md-4">
    <div class="row listing-list">
    <div class="col-md-6">
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div>
    </div>
   <div class="col-md-6">
       <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div>
    </div>
    </div>
    
   <div class="row listing-list-sb">
    <div class="col-md-6">
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div>
    </div>
   <div class="col-md-6">
       <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div>
    </div>
    </div>
    
   <div class="row listing-list-sb">
    <div class="col-md-6">
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div>
    </div>
   <div class="col-md-6">
       <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div>
    </div>
    </div>

    
    </div>
    <div class="col-md-8">
    	<div id="homemap" style="width: 100%; height: 850px; border-radius: 5px"></div>
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