<div id="primary" class="container right-sidebar">
    <div class="row">
        <?php if (has_flash()): ?>
            <div class="col-lg-6">
                <?php echo render_flash(); ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="row">
        <form action="<?php echo get_url('user_login'); ?>" method="post" onsubmit="logMe(this);
                return false;">
            <div class="col-md-3">
                <input type="text" name="username" placeholder="<?php echo __('Username'); ?>">
            </div>
            <div class="col-md-3">
                <input type="password" name="password" placeholder="<?php echo __('Password'); ?>">
            </div>
            <div class="col-md-3">
                <button type="submit">
                    login
                </button>
            </div>
        </form>
    </div>
</div>
<script src="http://crypto-js.googlecode.com/svn/tags/3.0.2/build/rollups/md5.js"></script>

<script type="text/javascript">
            function logMe(form) {
                var uname = form.username.value;
                form.password.value = CryptoJS.MD5(form.password.value);
                form.action = '<?php echo get_url('user_login'); ?>';
                form.method = 'POST';
//                alert(uname + ' ' + form.password.value);
                form.submit();
                return false;
            }
</script>