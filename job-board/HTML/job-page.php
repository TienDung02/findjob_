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
$id = $_GET['id'];
$sql_select_job = "SELECT job.*, company.* FROM job JOIN employer ON job.id_employer = employer.id_employer 
    JOIN company ON company.id_employer = employer.id_employer where id = $id GROUP BY id";
//echo $sql_select_job;die;

$job = callsql($sql_select_job);
$job = $job[0];
//print_r($job);die;
$sql_select_category = "select * from categories";
$categories = callsql($sql_select_category);
//print_r($categories);
?>
<div class="clearfix"></div>

<!-- Titlebar
================================================== -->
<div id="titlebar">
    <div class="container">
        <div class="ten columns">
            <span><a href="browse-jobs.php"><?php
                    $job_categories = $job['category'];
                    $job_categories = explode(',', $job_categories);
                    $category_string = '';
                    $category_string_array = [];
                    foreach ($categories as $category) {
                        if (in_array($category['id_category'], $job_categories)) {
                            $category_string .= $category['name'] . ', ';
                            $category_string_array[] = $category['name'];
                        }
                    }
                    //                    echo trim($category_string, ', ');
                    echo implode(', ', $category_string_array);
                    ?></a></span>
            <h2><?php echo $job['title']; ?><span
                        class="ms-3 rounded-2
                                        <?php
                        if ($job['job_type'] == 'Full-Time') {
                            echo 'bg-primary';
                        } elseif ($job['job_type'] == 'Part-Time') {
                            echo 'bg-danger';
                        } elseif ($job['job_type'] == 'Internship') {
                            echo 'bg-warning';
                        } elseif ($job['job_type'] == 'Freelance') {
                            echo 'bg-success';
                        } elseif ($job['job_type'] == 'Temporary') {
                            echo 'bg-info';
                        }
                        ?>"><?php echo $job['job_type']; ?></span></h2>
        </div>
        <?php
        if (!checkLogged()) {
            $file_name = $_SERVER["SCRIPT_FILENAME"];
            $file_name = explode('/', $file_name);
            $file_name = end($file_name);
            $_SESSION['url_before_login'] = $file_name . '?id=' . $id;
            ?>
            <div class="six columns">
                <a href="#" class="button dark alert_login"><i class="fa fa-star"></i> Bookmark This Job</a>
            </div>
            <?php
        } else if (isCandidate() == 1) {
            $job_id[] = $id;
            $sql_select_apply_job = "select * from bookmark where id_candidate = " . $_SESSION['login']['id_candidate'];
            $apply_jobs = callsql($sql_select_apply_job);
            $bookmark = mysqli_query($connect, "SELECT * FROM `bookmark` WHERE `id_candidate` = '" . $_SESSION['login']['id_candidate'] . "' and `id_job` = $id ") or exit(mysqli_error($connect));
            if (mysqli_num_rows($bookmark)) {
                ?>
                <div class="six columns">
                    <a href="remove_bookmark_process.php?job_id=<?php echo $id ?>&id_candidate=<?php echo $_SESSION['login']['id_candidate'] ?>"
                       class="button dark"><i class="fa fa-star"></i>Remove Bookmark</a>
                </div>
                <?php
            } else {
                ?>
                <div class="six columns">
                    <a href="add_bookmark_process.php?job_id=<?php echo $id ?>&id_candidate=<?php echo $_SESSION['login']['id_candidate'] ?>"
                       class="button bg-info"><i class="fa fa-star"></i> Bookmark This Job</a>
                </div>
                <?php
            }
        }
        ?>
    </div>
</div>


