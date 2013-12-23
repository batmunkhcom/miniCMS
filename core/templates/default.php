<!DOCTYPE html>
<html lang="en">
    <head>
        <title>miniCMS v3</title>
        <script src="<?php echo PROTOCOL . DOMAIN; ?>/js/main.js" ></script>

        <link rel="stylesheet" type="text/css" href="<?php echo PROTOCOL . DOMAIN; ?>/css/main.css"  />
        <link rel="stylesheet" type="text/css" href="<?php echo PROTOCOL . DOMAIN; ?>/css/<?php echo APP_ENABLED; ?>/css/style.css"  />
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