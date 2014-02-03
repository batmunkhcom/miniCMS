<?php require_once(DIR_TEMPLATE . 'flatroom' . DS . 'home_slider.php'); ?>
<?php require_once(DIR_TEMPLATE . 'flatroom' . DS . 'home_tabs.php'); ?>

<div class="no-background">
    <div id="primary" class="container">

        <?php
        $slider_title = __('Featured');
        $object_featured = \Object::getFeatured(0, 'real_estate', array(
                    'order_by' => 'RAND()'
        ));
        require(DIR_TEMPLATE . 'flatroom' . DS . 'property_slider.php');
        unset($object_featured, $slider_title);

        $slider_title = __('New');
        $object_featured = \Object::getByCategoryAndModule(0, 'real_estate', array(
                    'order_by' => 'id DESC'
        ));
        require(DIR_TEMPLATE . 'flatroom' . DS . 'property_slider.php');
        unset($object_featured, $slider_title);

        $slider_title = __('Random');
        $object_featured = \Object::getByCategoryAndModule(0, 'real_estate', array(
                    'order_by' => 'RAND()'
        ));
        require(DIR_TEMPLATE . 'flatroom' . DS . 'property_slider.php');
        unset($object_featured, $slider_title);
        ?>
    </div><!-- #primary -->
</div>