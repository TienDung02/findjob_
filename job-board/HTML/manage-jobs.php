<?php session_start() ?>
<?php require_once('connection.php') ?>
<?php require_once('function.php') ?>
<?php require_once('admin/admin_head.php') ?>
<?php require_once('head.php') ?>


<!-- Header
================================================== -->
<?php require_once('header_2.php') ?>
<div class="clearfix"></div>

<!-- Content
================================================== -->
<div class="d-flex">
    <?php
    require_once('menu_left_employer.php');
    ?>
    <div class="container">

        <!-- Table -->
        <div class="sixteen columns">

            <p class="margin-bottom-25"></p>

            <table class="manage-table responsive-table">

                <tr>
                    <th><i class="fa fa-file-text"></i> Title</th>
                    <th><i class="fa fa-check-square-o"></i> Filled?</th>
                    <th><i class="fa fa-calendar"></i> Date Posted</th>
                    <th><i class="fa fa-calendar"></i> Date Expires</th>
                    <th><i class="fa fa-user"></i> Applications</th>
                    <th></th>
                </tr>
                <?php
                $sql_select_job = "select * from job";
                $jobs = callsql($sql_select_job);
                foreach ($jobs as $job){
                ?>
                <!-- Item #1 -->
                <tr>
                    <td class="title"><a href="#"><?php echo $job['title'] ?></td>
                    <td class="centered">
                        <?php if ($job['active'] == 0){
                            echo "<input class='checkbox_fail' readonly type='checkbox'>";
                        }elseif ($job['active'] == 1 ){
                            echo "<input class='checkbox_fail' checked readonly type='checkbox'>";
                        }else{
                            echo  "<div class='label_check_fail'><i class='bi bi-x-lg'></i></div>";
                        }
                        ?>
                    </td>
                    <td><?php echo $job['create_day']?></td>
                    <td><?php echo $job['closing_day'] ?></td>
                    <td class="centered">-</td>
                    <td class="action">
                        <a href="add-job.php?id=<?php echo $job['id'] ?>"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="#"><i class="bi bi-eye-fill"></i> View</a>
                        <a href="#" class="delete alert_delete" data-target="delete_job_process.php?id=<?php echo $job['id'] ?>" ><i class="fa fa-remove"></i> Delete</a>
                    </td>
                </tr>
                <?php } ?>
                <!-- Item #2 -->
                <tr>
                    <td class="title"><a href="#">Web Developer - Front End Web Development, Relational Databases</a></td>
                    <td class="centered">-</td>
                    <td>September 30, 2015</td>
                    <td>October 10, 2015</td>
                    <td class="centered"><a href="manage-applications.php" class="button">Show (4)</a></td>
                    <td class="action">
                        <a href="#"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="#"><i class="fa  fa-check "></i> Mark Filled</a>
                        <a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
                    </td>
                </tr>

                <!-- Item #2 -->
                <tr>
                    <td class="title"><a href="#">Power Systems User Experience Designer</a></td>
                    <td class="centered"><i class="fa fa-check"></i></td>
                    <td>May 16, 2015</td>
                    <td>June 30, 2015</td>
                    <td class="centered"><a href="manage-applications.php" class="button">Show (9)</a></td>
                    <td class="action">
                        <a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
                    </td>
                </tr>
            </table>
            <br>
            <a href="add-job.php" class="button">Add Job</a>

        </div>

    </div>
</div>

<!-- Footer
================================================== -->
<div class="margin-top-60"></div>

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<?php require_once ('script_tag.php')?>
<?php
if (isset($_SESSION['update_job']) && $_SESSION['update_job'] == 1) {
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
                title: 'Update success'
            })
        });
    </script>
    <?php
} elseif (isset($_SESSION['update_job']) && $_SESSION['update_job'] == 0) {
    ?>
    <script>
        $(document).ready(function executeExample() {
            Swal.fire({
                icon: 'error',
                title: 'System error',
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
}elseif (isset($_SESSION['delete_job']) && $_SESSION['delete_job'] == 1) {
    ?>
    <script>
        $(document).ready(function executeExample() {
            Swal.fire({
                icon: 'success',
                title: 'Delete success',
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
}elseif (isset($_SESSION['update_job']) && $_SESSION['update_job'] == 0 || isset($_SESSION['delete_job']) && $_SESSION['delete_job'] == 0) {
    ?>
    <script>
        $(document).ready(function executeExample() {
            Swal.fire({
                icon: 'error',
                title: 'System error',
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
unset($_SESSION['update_job']);
unset($_SESSION['delete_job']);
?>


</body>
</html>