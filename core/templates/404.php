<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.75, user-scalable=yes">
        <meta name="description" content="">
        <meta name="author" content="Batmunkh">
        <meta name="keyword" content="miniCMS v3 Content Management System">
        <link rel="shortcut icon" href="/assets/favicon.png">

        <title>404 :: <?php echo __('Page Not Found'); ?> :: miniCMS v3</title>

        <!-- Bootstrap core CSS -->
        <link href="/assets/flatlab/admin/css/bootstrap.min.css" rel="stylesheet">
        <link href="/assets/flatlab/admin/css/bootstrap-reset.css" rel="stylesheet">
        <!--external css-->
        <link href="/assets/flatlab/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom styles for this template -->
        <link href="/assets/flatlab/admin/css/style.css" rel="stylesheet">
        <link href="/assets/flatlab/admin/css/style-responsive.css" rel="stylesheet" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
        <script src="/assets/flatlab/admin/js/html5shiv.js"></script>
        <script src="/assets/flatlab/admin/js/respond.min.js"></script>
        <![endif]-->
    </head>




    <body class="body-404">

        <div class="container">

            <section class="error-wrapper">
                <i class="icon-404"></i>
                <h1>404</h1>
                <h2>page not found</h2>
                <p class="page-404"><?php echo __('Something went wrong or that page doesn’t exist yet.'); ?>
                    <a href="<?php echo get_url('home'); ?>"><?php echo __('Return Home'); ?></a>
                    <?php echo __('or'); ?>
                    <a href="javascript:history.back()"><?php echo __('Return previous page'); ?></a>
                </p>
            </section>

        </div>


    </body>
</html>
