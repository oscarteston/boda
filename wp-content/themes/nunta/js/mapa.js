jQuery(function($) {

    var map, lat, lng, latDest, lngDest;

    function asignarDestino() {
      var url = window.location.href.toString();

      if(/ceremonia/.test(url)){
        latDest = 42.694437;
        lngDest = -6.365699;
      }else if(/banquete/.test(url)){
        latDest = 42.549593;
        lngDest = -6.607417;
      }

    }

    function enlazarMarcador() {

       map.drawRoute({
         origin: [lat, lng],
         destination: [latDest, lngDest],
         travelMode: 'driving',
         strokeColor: 'blue',
         strokeOpacity: 0.6,
         strokeWeight: 6
       });

       map.addMarker({ lat: latDest, lng: lngDest});  // pone marcador en mapa
    };

    function pintarIndicaciones() {
      map.travelRoute({
        origin: [lat, lng],
        destination: [latDest, lngDest],
        travelMode: 'driving',
        step: function(e) {
          $('#instrucciones').append('<li>'+e.instructions+'</li>');
        }
      });
    }

     function geolocalizar(){

       GMaps.geolocate({
         success: function(position){
           lat = position.coords.latitude;  // guarda coords en lat y lng
           lng = position.coords.longitude;
           latIni = lat;  //Guarda las coordenadas iniciales
           lngIni = lng;
           map = new GMaps({  // muestra mapa centrado en coords [lat, lng]
             el: '#mapa',
             lat: lat,
             lng: lng,
             zommControl: true,
           });
           map.addMarker({ lat: lat, lng: lng});  // marcador en [lat, lng]
           asignarDestino();
           enlazarMarcador();
           map.fitZoom();  //Asigna el zoom necesario para mostrar todos los marcadores
           pintarIndicaciones();
         },
         error: function(error) { alert('Geolocalizaci��n falla: '+error.message); },
         not_supported: function(){ alert("Su navegador no soporta geolocalizaci��n"); },
       });
     };

     geolocalizar();
});
