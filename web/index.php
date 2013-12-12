<?php define('APP_ENABLED', 'mbm') ?>
<?php define('APPMODE', 'dev') ?>

<?php require_once ('../core/app/'.APP_ENABLED.'/config/main.php'); ?>
<?php require_once '../core/bootstrap.php'; ?>
<?php echo 'Welcome!'; ?>
<br />
<?php

// Define routes


echo '<h2>All modules</h2>';
dump(\M\Config::get('module_all'));
echo '<hr />';
echo '<h2>All enabled modules</h2>';
dump(\M\Config::get('module_enabled'));
dump($is_enabled_module);
echo '<hr />';
echo '<h2>Config::get(apps)</h2>';
dump(\M\Config::get('apps'));

echo '<h2>Config::data</h2>';
dump(\M\Config::$data);
echo '<hr />';
dump(M\Config::get('db_host').'<br />');
echo '<hr />';
echo '<h2>Current app dir</h2>';
dump(M\Module::$current_app_dir);
echo '<hr />';
echo '<h2>_GET</h2>';
dump($_GET);
echo '<hr />';



