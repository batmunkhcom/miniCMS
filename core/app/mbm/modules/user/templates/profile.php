<!-- page start-->
<div class="row">
    <aside class="profile-nav col-lg-3">
        <section class="panel">
            <div class="user-heading round">
                <a href="#" onclick="return false;">
                    <img src="<?php echo get_user_avatar($user_id); ?>" alt="">
                </a>
                <h1><?php echo $user[$user_id]['firstname']; ?></h1>
                <p><?php echo $user[$user_id]['email']; ?></p>
            </div>

            <ul class="nav nav-pills nav-stacked">
                <li class="active">
                    <a href="#" onclick="return false;">
                        <i class="fa fa-user"></i>
                        Profile
                    </a>
                </li>
                <li>
                    <a href="#" onclick="return false;">
                        <i class="fa fa-calendar"></i>
                        Recent Activity
                        <span class="label label-danger pull-right r-activity">9</span>
                    </a>
                </li>
                <li><a href="#" onclick="return false;">
                        <i class="fa fa-edit"></i>
                        Edit profile
                    </a>
                </li>
                <li><a href="#" onclick="return false;">
                        <i class="fa fa-edit"></i>
                        Update info
                    </a>
                </li>
                <li><a href="#" onclick="return false;">
                        <i class="fa fa-edit"></i>
                        Change email
                    </a>
                </li>
                <li><a href="#" onclick="return false;">
                        <i class="fa fa-edit"></i>
                        Change password
                    </a>
                </li>
            </ul>

        </section>
    </aside>
    <aside class="profile-info col-lg-9">
        <section class="panel">
            <form>
                <textarea placeholder="Whats in your mind today?" rows="2" class="form-control input-lg p-text-area"></textarea>
            </form>
            <footer class="panel-footer">
                <button class="btn btn-danger pull-right">Update status</button>
                <ul class="nav nav-pills">
                    <li>
                        <a href="/assets/flatlab/admin/#"><i class="fa fa-map-marker"></i></a>
                    </li>
                    <li>
                        <a href="/assets/flatlab/admin/#"><i class="fa fa-camera"></i></a>
                    </li>
                    <li>
                        <a href="/assets/flatlab/admin/#"><i class=" fa fa-film"></i></a>
                    </li>
                    <li>
                        <a href="/assets/flatlab/admin/#"><i class="fa fa-microphone"></i></a>
                    </li>
                </ul>
            </footer>
        </section>
        <section class="panel">
            <div class="bio-graph-heading">
                User status message here
            </div>
            <div class="panel-body bio-graph-info">
                <h1>Bio Graph</h1>
                <div class="row">
                    <div class="bio-row">
                        <p><span>First Name </span>: <?php echo $user[$user_id]['firstname']; ?></p>
                    </div>
                    <div class="bio-row">
                        <p><span>Last Name </span>: <?php echo $user[$user_id]['lastname']; ?></p>
                    </div>
                    <div class="bio-row">
                        <p><span>Country </span>: <?php echo $user[$user_id]['country']; ?></p>
                    </div>
                    <div class="bio-row">
                        <p><span>Birthday</span>: <?php echo $user[$user_id]['birthday']; ?></p>
                    </div>
                    <div class="bio-row">
                        <p><span>Email </span>: <?php echo $user[$user_id]['email']; ?></p>
                    </div>
                    <div class="bio-row">
                        <p><span>Mobile </span>: <?php echo $user[$user_id]['phone']; ?></p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="bio-chart">
                                <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="35" data-fgColor="#e06b7d" data-bgColor="#e8e8e8">
                            </div>
                            <div class="bio-desk">
                                <h4 class="red">Envato Website</h4>
                                <p>Started : 15 July</p>
                                <p>Deadline : 15 August</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel">
                        <div class="panel-body">

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel">
                        <div class="panel-body">

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel">
                        <div class="panel-body">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </aside>
</div>
<!-- page end-->