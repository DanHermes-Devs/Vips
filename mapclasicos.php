<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Mapa clásicos</title>
    <style>
	
	
@font-face {
    font-family: 'AmsiProNarw';
    src: url('css/fonts/amsi/AmsiPro-Bold.eot');
    src: url('css/fonts/amsi/AmsiPro-Bold.eot?#iefix') format('embedded-opentype'),
        url('css/fonts/amsi/AmsiPro-Bold.woff2') format('woff2'),
        url('css/fonts/amsi/AmsiPro-Bold.woff') format('woff'),
        url('css/fonts/amsi/AmsiPro-Bold.ttf') format('truetype'),
        url('css/fonts/amsi/AmsiPro-Bold.svg#AmsiPro-Bold') format('svg');
    font-weight: bold;
    font-style: normal;
}


      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height:100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
	  
.gm-style .gm-style-iw {
	font-weight: 300;
	font-size: 13px;
	overflow: hidden;
	padding: 0 10px 20px 10px !important;
	background: #fffade;
	overflow: visible;
}
.infow {
	width: 150px;
	min-height: auto;
	background: url(https://vips.com.mx/img/clasicos/ganadores.svg);
	background-repeat: no-repeat;
	background-size: 30px;
	background-position: top left;
	padding: 15px 5px 15px 90px;
	background-color: #fffade;
	overflow: hidden;
	text-align: center;
	color: #000;
	font-size: 16px;
	font-weight: bold;
	font-family: "AmsiProNarw",sans-serif;
}
.infow h2 {
	color: #ff1628;
	text-align: center;
	margin-top: 0;
	margin-bottom: 0;
	font-size: 15px;
	margin-top: 10px;
	margin-bottom: 10px;
}

.infow span {
	letter-spacing: 4px;
}

.imgplato {
	max-width: none;
	width: 160px;
	position: absolute;
	left: -50px;
	top: 40px;
	z-index: 333;
}

.star {
	display: inline-block;
	width: 13px !important;
	margin: 2.5px;
}

.gm-style .gm-style-iw-t::after {
	border-top: 11px solid #fffade!important;
}
.gm-style .gm-style-iw-d {
    overflow: hidden!important;
}

@media(max-width:700px){
	
	.imgplato {
	max-width: none;
	width: 110px;
	position: absolute;
	left: -50px;
	top: 40px;
	z-index: 333;
}

.infow {
	width: 150px;
	min-height: auto;
	background: url(https://vips.com.mx/img/clasicos/ganadores.svg);
	background-repeat: no-repeat;
	background-size: 30px;
	background-position: top left;
	padding: 15px 5px 15px 45px;
	background-color: #fffade;
	overflow: hidden;
	text-align: center;
	color: #000;
	font-size: 16px;
	font-weight: bold;
	font-family: "AmsiProNarw",sans-serif;
}
}
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>

      // This example creates a simple polygon representing the Bermuda Triangle.
      // When the user clicks on the polygon an info window opens, showing
      // information about the polygon's coordinates.

      var map;
      var infoWindow;

      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 5,
          center: {lat: 24.886, lng: -70.268},
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
        });
		
		
    var shapes = [];
var path = [
new google.maps.LatLng(16.53700957700391, -102.48014158199481)];
var polyline = new google.maps.Polygon({path:path, strokeColor: "#FF0000", strokeOpacity: 1.0, strokeWeight: 2});
polyline.setMap(map);

shapes.push(polyline);
var path = [
new google.maps.LatLng(32.57070549275206, -117.24576658199481)];
var polyline = new google.maps.Polygon({path:path, strokeColor: "#FF0000", strokeOpacity: 1.0, strokeWeight: 2});
polyline.setMap(map);

shapes.push(polyline);
var path = [
];
var polyline = new google.maps.Polygon({path:path, strokeColor: "#FF0000", strokeOpacity: 1.0, strokeWeight: 2});
polyline.setMap(map);
map.setCenter(new google.maps.LatLng(32.83735053065298, -117.16183074537389), 8);
shapes.push(polyline);
var path = [
new google.maps.LatLng(32.54107333968627, -117.20182126949481),
new google.maps.LatLng(31.047100608312466, -116.41080564449481),
new google.maps.LatLng(30.707649909241493, -116.01529783199481),
new google.maps.LatLng(30.10122733101188, -116.01529783199481),
new google.maps.LatLng(29.682137371761083, -115.44400876949481),
new google.maps.LatLng(28.761690323612033, -114.74088376949481),
new google.maps.LatLng(28.259685130152217, -114.12564939449481),
new google.maps.LatLng(27.716408358535126, -114.03775876949481),
new google.maps.LatLng(27.794186681776363, -115.04850095699481),
new google.maps.LatLng(27.170411665272944, -114.47721189449481),
new google.maps.LatLng(26.778768781359698, -113.59830564449481),
new google.maps.LatLng(26.739529702804813, -113.20279783199481),
new google.maps.LatLng(26.425130664508696, -112.67545408199481),
new google.maps.LatLng(25.912401887795856, -112.36783689449481),
new google.maps.LatLng(25.47680445477856, -112.01627439449481),
new google.maps.LatLng(25.119227730484546, -112.19205564449481),
new google.maps.LatLng(24.72069003167766, -112.01627439449481),
new google.maps.LatLng(24.32087197993308, -111.26920408199481),
new google.maps.LatLng(23.9197889928262, -110.87369626949481),
new google.maps.LatLng(23.03303172271275, -110.30240720699481),
new google.maps.LatLng(22.79016205822536, -109.86295408199481),
new google.maps.LatLng(23.396515909115976, -109.42350095699481),
new google.maps.LatLng(24.640828360478636, -110.30240720699481),
new google.maps.LatLng(26.778768781359698, -111.79654783199481),
new google.maps.LatLng(28.72315949930049, -113.07096189449481),
new google.maps.LatLng(30.59423292068295, -114.47721189449481),
new google.maps.LatLng(31.610167352661602, -113.90592283199481),
new google.maps.LatLng(31.23516355911314, -113.51041501949481),
new google.maps.LatLng(30.59423292068295, -113.02701658199481),
new google.maps.LatLng(30.215218102462615, -112.85123533199481),
new google.maps.LatLng(29.720309189075078, -112.54361814449481),
new google.maps.LatLng(28.877197444687493, -112.01627439449481),
new google.maps.LatLng(28.182242029570034, -111.62076658199481),
new google.maps.LatLng(27.833054994539694, -110.91764158199481),
new google.maps.LatLng(27.326686173878816, -110.52213376949481),
new google.maps.LatLng(26.582438090435254, -109.77506345699481),
new google.maps.LatLng(26.385770191393142, -109.07193845699481),
new google.maps.LatLng(25.83332102641949, -109.64322751949481),
new google.maps.LatLng(25.595761635185717, -108.98404783199481),
new google.maps.LatLng(25.27828091427489, -108.63248533199481),
new google.maps.LatLng(24.80050048780694, -108.45670408199481),
new google.maps.LatLng(24.480951862909993, -107.75357908199481),
new google.maps.LatLng(24.040245777911014, -107.31412595699481),
new google.maps.LatLng(23.47715547000166, -106.69889158199481),
new google.maps.LatLng(22.95212353687316, -106.25943845699481),
new google.maps.LatLng(22.506266698434025, -105.73209470699481),
new google.maps.LatLng(22.58642508034853, -105.39371559957914),
new google.maps.LatLng(23.133088317559285, -105.44864724020414),
new google.maps.LatLng(23.838417016122428, -105.91007302145414),
new google.maps.LatLng(25.6433113147413, -106.96256345699481),
new google.maps.LatLng(26.982593017995477, -108.32486814449481),
new google.maps.LatLng(28.228714513228834, -109.11588376949481),
new google.maps.LatLng(28.30612389045392, -108.45670408199481),
new google.maps.LatLng(30.60179807566569, -108.63248533199481),
new google.maps.LatLng(30.906316439049213, -108.85440895895414),
new google.maps.LatLng(31.16518974346344, -108.83792946676664),
new google.maps.LatLng(31.329560205793037, -108.79398415426664),
new google.maps.LatLng(31.335804598077264, -109.1341804749785),
new google.maps.LatLng(31.326420333718485, -111.0677742249785),
new google.maps.LatLng(31.61689670078088, -111.941187310916),
new google.maps.LatLng(32.495307363644066, -114.8075827320265),
new google.maps.LatLng(32.70817854420097, -114.7306784351515)];
var polyline = new google.maps.Polygon({path:path, strokeColor: "#fecc0a", strokeOpacity: 1.0, fillColor: '#fecc0a', fillOpacity: 0.35, strokeWeight: 2});
polyline.setMap(map);
map.setCenter(new google.maps.LatLng(19.4268854, -99.1680372), 8);
shapes.push(polyline);


