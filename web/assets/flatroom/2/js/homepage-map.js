function initialize() {

  var $ = jQuery;

  if ((ibr.mapDisabled != 'on') || ($('body').width() > 768)) {
  
    default_value = $.parseJSON(ibr.location_default);
  
    var mapOptions = {
      zoom: default_value['zoom'],
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      center: new google.maps.LatLng(default_value['lat'], default_value['lng']),
      scrollwheel: false,
      navigationControl: false,
      scaleControl: false,
      mapTypeControl: false,
      panControl: false,
      zoomControl: true,
      zoomControlOptions: {
        style: google.maps.ZoomControlStyle.LARGE,
        position: google.maps.ControlPosition.LEFT_CENTER
      },
      streetViewControlOptions: {
        position: google.maps.ControlPosition.LEFT_CENTER
      },
      streetView: new google.maps.StreetViewPanorama(
        document.getElementById('map-canvas'),
        {
          addressControl: false,
          panControl: true,
          panControlOptions: {
            position: google.maps.ControlPosition.LEFT_CENTER
          },
          zoomControlOptions: {
            style: google.maps.ZoomControlStyle.LARGE,
            position: google.maps.ControlPosition.LEFT_CENTER
          },
          zoomControl: true,
          visible: false,
          enableCloseButton: true,
        }
      )
    }
  
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
  
    var markers = [];
  
    var infowindows = [];

    $('.properties-on-map > .property-on-map').each(function () {
    
      var location = $.parseJSON($(this).find('input[name=property_location]').val());
    
      var myLatlng = new google.maps.LatLng(location['lat'], location['lng']);
    
      var marker_id = 'marker_' + $(this).attr('id').replace('property-marker-', '');
    
      var element_selector = this;
    
      markers[marker_id] = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: $(this).find('input[name=property_title]').val(),
        //animation: google.maps.Animation.DROP,
        icon: ibr.uploadUrl + '/' + $(this).find('input[name=property_type]').val() + '.svg'
      });
    
      infowindows[marker_id] = new google.maps.InfoWindow();
    
      google.maps.event.addListener(markers[marker_id], "click", function(event) {
        infoWindowShow(element_selector, map, markers[marker_id], infowindows[marker_id]);
      });
    
    });

    var clusterStyles = [
      {
        opt_textColor: 'black',
        url: ibr.uploadUrl + '/ico.svg',
        height: 49,
        width: 49,
        textSize: 15,
      },
      {
        opt_textColor: 'black',
        url: ibr.uploadUrl + '/ico.svg',
        height: 49,
        width: 49,
        textSize: 15,
      },
      {
        opt_textColor: 'black',
        url: ibr.uploadUrl + '/ico.svg',
        height: 49,
        width: 49,
        textSize: 15,
      }
    ];

    var mcOptions = {styles: clusterStyles};
    var mc = new MarkerClusterer(map, markers, mcOptions);
  }

}

google.maps.event.addDomListener(window, 'load', initialize);

function infoWindowShow(element_selector, map, marker, infowindow) {

  var $ = jQuery;

  infowindow.close();

  var content = $(element_selector).find('.property-tile-on-map').html();

  infowindow.setContent(content);
  infowindow.open(map, marker);
}