<?php if (has_flash()): ?>
    <?php $flash_type = get_flash_type(); ?>
    <div class="col-lg-12">
        <?php echo render_flash(); ?>
    </div>
<?php endif; ?>
<section class="panel">
    <header class="panel-heading">
        <?php echo __('All photos') . ' (' . $photos->count() . ')'; ?>
    </header>
    <div class="panel-body">
        <ul class="grid cs-style-3">
            <?php foreach ($photos as $photo) { ?>
                <li>
                    <figure>
                        <img src="<?php echo $photo->path; ?>" alt="img06">
                        <figcaption>
                            <h3><?php echo 'Photo #' . $photo->id; ?></h3>
                            <span><?php echo __('Uploaded by') . ': ' . \User::getById($photo->user_id)->username; ?></span>
                            <a class="fancybox" rel="group" href="<?php echo $photo->path; ?>"><?php echo __('View'); ?></a>
                        </figcaption>
                    </figure>
                </li>
            <?php } ?>
        </ul>
    </div>
</section>


<script type="text/javascript">
    $(function() {
        //    fancybox
        jQuery(".fancybox").fancybox();
    });

</script>