var path = [
new google.maps.LatLng(31.314710804258272, -108.80900067617824),
new google.maps.LatLng(31.330744911700172, -108.20292732424184),
new google.maps.LatLng(31.757611360248887, -108.18677540039528),
new google.maps.LatLng(31.776292435514527, -106.47290821289528),
new google.maps.LatLng(31.701545513117324, -106.37403125977028),
new google.maps.LatLng(31.55187091436707, -106.27515430664528),
new google.maps.LatLng(31.392578177351034, -106.06641407227028),
new google.maps.LatLng(31.34567581936397, -105.95655079102028),
new google.maps.LatLng(31.251800930090354, -105.84668750977028),
new google.maps.LatLng(31.110813461323534, -105.68189258789528),
new google.maps.LatLng(30.988454693917774, -105.49512500977028),
new google.maps.LatLng(30.809340086688895, -105.35230274414528),
new google.maps.LatLng(30.7715890824215, -105.11060352539528),
new google.maps.LatLng(30.62989094274231, -105.01172657227028),
new google.maps.LatLng(30.535310038726063, -104.86890430664528),
new google.maps.LatLng(30.288968677174225, -104.79200000977028),
new google.maps.LatLng(30.12756381095912, -104.69312305664528),
new google.maps.LatLng(30.003958184022743, -104.69312305664528),
new google.maps.LatLng(29.82302658685807, -104.60523243164528),
new google.maps.LatLng(29.6322178218163, -104.51734180664528),
new google.maps.LatLng(29.488873516172163, -104.25366993164528),
new google.maps.LatLng(29.35490224891105, -104.11084766602028),
new google.maps.LatLng(29.249515322228614, -103.84717579102028),
new google.maps.LatLng(29.163208817015192, -103.66040821289528),
new google.maps.LatLng(29.152127166633925, -103.58946063828085),
new google.maps.LatLng(29.147329712948373, -103.54551532578085),
new google.maps.LatLng(29.07534103740083, -103.4713576109371),
new google.maps.LatLng(29.027320622362073, -103.38072040390585),
new google.maps.LatLng(29.03212366975563, -103.3340285093746),
new google.maps.LatLng(28.988888201140703, -103.2461378843746),
new google.maps.LatLng(28.979277862783928, -103.1252882749996),
new google.maps.LatLng(29.415641442415044, -102.8561232359371),
new google.maps.LatLng(29.778647870356036, -102.6144240171871),
new google.maps.LatLng(29.873958336995344, -102.0431349546871),
new google.maps.LatLng(29.7595748742855, -101.5377638609371),
new google.maps.LatLng(29.530416117190804, -101.0983107359371),
new google.maps.LatLng(29.204884364760886, -100.8126662046871),
new google.maps.LatLng(28.859073360202025, -100.6149122984371),
new google.maps.LatLng(28.473485765455468, -100.3292677671871),
new google.maps.LatLng(28.047708430088857, -99.9777052671871),
new google.maps.LatLng(27.67862903437717, -99.6920607359371),
new google.maps.LatLng(27.347339110989896, -99.5162794859371),
new google.maps.LatLng(26.956314712656006, -99.3624708921871),
new google.maps.LatLng(26.643343291436807, -99.20467685237753),
new google.maps.LatLng(26.456615924350213, -99.07284091487753),
new google.maps.LatLng(26.368060157055893, -98.80916903987753),
new google.maps.LatLng(26.210460129456116, -98.53451083675253),
new google.maps.LatLng(26.032904709617693, -98.13900302425253),
new google.maps.LatLng(26.052646405452087, -97.82039950862753),
new google.maps.LatLng(25.894619894163366, -97.53475497737753),
new google.maps.LatLng(25.855080125598278, -97.34798739925253),
new google.maps.LatLng(25.99341135065355, -97.22713778987753),
new google.maps.LatLng(25.934146420786565, -97.13924716487753),
new google.maps.LatLng(25.855080125598278, -97.11727450862753),
new google.maps.LatLng(25.617564241950692, -97.22713778987753),
new google.maps.LatLng(24.94621907436008, -97.657470703125),
new google.maps.LatLng(24.42295301776816, -97.71053622737753),
new google.maps.LatLng(23.881627577031395, -97.77645419612753),
new google.maps.LatLng(23.257303981788134, -97.75448153987753),
new google.maps.LatLng(22.863075363974524, -97.75448153987753),
new google.maps.LatLng(22.57933113368882, -97.89730380550253),
new google.maps.LatLng(22.457546882846515, -97.84237216487753),
new google.maps.LatLng(22.243825379442683, -97.78349037524276),
new google.maps.LatLng(22.426742865971413, -98.48661537524276),
new google.maps.LatLng(22.264161382712462, -98.37675209399276),
new google.maps.LatLng(21.958812302684667, -98.44267006274276),
new google.maps.LatLng(21.550658640284627, -98.46464271899276),
new google.maps.LatLng(21.346148892102974, -98.55253334399276),
new google.maps.LatLng(21.223305775326057, -98.79423256274276),
new google.maps.LatLng(21.489335843610988, -99.25565834399276),
new google.maps.LatLng(21.489335843610988, -99.71708412524276),
new google.maps.LatLng(21.489335843610988, -100.06864662524276),
new google.maps.LatLng(21.61195552738711, -100.48612709399276),
new google.maps.LatLng(21.468889163953314, -100.57401771899276),
new google.maps.LatLng(21.754880505687805, -101.07938881274276),
new google.maps.LatLng(21.816090600950172, -101.40897865649276),
new google.maps.LatLng(21.82628974125977, -101.57377357836776),
new google.maps.LatLng(21.928241110420046, -101.79350014086776),
new google.maps.LatLng(21.907856666205998, -102.02421303149276),
new google.maps.LatLng(21.744676283446353, -102.12308998461776),
new google.maps.LatLng(21.632382055172695, -102.27689857836776),
new google.maps.LatLng(21.724265664527948, -102.59550209399276),
new google.maps.LatLng(21.744676283446353, -102.82621498461776),
new google.maps.LatLng(21.632382055172695, -102.76029701586776),
new google.maps.LatLng(21.356381182785267, -102.63944740649276),
new google.maps.LatLng(21.31544773594942, -102.80424232836776),
new google.maps.LatLng(21.223305775326086, -102.93607826586776),
new google.maps.LatLng(21.233546618155945, -103.06791420336776),
new google.maps.LatLng(21.069607983595493, -103.28764076586776),
new google.maps.LatLng(21.120858294742693, -103.48539467211776),
new google.maps.LatLng(21.264264878612625, -103.68314857836776),
new google.maps.LatLng(21.67322644573841, -103.52933998461776),
new google.maps.LatLng(22.019934953889017, -103.07890053149276),
new google.maps.LatLng(22.436897905384964, -103.18876381274276),
new google.maps.LatLng(22.40643055874126, -103.32059975024276),
new google.maps.LatLng(22.162451863460962, -103.46342201586776),
new google.maps.LatLng(22.162451863460962, -103.57328529711776),
new google.maps.LatLng(22.14210111942676, -103.63920326586776),
new google.maps.LatLng(22.528259786460154, -103.60624428149276),
new google.maps.LatLng(22.54855423263398, -103.78202553149276),
new google.maps.LatLng(22.20314451776029, -103.83695717211776),
new google.maps.LatLng(22.710802193079825, -103.78202553149276),
new google.maps.LatLng(22.73106970552475, -103.93583412524276),
new google.maps.LatLng(22.487661949854793, -103.95780678149276),
new google.maps.LatLng(22.38611528207252, -103.99076576586776),
new google.maps.LatLng(22.365797038085503, -104.12260170336776),
new google.maps.LatLng(22.335314113025788, -104.25443764086776),
new google.maps.LatLng(22.38611528207252, -104.48515053149276),
new google.maps.LatLng(22.487661949854793, -104.67191810961776),
new google.maps.LatLng(22.51811144494555, -104.95756264086776),
new google.maps.LatLng(22.649981657962652, -105.07841225024276),
new google.maps.LatLng(22.59927728745606, -105.36405678149276),
new google.maps.LatLng(22.59311146031339, -105.39499091954923),
new google.maps.LatLng(23.132804496353643, -105.4481166637699),
new google.maps.LatLng(23.847114591721503, -105.91601087421873),
new google.maps.LatLng(25.647130987995098, -106.9621837789868),
new google.maps.LatLng(26.992732172464727, -108.32723504851805),
new google.maps.LatLng(28.22533979429083, -109.11027760386833),
new google.maps.LatLng(28.300333353915576, -108.45933766246208)];
var polyline = new google.maps.Polygon({path:path, strokeColor: "#359a63", strokeOpacity: 1.0, fillColor: '#359a63', fillOpacity: 0.35, strokeWeight: 2});
polyline.setMap(map);
shapes.push(polyline);

