<?php define('APP_ENABLED', 'mbm') ?>
<?php define('APPMODE', 'dev') ?>

<?php require_once ('../core/app/'.APP_ENABLED.'/config/main.php'); ?>
<?php require_once '../core/bootstrap.php'; ?>
<?php echo 'Welcome!'; ?>
<br />
<?php

// Define routes


echo '<h2>All modules ('.ENABLE_DEBUG.')</h2>';
dump(\M\Config::get('module_all'));
echo '<hr />';


echo '<h2>All enabled modules</h2>';
dump(\M\Config::get('module_enabled'));
dump($is_enabled_module);
echo '<hr />';


echo '<h2>Config::get(apps)</h2>';
dump(\M\Config::get('apps'));
echo '<hr />';


dump(M\Config::get('db_host').'<br />');
echo '<hr />';


echo '<h2>Current app dir</h2>';
dump(M\Module::$current_app_dir);
echo '<hr />';


echo '<h2>_GET</h2>';
dump($_GET);
echo '<hr />';


echo '<h2>DB</h2>';
 $db->test();
echo '<hr />';


echo '<h2>Data handler Array</h2>';


$dataHandler = new M\Registry\DataHandler(new \M\Registry\ArrayRegistry);

// set some data into the data handler
$dataHandler->set('fname', 'Alex')
            ->set('lname', 'Gervasio')
            ->set('email', 'alex@domain.com');

// get some data from the data handler
echo ' First Name: ' . $dataHandler->get('fname') . 
     ' Last Name: ' . $dataHandler->get('lname') . 
     ' Email: ' . $dataHandler->get('email');
echo '<hr />';


echo '<h2>Data handler Session</h2>';

// set some data into the data handler
$session->set('fname', 'Alex1')
            ->set('lname', 'Gervasio1')
            ->set('email', 'alex@domain.com1');
// get some data from the data handler
echo ' First Name: ' . $session->get('fname') . 
     ' Last Name: ' . $session->get('lname') . 
     ' Email: ' . $session->get('email');
echo '<hr />';

echo '<h3>$_SESSION</h3>';
print_r($_SESSION);


echo '<hr />';

echo '<h2>Config::data</h2>';
dump(\M\Config::$data);

