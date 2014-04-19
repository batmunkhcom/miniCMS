<?php if (has_flash()): ?>
    <div class="col-lg-6">
        <?php echo render_flash(); ?>
    </div>
<?php endif; ?><!--<div id="primary" class="container right-sidebar">
<div class="row">

</div>
<div class="row">
<form action="<?php echo get_url('user_login'); ?>" method="post" onsubmit="logMe(this);
return false;">
<div class="col-md-3">
<input type="text" name="username" placeholder="<?php echo __('Username'); ?>">
</div>
<div class="col-md-3">
<input type="password" name="password" placeholder="<?php echo __('Password'); ?>">
</div>
<div class="col-md-3">
<button type="submit">
login
</button>
</div>
</form>
</div>
</div>




-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Mosaddek">
        <link rel="shortcut icon" href="img/favicon.png">

        <title><?php echo __('Login'); ?></title>

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
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="login-body">

        <div class="container">

            <form class="form-signin" action="<?php echo get_url('user_login'); ?>" method="post" onsubmit="logMe(this);
                    return false;" >
                <h2 class="form-signin-heading"><?php echo __('Login'); ?></h2>
                <div class="login-wrap">
                    <input type="text" class="form-control" name="username" placeholder="<?php echo __('Username'); ?>" autofocus>
                    <input type="password" class="form-control" name="password" placeholder="<?php echo __('Password'); ?>">
                    <label class="checkbox">
                        <input type="checkbox" value="remember-me"> <?php echo __('Remember me'); ?>
                    </label>
                    <button class="btn btn-lg btn-login btn-block" type="submit"><?php echo __('Login'); ?></button>


                </div>



            </form>

        </div>



        <!-- js placed at the end of the document so the pages load faster -->
        <script src="/assets/flatlab/admin/js/jquery.js"></script>
        <script src="/assets/flatlab/admin/js/bootstrap.min.js"></script>
        <script src="http://crypto-js.googlecode.com/svn/tags/3.0.2/build/rollups/md5.js"></script>
        <script type="text/javascript">
                function logMe(form) {
                    var uname = form.username.value;
                    form.password.value = CryptoJS.MD5(form.password.value);
                    form.action = '<?php echo get_url('user_login'); ?>';
                    form.method = 'POST';
                    //                alert(uname + ' ' + form.password.value);
                    form.submit();
                    return false;
                }
        </script>

    </body>
</html>

