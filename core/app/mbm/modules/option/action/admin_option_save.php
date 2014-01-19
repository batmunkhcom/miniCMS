<?php

$form = new F\Form\OptionForm('option');

if ($form->isValid('option')) {
    print_r($_POST);
    $option_db = new \D\Mapper\OptionMapper($db, new \D\Model\Collection\EntityCollection);

    $option = new D\Model\Option(
            array(
        'module' => post('module'),
        'user_id' => get_logged_user_id(),
        'st' => post('st'),
        'group_name' => post('type'),
        'title' => post('name'),
        'descr' => post('comment'),
        'date_created' => convert_date(date("Y-M-D H:i:s")),
        'form_tag' => post('form_tag')
            )
    );

    $option_db->save($option);

    set_flash(__('Option created'), 'success');
    $session->clearKey('option');
    header("Location: " . get_url('admin_option_list'));
} else {
    $sess_data = $session->get('option');
    $error_txt = '<h2>' . __('Error') . '!!!</h2>';
    foreach ($sess_data['errors'] as $k => $v) {
        $error_txt .= $v . '<br>';
    }
    set_flash($error_txt, 'error');
}
header("Location: " . get_url('admin_option_list'));
