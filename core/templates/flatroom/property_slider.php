<div class="row">
    <div id="content" class="span12" role="main">
        <article class="page">
            <div class="entry-content">
                <div class="shortcode properties-shortcode carousel-box first">
                    <h3 class="shortcode-title">
                        <a href="properties.html"><?php echo $slider_title; ?></a>
                    </h3>

                    <div class="row">
                        <a href="#" class="prev-next prev">&#8249;</a>
                        <a href="#" class="prev-next next">&#8250;</a>

                        <div class="carousel">
                            <?php foreach ($object_featured as $object): ?>
                                <div class="span3">
                                    <div class="property no-dark">
                                        <div class="images-box">
                                            <div class="options">
                                                <div class="area tooltip-link" data-toggle="tooltip" title="" data-original-title="Area"><?php echo $object->measure_value; ?><?php echo get_measure($object->measure_name); ?></div>
                                                <!--
                                                <div class="bedrooms tooltip-link" data-toggle="tooltip" title="" data-original-title="Bedrooms">4</div>
                                                <div class="bathroom tooltip-link" data-toggle="tooltip" title="" data-original-title="Bathrooms">3</div>
                                                //-->
                                            </div>

                                            <div class="property-images-container">
                                                <div class="images">
                                                    <?php
                                                    $object_photos = \Photo::getPhotosByCode($object->module_name . '_' . $object->id);
                                                    foreach ($object_photos as $photo):
                                                        ?>
                                                        <a href="<?php
                                                        echo get_url('real_estate_readmore', array(
                                                            'id' => $object->id
                                                        ));
                                                        ?>">
                                                            <img src="<?php echo $photo->path; ?>" alt="" >
                                                        </a>
                                                    <?php endforeach; ?>
                                                    <?php unset($object_photos); ?>
                                                </div>
                                                <div class="pagination switches"></div>
                                            </div>
                                        </div>

                                        <h3 class="property-title no-border">
                                            <a href="<?php
                                            echo get_url('real_estate_readmore', array(
                                                'id' => $object->id
                                            ));
                                            ?>" title=""><?php echo $object->name ?></a>
                                        </h3>
                                        <!--
                                                                                        <div class="location"><i class="fa fa-map-marker"></i> Orange County, CA, USA</div>

                                        //-->
                                        <div class="bottom-box">
                                            <div class="pull-left"><?php echo __('Featured'); ?></div>
                                            <div class="pull-right"><?php echo number_format((int) $object->price_total) . ' ' . $object->currency_code; ?> </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div><!-- .carousel -->
                    </div>
                </div><!-- .properties-shortcode -->

                <div class="clearfix"></div>
            </div><!-- .entry-content -->
        </article><!-- #post -->
    </div>
</div>