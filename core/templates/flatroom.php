
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US">
    <!--<![endif]-->

    <head>
        <meta charset="UTF-8">
        <meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="shortcut icon" href="/assets/flatroom/images/favicon.ico">

        <!--[if lt IE 9]>
                <script src="/assets/flatroom/1/js/html5.js"></script>
        <![endif]-->

        <link rel='stylesheet' href='http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css' type='text/css' media='all' />
        <link rel='stylesheet' href='/assets/flatroom/1/css/font-awesome.min.css' type='text/css' media='all' />
        <link rel='stylesheet' href='/assets/flatroom/1/css/buttons/animation.css' type='text/css' media='all' />
        <link rel='stylesheet' href='/assets/flatroom/1/css/buttons/social-icons.css' type='text/css' media='all' />
        <link rel='stylesheet' href='/assets/flatroom/1/bootstrap/css/bootstrap.min.css' type='text/css' media='all' />
        <link rel='stylesheet' href='/assets/flatroom/1/bootstrap/css/bootstrap-responsive.min.css' type='text/css' media='all' />
        <link rel='stylesheet' href='/assets/flatroom/1/css/jquery.jqplot.css' type='text/css' media='all' />
        <link rel='stylesheet' href='/assets/flatroom/1/css/style.css' type='text/css' media='all' />
        <link rel='stylesheet' href='/assets/flatroom/1/css/responsive.css' type='text/css' media='all' />

        <!--[if lt IE 7]>
                <link rel='stylesheet' href="/assets/flatroom/1/css/buttons/social-icons-ie7.css' type='text/css' media='all' />
        <![endif]-->
    </head>
    <body class="home page ibr-homepage ibr-tab-slider light main-menu-visible">
        <div id="page">
            <?php require_once(DIR_TEMPLATE . 'flatroom' . DS . 'header.php'); ?>

            <div id="main">
                <div class="bg-images"></div>
                <?php load_template($template); ?>
                <?php // require_once(DIR_TEMPLATE . 'flatroom' . DS . '_property.php'); ?>
                <?php // require_once(DIR_TEMPLATE . 'flatroom' . DS . 'properties.php'); ?>
            </div><!-- #main -->

            <?php require_once(DIR_TEMPLATE . 'flatroom' . DS . 'footer.php'); ?>
        </div><!-- #page -->

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src='/assets/flatroom/1/js/jquery-ui-1.10.3.custom.min.js'></script>
        <script src='/assets/flatroom/1/bootstrap/js/bootstrap.min.js'></script>
        <script src='/assets/flatroom/1/js/jquery.carouFredSel-6.2.1-packed.js'></script>
        <script src='/assets/flatroom/1/js/jquery.touchSwipe.min.js'></script>
        <script src='/assets/flatroom/1/js/jquery.selectbox-0.2.min.js'></script>
        <script src='/assets/flatroom/1/js/jquery.fancybox.pack.js'></script>
        <script src='/assets/flatroom/1/js/jqplot/jquery.jqplot.min.js'></script>
        <script src='/assets/flatroom/1/js/jqplot/shCore.min.js'></script>
        <script src='/assets/flatroom/1/js/jqplot/shBrushJScript.min.js'></script>
        <script src='/assets/flatroom/1/js/jqplot/shBrushXml.min.js'></script>
        <script src='/assets/flatroom/1/js/jqplot/jqplot.cursor.min.js'></script>
        <script src='/assets/flatroom/1/js/jqplot/jqplot.dateAxisRenderer.min.js'></script>
        <script src='/assets/flatroom/1/js/jqplot/jqplot.highlighter.min.js'></script>
        <script src='/assets/flatroom/1/js/jqplot/jqplot.canvasTextRenderer.min.js'></script>
        <script src='/assets/flatroom/1/js/jqplot/jqplot.canvasAxisLabelRenderer.min.js'></script>
        <script src='/assets/flatroom/1/js/main.js'></script>
    </body>
</html>