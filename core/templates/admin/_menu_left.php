<ul class="sidebar-menu" id="nav-accordion">
    <li>
        <a href="<?php echo get_url('admin_home'); ?>">
            <i class="fa fa-dashboard"></i>
            <span><?php echo __('Dashboard') ?></span>
        </a>
    </li>

    <li class="sub-menu">
        <a href="javascript:;">
            <i class="fa fa-laptop"></i>
            <span><?php echo __('Modules'); ?></span>
        </a>
        <ul class="sub">
            <li><a  href="<?php echo get_url('admin_category_list') ?>"><?php echo __('Category module'); ?></a></li>
            <li><a  href="<?php echo get_url('admin_content_list') ?>"><?php echo __('Content module'); ?></a></li>
            <li><a  href="<?php echo get_url('admin_real_estate_list') ?>"><?php echo __('Real estate module'); ?></a></li>
            <li><a  href="<?php echo get_url('admin_gazar_list') ?>"><?php echo __('Places'); ?></a></li>
            <li><a  href="<?php echo get_url('admin_tag_list') ?>"><?php echo __('Tag module'); ?></a></li>
            <li><a  href="<?php echo get_url('admin_photo_list') ?>"><?php echo __('Photo module'); ?></a></li>
            <li><a  href="<?php echo get_url('admin_comment_list') ?>"><?php echo __('Comment module'); ?></a></li>
            <li><a  href="#"><?php echo __('Survey'); ?></a></li>
        </ul>
    </li>

    <li class="sub-menu">
        <a href="javascript:;">
            <i class="fa fa-book"></i>
            <span><?php echo __('Members'); ?></span>
        </a>
        <ul class="sub">
            <li><a  href="<?php echo get_url('admin_user_list') ?>"><?php echo __('List'); ?></a></li>
            <li><a  href="#"><?php echo __('Search'); ?></a></li>
            <li><a  href="#"><?php echo __('Roles'); ?></a></li>
        </ul>
    </li>

    <li class="sub-menu">
        <a href="javascript:;">
            <i class="fa fa-cogs"></i>
            <span><?php echo __('Components') ?></span>
        </a>
        <ul class="sub">
            <li><a  href="/admin/components"><?php echo __('List'); ?></a></li>
        </ul>
    </li>
    <li class="sub-menu">
        <a href="javascript:;" >
            <i class="fa fa-tasks"></i>
            <span><?php echo __('System'); ?></span>
        </a>
        <ul class="sub">
            <li><a  href="<?php echo get_url('admin_setting_list'); ?>"><?php echo __('Settings'); ?></a></li>
            <li><a  href="#"><?php echo __('Contact info'); ?></a></li>
        </ul>
    </li>
    <li class="sub-menu">
        <a href="javascript:;">
            <i class="fa fa-th"></i>
            <span><?php echo __('Objects'); ?></span>
        </a>
        <ul class="sub">
            <li><a  href="<?php echo get_url('admin_object_list') ?>"><?php echo __('Objects'); ?></a></li>
            <li><a  href="<?php echo get_url('admin_option_list') ?>"><?php echo __('Options'); ?></a></li>
        </ul>
    </li>
    <li class="sub-menu">
        <a href="javascript:;">
            <i class="fa fa-th"></i>
            <span><?php echo __('Other'); ?></span>
        </a>
        <ul class="sub">
            <li><a  href="#"><?php echo __('Notification'); ?></a></li>
            <li><a  href="#"><?php echo __('Log'); ?></a></li>
        </ul>
    </li>
</ul>