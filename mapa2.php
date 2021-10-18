<html>
    <head>

<style type="text/css">
body, html{margin:0; padding:0;}
#mapCanvas {
    width: 100%;
    height: 100%;
}

.gm-style .gm-style-iw {
	font-weight: 300;
	font-size: 10px;
	color: #fff;
	background: #692e2e;
	text-align: center;
	position: absolute !important;
	left: 0 !important;
	bottom: 0;
	top: 0 !important;
	width: 100% !important;
}

.gm-style .gm-style-iw {
	font-weight: 300;
	font-size: 10px;
	color: #fff;
	text-align: center;
	width: auto !important;
	height: auto !important;
	min-height: 85px !important;
}

.gm-style .gm-style-iw-t::after {
    border-top: 11px solid #692e2e!important;
}

.gm-ui-hover-effect img {filter: invert(1);}


        /*style the annoying little arrow at the bottom*/
        .gm-style div div div div div div div div {
            background-color:#transparent !important;
			overflow:hidden!important;

        }


</style>
<link rel="stylesheet" href="css/snazzy-info-window.min.css">
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8M2wYlFClmSEMeFSlWb9WTWWC2N3SegE"></script>
<script src="js/snazzy-info-window.min.js"></script>
<script>
function initMap() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'roadmap',
		center: {lat: 23.353389, lng: -102.673941},
          zoom: 5,

		styles: [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ebe3cd"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#523735"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f1e6"
      }
    ]
  },
  {
    "featureType": "administrative",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#c9b2a6"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#dcd2be"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#ae9e90"
      }
    ]
  },
  {
    "featureType": "administrative.neighborhood",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "landscape.natural",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dfd2ae"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dfd2ae"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#93817c"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#a5b076"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#447530"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f5f1e6"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#fdfcf8"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "labels",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f8c967"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#e9bc62"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road.highway.controlled_access",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e98d58"
      }
    ]
  },
  {
    "featureType": "road.highway.controlled_access",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#db8555"
      }
    ]
  },
  {
    "featureType": "road.local",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#806b63"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dfd2ae"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#8f7d77"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#ebe3cd"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dfd2ae"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#b9d3c2"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#92998d"
      }
    ]
  }
]
    };
                    
    // Display a map on the web page
    map = new google.maps.Map(document.getElementById("mapCanvas"), mapOptions);
    map.setTilt(50);
        
    // Multiple markers location, latitude, and longitude
    var markers = [
       ['Vips Acapulco Costa Azul', 16.8456, -99.8486],
		['Vips Acapulco Diamante', 16.7963, -99.8108],
		['Vips Aguascalientes Plaza Galerías', 	21.92376, -102.292],
		['Vips Jardín Balbuena', 	19.4209, -99.1146],
		['Vips Acapulco Diamante', 16.7963, -99.8108],
		['Vips Miguel Alemán', 25.6937, -100.241],
		['Vips Bosques de Aragón', 19.4767, -99.0539],
		['Vips León Express', 	21.1142, -101.653]
    ];
                        
    // Info window content
    var infoWindowContent = [
        ['<div class="info_content">' +
        '<h3>Conde de las Tres Chiles en <br>Vips Acapulco Costa Azul</h3>' +
        '</div>'],
		
		['<div class="info_content">' +
        '<h3>Duque de las Suizas en <br>Vips Acapulco Diamante</h3>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Barón de las Rancheras en <br>	Vips Aguascalientes Plaza Galerías</h3>' +
        '</div>'],
		
		['<div class="info_content">' +
        '<h3>Archiduque de las de Pipián en <br>Vips Jardín Balbuena</h3>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Príncipe de las de Mole en <br>Vips Acapulco Diamante</h3>' +
        '</div>'],
		
		['<div class="info_content">' +
        '<h3>Caballero de las de Chicharrón en <br>Vips Miguel Alemán</h3>' +
        '</div>'],

        ['<div class="info_content">' +
        '<h3>Virrey de las Enfrijoladas en <br>	Vips Bosques de Aragón</h3>' +
        '</div>'],
		
		['<div class="info_content">' +
        '<h3>Marqués de las de Chipotle en <br>Vips León Express</h3>' +
        '</div>']
       
    ];
        
    // Add multiple markers to map
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    
    // Place each marker on the map  
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
			icon: 'img/reyenchilada/pines/'+ i + '.png',
            map: map,
            title: markers[i][0]
        });
        
        // Add info window to marker    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Center the map to fit all markers on the screen
        map.fitBounds(bounds);
    }

    // Set zoom level
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(5);
        google.maps.event.removeListener(boundsListener);
    });
	

    
}
// Load initialize function
google.maps.event.addDomListener(window, 'load', initMap);
</script>

 </head>
 <body>
 <div id="mapCanvas"></div>
 </body>
  </html>