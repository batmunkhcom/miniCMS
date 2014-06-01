<?php if (has_flash()): ?>
    <div class="col-lg-12">
        <?php echo render_flash(); ?>
    </div>
<?php endif; ?>
<div class="row">
    <div class="col-lg-6 pull-left">
        <header class="panel-heading">
            <?php echo __("Contents"); ?>
        </header>
    </div>
    <div class="col-lg-6 text-right pull-right">
        <button type="button" class="btn btn-round btn-success" onclick="window.location = '<?php echo get_url('admin_content_new'); ?>'">
            <i class="fa fa-plus-circle"></i> <?php echo __('Add content'); ?>
        </button>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-body">
                <div class="adv-table">
                    <table  class="display table table-bordered table-striped dataTable" id="contentList">
                        <thead>
                            <tr>
                                <th ></th>
                                <th ><?php echo __('ID'); ?></th>
                                <th><?php echo __('Title'); ?></th>
                                <th class="hidden-xs"><?php echo __('Username'); ?></th>
                                <th class="hidden-xs"><?php echo __('Info'); ?></th>
                                <th ><?php echo __('Status'); ?></th>
                                <th class="hidden-xs"><?php echo __('Hits'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($contents as $content): ?>
                                <tr >
                                    <td class="center">
                                        <div class="btn-group">
                                            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">
                                                <?php echo __('Actions'); ?>
                                                <span class="caret"></span>
                                            </button>
                                            <ul role="menu" class="dropdown-menu">
                                                <li>
                                                    <a href="<?php echo get_url('admin_content_edit', array('id' => $content->id)) ?>"><?php echo __('Edit content'); ?></a>
                                                </li>
                                                <li><a href="#"><?php echo __('Delete content'); ?></a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td><?php echo $content->id; ?>.</td>
                                    <td>
                                        <?php echo $content->title; ?>
                                        <p class="hidden-xs"><?php echo $content->content_brief; ?></p>
                                        <div class="hidden-xs">
                                            <?php foreach (\Content::getCategories($content->id) as $category): ?>
                                                <span class="badge bg-primary">
                                                    <button data-dismiss="alert" class="close close-sm" type="button"
                                                            onclick="ajax_load('<?php echo get_url('admin_content_delete_category') ?>', 'category_id=<?php echo $category->id; ?>&content_id=<?php echo $content->id; ?>', '<?php echo __('Remove content category'); ?>');">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                    <?php echo $category->name; ?>&nbsp;
                                                </span>
                                            <?php endforeach; ?>
                                        </div>
                                    </td>
                                    <td class="center hidden-xs"><?php echo \User::getById($content->user_id)->username; ?></td>
                                    <td class="center hidden-xs"><?php
                                        echo icon_content_type($content->content_type) . ' ';
                                        echo icon_date('createdDate', $content->date_created) . ' ';
                                        echo icon_date('publishDate', $content->date_publish);
                                        ?></td>
                                    <td class="center">
                                        <?php
                                        echo printSt($content->st);
                                        ?>
                                    </td>
                                    <td class="center hidden-xs">
                                        <span class="badge bg-warning" style="font-weight: normal !important;">
                                            <?php echo number_format($content->hits); ?>
                                        </span>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th ></th>
                                <th ><?php echo __('ID'); ?></th>
                                <th><?php echo __('Title'); ?></th>
                                <th class="hidden-xs"><?php echo __('Username'); ?></th>
                                <th class="hidden-xs"><?php echo __('Info'); ?></th>
                                <th ><?php echo __('Status'); ?></th>
                                <th class="hidden-xs"><?php echo __('Hits'); ?></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>

<script type="text/javascript" charset="utf-8">
    jQuery(document).ready(function() {
        $('#contentList').dataTable({
            'bSort': false
        });
    });

</script>