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
                <?php echo __('Create object'); ?>
            </header>
            <div class="panel-body">
                <? /* Render whole form */ ?>
                <?php
                if ($flash_type != 'success') {
                    echo $form->render();
                }
                ?>

                <script type="text/javascript">

                    $(function() {
                        $('#use_photo').removeAttr('checked');
                        $('#element_photo').hide();
                        $('#categories').multiSelect({
                            selectableOptgroup: true
                        });
                        // Tags Input
                        $(".tagsinput").tagsInput();
                    });

                </script>
            </div>
        </section>
    </div>