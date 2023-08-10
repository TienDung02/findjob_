<?php session_start(); ?>
<?php require_once('connection.php') ?>
<?php require_once('function.php') ?>
<?php require_once('head.php') ?>

<!-- Header
================================================== -->
<?php require_once('header_2.php') ?>
<div class="clearfix"></div>


<!-- Menu left
================================================= -->

<div class="d-flex">
    <?php
    if (isEmployer()) {
        require_once('menu_left_employer.php');
    } else {
        require_once('menu_left_candidate.php');
    }
    ?>
    <div class="contain" style="margin: auto; width: calc(100% - 260px);background-color: #f7f7f7">

        <div class="form" style="width: 80%; margin: 50px auto 0 auto">
            <h3>My Profile</h3>
            <hr>
        </div>

        <form class="form_add_company" method="post" enctype="multipart/form-data" action="edit_profile_process.php"
              style="width: 80%">

            <div class="form w-100" style="background-color: #f5f5f5bf;padding: 0px 54px;">
                <h3>Profile Details</h3>
                <hr style="width: 109%;  transform: translateX(-53px);">
            </div>

            <div class="contain_form">
                <div class="d-flex m-auto" style="width: 85%;justify-content: space-between;padding-bottom: 34px">
                    <div class="avatar_profile" style=" width: 20%;position: relative">
                        <h5>Avatar</h5>
                        <div class="controlContainer "
                             style="position: absolute;bottom: 0; width: 100%; height: calc(100% - 28px)">
                            <div class="inputFileHolder h-100">
                                <a class="w-100 h-100" href="#" title="Browse">
                                </a>
                                <input id="fileInput2" name="avatar" class="fileInput w-100 h-100" title="Choose file to upload" value=""   type="file">
                                <input name="avatar_old" value="<?php if ($data_null != 0 && $data_user['avatar'] != '') {
                                    echo $data_user['avatar'];
                                } else {
                                    echo 'images/user.png';
                                }
                                ?>"   type="hidden">
                            </div>
                        </div>
                        <img class="border image-preview" style="max-width: 300px; height: 160px;" src="<?php if ($data_null != 0 && $data_user['avatar'] != '') {
                            echo $data_user['avatar'];
                        } else {
                            echo 'images/user.png';
                        }
                        ?>" alt="">
                        <h6>(reasonable size: 160px x 160px)</h6>

                    </div>
                    <div class="" style="width: 70%">
                        <div class="form w-100">
                            <h5>First Name</h5>
                            <input class="search-field" type="text" name="first_name" placeholder=""
                                   value="<?php if ($data_null != 0) {
                                       echo $data_user['first_name'];
                                   } ?>"
                                   required/>
                        </div>
                        <div class="form w-100">
                            <h5>Last Name</h5>
                            <input class="search-field" type="text" name="last_name" placeholder=""
                                   value="<?php if ($data_null != 0) {
                                       echo $data_user['last_name'];
                                   } ?>"
                                   required/>
                        </div>
                    </div>
                </div>
                <div class="form">
                    <h5>Phone</h5>
                    <input class="search-field" type="text" name="tel" placeholder="" value="<?php if ($data_null != 0) { echo $data_user['tel']; } ?>" required/>
                </div>
                <div class="form">
                    <h5>E-mail</h5>
                    <input class="search-field" type="text" readonly placeholder="" value="<?php if ($data_null != 0) { echo $data_user['email']; } ?>" required/>
                </div>
                <div class="form">
                    <h5>About me</h5>
                    <textarea name="desc"><?php if ($data_null != 0) { echo $data_user['about']; } ?></textarea>
                </div>
                <div class="form">
                    <input type="submit" value="Save Changes">
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
