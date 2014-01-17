<?php
echo render_flash();
?>

<div class="row">
    <div class="col-lg-12">
        <header class="panel-heading">
            <?php echo __("Tags"); ?>
        </header>
    </div>
</div>
<div class="row">
    <div class="panel">
        <div class="panel-body">
            <?php foreach ($tags as $tag): ?>
                <?php echo print_tag($tag->tag_value, $tag->score, 25.0); ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>


