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
            <?php
            $max_score = \Tag::getMaxScore();
            foreach ($tags as $tag):
                echo print_tag($tag->tag_value, $tag->score, $max_score).' ';
            endforeach;
            ?>
        </div>
    </div>
</div>


