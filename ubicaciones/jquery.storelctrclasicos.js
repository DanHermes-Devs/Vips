/**
 * Simple jQuery store locator plugin.
 * (c) Sébastien Castiel (@scastiel)
 */

(function($) {

	var $this = null;
	var stores = [];
	var map = null;
	var markers = {};
	var infowindow = null;
	var enableGeolocation = true;
	var defaultLocation = { latitude: 19.4268854,  longitude:-99.1680372};

	/**
	 * Prints an error in the console.
	 *
	 * @param {String} msg
	 */
	function error(msg) {
		if( console && console.error ) {
			console.error("Store locator error: " + msg);
		}
	}

	/**
	 * Fetch stores from the API. You'll want to redefine this
	 * function using the plugin fetchStoresFunction option. The
	 * parameters are used to know near which position the stores
	 * must be located.
	 *
	 * @param {number}	 lat      Latitude
	 * @param {number}	 lng      Longitude
	 * @param {function} callback Function called when the stores are fetched. It
	 *                            accepts as parameter an array containing the stores
	 *                            data.
	 */
	function fetchStores(lat, lng, callback) {
		callback([]);
	}

	/**
	 * Load the stores from the API then update the UI. The parameters
	 * define near which position we must search stores.
	 *
	 * @param {number} lat Latitude
	 * @param {number} lng Longitude
	 */
	function loadStores(lat, lng) {
		$this.find('.store:not([data-store-template])').remove();
		$this.find('.loading').show();
		$this.find('.no-store').hide();
		fetchStores(lat, lng, function(resultStores) {
			$this.find('.loading').hide();
			stores = resultStores;
			updateListWithStores(stores);
			placeStoresMarkers();

		});
	}

	/**
	 * Place the store markers on the map.
	 */
	function placeStoresMarkers() {
		var bounds = map.getBounds();
		if (!bounds) {
			// Sometimes we don't have the bounds immediatly. So we recall
			// the function 500 milliseconds later.
			window.setTimeout(placeStoresMarkers, 500);
			return;
		}

		for (var i in stores) {
			placeMarkerForStore(stores[i], bounds);
		}
	}

	/**
	 * Place a marker on the map for a given store.
	 *
	 * @param {object} store   The store to place on the map.
	 * @param {object} bounds  The map bounds, used to place the marker
	 *                         only if we know that it will be visible on
	 *                         the map. If no bounds is provided, we show all
	 *                         stores.
	 * @return {object} The new marker.
	 */
	function placeMarkerForStore(store, bounds) {
		var id = store.id;
		var image = 'https://vips.com.mx/img/clasicos/ubicacion.png';
		var latLng = new google.maps.LatLng(store.latitude, store.longitude);
		if (!bounds || bounds.contains(latLng)) {
			// The marker is in the bounds (or no bounds is provided)
			// => we show the marker.
			if (!markers[id]) {
				markers[id] = new google.maps.Marker({
					position: latLng,
					map: map,
					category: store.state,
					title: store.name,
					icon:image
				});
				google.maps.event.addListener(markers[id], 'click', (function(store, map) {
					return function() {
						openInfoWindowForStore(store);
					}
				})(store, map));
			}
		} else {
			// The marker is outside of the bounds
			// => we delete it (for performance reasons).
			if (markers[id]) {
				markers[id].setMap(null);
				delete markers[id];
			}
		}
		return markers[id];
	}



	/**
	 * Open an info window on the map for a given store (used when the
	 * user clicks on a store in the list).
	 *
	 * @param {object} store The store.
	 */
	function openInfoWindowForStore(store) {
		getInfoWindowForStore(store).open(map, markers[store.id]);

		$this.find('[data-store-id=' + store.id + ']').addClass('active');
		$this.find('[data-store-id!=' + store.id + ']').removeClass('active');
	}

	/**
	 * Update the list with the given stores.
	 *
	 * @param {object} stores The stores.
	 */
	function updateListWithStores(stores) {
		var $list = $this.find('[data-list-stores]');
		$list.find('[data-store]').remove();
		var $storeTemplate = $list.find('[data-store-template]');

		if( stores.length > 0 ) {
			for (var i in stores) {
				var store = stores[i];

				var $store = $storeTemplate.clone();
				$store.removeAttr('data-store-template')
					.attr('data-store', JSON.stringify(store))
					.attr('data-store-id', store.id);
				fillDomElementWithStore($store, store);
				fillDomElementWithStore($store, store);
				$link = $store.find('[data-store-link-to-map]');
				$link.click((function(store) {
					// When the user clicks on a store in the list, we center
					// the map on the store and show the info window.
					return function(event) {
						if (!markers[store.id]) {
							markers[store.id] = placeMarkerForStore(store);
						}
						map.setCenter(markers[store.id].position);
						map.setZoom(15);
						openInfoWindowForStore(store);
					};
				})(store));
				$store.show();

				$store.appendTo($list);
			}
			$this.find('.no-store').hide();
		} else {
			// If the list contains no store, we show the 'no-store' message.
			$this.find('.no-store').show();
		}
	}

	/**
	 * This function takes a DOM element as parameter, and fills it
	 * with store data using the attributes. For example if an element
	 * inside $domElement we have the attribute: data-store-attr="name",
	 * then we define the element content as the store.name property.
	 *
	 * @param {object} $domElement A DOM element (in jQuery format: var $domElement = $('selector')
	 * @param {object} store       The store.
	 */
	function fillDomElementWithStore($domElement, store) {
		$domElement.find('[data-store-attr]').each(function() {
			var $elt = $(this);
			var data = $elt.data('store-attr');
			if( typeof data == 'string' ) {
				// Simple case: data-store-attr="name"
				if( store[data] ) {
					$elt.html(store[data]);
				}
			} else if( typeof data == 'object' ) {
				// Little more complex case: data-store-attr='{"content":"name"}'
				if( data.content ) {
					$elt.html(store[data.content]);
				}
				for( var attribute in data ) {
					if( attribute == 'content' ) {
						continue;
					}
					if( store[data[attribute]] ) {
						$elt.attr(attribute, store[data[attribute]]);
					}
				}
			}
		})
	}

	/**
	 * Create the content to show in an infowindow for a given store.
	 *
	 * @param {object} store The store.
	 * @param {String} The HTML content.
	 */
	function createInfoWindowContentForStore(store) {
		var $contentTemplate = $this.find('[data-store-infowindow-template]');
		var $content = $contentTemplate.clone();
		fillDomElementWithStore($content, store);
		var content = $content.html();
		$content.remove();
		return content;
	}


	/**
	 * Returns an info window for a given store.
	 *
	 * @param {object} store The store.
	 * @returns {object} The info window.
	 */
	function getInfoWindowForStore(store) {
		if (infowindow) {
			infowindow.close();
		} else {
			infowindow = new google.maps.InfoWindow;


		}
		var content = createInfoWindowContentForStore(store)
		infowindow.setContent(content);

		return infowindow;
	}

	/**
	 * Enable the Google Maps autocompletion on an text input.
	 *
	 * @param {DomElement} input The input.
	 */
	function enableAutocomplete(input) {


		var autocomplete = new google.maps.places.Autocomplete(input);
		autocomplete.bindTo('bounds', map);

		google.maps.event.addListener(autocomplete, 'place_changed', function() { onPlaceChanged(autocomplete); });
	}

	/**
	 * Function called when the user enters a new address in the
	 * autocomplete input field.
	 *
	 * @param {google.maps.places.Autocomplete} autocomplete Internal Google Maps autocomplete object.
	 */
	function onPlaceChanged(autocomplete) {
		var place = autocomplete.getPlace();
		if (!place.geometry) {
			return;
		}

		if (place.geometry.viewport) {
			map.setCenter(place.geometry.location);
			map.setZoom(13);
		} else {
			map.setCenter(place.geometry.location);
			map.setZoom(13);
		}

		loadStores(map.getCenter().lat(), map.getCenter().lng());
	}



	google.maps.event.addDomListener(document.getElementById('cdmx'), 'click', function () {

    map.setCenter(new google.maps.LatLng(19.511815,-99.186316));
		map.setZoom(13);
	loadStores(map.getCenter().lat(), map.getCenter().lng());
	});

	google.maps.event.addDomListener(document.getElementById('cdmxm'), 'click', function () {

    map.setCenter(new google.maps.LatLng(19.511815,-99.186316));
		map.setZoom(13);
	loadStores(map.getCenter().lat(), map.getCenter().lng());
	});


	google.maps.event.addDomListener(document.getElementById('edomex'), 'click', function () {

    map.setCenter(new google.maps.LatLng(19.507788, -99.235846));
		map.setZoom(13);
	loadStores(map.getCenter().lat(), map.getCenter().lng());
	});

	google.maps.event.addDomListener(document.getElementById('edomexm'), 'click', function () {

    map.setCenter(new google.maps.LatLng(19.507788, -99.235846));
		map.setZoom(13);
	loadStores(map.getCenter().lat(), map.getCenter().lng());
	});

	google.maps.event.addDomListener(document.getElementById('queretaro'), 'click', function () {

    map.setCenter(new google.maps.LatLng(20.597395, -100.394203));
		map.setZoom(13);
	loadStores(map.getCenter().lat(), map.getCenter().lng());
	loadStores(map.getCenter().lat(), map.getCenter().lng());
	});

	google.maps.event.addDomListener(document.getElementById('queretarom'), 'click', function () {

    map.setCenter(new google.maps.LatLng(20.597395, -100.394203));
		map.setZoom(13);
	loadStores(map.getCenter().lat(), map.getCenter().lng());
	loadStores(map.getCenter().lat(), map.getCenter().lng());
	});


	google.maps.event.addDomListener(document.getElementById('bcn'), 'click', function () {

    map.setCenter(new google.maps.LatLng(32.585764, -115.354809));
		map.setZoom(16);
	loadStores(map.getCenter().lat(), map.getCenter().lng());
	fetchStores(lat, lng, function(resultStores) {
			$this.find('.loading').hide();
			stores = resultStores;
			updateListWithStores(stores);
			placeStoresMarkers();
		});
	});


	google.maps.event.addDomListener(document.getElementById('bcnm'), 'click', function () {

    map.setCenter(new google.maps.LatLng(32.585764, -115.354809));
		map.setZoom(16);
	loadStores(map.getCenter().lat(), map.getCenter().lng());

	fetchStores(lat, lng, function(resultStores) {
			$this.find('.loading').hide();
			stores = resultStores;
			updateListWithStores(stores);
			placeStoresMarkers();
		});


	});
	
	
		function clickCenter(){ 
					
				setTimeout(function(){
					//alert("Test");
					console.log("Clickcenter");
					$(".centerlocation").trigger("click");
				},1000)
					
				}
		function openFirst(){ 
					
				setTimeout(function(){
					//alert("Test");
					console.log("ClickFirst");
					$(".linktomap:eq(3)").trigger("click");
					
				},1000)
					
		}








	/**
	 * Main and only public function of the plugin.
	 *
	 * @param {object} options Options for the plugin :
	 *                         - fetchStoresFunction: function to use to fetch stores
	 *                         - enableGeolocation: enable or not the user geolocation (default: true)
	 *                         - defaultLocation: default position of the map (default: { latitude: 48.858877, longitude: 2.3470598 })
	 */
	$.fn.storeLocator = function(options) {

		if( options.fetchStoresFunction != null ) {
			fetchStores = options.fetchStoresFunction;
		}
		if( options.enableGeolocation != null ) {
			enableGeolocation = options.enableGeolocation;
		}
		if( options.defaultLocation != null ) {
			defaultLocation = options.defaultLocation;
		}

		if( this.length == 0 ) {
			return;
		}

		$this = $(this[0]);

		if( $this.find(".map").length == 0 ) {
			error("Unable to find the map.");
			return;
		}
		map = new google.maps.Map($this.find(".map")[0], {
			zoom: 13,
			mapTypeControl: 0,
			styles: [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dadada"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#c9c9c9"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  }
],

			center: new google.maps.LatLng(defaultLocation.latitude, defaultLocation.longitude)
		});

		if( $this.find('.input').length == 0 ) {
			error("Unable to find the input field.");
			return;
		}
		var input = $this.find('.input')[0];
		enableAutocomplete(input);

		google.maps.event.addListener(map, 'dragend', placeStoresMarkers);
		google.maps.event.addListener(map, 'zoom_changed', placeStoresMarkers);

		  // Try HTML5 geolocation.
  if (enableGeolocation && navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };
	  
	  	clickCenter();

	   var marker = new google.maps.Marker({
			position: pos,
			icon: new google.maps.MarkerImage('current.png'),

			map: map,
			 zIndex: 100 ,

			title: 'Su Ubicación Aproximada'
		  });

		  google.maps.event.addDomListener(document.getElementById('centerlocation'), 'click', function () {

					 map.setCenter(pos);
					map.setZoom(13);
					loadStores(map.getCenter().lat(), map.getCenter().lng());
					openFirst();
					
					
					



	});







	google.maps.event.addDomListener(document.getElementById('centerlocationm'), 'click', function () {

					map.setCenter(pos);
					map.setZoom(13);
					loadStores(map.getCenter().lat(), map.getCenter().lng());

					
									



	});

  $('.centerlocation').off('click').on('click', function(e) {

	map.setCenter(pos);
	map.setZoom(13);
	loadStores(map.getCenter().lat(), map.getCenter().lng());
	openFirst();


	  });


      infoWindow2.setPosition(pos);
      infoWindow2.setContent('Location found.');
      map.setCenter(pos);
	  map.setZoom(15);
	  marker.setMap(map);
    }, function() {
      handleLocationError(true, infoWindow2, map.getCenter());
    });

  } else {
    // Browser doesn't support Geolocation
    handleLocationError(false, infoWindow2, map.getCenter());


  }


