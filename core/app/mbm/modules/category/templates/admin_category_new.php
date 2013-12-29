admin_category_new tpl
<?php
if (has_flash()) {
    $flash = get_flash();
    echo $flash['text'] . ' - ' . $flash['type'];
}
?><br>
<? /* Render whole form */ ?>
<?php echo ($form->render()) ?>
