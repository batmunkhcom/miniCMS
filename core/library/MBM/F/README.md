$form = new \F\Form\CategoryForm('category', array(
    'action' => get_url('admin_category_save'),
    'class' => 'form-horizontal',
    'role' => 'form',
    'method' => 'post'
        ));
$template->set('form', $form->form);