function searchPlaces() {

    //var $firstResult = $('.pac-item:first').children();
   // var placeName = $firstResult[1].textContent;
    //var placeAddress = $firstResult[2].textContent;

    $("#searchbox").val(placeName + ", " + placeAddress);

    var geocoder = new google.maps.Geocoder();
    geocoder.geocode({"address":placeAddress }, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            var lat = results[0].geometry.location.lat(),
                lng = results[0].geometry.location.lng(),
                placeName = results[0].address_components[0].long_name,
                latlng = new google.maps.LatLng(lat, lng);

            map.panTo(latlng);
			map.setZoom(13);
			loadStores(map.getCenter().lat(), map.getCenter().lng());
        }
    });
}

$("#searchbox").on("keyup", function(e) {
    if(e.keyCode == 13) {
        searchPlaces();
    }
});

  $('.imgbtnsrh').off('click').on('click', function(e) {
 searchPlaces();

  });





		loadStores(map.getCenter().lat(), map.getCenter().lng());

		return this;
	};

	var infoWindow2 = new google.maps.InfoWindow({map: map});





  function handleLocationError(browserHasGeolocation, infoWindow2, pos) {
	   //alert('Tu navegador no soporta el servicio de Geolocalización o la página no cuenta con el protocolo HTTPS.');

	   google.maps.event.addDomListener(document.getElementById('centerlocation'), 'click', function () {


					//alert('Tu navegador no soporta el servicio de Geolocalización o la página no cuenta con el protocolo HTTPS.');



	});
  infoWindow2.setPosition(pos);
  infoWindow2.setContent(browserHasGeolocation ?
                        'Error: The Geolocation service failed.' :
                        'Error: Your browser doesn\'t support geolocation.');
}

	var gooMarker = [];
	gooMarker.push(stores);

			filterMarkers = function (category) {
			for (i = 0; i < gooMarker.length; i++) {
				marker2 = gooMarker[i];
				// If is same category or category not picked
				if (marker2.category == category || category.length === 0) {
					marker2.setVisible(true);
				}
				// Categories don't match
				else {
					marker2.setVisible(false);
				}
			}
		}

})(jQuery);
