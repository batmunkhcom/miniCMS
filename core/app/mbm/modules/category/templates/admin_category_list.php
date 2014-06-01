<?php if (has_flash()): ?>
    <?php $flash_type = get_flash_type(); ?>
    <div class="col-lg-12">
        <?php echo render_flash(); ?>
    </div>
<?php endif; ?>
<div class="row">
    <div class="col-lg-6 pull-left">
        <header class="panel-heading">
            <?php echo __("Categories"); ?>
        </header>
    </div>
    <div class="col-lg-6 text-right pull-right">
        <button type="button" class="btn btn-round btn-success" onclick="window.location = '<?php echo get_url('admin_category_new'); ?>'">
            <i class="fa fa-plus-circle"></i> <?php echo __('Add category'); ?>
        </button>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-body">
                <div class="adv-table">
                    <table  class="display table table-bordered table-striped dataTable" id="categoryList">
                        <thead>
                            <tr>
                                <th></th>
                                <th ><?php echo __('ID'); ?></th>
                                <th><?php echo __('Category name'); ?></th>
                                <th width="60"><?php echo __('Status'); ?></th>
                                <th class="hidden-xs"><?php echo __('Hits'); ?></th>
                                <th  class="hidden-xs"><?php echo __('18+'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($categories as $category): ?>
                                <tr >
                                    <td class="center">
                                        <div class="btn-group">
                                            <a class="btn btn-default" ><i class="fa fa-eye"></i></a>
                                            <a class="btn btn-warning" href="<?php echo get_url('admin_category_edit', array('id' => $category->id)) ?>"><i class="fa fa-edit"></i></a>
                                            <a class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                        </div>
                                    </td>
                                    <td class="text-center"><?php echo $category->id; ?>.</td>
                                    <td>
                                        <?php if (\Category::hasSubCategory($category->id) != 0) { ?>
                                            <a href="<?php echo get_url('admin_category_list') ?>/<?php echo $category->id; ?>">
                                                <?php echo $category->name; ?>
                                            </a>
                                            <i class="fa fa-list" title="<?php echo __("Sub categories") ?>"></i>
                                            <?php
                                        } else {
                                            echo $category->name;
                                        }
                                        ?>
                                    </td>
                                    <td class="center">
                                        <?php echo printSt($category->st); ?>
                                    </td>
                                    <td class="center hidden-xs"><span class="badge bg-warning"><?php echo $category->hits; ?></span></td>
                                    <td class="center hidden-xs"><?php echo icon_1_0($category->is_adult); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th ></th>
                                <th>#</th>
                                <th><?php echo __('Category name'); ?></th>
                                <th><?php echo __('Status'); ?></th>
                                <th class=" hidden-xs"><?php echo __('Hits'); ?></th>
                                <th class=" hidden-xs"><?php echo __('18+'); ?></th>
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
        $('#categoryList').dataTable({
            'bSort': false
        });
    });
</script>