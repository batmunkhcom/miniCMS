<div class="second-container">
    <ul id="menu-mainmenu" class="menu">
        <li class="current-menu-item">
            <a href="<?php echo get_url('homepage'); ?>"><span><?php echo __('Home') ?></span></a>
        </li>
        <li><a href="#"><span><?php echo __('Real estate'); ?></span></a>
            <ul class="sub-menu">
                <li><a href="<?php echo get_url('real_estate_list', array('category_id' => 39)) ?>"><span><?php echo __('Buildings'); ?></span></a></li>
                <li><a href="<?php echo get_url('real_estate_list', array('category_id' => 33)) ?>"><span><?php echo __('Apartments'); ?></span></a></li>
                <li><a href="<?php echo get_url('real_estate_list', array('category_id' => 36)) ?>"><span><?php echo __('Normal House'); ?></span></a></li>
                <li><a href="<?php echo get_url('real_estate_list', array('category_id' => 38)) ?>"><span><?php echo __('Private House'); ?></span></a></li>
                <li><a href="<?php echo get_url('real_estate_list', array('category_id' => 37)) ?>"><span><?php echo __('Camp'); ?></span></a></li>
            </ul>
        </li>
        <li><a href="#"><span><?php echo __('News'); ?></span></a>
        <li><a href="#"><span><?php echo __('About Us'); ?></span></a>
        </li>
        <li><a href="#"><span><?php echo __('Contact Us'); ?></span></a></li>
    </ul>
</div>