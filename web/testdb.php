<?php define('APP_ENABLED', 'mbm') ?>
<?php define('APPMODE', 'dev') ?>

<?php require_once ('../core/app/' . APP_ENABLED . '/config/main.php'); ?>
<?php require_once '../core/bootstrap.php'; ?>
<?php echo 'Welcome!'; ?>
<br />
<?php
echo '<h2>Data mapper, Database</h2>';
$adapter = new D\Adapter\PdoAdapter("mysql:dbname=test", "test", "test");
$db = new D\Model\Repository\UnitOfWork(new D\Mapper\UserMapper($adapter, new D\Model\Collection\EntityCollection), new D\Storage\ObjectStorage);

//nemeh
//$user1 = new D\Model\User(array("name" => "Batmunkh M",
//    "email" => "info@example.com"));
//$db->registerNew($user1);
//update
$user2 = $db->fetchById(10);
$user2->name = "Suren2";
$db->registerDirty($user2);

//ustgah
//$user3 = $unitOfWork->fetchById(6);
//$unitOfWork->registerDeleted($user3);

$user4 = $db->fetchById(14);
$user4->name = "Bold";

//deerhi uildluudiig batalguujuulj commit hiine
$db->commit();
/*
 *  */

$users = new D\Mapper\UserMapper($adapter, new D\Model\Collection\EntityCollection);
foreach ($users->fetchAll() as $user) {
    echo $user->id . '. ' . $user->name . ', ' . $user->email;
    echo '<br />';
}