<?php session_start() ?>
<?php require_once ('connection.php')?>
<?php require_once ('function.php')?>
<?php require_once('head.php') ?>


<!-- Header
================================================== -->
<?php
if (checkLogged() == 1) {
    require_once('header_2.php');
} else {
    require_once('header.php');
}
?>
<div class="clearfix"></div>


<!-- Menu left
================================================= -->

<div class="d-flex">
    <?php require_once('menu_left_candidate.php') ?>

    <div class="contain" style="margin: auto; width: calc(100% - 260px);background-color: #f7f7f7">

        <form class="form_add_company" method="post" action="change_password_process.php" style="width: 70%">

            <div class="form w-100" style="background-color: #f5f5f5bf;padding: 0px 54px;">
                <h3>Change Password</h3>
                <hr style="width: 109%;  transform: translateX(-53px);">
            </div>
            <div class="contain_form">
                <div class="form">
                    <h5>Current Password</h5>
                    <input class="search-field" type="password" name="cur_password" placeholder="" value="" required/>
                </div>
                <div class="form">
                    <h5>New Password</h5>
                    <input class="search-field" type="password" name="new_password" placeholder="" value="" required/>
                </div>
                <div class="form">
                    <h5>Confirm Password</h5>
                    <input class="search-field" type="password" name="confirm_password" placeholder="" value="" required/>
                </div>
                <div class="form">
                    <input type="submit" class="text-end" value="Save Changes">
                </div>
            </div>
        </form>
    </div>
</div>
<div class="margin-top-60"></div>

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

</div>
<!-- Wrapper / End -->

<!-- Scripts
================================================== -->
<?php require_once('script_tag.php') ?>

</body>
</html>
