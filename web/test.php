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

echo '<h2>Data mapper, Database</h2>';
$adapter = $db;
$_db = new D\Model\Repository\UnitOfWork(new D\Mapper\UserMapper($adapter, new D\Model\Collection\EntityCollection), new D\Storage\ObjectStorage);

//nemeh
//$user1 = new D\Model\User(array("name" => "Batmunkh M",
//    "email" => "info@example.com"));
//$_db->registerNew($user1);

//update
$user2 = $_db->fetchById(10);
$user2->name = "Suren2";
$_db->registerDirty($user2);

//ustgah
//$user3 = $unitOfWork->fetchById(6);
//$unitOfWork->registerDeleted($user3);

$user4 = $_db->fetchById(14);
$user4->name = "Bold";

//deerhi uildluudiig batalguujuulj commit hiine
$_db->commit();
/*
 *  */


echo '<hr />';

echo '<h2>Config::data</h2>';
dump(\M\Config::$data);

