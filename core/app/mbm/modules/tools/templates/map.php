<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-6">
                <section class="panel">
                    <header class="panel-heading">
                        Basic
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-remove"></a>
                        </span>
                    </header>
                    <div class="panel-body">
                        <div id="gmap_basic" class="gmaps"></div>
                    </div>
                </section>
            </div>
            <div class="col-lg-6">
                <section class="panel">
                    <header class="panel-heading">
                        Markers
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-remove"></a>
                        </span>
                    </header>
                    <div class="panel-body">
                        <div id="gmap_marker" class="gmaps"></div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <section class="panel">
                    <header class="panel-heading">
                        Geolocation
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-remove"></a>
                        </span>
                    </header>
                    <div class="panel-body">
                        <div id="gmap_geo" class="gmaps"></div>
                    </div>
                </section>
            </div>
            <div class="col-lg-6">
                <section class="panel">
                    <header class="panel-heading">
                        Polylines
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-remove"></a>
                        </span>
                    </header>
                    <div class="panel-body">
                        <div id="gmap_polylines" class="gmaps"></div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Geocoding
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-remove"></a>
                        </span>
                    </header>
                    <div class="panel-body">
                        <form class="form-inline" role="form">
                            <div class="form-group">
                                <input type="text" id="gmap_geocoding_address" class=" form-control" placeholder="Address..." />
                            </div>
                            <input type="button" id="gmap_geocoding_btn" class="btn" value="Search" />
                        </form>
                        <br>
                        <div id="gmap_geocoding" class="gmaps"></div>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>
<!--main content end-->

<div id='map-canvas'>
</div>
<div class="clearfix"></div>
<script>
    function initialize() {
        var mapOptions = {
            zoom: 16,
            mapTypeId: google.maps.MapTypeId.SATELLITE,
            center: new google.maps.LatLng(47.921378, 106.90553999999997)
        };

        var map = new google.maps.Map(document.getElementById('map-canvas'),
                mapOptions);

//                                map.setTilt(45);
//                                map.setHeading(90);


//                                google.maps.event.addListener(map, 'click', function(event) {
//                                    alert("Latitude: " + event.latLng.lat() + " " + ", longitude: " + event.latLng.lng());
//                                });
    }

    function loadScript() {
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
                'callback=initialize';
        document.body.appendChild(script);
    }

//    window.onload = loadScript;
</script>
<script src="//maps.google.com/maps/api/js?sensor=true"></script>
<script src="/assets/flatlab/admin/js/gmaps.js"></script>
<script src="/assets/flatlab/admin/js/gmaps-scripts.js"></script>

<script>
   jQuery(document).ready(function() {
       GoogleMaps.init();
   });
</script>