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
                <?php echo __('Add photo'); ?>
            </header>
            <div class="panel-body">
                <form action="<?php echo get_url('admin_photo_save') ?>" class="dropzone" id="my-awesome-dropzone">
                    <input type="hidden" name="module" value="photo">
                </form>

            </div>
        </section>
    </div>
</div>