var path = [
new google.maps.LatLng(22.476379842911793, -105.72611000961592),
new google.maps.LatLng(22.252861147775295, -105.66019204086592),
new google.maps.LatLng(22.161318521975108, -105.68216469711592),
new google.maps.LatLng(21.927105891378122, -105.60526040024092),
new google.maps.LatLng(21.712922348964543, -105.50638344711592),
new google.maps.LatLng(21.503690896370696, -105.26468422836592),
new google.maps.LatLng(21.411667312974146, -105.23172524399092),
new google.maps.LatLng(21.237686922201497, -105.22073891586592),
new google.maps.LatLng(21.094254548837966, -105.22073891586592),
new google.maps.LatLng(21.01223089526607, -105.30862954086592),
new google.maps.LatLng(20.837780970279137, -105.47342446274092),
new google.maps.LatLng(20.69396428902009, -105.41849282211592),
new google.maps.LatLng(20.673407888417454, -105.26468422836592),
new google.maps.LatLng(20.550011114888747, -105.27567055649092),
new google.maps.LatLng(20.498566336753644, -105.63821938461592),
new google.maps.LatLng(20.33382713697275, -105.70413735336592),
new google.maps.LatLng(20.189536152325392, -105.62723305649092),
new google.maps.LatLng(19.890223128843406, -105.44046547836592),
new google.maps.LatLng(19.642086860259717, -105.19876625961592),
new google.maps.LatLng(19.445373013888005, -105.04495766586592),
new google.maps.LatLng(19.27953400179897, -104.91312172836592),
new google.maps.LatLng(19.22767478461914, -104.78128579086592),
new google.maps.LatLng(19.12390725868965, -104.53958657211592),
new google.maps.LatLng(19.10314591919267, -104.34183266586592),
new google.maps.LatLng(18.94735297760819, -104.25394204086592),
new google.maps.LatLng(18.83301224927512, -103.92435219711592),
new google.maps.LatLng(18.718593642110722, -103.79251625961592),
new google.maps.LatLng(18.583271797977556, -103.69363930649092),
new google.maps.LatLng(18.385300458537113, -103.55081704086592),
new google.maps.LatLng(18.301875887660383, -103.41898110336592),
new google.maps.LatLng(18.18710150273098, -103.16629555649092),
new google.maps.LatLng(18.114023877853445, -102.90262368149092),
new google.maps.LatLng(18.030469248408302, -102.62796547836592),
new google.maps.LatLng(17.936422866658432, -102.27640297836592),
new google.maps.LatLng(17.932526568192714, -102.12466229109799),
new google.maps.LatLng(18.12057326983715, -102.17410076766049),
new google.maps.LatLng(18.183210758948203, -102.10268963484799),
new google.maps.LatLng(18.20930308071514, -101.97085369734799),
new google.maps.LatLng(18.271908698013853, -101.88296307234799),
new google.maps.LatLng(18.313311488964402, -101.85749978041474),
new google.maps.LatLng(18.38239575858143, -101.86711281752412),
new google.maps.LatLng(18.446241506601044, -101.87123269057099),
new google.maps.LatLng(18.499276893948984, -101.88084572768037),
new google.maps.LatLng(18.550060220214455, -101.86161965346162),
new google.maps.LatLng(18.593018934580027, -101.79707497572724),
new google.maps.LatLng(18.608637600642528, -101.74351662611787),
new google.maps.LatLng(18.61514495516815, -101.71467751478974),
new google.maps.LatLng(18.59171731440387, -101.71055764174287),
new google.maps.LatLng(18.583907384489194, -101.69957131361787),
new google.maps.LatLng(18.596923735422976, -101.62678688978974),
new google.maps.LatLng(18.50318383894203, -101.47984475111787),
new google.maps.LatLng(18.52401937279511, -101.18321389174287),
new google.maps.LatLng(18.482345769145684, -100.98545998549287),
new google.maps.LatLng(18.409392589662406, -100.75474709486787),
new google.maps.LatLng(18.37811746675099, -100.61192482924287),
new google.maps.LatLng(18.596923735423005, -100.74376076674287),
new google.maps.LatLng(18.76914916624978, -100.781907455902),
new google.maps.LatLng(18.867940153753185, -100.7654279637145),
new google.maps.LatLng(18.789952090849606, -100.70774974105825),
new google.maps.LatLng(18.873138070070674, -100.63084544418325),
new google.maps.LatLng(18.932902512063457, -100.5566877293395),
new google.maps.LatLng(19.07313491831973, -100.430344955902),
new google.maps.LatLng(19.363608481433356, -100.2820295262145),
new google.maps.LatLng(19.45686558156074, -100.1941389012145),
new google.maps.LatLng(19.638045221994883, -100.2600568699645),
new google.maps.LatLng(19.803516516554026, -100.1721662449645),
new google.maps.LatLng(19.865523997613792, -100.089768784027),
new google.maps.LatLng(20.01443477928077, -100.11633776952254),
new google.maps.LatLng(20.060880625820257, -100.14929675389754),
new google.maps.LatLng(20.02991825370894, -100.0916185312413),
new google.maps.LatLng(20.060880625820257, -100.02295398046004),
new google.maps.LatLng(20.066040427466998, -99.9707689218663),
new google.maps.LatLng(20.161466105344513, -99.92957019139754),
new google.maps.LatLng(20.259410149786234, -99.87463855077254),
new google.maps.LatLng(20.56830050570803, -99.81970691014754),
new google.maps.LatLng(20.599155368972212, -99.59448718358504),
new google.maps.LatLng(20.686543547837243, -99.50110339452254),
new google.maps.LatLng(20.943275422794017, -99.40222644139754),
new google.maps.LatLng(21.138097928229797, -99.31982898046004),
new google.maps.LatLng(21.097103856518025, -99.23743151952254),
new google.maps.LatLng(21.194446262040803, -99.02869128514754),
new google.maps.LatLng(21.227359728985213, -99.0517716136934),
new google.maps.LatLng(21.25935912124296, -99.0517716136934),
new google.maps.LatLng(21.284313821769228, -99.04353186759965),
new google.maps.LatLng(21.290071997763206, -99.02224585685747),
new google.maps.LatLng(21.295829948259065, -98.9913468090059),
new google.maps.LatLng(21.296469706614605, -98.97212073478715),
new google.maps.LatLng(21.308624586217974, -98.95014807853715),
new google.maps.LatLng(21.409663007234904, -99.12112280998247),
new google.maps.LatLng(21.487632264642734, -99.25639197502153),
new google.maps.LatLng(21.487632264642734, -99.66979304240465),
new google.maps.LatLng(21.48763226464276, -100.06873408244371),
new google.maps.LatLng(21.60902221585087, -100.48632898705824),
new google.maps.LatLng(21.466704523299725, -100.57418662909515),
new google.maps.LatLng(21.646946546247683, -100.89405997729187),
new google.maps.LatLng(21.75284589642804, -101.07944541375673),
new google.maps.LatLng(21.814056860209433, -101.40988752821784),
new google.maps.LatLng(21.824548260994458, -101.57225053665462),
new google.maps.LatLng(21.925473775955194, -101.79361649725655),
new google.maps.LatLng(21.90612849765449, -102.02364274237374),
new google.maps.LatLng(21.74485951255192, -102.12183304999093),
new google.maps.LatLng(21.6312888553679, -102.27600249489194),
new google.maps.LatLng(21.72253527798722, -102.59712673201852),
new google.maps.LatLng(21.74230834696877, -102.82167160527553),
new google.maps.LatLng(21.63767160152073, -102.76124680058803),
new google.maps.LatLng(21.624251832496594, -102.75575363652553),
new google.maps.LatLng(21.610208114828822, -102.7488871814474),
new google.maps.LatLng(21.550826431443216, -102.72210800664271),
new google.maps.LatLng(21.424959183859094, -102.66717636601771),
new google.maps.LatLng(21.355909701168343, -102.63765060918178),
new google.maps.LatLng(21.352712176780148, -102.64039719121303),
new google.maps.LatLng(21.313696764413912, -102.80244553105678),
new google.maps.LatLng(21.221553707358503, -102.93428146855678),
new google.maps.LatLng(21.231154632375464, -103.0674906970724),
new google.maps.LatLng(21.06785409680442, -103.28584396855678),
new google.maps.LatLng(21.11846448575727, -103.48634445683803),
new google.maps.LatLng(21.262769156635123, -103.6835248737388),
new google.maps.LatLng(21.265665362066375, -103.68432856510498),
new google.maps.LatLng(21.574021189474514, -103.57211722050033),
new google.maps.LatLng(21.67504374940847, -103.53915823612533),
new google.maps.LatLng(21.965720478467677, -103.16012991581283),
new google.maps.LatLng(22.023323641312036, -103.0873454919847),
new google.maps.LatLng(22.427848309366595, -103.19397029536321),
new google.maps.LatLng(22.40245766334964, -103.31619319575384),
new google.maps.LatLng(22.159743889343304, -103.45764217036321),
new google.maps.LatLng(22.15338447556608, -103.46313533442571),
new google.maps.LatLng(22.158472029582565, -103.57162532466009),
new google.maps.LatLng(22.136796008064856, -103.63704763877786),
new google.maps.LatLng(22.144428169486606, -103.64597403037942),
new google.maps.LatLng(22.52434238492193, -103.61134085714895),
new google.maps.LatLng(22.54210069223785, -103.77750907003957),
new google.maps.LatLng(22.206846733596173, -103.8338140016802),
new google.maps.LatLng(22.19921795985015, -103.83518729269582),
new google.maps.LatLng(22.20489095926461, -103.8441668585071),
new google.maps.LatLng(22.706366555625287, -103.79129515440553),
new google.maps.LatLng(22.719034513232632, -103.9272509649524),
new google.maps.LatLng(22.495907628375036, -103.94647703917116),
new google.maps.LatLng(22.386748456413706, -103.97943602354616),
new google.maps.LatLng(22.371510120833484, -104.0041552618274),
new google.maps.LatLng(22.366430304871713, -104.07139823220393),
new google.maps.LatLng(22.32578510812453, -104.24717948220393),
new google.maps.LatLng(22.361350303581048, -104.42021415017268),
new google.maps.LatLng(22.371510120833484, -104.48063895486018),
new google.maps.LatLng(22.478143386376402, -104.67564627907893),
new google.maps.LatLng(22.506057599944967, -104.95579764626643),
new google.maps.LatLng(22.63683683740986, -105.08202054314921),
new google.maps.LatLng(22.58612761928491, -105.38689114861796),
new google.maps.LatLng(22.570518504094697, -105.45569983657504),
new google.maps.LatLng(22.50355001465029, -105.74238474597604)];
var polyline = new google.maps.Polygon({path:path, strokeColor: "#f26622", fillColor: '#f26622', fillOpacity: 0.35, strokeOpacity: 1.0, strokeWeight: 2});
polyline.setMap(map);
shapes.push(polyline);

