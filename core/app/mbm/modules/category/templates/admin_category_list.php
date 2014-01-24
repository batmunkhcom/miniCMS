<?php if (has_flash()): ?>
    <div class="col-lg-12">
        <?php echo render_flash(); ?>
    </div>
<?php endif; ?>
<div class="row">
    <div class="col-lg-6">
        <header class="panel-heading">
            <?php echo __("Categories"); ?>
        </header>
    </div>
    <div class="col-lg-6 text-right">
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
                    <table  class="display table table-bordered table-striped" id="categoryList">
                        <thead>
                            <tr>
                                <th width="120"></th>
                                <th width="50"><?php echo __('ID'); ?></th>
                                <th><?php echo __('Category name'); ?></th>
                                <th width="60"><?php echo __('Status'); ?></th>
                                <th width="60"><?php echo __('Hits'); ?></th>
                                <th width="30" class="fa-ba"><?php echo __('18+'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($categories as $category): ?>
                                <tr >
                                    <td class="center">
                                        <div class="btn-group">
                                            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">
                                                <?php echo __('Commands'); ?>
                                                <span class="caret"></span>
                                            </button>
                                            <ul role="menu" class="dropdown-menu">
                                                <li><a href="<?php echo get_url('admin_category_edit', array('id' => $category->id)) ?>"><?php echo __('Edit category'); ?></a></li>
                                                <li><a href="#"><?php echo __('Delete category'); ?></a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
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
                                    <td class="center"><span class="badge bg-warning"><?php echo $category->hits; ?></span></td>
                                    <td class="center"><?php echo icon_1_0($category->is_adult); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th ></th>
                                <th>#</th>
                                <th><?php echo __('Category name'); ?></th>
                                <th><?php echo __('Status'); ?></th>
                                <th><?php echo __('Hits'); ?></th>
                                <th><?php echo __('18+'); ?></th>
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