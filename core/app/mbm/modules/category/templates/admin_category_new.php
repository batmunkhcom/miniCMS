<?php
if (has_flash()) {
    echo render_flash();
}
?><br>
<? /* Render whole form */ ?>
<?php
if (get_flash_type() != 'success') {
    echo '<hr>';
    echo get_flash_type();
    echo '<hr>';
    echo $form->render();
}

clear_flash();
?>
