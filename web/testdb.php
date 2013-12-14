<?php define('APP_ENABLED', 'mbm') ?>
<?php define('APPMODE', 'dev') ?>

<?php require_once ('../core/app/' . APP_ENABLED . '/config/main.php'); ?>
<?php require_once '../core/bootstrap.php'; ?>
<?php echo 'Welcome!'; ?>
<br />
<?php
$adapter = new M\Database\Adapter\MySQLAdapter(array(
    'host'=>'localhost',
    'user'=>'batmunkh',
    'password'=>'qweqwe123',
    'database'=>'test'
));
echo $adapter->test();
echo '<hr />';
 

$user = new M\Database\Model\User();
$user->setEmail('admin@mng.cc');
$user->setName('minii ner');
$user->setRole('manager');

$um = new M\Database\Model\Mapper\UserMapper($adapter);
$um->insert($user);