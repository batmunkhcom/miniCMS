<?php
$object = \Object::getById(10);
?>
<header class="page-header bg-color">
    <div class="container">
        <div class="row">
            <div class="span9">
                <h1 class="entry-title"><?php echo $object->name; ?></h1>
            </div>

            <div class="span3">
                <div id="breadcrumb">
                    <div class="title"><?php echo __('You are here'); ?>:</div>
                    <a href="<?php echo get_url('homepage'); ?>"><?php echo __('Home'); ?></a>
                    <span class="separator">/</span>
                    <a href="<?php
                    echo get_url('real_estate_list', array(
                        'category_id' => 0
                    ));
                    ?>"><?php echo __('Real estate'); ?></a>
                    <span class="separator">/</span>
                    <?php echo $object->name; ?>
                </div>
            </div>
        </div>
    </div>
</header><!-- .page-header -->

<div id="primary" class="container property-view right-sidebar">
    <div class="row">
        <div id="content" class="span9 bg-dark">
            <div class="overview">
                <h2 class="title"><?php echo __('Specification'); ?></h2>

                <div class="options row">
                    <?php
                    $object_options = array();
                    $option_i = 2;
                    $options = \OptionValue::getAllByCodeToArray($object->module_name . '_' . $object->id);
                    echo '<div class="span3">';
                    echo '<div>';
                    echo '<strong>' . __('Price') . ': </strong>';
                    echo number_format((int) $object->price_total) . ' ' . $object->currency_code;
                    echo '</div>';
                    echo '<div>';
                    echo '<strong>' . __('Area') . ': </strong>';
                    echo $object->measure_value . '' . get_measure($object->measure_name);
                    echo '</div>';
                    foreach ($options as $k => $v) {
                        if (($option_i % 4 ) == 0 && $option_i > 0) {
                            echo '</div>';
                            echo '<div class="span3">';
                        }
                        echo '<div>';
                        echo '<strong>';
                        echo __($k);
                        echo ': </strong>';
                        echo $v;
                        echo '</div>';
                        $option_i++;
                    }
                    echo '</div>';
                    unset($option_i);
                    ?>
                </div><!-- .options -->
                <div class="galery">
                    <div class="images-box">
                        <div class="images">
                            <?php
                            $thums = '';
                            $photos = \Photo::getPhotosByCode($object->module_name . '_' . $object->id);
                            $photo_i = 1;
                            foreach ($photos as $photo) {
                                echo '<a id="image-' . $photo_i . '" class="fancybox" rel="group" href="' . $photo->path . '">';
                                echo '<img src="' . $photo->path . '" alt="">';
                                echo '</a>';
                                $thumbs .= '<div>
                                        <a href="#image-' . $photo_i . '">
                                            <img src="' . $photo->path . '" alt="" />
                                        </a>
                                    </div>';
                                $photo_i++;
                            }
                            unset($photos, $photo_i);
                            ?>
                        </div>
                    </div><!-- .images-box -->

                    <div class="thumbs-box">
                        <a class="prev" href="#"></a>

                        <div id="thumbs">
                            <?php
                            echo $thumbs;
                            unset($thumbs);
                            ?>
                        </div><!-- #thumbs -->

                        <a class="next" href="#"></a>
                    </div><!-- .thumbs-box -->

                    <div class="clearfix"></div>
                </div><!-- .galery -->

                <?php echo $object->content_brief; ?>
                <div class="clearfix"></div>

            </div><!-- .overview -->

            <div class="amenities" style="display: none;">
                <h2 class="title">General Amenities</h2>

                <div class="row-fluid">
                    <div class="span3">
                        <div class="attribute active">Parking place</div>
                    </div>

                    <div class="span3">
                        <div class="attribute active">Garage</div>
                    </div>

                    <div class="span3">
                        <div class="attribute active">Balcony</div>
                    </div>

                    <div class="span3">
                        <div class="attribute active">Air Conditioning</div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="span3">
                        <div class="attribute active">Central Heating</div>
                    </div>

                    <div class="span3">
                        <div class="attribute active">Internet</div>
                    </div>

                    <div class="span3">
                        <div class="attribute active">Wifi</div>
                    </div>
                </div>
            </div><!-- .amenities -->

            <div class="map">
                <h2 class="title">Map</h2>
                <div class="map-box">
                    <div id="property-map">
                        <div id='map-canvas'>
                        </div>
                        <div class="clearfix"></div>
                        <script>
                            function initialize() {
                                var mapOptions = {
                                    zoom: 16,
                                    mapTypeId: google.maps.MapTypeId.SATELLITE,
                                    center: new google.maps.LatLng(<?php echo map_fix_value($options['latitude']); ?>,<?php echo map_fix_value($options['longitude']); ?>)
                                };

                                var map = new google.maps.Map(document.getElementById('map-canvas'),
                                        mapOptions);

//                                map.setTilt(45);
//                                map.setHeading(90);

                                var image = '/images/icons/icon_building.png';
                                var myLatLng = new google.maps.LatLng(<?php echo map_fix_value($options['latitude']); ?>, <?php echo map_fix_value($options['longitude']); ?>);
                                var beachMarker = new google.maps.Marker({
                                    position: myLatLng,
                                    map: map,
                                    icon: image
                                });

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

                            window.onload = loadScript;
                        </script>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div><!-- .map -->

            <?php require(DIR_TEMPLATE . 'flatroom/_agent_info.php'); ?>
        </div><!-- #content -->

        <?php require_once(DIR_TEMPLATE . 'flatroom/_property_sidebar.php'); ?>
    </div>
</div><!-- #primary -->