$session = new M\Registry\DataHandler(new M\Registry\ArrayRegistry);

// set some data into the data handler
$session->set('fname', 'Alex1')
            ->set('lname', 'Gervasio1')
            ->set('email', 'alex@domain.com1');

print_r($_SESSION);
// get some data from the data handler
echo ' First Name: ' . $session->get('fname') . 
     ' Last Name: ' . $session->get('lname') . 
     ' Email: ' . $session->get('email');