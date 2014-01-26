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
                                                <li><a href="#"><?php echo __('Delete object'); ?></a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td><?php echo $object->id; ?>.</td>
                                    <td>
                                        <strong><?php echo $object->name; ?></strong>
                                        <p class="hidden-xs"><?php echo $object->content_brief; ?></p>
                                        <?php foreach (\Object::getCategories($object->id) as $category): ?>
                                            <span class="badge bg-primary hidden-xs">
                                                <button data-dismiss="alert" class="close close-sm" type="button"
                                                        onclick="removeCategory(<?php echo $category->id . ',' . $object->id ?>)">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                                <?php echo $category->name; ?>&nbsp;
                                            </span>
                                        <?php endforeach; ?>
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

<script type="text/javascript" charset="utf-8">
    jQuery(document).ready(function() {
        $('#objectList').dataTable({
            'bSort': false
        });
    });


    function removeCategory(category_id, object_id) {
        $.ajax({
            type: "POST",
            url: "<?php echo get_url('admin_object_delete_category') ?>",
            data: {
                category_id: category_id,
                object_id: object_id
            }
        })
                .done(function(msg) {
                    alert(msg);
                });
    }
</script>