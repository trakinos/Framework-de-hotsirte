<?php
  $coord = explode(", ", $coordenadas);
 ?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyBQZeCB_UixD_V4vBoBfPe4_bgfALVKJ7Y"></script>

<script type="text/javascript">
// Variáveis
var content_principal = '<?php echo $nomedosite; ?>'+'<br />'+'<?php echo $endereco; ?>';
var pin_principal = '<?php echo $pinmapa; ?>';
var latitude_principal = <?php echo $coord[0]; ?>;
var longitude_principal = <?php echo $coord[1]; ?>;
var div_principal = "framemapa";

// MAPA
var map;
var infowindow;
var myLocation = {lat: latitude_principal, lng: longitude_principal};
var markers = [];
var markers2 = [];
var meuLocal;
 function initMap (){
  // var isDraggable = $(document).width() > 960 ? true : false;
map = new google.maps.Map(document.getElementById(div_principal), {
    center: myLocation,
    zoom: 14,
    scrollwheel: false,
		//draggable: isDraggable,
  });

infowindow = new google.maps.InfoWindow({
  content: content_principal
});

marker = new google.maps.Marker({
    position: myLocation,
    map: map,
    title: content_principal,
    icon: pin_principal,
});
marker.addListener('click', function() {
  infowindow.open(map, marker);
});
}

//FIM  MAPA 1 //
function callback(results, status) {
if (status == google.maps.places.PlacesServiceStatus.OK) {
  for (var i = 0; i < results.length; i++) {
    var place = results[i];
    createMarker(results[i]);
  }
}
}

function createMarker(place) {
  var placeLoc = place.geometry.location;
  var marker = new google.maps.Marker({
    map: map,
    position: place.geometry.location,
    icon: 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png',
    // icon: 'images/map/'+meuLocal+'.png'
  });
  markers.push(marker);

  google.maps.event.addListener(marker, 'click', function() {
    infowindow.setContent("<div style='text-align:center;font-size:16px;'>"+place.name+"</div><div style='font-size:9px;'>"+place.formatted_address+"</div>");
    infowindow.open(map, this);
  });
}

function abrePesquisa(local){
  closeMarkers();
  meuLocal = local;
  var request = {
    location: myLocation,
    radius: '5',
    query: local
  };

  service = new google.maps.places.PlacesService(map);
  service.textSearch(request, callback);
}
function setMapOnAll(map) {
for (var i = 0; i < markers.length; i++) {
  markers[i].setMap(map);
  }
}
function closeMarkers(){
setMapOnAll(null);
}

google.maps.event.addDomListener(window, 'load', initMap);
</script>
