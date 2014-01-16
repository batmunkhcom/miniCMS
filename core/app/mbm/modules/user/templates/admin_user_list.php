<div class="row">
    <div class="col-lg-6">
        <header class="panel-heading">
            <?php echo __("Users"); ?>
        </header>
    </div>
    <div class="col-lg-6 text-right">
        <button type="button" class="btn btn-round btn-success" onclick="window.location = '<?php echo get_url('admin_user_new'); ?>'">
            <i class="fa fa-plus-circle"></i> <?php echo __('Add user'); ?>
        </button>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-body">
                <div class="adv-table">
                    <table  class="display table table-bordered table-striped" id="userList">
                        <thead>
                            <tr>
                                <th width="30"></th>
                                <th width="50"><?php echo __('ID'); ?></th>
                                <th width="80"><?php echo __('Username'); ?></th>
                                <th width="120"><?php echo __('Full name'); ?></th>
                                <th width="80"><?php echo __('Email'); ?></th>
                                <th width="80"><?php echo __('User info'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user): ?>
                                <tr >
                                    <td class="center">
                                        <div class="btn-group">
                                            <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button">
                                                <?php echo __('Actions'); ?>
                                                <span class="caret"></span>
                                            </button>
                                            <ul role="menu" class="dropdown-menu">
                                                <li>
                                                    <a href="#"><?php echo __('Edit user'); ?></a>
                                                </li>
                                                <li><a href="#"><?php echo __('Delete user'); ?></a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td><?php echo $user->id; ?>.</td>
                                    <td><?php echo $user->username; ?></td>
                                    <td><?php echo $user->firstname . ' ' . $user->lastname; ?></td>
                                    <td><?php echo $user->email; ?></td>
                                    <td></td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>#</th>
                                <th><?php echo __('username'); ?></th>
                                <th><?php echo __('Full name'); ?></th>
                                <th><?php echo __('Email'); ?></th>
                                <th><?php echo __('User info'); ?></th>
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
        $('#userList').dataTable({
            'bSort': false
        });
    });
</script>