var path = [
new google.maps.LatLng(21.358913856310593, -98.50581350121297),
new google.maps.LatLng(21.338448914331615, -98.46736135277547),
new google.maps.LatLng(21.297510464658732, -98.49482717308797),
new google.maps.LatLng(21.23608140909517, -98.53327932152547),
new google.maps.LatLng(21.133642781703596, -98.29158010277547),
new google.maps.LatLng(21.092647478837655, -98.20368947777547),
new google.maps.LatLng(21.010622939461765, -98.17622365746297),
new google.maps.LatLng(20.795094195436164, -98.25312795433797),
new google.maps.LatLng(20.805364481423062, -98.40693654808797),
new google.maps.LatLng(20.651236906476257, -98.51679982933797),
new google.maps.LatLng(20.49695290870468, -98.53877248558797),
new google.maps.LatLng(20.332211981343757, -98.52778615746297),
new google.maps.LatLng(20.394010483006117, -98.39595021996297),
new google.maps.LatLng(20.620392590072267, -98.09931936058797),
new google.maps.LatLng(20.56897151261451, -97.96748342308797),
new google.maps.LatLng(20.805364481423087, -97.79170217308797),
new google.maps.LatLng(20.682074965949656, -97.71479787621297),
new google.maps.LatLng(20.558685217165767, -97.62690725121297),
new google.maps.LatLng(20.435195726304197, -97.60493459496297),
new google.maps.LatLng(20.394010483006117, -97.65986623558797),
new google.maps.LatLng(20.34251344919571, -97.71479787621297),
new google.maps.LatLng(20.239467918985376, -97.71479787621297),
new google.maps.LatLng(20.156982249609175, -97.64887990746297),
new google.maps.LatLng(20.09508936817632, -97.53901662621297),
new google.maps.LatLng(20.270388770734904, -97.35224904808797),
new google.maps.LatLng(20.09508936817632, -97.14350881371297),
new google.maps.LatLng(19.950577591938806, -97.26435842308797),
new google.maps.LatLng(19.712878269908714, -97.34126271996297),
new google.maps.LatLng(19.599070676847038, -97.39619436058797),
new google.maps.LatLng(19.454108205313034, -97.35224904808797),
new google.maps.LatLng(19.41266650492706, -97.38520803246297),
new google.maps.LatLng(19.35048414933208, -97.25337209496297),
new google.maps.LatLng(19.28827808477418, -97.04463186058797),
new google.maps.LatLng(19.226048375566663, -96.98970021996297),
new google.maps.LatLng(19.091136531933657, -97.04463186058797),
new google.maps.LatLng(19.14303876080388, -97.20942678246297),
new google.maps.LatLng(19.05998737884436, -97.26435842308797),
new google.maps.LatLng(18.883365213704934, -97.26435842308797),
new google.maps.LatLng(18.67533585996083, -97.31929006371297),
new google.maps.LatLng(18.49830983994508, -97.08857717308797),
new google.maps.LatLng(18.446208434918923, -97.08857717308797),
new google.maps.LatLng(18.52956307929733, -96.91279592308797),
new google.maps.LatLng(18.477471177320243, -96.79194631371297),
new google.maps.LatLng(18.38602662083027, -96.74887177404833),
new google.maps.LatLng(18.292171543488976, -96.79831025061083),
new google.maps.LatLng(18.20870211256064, -96.89169403967333),
new google.maps.LatLng(18.14607376787612, -97.05099579748583),
new google.maps.LatLng(18.17739074992548, -97.18832489904833),
new google.maps.LatLng(18.140853725122085, -97.28170868811083),
new google.maps.LatLng(18.07820106884932, -97.41354462561083),
new google.maps.LatLng(18.031196891501178, -97.46298310217333),
new google.maps.LatLng(18.0416433503152, -97.52890107092333),
new google.maps.LatLng(18.172171642928973, -97.63876435217333),
new google.maps.LatLng(18.266091654848815, -97.74862763342333),
new google.maps.LatLng(18.161732960805946, -97.83102509436083),
new google.maps.LatLng(18.07820106884932, -97.84750458654833),
new google.maps.LatLng(18.052089188776378, -97.80905243811083),
new google.maps.LatLng(18.052089188776378, -97.72665497717333),
new google.maps.LatLng(17.97895530300771, -97.67721650061083),
new google.maps.LatLng(17.984180158297967, -97.75961396154833),
new google.maps.LatLng(17.88488150509022, -97.83102509436083),
new google.maps.LatLng(17.926698252303048, -97.96286103186083),
new google.maps.LatLng(17.96327980955945, -98.14413544592333),
new google.maps.LatLng(17.90579111131495, -98.16061493811083),
new google.maps.LatLng(17.863969436123284, -98.24301239904833),
new google.maps.LatLng(17.88488150509022, -98.39682099279833),
new google.maps.LatLng(17.971069612546188, -98.56322170355776),
new google.maps.LatLng(18.039297284356046, -98.81074388735976),
new google.maps.LatLng(18.258532081690834, -99.06342943423476),
new google.maps.LatLng(18.45143858388775, -99.15681322329726),
new google.maps.LatLng(18.461859813299643, -99.33259447329726),
new google.maps.LatLng(18.654538099404487, -99.48090990298476),
new google.maps.LatLng(18.69616960674902, -99.54682787173476),
new google.maps.LatLng(18.737790879892497, -99.62922533267226),
new google.maps.LatLng(18.727386522126675, -99.72260912173476),
new google.maps.LatLng(18.68576268860919, -99.76655443423476),
new google.maps.LatLng(18.58165839407793, -99.93684252017226),
new google.maps.LatLng(18.560829889965444, -99.98078783267226),
new google.maps.LatLng(18.58686512252168, -100.06867845767226),
new google.maps.LatLng(18.47749047087451, -100.15656908267226),
new google.maps.LatLng(18.383685190063222, -100.26643236392226),
new google.maps.LatLng(18.383685190063222, -100.33235033267226),
new google.maps.LatLng(18.58686512252168, -100.36530931704726),
new google.maps.LatLng(18.50874751068064, -100.43122728579726),
new google.maps.LatLng(18.68576268860919, -100.46967943423476),
new google.maps.LatLng(18.771600615169536, -100.43397386782851),
new google.maps.LatLng(18.80280358457687, -100.49439867251601),
new google.maps.LatLng(18.841799160597084, -100.54383714907851),
new google.maps.LatLng(18.875588002881756, -100.60975511782851),
new google.maps.LatLng(19.054814511787367, -100.44221361392226),
new google.maps.LatLng(19.124894054126383, -100.39277513735976),
new google.maps.LatLng(19.363459955607162, -100.27192552798476),
new google.maps.LatLng(19.454544880647084, -100.19184605119739),
new google.maps.LatLng(19.484650947333023, -100.19760637660681),
new google.maps.LatLng(19.636699993445404, -100.25597124477088),
new google.maps.LatLng(19.80313827344032, -100.17091211110562),
new google.maps.LatLng(19.86274535702285, -100.08825012301236),
new google.maps.LatLng(20.0152253357937, -100.11358349267977),
new google.maps.LatLng(20.055220990438954, -100.14242260400789),
new google.maps.LatLng(20.030708732372666, -100.09641735498445),
new google.maps.LatLng(20.028128272173657, -100.09435741846102),
new google.maps.LatLng(20.028250618146696, -100.09084131056784),
new google.maps.LatLng(20.058568325033438, -100.02355005080221),
new google.maps.LatLng(20.064824657827703, -99.97170831496237),
new google.maps.LatLng(20.06651221896186, -99.9697138858914),
new google.maps.LatLng(20.16079306770794, -99.9275305475914),
new google.maps.LatLng(20.257398218074048, -99.87397219798203),
new google.maps.LatLng(20.434457371288797, -99.84222989720655),
new google.maps.LatLng(20.56754571430339, -99.8175106589253),
new google.maps.LatLng(20.597722385851313, -99.59726520085945),
new google.maps.LatLng(20.683420973433886, -99.5011348297657),
new google.maps.LatLng(20.927640118321893, -99.40486824801548),
new google.maps.LatLng(21.133115164907355, -99.31903755953891),
new google.maps.LatLng(21.095963520591233, -99.24213326266391),
new google.maps.LatLng(21.094041630856708, -99.23664009860141),
new google.maps.LatLng(21.190745833195127, -99.02927315524204),
new google.maps.LatLng(21.202541243745042, -99.02549660494907),
new google.maps.LatLng(21.227825593443328, -99.0488425522147),
new google.maps.LatLng(21.266863795974736, -99.04746926119907),
new google.maps.LatLng(21.28339578298212, -99.04058175148555),
new google.maps.LatLng(21.295231862895907, -98.98565011086055),
new google.maps.LatLng(21.29459209915275, -98.97329049171992),
new google.maps.LatLng(21.307066989823817, -98.94788460793086),
new google.maps.LatLng(21.223470882414208, -98.80096906862923),
new google.maps.LatLng(21.220814698183805, -98.79376370056582)];
var polyline = new google.maps.Polygon({path:path, strokeColor: "#be2a90", strokeOpacity: 1.0, fillColor: '#be2a90', fillOpacity: 0.35, strokeWeight: 2});
polyline.setMap(map);
shapes.push(polyline);

