<?php
echo render_flash();
?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <?php echo __("Contents"); ?>
            </header>
            <div class="panel-body">
                <div class="adv-table">
                    <table  class="display table table-bordered table-striped" id="contentList">
                        <thead>
                            <tr>
                                <th><?php echo __('ID'); ?></th>
                                <th><?php echo __('Code'); ?></th>
                                <th><?php echo __('Title'); ?></th>
                                <th><?php echo __('Content type'); ?></th>
                                <th><?php echo __('User id'); ?></th>
                                <th><?php echo __('Status'); ?></th>
                                <th ><?php echo __('Hits'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($contents as $content): ?> 
                                <tr >
                                    <td><?php echo $content->content_id; ?>.</td>
                                    <td><?php echo $content->code; ?></td>
                                    <td><?php echo $content->title; ?></td>
                                    <td class="center"><?php echo $content->content_type; ?></td>
                                    <td class="center"><?php echo $content->user_id; ?></td>
                                    <td class="center">
                                        <?php
                                        $st_class = 'label ';
                                        switch ($content->st) {
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
                                            <?php echo __($content->st); ?>
                                        </span>
                                    </td>
                                    <td class="center"><?php echo $content->hits; ?></td>
                                    
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th><?php echo __('Code'); ?></th>
                                <th><?php echo __('Title'); ?></th>
                                <th><?php echo __('Content type'); ?></th>
                                <th><?php echo __('User id'); ?></th>
                                <th><?php echo __('Status'); ?></th>
                                <th ><?php echo __('Hits'); ?></th>
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