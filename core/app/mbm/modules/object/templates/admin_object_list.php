<?php if (has_flash()): ?>
    <div class="col-lg-12">
        <?php echo render_flash(); ?>
    </div>
<?php endif; ?>
<div class="row">
    <div class="col-lg-6 pull-left">
        <header class="panel-heading">
            <?php echo __($current_module); ?>
        </header>
    </div>
    <div class="col-lg-6 text-right pull-right">
        <button type="button" class="btn btn-round btn-success" onclick="window.location = '<?php echo get_url('admin_' . $current_module . '_new'); ?>'">
            <i class="fa fa-plus-circle"></i> <?php echo __('Add object'); ?>
        </button>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-body">
                <div class="adv-table">
                    <table  class="display table table-bordered dataTable" id="objectList">
                        <thead>
                            <tr>
                                <th></th>
                                <th class="">#</th>
                                <th class=""><?php echo __('Title'); ?></th>
                                <th class="hidden-xs"><?php echo __('Username'); ?></th>
                                <th class="hidden-xs"><?php echo __('Info'); ?></th>
                                <th ><?php echo __('Status'); ?></th>
                                <th class="hidden-xs"><?php echo __('Hits'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($objects as $object): ?>
                                <tr >
                                    <td class="center">
                                        <div class="btn-group">
                                            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">
                                                <?php echo __('Actions'); ?>
                                                <span class="caret"></span>
                                            </button>
                                            <ul role="menu" class="dropdown-menu">
                                                <li>
                                                    <a href="<?php echo get_url('admin_' . $current_module . '_edit', array('id' => $object->id)) ?>"><?php echo __('Edit object'); ?></a>
                                                </li>
                                                <li>
                                                    <a href="#deleteObject" data-toggle="modal" data-target="modal" class="btn btn-xs btn-danger">
                                                        <?php echo __('Delete object'); ?>
                                                    </a>
                                                </li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td><?php echo $object->id; ?>.</td>
                                    <td>
                                        <strong><?php echo $object->name; ?></strong>
                                        <p class="hidden-xs"><?php echo $object->content_brief; ?></p>
                                        <div class="hidden-xs">
                                            <?php foreach (\Object::getCategories($object->id) as $category): ?>
                                                <span class="badge bg-primary">
                                                    <button data-dismiss="alert" class="close close-sm" type="button"
                                                            onclick="ajax_load('<?php echo get_url('admin_object_delete_category') ?>', 'category_id=<?php echo $category->id; ?>&object_id=<?php echo $object->id; ?>', '<?php echo __('Category delete process'); ?>');">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                    <?php echo $category->name; ?>&nbsp;
                                                </span>
                                            <?php endforeach; ?>
                                        </div>
                                    </td>
                                    <td class="center hidden-xs"><?php echo \User::getById($object->user_id)->username; ?></td>
                                    <td class="center hidden-xs"><?php
                                        echo ' <span class="badge bg-success" title="' . __('Created date') . ': ' . $object->date_created . '"><i class="fa fa-clock-o"></i></span>';
                                        echo ' <span class="badge bg-warning" title="' . __('Publish date') . ': ' . $object->date_publish . '"><i class="fa fa-clock-o"></i></span>';
                                        if ($object->date_expire) {
                                            echo ' <span class="badge bg-important" title="' . __('Expire date') . ': ' . $object->date_expire . '"><i class="fa fa-clock-o"></i></span>';
                                        }
                                        ?></td>
                                    <td class="center">
                                        <?php
                                        echo printSt($object->st);
                                        ?>
                                    </td>
                                    <td class="center hidden-xs">
                                        <span class="badge bg-warning" style="font-weight: normal !important;">
                                            <?php echo number_format($object->hits); ?>
                                        </span>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th class=""><?php echo __('ID'); ?></th>
                                <th class=""><?php echo __('Title'); ?></th>
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
<div id="modal">
    ddd
</div>
<script type="text/javascript" charset="utf-8">
    jQuery(document).ready(function() {
        $('#objectList').dataTable({
            'bSort': false
        });

        $('#deleteObject').modal();

    });
</script>