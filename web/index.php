<?php define('ENABLED_APP', 'mbm') ?>
<?php define('APPMODE', 'dev') ?>

<?php require_once ('../core/app/'.ENABLED_APP.'/config/main.php'); ?>
<?php require_once '../core/bootstrap.php'; ?>
<?php echo 'Welcome!'; ?>
<br />
<?php

// Define routes


echo '<h2>All modules</h2>';
print_r(\M\Config::get('modules'));
echo '<hr />';
echo '<hr />';
echo '<h2>All enabled modules</h2>';
print_r(\M\Config::get('module_enabled'));
echo '<hr />';
echo '<hr />';
echo '<hr />';
echo '<h2>Config::get(apps)</h2>';
print_r(\M\Config::get('apps'));

echo '<h2>Config::data</h2>';
print_r($config->data);
echo '<hr />';
print_r(M\Config::$data);
echo '<hr />';
print_r(M\Config::get('db_host').'<br />');
print_r($is_enabled_module);
echo '<hr />';
echo '<h2>Current app dir</h2>';
print_r(M\Module::$current_app_dir);
echo '<hr />';
echo '<h2>_GET</h2>';
print_r($_GET);
echo '<hr />';