var path = [
new google.maps.LatLng(22.192838127023194, -97.78176701058788),
new google.maps.LatLng(21.90772206311939, -97.71584904183788),
new google.maps.LatLng(21.785354101886785, -97.59499943246288),
new google.maps.LatLng(21.58117541682413, -97.43020451058788),
new google.maps.LatLng(21.335780750494195, -97.43020451058788),
new google.maps.LatLng(21.089974868162994, -97.34231388558788),
new google.maps.LatLng(20.823225573989735, -97.23245060433788),
new google.maps.LatLng(20.6090006121383, -97.16653263558788),
new google.maps.LatLng(20.41349391511226, -96.92483341683788),
new google.maps.LatLng(20.264124082516584, -96.79849064340038),
new google.maps.LatLng(20.037219471812588, -96.60073673715038),
new google.maps.LatLng(19.809986664460528, -96.42495548715038),
new google.maps.LatLng(19.582428764995228, -96.35903751840038),
new google.maps.LatLng(19.44263136103342, -96.29311954965038),
new google.maps.LatLng(19.287159607787252, -96.22170841683788),
new google.maps.LatLng(19.112258499016704, -96.07339298715038),
new google.maps.LatLng(19.07592188632699, -95.98000919808788),
new google.maps.LatLng(18.935691830341508, -95.91958439340038),
new google.maps.LatLng(18.821343138583465, -95.80422794808788),
new google.maps.LatLng(18.738131540829706, -95.67239201058788),
new google.maps.LatLng(18.717322226696417, -95.29885685433788),
new google.maps.LatLng(18.712119497908546, -95.16152775277538),
new google.maps.LatLng(18.634059384266582, -95.08462345590038),
new google.maps.LatLng(18.561170906186845, -95.00222599496288),
new google.maps.LatLng(18.540339900974512, -94.81545841683788),
new google.maps.LatLng(18.48825127945857, -94.76052677621288),
new google.maps.LatLng(18.415300608931204, -94.70559513558788),
new google.maps.LatLng(18.331890536054985, -94.68362247933788),
new google.maps.LatLng(18.28495467089757, -94.59023869027538),
new google.maps.LatLng(18.2067000026426, -94.58474552621288),
new google.maps.LatLng(18.159730311693536, -94.44192326058788),
new google.maps.LatLng(18.180607291208467, -94.35952579965038),
new google.maps.LatLng(18.21191807614864, -94.13979923715038),
new google.maps.LatLng(18.076197464136573, -94.06838810433788),
new google.maps.LatLng(18.00307359471939, -94.06838810433788),
new google.maps.LatLng(17.867191707073303, -94.06289494027538),
new google.maps.LatLng(17.856734939344314, -93.98599064340038),
new google.maps.LatLng(17.76259639921863, -93.93655216683788),
new google.maps.LatLng(17.699809816963434, -93.83767521371288),
new google.maps.LatLng(17.595116734574038, -93.64541447152538),
new google.maps.LatLng(17.532271728550654, -93.65640079965038),
new google.maps.LatLng(17.453684844810383, -93.62893497933788),
new google.maps.LatLng(17.385548782202545, -93.67288029183788),
new google.maps.LatLng(17.333119151773637, -93.63442814340038),
new google.maps.LatLng(17.333842264827986, -93.5966025436864),
new google.maps.LatLng(17.53299405277731, -93.4922324264989),
new google.maps.LatLng(17.61154658498944, -93.4153281296239),
new google.maps.LatLng(17.9254136696209, -93.3329306686864),
new google.maps.LatLng(17.961995492458364, -93.2230673874364),
new google.maps.LatLng(17.920187077724304, -93.1461630905614),
new google.maps.LatLng(17.857455959711046, -93.1077109421239),
new google.maps.LatLng(17.83131145704156, -93.0967246139989),
new google.maps.LatLng(17.794702706491208, -93.0308066452489),
new google.maps.LatLng(17.705764504868117, -93.0637656296239),
new google.maps.LatLng(17.574892981070978, -93.0308066452489),
new google.maps.LatLng(17.543469693351536, -92.9813681686864),
new google.maps.LatLng(17.517279457373338, -92.9539023483739),
new google.maps.LatLng(17.480606779084603, -92.8715048874364),
new google.maps.LatLng(17.41248077097515, -92.8110800827489),
new google.maps.LatLng(17.34432934908562, -92.7781210983739),
new google.maps.LatLng(17.381029421228625, -92.6682578171239),
new google.maps.LatLng(17.53299405277731, -92.6023398483739),
new google.maps.LatLng(17.564419157813443, -92.5364218796239),
new google.maps.LatLng(17.569656145222794, -92.4045859421239),
new google.maps.LatLng(17.700531470825734, -92.3331748093114),
new google.maps.LatLng(17.731927385557896, -92.2233115280614),
new google.maps.LatLng(17.867912685034554, -92.0255576218114),
new google.maps.LatLng(17.8626843992507, -91.8332968796239),
new google.maps.LatLng(17.674364013248013, -91.7069541061864),
new google.maps.LatLng(17.41248077097515, -91.6410361374364),
new google.maps.LatLng(17.255170057408485, -91.4213095749364),
new google.maps.LatLng(17.160719111444696, -91.2565146530614),
new google.maps.LatLng(16.836089974560213, -91.505126953125),
new google.maps.LatLng(16.836089974560213, -91.505126953125),
new google.maps.LatLng(17.091357717171572, -91.22367324299819),
new google.maps.LatLng(16.88515923288315, -91.01905288167006),
new google.maps.LatLng(16.853618514963458, -90.93116225667006),
new google.maps.LatLng(16.777373411363026, -90.79795302815444),
new google.maps.LatLng(16.701097706171627, -90.69495620198256),
new google.maps.LatLng(16.467308815938896, -90.57049599785779),
new google.maps.LatLng(16.393544996453056, -90.40020791192029),
new google.maps.LatLng(16.322389128545538, -90.38372841973279),
new google.maps.LatLng(16.098211351064045, -90.44689980645154),
new google.maps.LatLng(16.05145705703787, -91.7256309240309),
new google.maps.LatLng(15.258055015476172, -92.1925498693434),
new google.maps.LatLng(15.061881165393563, -92.0607139318434),
new google.maps.LatLng(14.51482946243602, -92.1870567052809),
new google.maps.LatLng(14.557368071113194, -92.2749473302809),
new google.maps.LatLng(15.554617914832573, -93.3241416662184),
new google.maps.LatLng(15.951130725800635, -93.9009238927809),
new google.maps.LatLng(16.162285267649697, -94.4557334630934),
new google.maps.LatLng(16.184860238525552, -95.14499648732306),
new google.maps.LatLng(16.05292990085327, -95.34824355763556),
new google.maps.LatLng(15.957885858711402, -95.45261367482306),
new google.maps.LatLng(15.741228656710431, -96.12277969044806),
new google.maps.LatLng(15.677772934688127, -96.34250625294806),
new google.maps.LatLng(15.640747980376473, -96.51279433888556),
new google.maps.LatLng(15.683061666125433, -96.65012344044806),
new google.maps.LatLng(15.725366579903396, -96.79843887013556),
new google.maps.LatLng(15.788807456668, -97.02365859669806),
new google.maps.LatLng(15.889214874215924, -97.21042617482306),
new google.maps.LatLng(15.931476720904206, -97.34775527638556),
new google.maps.LatLng(15.968448539633972, -97.64987929982306),
new google.maps.LatLng(15.957885858711402, -97.79270156544806),
new google.maps.LatLng(16.227059367991636, -98.22666152638556),
new google.maps.LatLng(16.311430475116154, -98.57822402638556),
new google.maps.LatLng(16.506399188483158, -98.75400527638556),
new google.maps.LatLng(16.595913681451698, -99.14951308888556),
new google.maps.LatLng(16.669600226196955, -99.65488418263556),
new google.maps.LatLng(16.843177508653465, -99.88010390919806),
new google.maps.LatLng(16.985077048306405, -100.24265273732306),
new google.maps.LatLng(17.240420882800066, -101.02316660244759),
new google.maps.LatLng(17.434433584490645, -101.27585214932259),
new google.maps.LatLng(17.523169920632853, -101.44739189580184),
new google.maps.LatLng(17.61219837784332, -101.55725517705184),
new google.maps.LatLng(17.671090145828998, -101.6588787122081),
new google.maps.LatLng(17.82150361370029, -101.77011528447372),
new google.maps.LatLng(17.956114118080414, -101.95413628056747),
new google.maps.LatLng(17.98746498535126, -102.04202690556747),
new google.maps.LatLng(17.977015314588197, -102.09695854619247),
new google.maps.LatLng(17.931290737720552, -102.1203044934581),
new google.maps.LatLng(18.120643944353468, -102.16562309697372),
new google.maps.LatLng(18.182628859943488, -102.10039157577302),
new google.maps.LatLng(18.20582828481108, -101.97254110819563),
new google.maps.LatLng(18.2677831144406, -101.88396383768782),
new google.maps.LatLng(18.310160527934357, -101.85649801737532),
new google.maps.LatLng(18.454483575859694, -101.86835552240683),
new google.maps.LatLng(18.498768642942736, -101.87728191400839),
new google.maps.LatLng(18.550203092392433, -101.85805583978964),
new google.maps.LatLng(18.591209338414348, -101.79488445307089),
new google.maps.LatLng(18.612034129373708, -101.7186668017037),
new google.maps.LatLng(18.595114180746922, -101.71386028314902),
new google.maps.LatLng(18.586002742724588, -101.7076804735787),
new google.maps.LatLng(18.57884341387242, -101.69875408197714),
new google.maps.LatLng(18.593161770771303, -101.62940288568808),
new google.maps.LatLng(18.50216240185534, -101.48589397455527),
new google.maps.LatLng(18.50020892884852, -101.4824607470162),
new google.maps.LatLng(18.520393741562614, -101.18308330560996),
new google.maps.LatLng(18.47806801108127, -100.98464275385214),
new google.maps.LatLng(18.43964022203797, -100.85967327143027),
new google.maps.LatLng(18.406416053959752, -100.76079631830527),
new google.maps.LatLng(18.399900758941758, -100.7244041063912),
new google.maps.LatLng(18.37448875409505, -100.6145408251412),
new google.maps.LatLng(18.37579202495241, -100.60767437006308),
new google.maps.LatLng(18.496301915980332, -100.67908550287558),
new google.maps.LatLng(18.6053081502795, -100.74141622194054),
new google.maps.LatLng(18.760818041883727, -100.77857397041055),
new google.maps.LatLng(18.77514138284026, -100.77960393867227),
new google.maps.LatLng(18.862233366646695, -100.7648410602543),
new google.maps.LatLng(18.788793106357126, -100.7099094196293),
new google.maps.LatLng(18.786192863358014, -100.70716283759805),
new google.maps.LatLng(18.871329924073596, -100.62991521796914),
new google.maps.LatLng(18.91907874722879, -100.57223699531289),
new google.maps.LatLng(18.877502306923848, -100.6110324665043),
new google.maps.LatLng(18.872954257389654, -100.60828588447305),
new google.maps.LatLng(18.869055830986856, -100.60725591621133),
new google.maps.LatLng(18.840139673309803, -100.54442785224649),
new google.maps.LatLng(18.795888331866276, -100.4979494485317),
new google.maps.LatLng(18.769885191098915, -100.4430178079067),
new google.maps.LatLng(18.693152573651425, -100.47735008329732),
new google.maps.LatLng(18.671036714583895, -100.4704836282192),
new google.maps.LatLng(18.50312257281656, -100.44027122587545),
new google.maps.LatLng(18.497913291152695, -100.4361851016485),
new google.maps.LatLng(18.580789606223842, -100.36656699757947),
new google.maps.LatLng(18.385032108609938, -100.33549919815084),
new google.maps.LatLng(18.373334592500203, -100.33802199853147),
new google.maps.LatLng(18.377244401691584, -100.26661086571897),
new google.maps.LatLng(18.464540349716554, -100.15537429345335),
new google.maps.LatLng(18.58115365194998, -100.06644481873201),
new google.maps.LatLng(18.556419446964295, -99.98404735779451),
new google.maps.LatLng(18.581804503633006, -99.92911571716951),
new google.maps.LatLng(18.681355484854514, -99.76775402283357),
new google.maps.LatLng(18.724931318984776, -99.72312206482576),
new google.maps.LatLng(18.733385031301474, -99.63111156677888),
new google.maps.LatLng(18.689160936482974, -99.53910106873201),
new google.maps.LatLng(18.650780671900844, -99.4834827825992),
new google.maps.LatLng(18.46200602523806, -99.33654064392732),
new google.maps.LatLng(18.45744681909672, -99.33379406189607),
new google.maps.LatLng(18.447676683926232, -99.16007274841951),
new google.maps.LatLng(18.26127424845255, -99.06908564026145),
new google.maps.LatLng(18.255180779032326, -99.06690735136806),
new google.maps.LatLng(18.040512054807966, -98.81834167753993),
new google.maps.LatLng(18.036358264468603, -98.8119132342319),
new google.maps.LatLng(17.96909632501741, -98.56746743345064),
new google.maps.LatLng(17.88220564310047, -98.40335915708346),
new google.maps.LatLng(17.860639707522115, -98.24405739927096),
new google.maps.LatLng(17.902109938383717, -98.16078614282623),
new google.maps.LatLng(17.95959983176456, -98.14156006860748),
new google.maps.LatLng(17.92236418919171, -97.96509217309966),
new google.maps.LatLng(17.877932482149138, -97.83188294458404),
new google.maps.LatLng(17.978541272469617, -97.75621258015508),
new google.maps.LatLng(17.97396938653123, -97.67793499226445),
new google.maps.LatLng(17.978971604096774, -97.67336269624025),
new google.maps.LatLng(18.05275832733854, -97.72417446381837),
new google.maps.LatLng(18.055369680046653, -97.80863186127931),
new google.maps.LatLng(18.0814810724633, -97.84433742768556),
new google.maps.LatLng(18.16036305067481, -97.82853235556496),
new google.maps.LatLng(18.26271376531958, -97.74868210181444),
new google.maps.LatLng(18.169686818577116, -97.64008012316049),
new google.maps.LatLng(18.040842059170448, -97.5323187087904),
new google.maps.LatLng(18.02974262554512, -97.46468412627087),
new google.maps.LatLng(18.029142184178863, -97.46144298151432),
new google.maps.LatLng(18.07549415357489, -97.41303447321354),
new google.maps.LatLng(18.17530119559901, -97.19095412588086),
new google.maps.LatLng(18.173838429953985, -97.17715482584714),
new google.maps.LatLng(18.144804577071817, -97.0539019571948),
new google.maps.LatLng(18.144478326597127, -97.0484087931323),
new google.maps.LatLng(18.20547656755081, -96.89116697184323),
new google.maps.LatLng(18.289871853495253, -96.79687519698513),
new google.maps.LatLng(18.38470558081229, -96.74743672042263),
new google.maps.LatLng(18.47779393629911, -96.79035206466091),
new google.maps.LatLng(18.53183887425933, -96.910858351282),
new google.maps.LatLng(18.52956021555307, -96.91875477462185),
new google.maps.LatLng(18.450113724032256, -97.086639601282),
new google.maps.LatLng(18.497330219969054, -97.0862962785281),
new google.maps.LatLng(18.50677195843417, -97.09075947432888),
new google.maps.LatLng(18.67695922186671, -97.31628348242464),
new google.maps.LatLng(18.88211445104414, -97.2626012235778),
new google.maps.LatLng(19.05969590273405, -97.2622579008239),
new google.maps.LatLng(19.140541913063952, -97.20904287396843),
new google.maps.LatLng(19.087990009407214, -97.04562124310905),
new google.maps.LatLng(19.08993667398713, -97.04218801556999),
new google.maps.LatLng(19.224201143684507, -96.98828634320671),
new google.maps.LatLng(19.22754135363835, -96.9883910447),
new google.maps.LatLng(19.27142785925759, -97.02852498788963),
new google.maps.LatLng(19.289737632157227, -97.04345952768455),
new google.maps.LatLng(19.324569154996706, -97.16018926401267),
new google.maps.LatLng(19.352267066283456, -97.2526264762567),
new google.maps.LatLng(19.41380113791061, -97.38178278110485),
new google.maps.LatLng(19.452449755121748, -97.35071207187633),
new google.maps.LatLng(19.45973341019676, -97.35054041049938),
new google.maps.LatLng(19.59852370443518, -97.39446234041827),
new google.maps.LatLng(19.713459690485248, -97.33833247218155),
new google.maps.LatLng(19.920496972307202, -97.27172785792374),
new google.maps.LatLng(19.951365630344853, -97.26039820704483),
new google.maps.LatLng(20.09361971991108, -97.14195185694717),
new google.maps.LatLng(20.096684667910175, -97.13975296629332),
new google.maps.LatLng(20.16373349883556, -97.22129212034605),
new google.maps.LatLng(20.265877277493416, -97.3418992302797),
new google.maps.LatLng(20.27544146261926, -97.3568649556189),
new google.maps.LatLng(20.172351388203328, -97.46810152788453),
new google.maps.LatLng(20.107240652417676, -97.54098064854543),
new google.maps.LatLng(20.163327758204865, -97.64260418370168),
new google.maps.LatLng(20.244074185510932, -97.70665811812898),
new google.maps.LatLng(20.344541427545387, -97.70322489058992),
new google.maps.LatLng(20.43014464956827, -97.59816812789461),
new google.maps.LatLng(20.559424525572968, -97.62004904215786),
new google.maps.LatLng(20.808423351487388, -97.78584829705358),
new google.maps.LatLng(20.8089368291756, -97.8009228942907),
new google.maps.LatLng(20.577877060276748, -97.96813827517417),
new google.maps.LatLng(20.62608201305787, -98.09379440310386),
new google.maps.LatLng(20.627504125088727, -98.10740469035926),
new google.maps.LatLng(20.410785870713077, -98.3951091581327),
new google.maps.LatLng(20.34384365667223, -98.5214519315702),
new google.maps.LatLng(20.645496562095463, -98.50977895793739),
new google.maps.LatLng(20.797704278388043, -98.40128896770301),
new google.maps.LatLng(20.78807541682931, -98.24954031047645),
new google.maps.LatLng(21.00746032576626, -98.16851614055457),
new google.maps.LatLng(21.0933789803472, -98.19322794155556),
new google.maps.LatLng(21.245772157593024, -98.51595133022744),
new google.maps.LatLng(21.337900051280734, -98.45964639858681),
new google.maps.LatLng(21.366038715111348, -98.49397867397744),
new google.maps.LatLng(21.36475980215572, -98.52693765835244),
new google.maps.LatLng(21.545542485548083, -98.45514437005613),
new google.maps.LatLng(22.000905114603512, -98.42630525872801),
new google.maps.LatLng(22.267375150528355, -98.36620675901463),
new google.maps.LatLng(22.409641049424305, -98.463710421124),
new google.maps.LatLng(22.2406841532859, -97.79629098753026)];
var polyline = new google.maps.Polygon({path:path, strokeColor: "#34679e", strokeOpacity: 1.0, fillColor: '#34679e', fillOpacity: 0.35, strokeWeight: 2});
polyline.setMap(map);
shapes.push(polyline);


