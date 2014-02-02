<div class="clearfix"></div>
<header class="page-header bg-color">
    <div class="container">
        <div class="row">
            <div class="span9">
                <h1 class="entry-title"><?php echo __('Real estate'); ?></h1>
            </div>

            <div class="span3">
                <div id="breadcrumb">
                    <div class="title"><?php echo __('You are here'); ?>:</div>
                    <a href="index-2.html"><?php echo __('Home'); ?></a>
                    <span class="separator">/</span>
                    <?php echo __('Real estate'); ?>
                </div>
            </div>
        </div>
        <div class="setsquare">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40.566px" height="10px" viewBox="0 0 40.566 10" enable-background="new 0 0 40.566 10" xml:space="preserve">
                <path fill-rule="evenodd" clip-rule="evenodd" fill="#111111" d="M28.284,2c-3.806,2.188-8,8-8,8s-4.214-5.957-8.062-8.062C8.742,0.035,0,0,0,0h40.566C40.566,0,31.703,0.035,28.284,2z"/>
            </svg>
        </div>
        <div class="setsquare two">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40.566px" height="10px" viewBox="0 0 40.566 10" enable-background="new 0 0 40.566 10" xml:space="preserve">
                <path fill-rule="evenodd" clip-rule="evenodd" fill="#111111" d="M28.284,2c-3.806,2.188-8,8-8,8s-4.214-5.957-8.062-8.062C8.742,0.035,0,0,0,0h40.566C40.566,0,31.703,0.035,28.284,2z"/>
            </svg>
        </div>
    </div>
</header><!-- .page-header -->

<div id="primary" class="container right-sidebar">
    <div class="row">
        <div id="content" class="span9">
            <div class="properies-list-container">
                <!--
            <div class="toolbar properties-toolbar clearfix">
                <div class="btn-group pull-right">
                    <a class="btn btn-select dropdown-toggle" data-toggle="dropdown" href="#">
                        <span>Sort by:</span> Price<span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">Price</a>
                        </li>
                        <li>
                            <a href="#">Type</a>
                        </li>
                        <li>
                            <a href="#">Area</a>
                        </li>
                    </ul>
                </div>

                <div class="btn-group pull-right">
                    <a class="btn btn-select dropdown-toggle" data-toggle="dropdown" href="#">
                        <span>Order:</span> Asc<span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">Asc</a>
                        </li>

                        <li>
                            <a href="#">Desc</a>
                        </li>
                    </ul>
                </div>

                <div class="clearfix"></div>
            </div>
                //-->

                <div class="properties-list">
                    <?php foreach ($objects as $object): ?>
                        <?php require DIR_TEMPLATE . 'flatroom/_property_list.php'; ?>
                    <?php endforeach; ?>
                </div><!-- .properties-list -->

                <div class="pagination">
                    <ul>
                        <li class="disabled"><span>&#9001;</span></li>
                        <li class="active"><span class='page-numbers current'>1</span></li>
                        <li><a class='page-numbers' href='#'>2</a></li>
                        <li><a class='page-numbers' href='#'>3</a></li>
                        <li><a class='page-numbers' href='#'>4</a></li>
                        <li><a class='page-numbers' href='#'>5</a></li>
                        <li><a class="next page-numbers" href="#">&#9002;</a></li>
                    </ul>
                </div>
            </div><!-- .properies-list-container -->
        </div><!-- #content -->

        <?php require_once(DIR_TEMPLATE . 'flatroom/_properties_sidebar.php'); ?>
    </div>
</div><!-- #primary -->