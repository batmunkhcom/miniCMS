

<div class="col-lg-12">
    <?php print_r($sess); ?>
</div>
<?php if (has_flash()): ?>
    <div class="col-lg-12">
        <?php echo render_flash(); ?>
        <?php echo print_r(get_flash()); ?>
    </div>
<?php endif; ?>
<div class="row">

    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <?php echo __('Create category'); ?>
            </header>
            <div class="panel-body">
                <? /* Render whole form */ ?>
                <?php
                if (get_flash_type() != 'success') {
                    echo $form->render();
                }

                clear_flash();
                ?>
                <script>
                    $('#element_external_url').hide();
                </script>
            </div>
        </section>
    </div>