<!-- Content
================================================== -->
<div class="container">

    <!-- Recent Jobs -->
    <div class="eleven columns">
        <div class="padding-right">

            <!-- Company Info -->
            <div class="company-info">
                <img src="<?php
                if ($job['company_logo']) {
                    echo $job['company_logo'];
                } else {
                    echo 'images/company-logo.png';
                }
                ?>
                " alt="">
                <div class="content">
                    <h4><?php echo $job['company_name']; ?></h4>
                    <?php
                    if ($job['company_website']) {
                        ?>
                        <span><a href="#"><i class="fa fa-link"></i> Website</a></span>
                    <?php }
                    ?>
                    <?php
                    if ($job['twitter']) {
                        ?>
                        <span><a href="#"><i class="fa fa-link"></i> Twitter</a></span>
                    <?php }
                    ?>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="form">
                <div class="WYSIWYG " cols="40" rows="3" name="description"
                     spellcheck="true"><?php if ($job['description']) {
                        echo $job['description'];
                    } ?></div>
            </div>
            <br>

            <div class="form">
                <div class="WYSIWYG " cols="40" rows="3" name="description"
                     spellcheck="true"><?php if ($job['job_requirements']) {
                        echo $job['job_requirements'];
                    } ?></div>
            </div>


        </div>
    </div>


    <!-- Widgets -->
    <div class="five columns">

        <!-- Sort by -->
        <div class="widget">
            <h4>Overview</h4>

            <div class="job-overview">

                <ul>
                    <li>
                        <i class="fa fa-map-marker"></i>
                        <div>
                            <strong>Location:</strong>
                            <span><?php if ($job['headquarters']) {
                                    echo $job['headquarters'];
                                } ?></span>
                        </div>
                    </li>
                    <li>
                        <i class="fa fa-user"></i>
                        <div>
                            <strong>Job Title:</strong>
                            <span><?php if ($job['title']) {
                                    echo $job['title'];
                                } ?></span>
                        </div>
                    </li>
                    <li>
                        <i class="fa fa-clock-o"></i>
                        <div>
                            <strong>Date Posted:</strong>
                            <span><?php time_ago($job['update_day']); ?></span>
                        </div>
                    </li>
                    <li>
                        <i class="fa fa-clock-o"></i>
                        <div>
                            <strong>Expiration date:</strong>
                            <span><?php if ($job['closing_day']) {
                                    echo $job['closing_day'];
                                } ?></span>
                        </div>
                    </li>
                    <li>
                        <i class="fa fa-money"></i>
                        <div>
                            <strong>Salary:</strong>
                            <span><?php echo '(' . $job['minimum_salary'] . '$ - ' . $job['maximum_salary'] . '$)/month' . '<br>' . ' or (' . $job['minimum_rate'] . '$ - ' . $job['maximum_rate'] . '$)/hour' ?></span>
                        </div>
                    </li>
                </ul>

                <?php
                if (isCandidate()) {
                    ?>
                    <a href="#small-dialog" class="popup-with-zoom-anim button">Apply For This Job</a>
                    <?php
                }
                ?>
                <div id="small-dialog" class="zoom-anim-dialog mfp-hide apply-popup">

                    <div class="small-dialog-headline">
                        <h2>Apply For This Job</h2>
                    </div>


                    <div class="small-dialog-content">
                        <form action="apply_job_process.php?id=<?php echo $id ?>" enctype="multipart/form-data" method="post">
                            <input type="text" placeholder="Full Name" name="full_name" value=""/>

                            <textarea name="message" placeholder="Your message / cover letter sent to the employer"></textarea>

                            <!-- Upload CV -->
                            <div class="upload-info"><strong>Upload your CV (optional)</strong> <span>Max. file size: 5MB</span>
                            </div>
                            <div class="clearfix"></div>
                            <div class="controlContainer d-flex">
                                <div class="container">
                                    <div class="row">
                                        <label class="upload-btn col-md-3 h-100"><i class="fa fa-upload"></i>  &nbsp;Browse
                                            <div class="inputFileHolder">
                                                <input id="fileInput2" name="cv" class="fileInput fileInput2"
                                                       title="Choose file to upload" type="file">
                                            </div>
                                        </label>

                                        <div class=" col-md-8 h-100">
                                            <input class="inputFileMaskText2 h-100" readonly="readonly" placeholder="Choose file.." type="text" id="inputFileMaskText2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="divider"></div>

                            <button class="send">Send Application</button>
                        </form>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- Widgets / End -->


</div>


<!-- Footer
================================================== -->
<div class="margin-top-50"></div>

<?php require_once('footer.php') ?>
<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<?php require_once('script_tag.php') ?>
<?php
if (isset($_SESSION['apply_job']) && $_SESSION['apply_job'] == 1) {
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
                title: 'Applied success'
            })
        });
    </script>
    <?php
} elseif (isset($_SESSION['apply_job']) && $_SESSION['apply_job'] == 2) {
    ?>
    <script>
        $(document).ready(function executeExample() {
            Swal.fire({
                icon: 'info',
                title: 'You applied for this job',
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
} elseif (isset($_SESSION['apply_job']) && $_SESSION['apply_job'] == 0) {
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
unset($_SESSION['apply_job']);
?>


</body>
</html>