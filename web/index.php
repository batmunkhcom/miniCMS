<?php define('APP_ENABLED', 'mbm') ?>
<?php define('APPMODE', 'dev') ?>

<?php require_once ('../core/app/'.APP_ENABLED.'/config/main.php'); ?>
<?php require_once '../core/bootstrap.php'; ?>
<h1><?php echo 'Welcome!'; ?></h1>
<br />
<?php
//dump(\M\Config::$data);


//$template = new M\Template(M\Config::get('tpl_file'));
echo $template->render();
