<div class="row">
    <div class="col-lg-6">
        <header class="panel-heading">
            <?php echo __("Object options"); ?>
        </header>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="panel-body">
                <div class="adv-table editable-table ">
                    <div class="clearfix">
                        <div class="btn-group">
                            <button id="editable-sample_new" class="btn green">
                                Add New <i class="fa fa-plus"></i>
                            </button>
                        </div>
                        <div class="btn-group pull-right">
                            <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="#">Print</a></li>
                                <li><a href="#">Save as PDF</a></li>
                                <li><a href="#">Export to Excel</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="space15"></div>
                    <table class="table table-striped table-hover table-bordered" id="editable-sample">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Full Name</th>
                                <th>Points</th>
                                <th>Notes</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td>Jondi Rose</td>
                                <td>Alfred Jondi Rose</td>
                                <td>1234</td>
                                <td class="center">super user</td>
                                <td><a class="edit" href="javascript:;">Edit</a></td>
                                <td><a class="delete" href="javascript:;">Delete</a></td>
                            </tr>
                            <tr class="">
                                <td>Dulal</td>
                                <td>Jonathan Smith</td>
                                <td>434</td>
                                <td class="center">new user</td>
                                <td><a class="edit" href="javascript:;">Edit</a></td>
                                <td><a class="delete" href="javascript:;">Delete</a></td>
                            </tr>
                            <tr class="">
                                <td>Sumon</td>
                                <td> Sumon Ahmed</td>
                                <td>232</td>
                                <td class="center">super user</td>
                                <td><a class="edit" href="javascript:;">Edit</a></td>
                                <td><a class="delete" href="javascript:;">Delete</a></td>
                            </tr>
                            <tr class="">
                                <td>vectorlab</td>
                                <td>dk mosa</td>
                                <td>132</td>
                                <td class="center">elite user</td>
                                <td><a class="edit" href="javascript:;">Edit</a></td>
                                <td><a class="delete" href="javascript:;">Delete</a></td>
                            </tr>
                            <tr class="">
                                <td>Admin</td>
                                <td> Flat Lab</td>
                                <td>462</td>
                                <td class="center">new user</td>
                                <td><a class="edit" href="javascript:;">Edit</a></td>
                                <td><a class="delete" href="javascript:;">Delete</a></td>
                            </tr>
                            <tr class="">
                                <td>Rafiqul</td>
                                <td>Rafiqul dulal</td>
                                <td>62</td>
                                <td class="center">new user</td>
                                <td><a class="edit" href="javascript:;">Edit</a></td>
                                <td><a class="delete" href="javascript:;">Delete</a></td>
                            </tr>
                            <tr class="">
                                <td>Jhon Doe</td>
                                <td>Jhon Doe </td>
                                <td>1234</td>
                                <td class="center">super user</td>
                                <td><a class="edit" href="javascript:;">Edit</a></td>
                                <td><a class="delete" href="javascript:;">Delete</a></td>
                            </tr>
                            <tr class="">
                                <td>Dulal</td>
                                <td>Jonathan Smith</td>
                                <td>434</td>
                                <td class="center">new user</td>
                                <td><a class="edit" href="javascript:;">Edit</a></td>
                                <td><a class="delete" href="javascript:;">Delete</a></td>
                            </tr>
                            <tr class="">
                                <td>Sumon</td>
                                <td> Sumon Ahmed</td>
                                <td>232</td>
                                <td class="center">super user</td>
                                <td><a class="edit" href="javascript:;">Edit</a></td>
                                <td><a class="delete" href="javascript:;">Delete</a></td>
                            </tr>
                            <tr class="">
                                <td>vectorlab</td>
                                <td>dk mosa</td>
                                <td>132</td>
                                <td class="center">elite user</td>
                                <td><a class="edit" href="javascript:;">Edit</a></td>
                                <td><a class="delete" href="javascript:;">Delete</a></td>
                            </tr>
                            <tr class="">
                                <td>Admin</td>
                                <td> Flat Lab</td>
                                <td>462</td>
                                <td class="center">new user</td>
                                <td><a class="edit" href="javascript:;">Edit</a></td>
                                <td><a class="delete" href="javascript:;">Delete</a></td>
                            </tr>
                            <tr class="">
                                <td>Rafiqul</td>
                                <td>Rafiqul dulal</td>
                                <td>62</td>
                                <td class="center">new user</td>
                                <td><a class="edit" href="javascript:;">Edit</a></td>
                                <td><a class="delete" href="javascript:;">Delete</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>

<script>
    $(document).ready(function() {
        EditableTable.init();
    });

</script>