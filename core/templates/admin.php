<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Administration :: miniCMS v3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        /*         * *********** setting JS files ************ */
        //jquery duudah
        js_set_loadfile('/js/lib/jquery/jquery.js');
        //common js duudah.
        js_set_loadfile('/js/common.js');

        //bootstrap v3 duudah
        js_set_loadfile('/assets/bootstrap/3/js/bootstrap.min.js');

        /*         * *********** setting CSS files ************ */
        //load bootstrap v3
        css_set_loadfile('/assets/bootstrap/3/css/bootstrap.min.css');


        /*         * *********** css,js file uudiig achaalah ************ */
        echo js_load();
        echo css_load();
        ?>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">

        </div>

        admin layout...<br />
        <?php load_template($template); ?>...
        <br />
        <div id="jQueryTest">

            jQuery not loaded
        </div>
        <hr />
        <hr />
        <article>

            <header>
                <h2>Article title</h2>
                <p>Posted on <time datetime="2009-09-04T16:31:24+02:00">September 4th 2009</time> by <a href="#">Writer</a> - <a href="#comments">6 comments</a></p>
            </header>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
        </article>
        <hr />



        <aside>
            <h2>About section</h2>
            <p>Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
        </aside>

        <footer>
            <p>Copyright 2009 Your name</p>
        </footer>



        <hr />
        <script type="text/javascript">
            jQuery(function() {
                jQuery('#jQueryTest').html('jQuery loaded');
            });
        </script>
    </body>
</html>