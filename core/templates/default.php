<!DOCTYPE html>
<html lang="en">
    <head>
        <title>miniCMS v3</title>
        <?php echo load_js(); ?>
        <?php echo load_css(); ?>
    </head>
    <body>
        default layout...<br />
        <?php load_template($template); ?>...
        <br />
        <div id="jQueryTest">

            jQuery not loaded
        </div>
        <script type="text/javascript">
        </script>
    </body>
</html>