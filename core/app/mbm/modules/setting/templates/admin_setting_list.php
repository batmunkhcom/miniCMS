<?php if (has_flash()): ?>
    <div class="col-lg-12">
        <?php echo render_flash(); ?>
    </div>
<?php endif; ?>
<div class="row">
    <div class="col-lg-6 pull-left">
        <header class="panel-heading">
            <?php echo __("Settings"); ?>
        </header>
    </div>
    <div class="col-lg-6 text-right pull-right">
        <button type="button" class="btn btn-round btn-success" onclick="window.location = '<?php echo get_url('admin_setting_new'); ?>'">
            <i class="fa fa-plus-circle"></i> <?php echo __('Add setting'); ?>
        </button>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-body">
                <div class="adv-table">
                    <table  class="display table table-bordered table-striped" id="settingList">
                        <thead>
                            <tr>
                                <th><?php echo __('ID'); ?></th>
                                <th><?php echo __('Setting name'); ?></th>
                                <th><?php echo __('Setting value'); ?></th>
                                <th><?php echo __('Setting type'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($settings as $setting): ?>
                                <tr>
                                    <td><?php echo $setting->id; ?>.</td>
                                    <td><?php echo $setting->setting_name; ?></td>
                                    <td><?php echo $setting->setting_value; ?></td>
                                    <td><?php echo $setting->setting_type; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th><?php echo __('Setting name'); ?></th>
                                <th><?php echo __('Setting value'); ?></th>
                                <th><?php echo __('Setting type'); ?></th>
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
        $('#settingList').dataTable({
            'bSort': false
        });
    });
</script>