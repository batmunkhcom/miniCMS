<!DOCTYPE html>
<html lang="en">
    <head>
        <title>miniCMS v3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        js_set_loadfile('/js/lib/jquery/jquery.js');
        ?>
        <?php echo js_load(); ?>
        <?php echo css_load(); ?>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        default layout...<br />
        <?php load_template($template); ?>...
        <br />
        <div id="jQueryTest">

            jQuery not loaded
        </div>
        <script type="text/javascript">
            $(function() {
                $('#jQueryTest').html('jQuery loaded');
            });
        </script>
    </body>
</html>