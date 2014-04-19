DB undsen san. Model,Mapper bolon busad hereglegdeh class file uud....

//http://www.sitepoint.com/implementing-a-unit-of-work/
//Unit Of Work Design Pattern

$adapter = new D\Adapter\PdoAdapter("mysql:dbname=test", "user", "pass");
$unitOfWork = new D\Model\Repository\UnitOfWork(new D\Mapper\UserMapper($adapter, new D\Model\Collection\EntityCollection), new D\Storage\ObjectStorage);

$user1 = new D\Model\User(array("name" => "Batmunkh M",
    "email" => "admin@example.com"));
$unitOfWork->registerNew($user1);

$user2 = $unitOfWork->fetchById(10);
$user2->name = "Suren";
$unitOfWork->registerDirty($user2);

$user3 = $unitOfWork->fetchById(11);
$unitOfWork->registerDeleted($user3);

$user4 = $unitOfWork->fetchById(13);
$user4->name = "Bold";

$unitOfWork->commit();
