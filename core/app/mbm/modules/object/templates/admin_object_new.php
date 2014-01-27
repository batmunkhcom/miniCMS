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
                <?php echo __('Create ' . $current_module); ?>
            </header>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="<?php echo get_url('admin_photo_save') ?>" class="dropzone" id="my-awesome-dropzone">
                            <input type="hidden" name="module" value="real_estate">
                            <input type="hidden" name="photo_type" value="slider">
                        </form>
                    </div>
                </div>
                <? /* Render whole form */ ?>
                <?php
                if ($flash_type != 'success') {
                    echo $form->render();
                }
                ?>
            </div>
        </section>
    </div>

    <script type="text/javascript">

        $(function() {
            $('#use_photo').removeAttr('checked');
            $('#photo').hide();
            $('#categories').multiSelect({
                selectableOptgroup: true
            });
            // Tags Input
            $(".tagsinput").tagsInput();
        });

    </script>