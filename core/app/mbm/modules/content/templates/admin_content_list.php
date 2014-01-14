<div class="row">
    <div class="col-lg-6">
        <header class="panel-heading">
            <?php echo __("Contents"); ?>
        </header>
    </div>
    <div class="col-lg-6 text-right">
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
                    <table  class="display table table-bordered table-striped" id="contentList">
                        <thead>
                            <tr>
                                <th width="120"></th>
                                <th width="50"><?php echo __('ID'); ?></th>
                                <th><?php echo __('Title'); ?></th>
                                <th><?php echo __('Content type'); ?></th>
                                <th width="80"><?php echo __('User id'); ?></th>
                                <th width="60"><?php echo __('Status'); ?></th>
                                <th width="60"><?php echo __('Hits'); ?></th>
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
                                    <td><?php echo $content->title; ?></td>
                                    <td class="center"><?php echo $content->content_type; ?></td>
                                    <td class="center"><?php echo \User::getById($content->user_id)->username; ?></td>
                                    <td class="center">
                                        <?php
                                        echo printSt($content->st);
                                        ?>
                                    </td>
                                    <td class="center">
                                        <span class="badge bg-warning">
                                            <?php echo $content->hits; ?>
                                        </span>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>#</th>
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