var path = [
new google.maps.LatLng(18.217794772714758, -94.115322009088),
new google.maps.LatLng(18.40032237896345, -93.5165671262755),
new google.maps.LatLng(18.43159346936047, -93.3407858762755),
new google.maps.LatLng(18.45243770406022, -93.203456774713),
new google.maps.LatLng(18.468069219920032, -92.8573874387755),
new google.maps.LatLng(18.60868865214161, -92.6816061887755),
new google.maps.LatLng(18.650331405152397, -92.445400134088),
new google.maps.LatLng(18.702370482434066, -92.0004538450255),
new google.maps.LatLng(18.634716568534984, -91.8686179075255),
new google.maps.LatLng(18.764796257816396, -91.5280417356505),
new google.maps.LatLng(18.95193472801522, -91.3083151731505),
new google.maps.LatLng(19.071385766947852, -91.127040759088),
new google.maps.LatLng(19.180374632970985, -90.9897116575255),
new google.maps.LatLng(19.356679845925758, -90.742519274713),
new google.maps.LatLng(19.739742883402375, -90.6930807981505),
new google.maps.LatLng(19.956750156826324, -90.4623679075255),
new google.maps.LatLng(20.51339385759071, -90.5502585325255),
new google.maps.LatLng(20.996240641573152, -90.3744772825255),
new google.maps.LatLng(21.254701477391755, -89.9020651731505),
new google.maps.LatLng(21.326357146689947, -89.4626120481505),
new google.maps.LatLng(21.423548174764292, -88.841884509088),
new google.maps.LatLng(21.5411139576729, -88.6056784544005),
new google.maps.LatLng(21.576875981680608, -88.248622790338),
new google.maps.LatLng(21.684109056325486, -88.083827868463),
new google.maps.LatLng(21.592199862530524, -87.9025534544005),
new google.maps.LatLng(21.5411139576729, -87.765224352838),
new google.maps.LatLng(21.52067455762953, -87.534511462213),
new google.maps.LatLng(21.53484700204879, -87.286376953125),
new google.maps.LatLng(21.62284275773721, -87.07627811555886),
new google.maps.LatLng(21.47978713287752, -86.91148319368386),
new google.maps.LatLng(21.259820897167938, -86.76866092805886),
new google.maps.LatLng(20.936951332195793, -86.80161991243386),
new google.maps.LatLng(20.66992989308904, -86.99937381868386),
new google.maps.LatLng(20.165422803025614, -87.42784061555886),
new google.maps.LatLng(20.041619246925862, -87.47178592805886),
new google.maps.LatLng(19.767874468318073, -87.45530643587136),
new google.maps.LatLng(19.66445189425632, -87.66404667024636),
new google.maps.LatLng(19.56613861244649, -87.64207401399636),
new google.maps.LatLng(19.6230641567227, -87.42234745149636),
new google.maps.LatLng(19.47190867085352, -87.38938846712136),
new google.maps.LatLng(19.33719928362997, -87.57615604524636),
new google.maps.LatLng(19.23350095083761, -87.56516971712136),
new google.maps.LatLng(19.171250481501385, -87.47727909212136),
new google.maps.LatLng(18.85964658059576, -87.59812870149636),
new google.maps.LatLng(18.641178289884305, -87.69700565462136),
new google.maps.LatLng(18.124090429220747, -87.83799558640249),
new google.maps.LatLng(17.87854994975385, -87.99180418015249),
new google.maps.LatLng(18.400563695178292, -87.95335203171499),
new google.maps.LatLng(18.84823536344456, -88.07969480515249),
new google.maps.LatLng(18.509987459369338, -88.28294187546499),
new google.maps.LatLng(18.45267894715635, -88.50266843796499),
new google.maps.LatLng(18.244123447604576, -88.58506589890249),
new google.maps.LatLng(18.13975159093244, -88.67295652390249),
new google.maps.LatLng(17.90991455397531, -88.85423093796499),
new google.maps.LatLng(18.01442311939883, -89.04099851608999),
new google.maps.LatLng(17.930821208482033, -89.15635496140249),
new google.maps.LatLng(17.81057431505911, -89.14536863327749),
new google.maps.LatLng(17.805344345422107, -90.98557859421499),
new google.maps.LatLng(17.25535183685715, -91.00205808640249),
new google.maps.LatLng(17.25535183685715, -91.38108640671499),
new google.maps.LatLng(17.423144964943106, -91.61729246140249),
new google.maps.LatLng(17.700712805904605, -91.69419675827749),
new google.maps.LatLng(17.847179806062833, -91.80406003952749),
new google.maps.LatLng(17.86243272768111, -91.82634830946938),
new google.maps.LatLng(17.871582139831943, -91.86754703993813),
new google.maps.LatLng(17.872889160259962, -92.03234196181313),
new google.maps.LatLng(17.74475555629194, -92.22734928603188),
new google.maps.LatLng(17.709437293022244, -92.33171940321938),
new google.maps.LatLng(17.69897128654287, -92.34617015043312),
new google.maps.LatLng(17.577259270014284, -92.4107148281675),
new google.maps.LatLng(17.56940406214442, -92.53568431058937),
new google.maps.LatLng(17.540598716782476, -92.60984202543312),
new google.maps.LatLng(17.52095608333287, -92.61396189848),
new google.maps.LatLng(17.392571983026656, -92.67301341215187),
new google.maps.LatLng(17.383398232729892, -92.69361277738625),
new google.maps.LatLng(17.357184984404448, -92.76914378324562),
new google.maps.LatLng(17.414849175072753, -92.80210276762062),
new google.maps.LatLng(17.484284147126075, -92.8611542812925),
new google.maps.LatLng(17.52881339197052, -92.95316477933937),
new google.maps.LatLng(17.58511413674289, -93.02457591215187),
new google.maps.LatLng(17.705512612111598, -93.05753489652687),
new google.maps.LatLng(17.791835736925314, -93.01908274808937),
new google.maps.LatLng(17.805181459037563, -93.02736337478979),
new google.maps.LatLng(17.836559004251196, -93.09053476150854),
new google.maps.LatLng(17.859748009516085, -93.10340214249067),
new google.maps.LatLng(17.92182499124179, -93.13979435440473),
new google.maps.LatLng(17.967552014959654, -93.21875858780317),
new google.maps.LatLng(17.96493936066158, -93.23798466202192),
new google.maps.LatLng(17.93097134127526, -93.33480167862348),
new google.maps.LatLng(17.61868467314722, -93.42200565811567),
new google.maps.LatLng(17.54668232979263, -93.49067020889692),
new google.maps.LatLng(17.53620687487159, -93.49890995499067),
new google.maps.LatLng(17.339998363770963, -93.60328007217817),
new google.maps.LatLng(17.342620103072647, -93.62868595596723),
new google.maps.LatLng(17.385218112596352, -93.66370487686567),
new google.maps.LatLng(17.450079102423903, -93.62387943741254),
new google.maps.LatLng(17.536524518993204, -93.64791203018598),
new google.maps.LatLng(17.597404518815477, -93.6382989930766),
new google.maps.LatLng(17.775998073613675, -93.93080997940473),
new google.maps.LatLng(17.860980052379286, -93.97612858292035),
new google.maps.LatLng(17.877971581759482, -94.05715275284223),
new google.maps.LatLng(18.08043730708303, -94.06264591690473),
new google.maps.LatLng(18.216763985476447, -94.12233913270444)];
var polyline = new google.maps.Polygon({path:path, strokeColor: "#ff1628", strokeOpacity: 1.0, fillColor: '#ff1628', fillOpacity: 0.35, strokeWeight: 2});
polyline.setMap(map);
shapes.push(polyline);
       

		
		
		var markers = [
    {
        "title": 'Noroeste',
        "lat": '27.732558',
        "lng": '-113.300489',
        "description": 'Sopa especial Vips',
		"img": 'https://vips.com.mx/img/clasicos/platos/sopaespecialvips.png'
    },
    {
        "title": 'Noreste',
        "lat": '25.330418',
        "lng": '-103.103247',
        "description": 'Pepitos Vips de pollo',
		"img": 'https://vips.com.mx/img/clasicos/platos/pepitosdepollo.png'
		
    },
    {
        "title": 'Occidente',
        "lat": '20.524799',
        "lng": '-103.038335',
        "description": 'Cheescake con fresas',
		"img": 'https://vips.com.mx/img/clasicos/platos/Cheescakeconfresas.png'
    },
    {
        "title": 'Centro',
        "lat": '19.388917',
        "lng": '-99.044367',
        "description": 'Enchiladas Suizas',
		"img": 'https://vips.com.mx/img/clasicos/platos/enchiladassuizas.png'
		
    },
    {
        "title": 'Sureste',
        "lat": '19.932551',
        "lng": '-89.164048',
        "description": 'Caldo Tlalpeño',
		"img": 'https://vips.com.mx/img/clasicos/platos/caldotlalpeno.png'
    },
    {
        "title": 'Sur',
        "lat": '16.445810',
        "lng": '-96.915414',
        "description": 'Enchiladas Suizas',
		"img": 'https://vips.com.mx/img/clasicos/platos/enchiladassuizas.png'
    }
    ];
	
	//Create and open InfoWindow.
        var infoWindow = new google.maps.InfoWindow();
 
        for (var i = 0; i < markers.length; i++) {
            var data = markers[i];
            var myLatlng = new google.maps.LatLng(data.lat, data.lng);
            var marker = new google.maps.Marker({
                position: myLatlng,
				icon: new google.maps.MarkerImage('https://vips.com.mx/img/clasicos/pin.png'),
                map: map,
                title: data.title
            });
 
            //Attach click event to the marker.
            (function (marker, data) {
                google.maps.event.addListener(marker, "click", function (e) {
                    //Wrap the content inside an HTML DIV in order to set height and width of InfoWindow.
                    infoWindow.setContent("<div class='infow'><h2><img class = 'star' src='https://vips.com.mx/img/clasicos/estrella.svg'><img class = 'star' src='https://vips.com.mx/img/clasicos/estrella.svg'><img class = 'star' src='https://vips.com.mx/img/clasicos/estrella.svg'><img class = 'star' src='https://vips.com.mx/img/clasicos/estrella.svg'><img class = 'star' src='https://vips.com.mx/img/clasicos/estrella.svg'><br>Favorito del "+ data.title+ " </h2>" + data.description + "<img class='imgplato' src='"+data.img+"'></div>");
                    infoWindow.open(map, marker);
                });
            })(marker, data);
        }
		
		
		google.maps.event.trigger(marker, 'click', {
		  latLng: new google.maps.LatLng(19.388917, -99.044367)
		});

      }


    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8M2wYlFClmSEMeFSlWb9WTWWC2N3SegE&callback=initMap">
    </script>
	
  </body>
</html>