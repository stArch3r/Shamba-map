      // Initialize and add the map
      function initMap() {
        // The location of Nairobi
        const nairobi = { lat: -1.286389, lng: 36.817223 };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("homemap"), {
          zoom: 8,
          center: nairobi,
        });
        // The marker, positioned at Nairobi
        const marker = new google.maps.Marker({
          position: nairobi,
          map: map,
        });
      }
