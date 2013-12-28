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
            <li><a  href="<?php echo get_url('admin_category_list') ?>"><?php echo __('Categories'); ?></a></li>
            <li><a  href="#"><?php echo __('Content'); ?></a></li>
            <li><a  href="#"><?php echo __('Comments'); ?></a></li>
            <li><a  href="#"><?php echo __('Pano'); ?></a></li>
            <li><a  href="#"><?php echo __('Survey'); ?></a></li>
            <li><a  href="#"><?php echo __('Notification'); ?></a></li>
            <li><a  href="#"><?php echo __('Log'); ?></a></li>
        </ul>
    </li>

    <li class="sub-menu">
        <a href="javascript:;">
            <i class="fa fa-book"></i>
            <span><?php echo __('Members'); ?></span>
        </a>
        <ul class="sub">
            <li><a  href="#"><?php echo __('List'); ?></a></li>
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
            <li><a  href="calendar.html">Calendar</a></li>
            <li><a  href="gallery.html">Gallery</a></li>
            <li><a  href="todo_list.html">Todo List</a></li>
            <li><a  href="draggable_portlet.html">Draggable Portlet</a></li>
        </ul>
    </li>
    <li class="sub-menu">
        <a href="javascript:;" >
            <i class="fa fa-tasks"></i>
            <span><?php echo __('System'); ?></span>
        </a>
        <ul class="sub">
            <li><a  href="#"><?php echo __('Settings'); ?></a></li>
            <li><a  href="#"><?php echo __('Contact info'); ?></a></li>
        </ul>
    </li>
    <li class="sub-menu">
        <a href="javascript:;">
            <i class="fa fa-th"></i>
            <span>Statistic</span>
        </a>
        <ul class="sub">
            <li><a  href="basic_table.html">Basic Table</a></li>
            <li><a  href="responsive_table.html">Responsive Table</a></li>
            <li><a  href="dynamic_table.html">Dynamic Table</a></li>
            <li><a  href="advanced_table.html">Advanced Table</a></li>
            <li><a  href="editable_table.html">Editable Table</a></li>
        </ul>
    </li>
    <li>
        <a  href="inbox.html">
            <i class="fa fa-envelope"></i>
            <span>Mail </span>
            <span class="label label-danger pull-right mail-info">2</span>
        </a>
    </li>
    <li class="sub-menu">
        <a href="javascript:;">
            <i class=" fa fa-bar-chart-o"></i>
            <span>Charts</span>
        </a>
        <ul class="sub">
            <li><a  href="morris.html">Morris</a></li>
            <li><a  href="chartjs.html">Chartjs</a></li>
            <li><a  href="flot_chart.html">Flot Charts</a></li>
            <li><a  href="xchart.html">xChart</a></li>
        </ul>
    </li>
    <li class="sub-menu">
        <a href="javascript:;">
            <i class="fa fa-shopping-cart"></i>
            <span>Shop</span>
        </a>
        <ul class="sub">
            <li><a  href="product_list.html">List View</a></li>
            <li><a  href="product_details.html">Details View</a></li>
        </ul>
    </li>
    <li>
        <a href="google_maps.html" >
            <i class="fa fa-map-marker"></i>
            <span>Google Maps </span>
        </a>
    </li>
    <li class="sub-menu">
        <a href="javascript:;" class="active" >
            <i class="fa fa-glass"></i>
            <span>Extra</span>
        </a>
        <ul class="sub">
            <li class="active"><a  href="blank.html">Blank Page</a></li>
            <li><a  href="lock_screen.html">Lock Screen</a></li>
            <li><a  href="profile.html">Profile</a></li>
            <li><a  href="invoice.html">Invoice</a></li>
            <li><a  href="search_result.html">Search Result</a></li>
            <li><a  href="pricing_table.html">Pricing Table</a></li>
            <li><a  href="faq.html">FAQ</a></li>
            <li><a  href="fb_wall.html">FB Wall</a></li>
            <li><a  href="404.html">404 Error</a></li>
            <li><a  href="500.html">500 Error</a></li>
        </ul>
    </li>
    <li>
        <a  href="login.html">
            <i class="fa fa-user"></i>
            <span>Login Page</span>
        </a>
    </li>

    <!--multi level menu start-->
    <li class="sub-menu">
        <a href="javascript:;" >
            <i class="fa fa-sitemap"></i>
            <span>Multi level Menu</span>
        </a>
        <ul class="sub">
            <li><a  href="javascript:;">Menu Item 1</a></li>
            <li class="sub-menu">
                <a  href="boxed_page.html">Menu Item 2</a>
                <ul class="sub">
                    <li><a  href="javascript:;">Menu Item 2.1</a></li>
                    <li class="sub-menu">
                        <a  href="javascript:;">Menu Item 3</a>
                        <ul class="sub">
                            <li><a  href="javascript:;">Menu Item 3.1</a></li>
                            <li><a  href="javascript:;">Menu Item 3.2</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <!--multi level menu end-->

</ul>