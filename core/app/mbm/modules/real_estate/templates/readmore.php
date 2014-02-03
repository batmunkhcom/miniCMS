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

            <!--
            <div class="agent-info">
                <h2 class="title">Agent info</h2>

                <div class="agent">
                    <div class="row">

                        <div class="span2">
                            <a href="agent.html" class="image"><img alt="" src="/assets/flatroom/1/content/agents/1.jpg" class="avatar avatar-206 photo" height="206" width="206" /></a>
                        </div>

                        <div class="span4 autor-content">
                            <h2 class="title no-border">
                                <a href="agent.html">Elaine Adkins</a>
                            </h2>

                            <div class="description">Elaine has been with Atlanta Intown for over 6 years now, having joined company after 6 years in the sales and marketing arena. From those experiences, Elaine brings to her real estate clients a solid background in marketing, communications and contract negotiations for both buyers and sellers. When you work with Elaine toward the sale...</div>
                        </div>

                        <div class="span3">
                            <div class="autor-meta">
                                <div class="phone">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                                    <path fill="#41A3E1" d="M13.498,11.499c-1,1-1,2-2,2c-1,0-2-1-3-2c-0.999-0.998-1.999-2-1.999-3C6.5,7.5,7.5,7.5,8.499,6.5	c1-1-1.999-4-2.999-4s-3,3-3,3c0,2,2.055,6.055,4,7.999c1.945,1.945,5.998,4.001,7.998,4.001c0,0,3.002-2.001,3.002-3.001 S14.498,10.501,13.498,11.499z"/>
                                    </svg>

                                    <span>4 (658) 25-56-984</span>
                                </div>

                                <div class="email no-border">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                                    <path fill="#41A3E1" d="M16,4.001H4.002c-1.104,0-2,0.896-2,2.001V14c0,1.105,0.896,1.998,2,1.998H16 c1.104,0,1.999-0.893,1.999-1.998V6.003C17.999,4.897,17.104,4.001,16,4.001z M16,13.002C16,13.553,15.552,14,15.001,14H5.002 c-0.553,0-1.001-0.447-1-1V7c0-0.553,0.447-0.998,1-0.998h9.999C15.552,6.003,16,6.448,16,7V13.002z"/>
                                    <polygon fill="#41A3E1" points="13.501,7.502 10.001,11 6.501,7.502 5.501,8.502 7.001,10.002 5.501,11.502 6.501,12.5 8.001,11 10.001,12.5 12.001,11 13.501,12.5 14.5,11.5 13,10 14.5,8.5 "/>
                                    </svg>

                                    <a href="mailto:elaine@itembridge.com">elaine@itembridge.com</a>
                                </div>

                                <div class="social">
                                    <a href="#" target="_blank"><i class="icon-youtube"></i></a>
                                    <a href="#" target="_blank"><i class="icon-yahoo"></i></a>
                                    <a href="#" target="_blank"><i class="icon-chrome"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            //-->
        </div><!-- #content -->

        <?php require_once(DIR_TEMPLATE . 'flatroom/_property_sidebar.php'); ?>
    </div>
</div><!-- #primary -->