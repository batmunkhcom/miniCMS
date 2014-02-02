<div class="property">
    <div class="images-box property-images-container">
        <div class="images">

            <?php
//            $photos = \Photo::getPhotosByCode($object->code);
            $photos = \Photo::getPhotosByCode($object->module_name . '_' . $object->id);
            foreach ($photos as $photo) {
                echo '<a href="property1.html">';
                echo '<img src="' . $photo->path . '" alt="">';
                echo '</a>';
            }
            unset($photos);
            ?>
        </div>
        <div class="pagination switches"></div>
    </div>

    <div class="property-content">
        <div class="options">
            <div class="area tooltip-link" data-toggle="tooltip" title="" data-original-title="<?php echo __('Area'); ?>">
                <?php echo $object->measure_value; ?> <?php echo __($object->measure_name); ?>
            </div>
            <div class="area tooltip-link" data-toggle="tooltip" title="" data-original-title="<?php echo __('Date added'); ?>">
                <?php echo substr($object->date_created, 0, 10); ?>
            </div>
        </div>

        <h3 class="property-title no-border">
            <a href="property.html"><?php echo $object->name; ?></a>
        </h3>

        <div class="location"><i class="fa fa-map-marker"></i> --</div>

        <div class="description"><p><?php echo $object->content_brief; ?></div>

        <div class="bottom-box">
            <div class="pull-left">
                <?php
                echo number_format($object->price_total);
                echo ' ' . $object->currency_code;
                ?>
            </div>
            <div class="pull-right">
                <a href="<?php
                echo get_url('real_estate_readmore', array(
                    'id' => $object->id
                ));
                ?>"><?php echo __('Read more'); ?></a>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
</div><!-- .property -->