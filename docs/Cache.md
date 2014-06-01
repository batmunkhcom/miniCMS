// create an instance of the Cache class
$cache = new Cache(new ApcCache);

// save some data in the cache
$cache->set('fname', 'Julie')
      ->set('lname', 'Wilson')
      ->set('email', 'julie@domain.com');

// get the data from the cache
echo ' First Name: ' . $cache->get('fname') . 
     ' Last Name: ' . $cache->get('lname') . 
     ' Email: ' . $cache->get('email');