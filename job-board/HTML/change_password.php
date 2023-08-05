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
    <?php require_once('menu_left_candidate.php') ?>

    <div class="contain" style="margin: auto; width: calc(100% - 260px);background-color: #f7f7f7">

        <form class="form_add_company" method="post" action="" style="width: 70%">

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
                    <h5>Confirm New Password</h5>
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
<?php
if (isset($_SESSION['insert_job']) && $_SESSION['insert_job'] == 1) {
    ?>
    <script>
        $(document).ready(function executeExample() {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'success',
                title: 'Thêm thành công'
            })
        });
    </script>
    <?php
} elseif (isset($_SESSION['insert_job']) && $_SESSION['insert_job'] == 0) {
    ?>
    <script>
        $(document).ready(function executeExample() {
            Swal.fire({
                icon: 'error',
                title: 'Lỗi hệ thống!',
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                }
            })
        });

    </script>
    <?php
}
unset($_SESSION['insert_job']);
?>
</body>
</html>
