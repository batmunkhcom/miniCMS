<?php
echo render_flash();
?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <?php echo __("Categories"); ?>
            </header>
            <div class="panel-body">
                <div class="adv-table">
                    <table  class="display table table-bordered table-striped" id="categoryList">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th><?php echo __('Category name'); ?></th>
                                <th><?php echo __('Status'); ?></th>
                                <th><?php echo __('Hits'); ?></th>
                                <th><?php echo __('18+'); ?></th>
                                <th ><?php echo __('Admin commands'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($categories as $category): ?>
                                <tr >
                                    <td><?php echo $category->id; ?>.</td>
                                    <td><?php echo $category->name; ?></td>
                                    <td class="center">
                                        <?php
                                        $st_class = 'label ';
                                        switch ($category->st) {
                                            case 'inactive':
                                                $st_class .= 'label-danger';
                                                break;
                                            case 'active':
                                                $st_class .= 'label-success';
                                                break;
                                            case 'pending':
                                                $st_class .= 'label-warning';
                                                break;
                                        }
                                        ?>
                                        <span class="<?php echo $st_class; ?>">
                                            <?php echo __($category->st); ?>
                                        </span>
                                    </td>
                                    <td class="center"><?php echo $category->hits; ?></td>
                                    <td class="center"><?php echo $category->is_adult; ?></td>
                                    <td class="center">X</td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th><?php echo __('Category name'); ?></th>
                                <th><?php echo __('Status'); ?></th>
                                <th><?php echo __('Hits'); ?></th>
                                <th><?php echo __('18+'); ?></th>
                                <th ><?php echo __('Admin commands'); ?></th>
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
        /*{
         //            "aaSorting": [[0, "asc"]]
         }*/
    });
</script>