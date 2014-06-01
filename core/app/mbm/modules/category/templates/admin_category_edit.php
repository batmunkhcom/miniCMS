<?php  
//var_dump($category->name);
//var_dump($category->parent_id);
//var_dump($category);
?>


<?php if (has_flash()): ?>
    <?php $flash_type = get_flash_type(); ?>
    <div class="col-lg-12">
        <?php echo render_flash(); ?>
    </div>
<?php endif; ?>
<div class="row">

    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <?php echo __('Edit category'); ?>
            </header>
            <div class="panel-body">
                <? /* Render whole form */ ?>
                <?php
                if ($flash_type != 'success') {
                    echo $form->render();
                }
                ?>
                <script>
                    $('#element_external_url').hide();
                </script>
            </div>
        </section>
    </div>