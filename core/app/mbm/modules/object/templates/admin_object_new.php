<?php if (has_flash()): ?>
    <div class="col-lg-12">
        <?php echo render_flash(); ?>
    </div>
<?php endif; ?>
<div class="row">

    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <?php echo __('Create object'); ?>
            </header>
            <div class="panel-body">
                <? /* Render whole form */ ?>
                <?php
                if (get_flash_type() != 'success') {
                    echo $form->render();
                }

                clear_flash();
                ?>

                <script type="text/javascript">
                    $('#use_photo').removeAttr('checked');
                    $('#element_photo').hide();
                    $('#categories').multiSelect({
                        selectableOptgroup: true
                    });
                </script>
            </div>
        </section>
    </div>