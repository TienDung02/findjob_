<?php
if (!isset($_SESSION['login'])){
    header("location:my_account.php");
    exit();
}


$type_user = 'employer';
$data_null = 1;
if ($_SESSION['login']['role'] == 1) {
    $type_user = 'candidate';
}
$sql_select = "select * from `$type_user` where `id_user` = '" . $_SESSION['login']['id_user'] . "' ";
$data_user = callsql($sql_select);
//print_r($data_user);die;
if (empty($data_user)) {
    $data_null = 0;
} else {
    $data_user = $data_user[0];
}

?>
<header class="header_2">
    <div class="fixed-top header_2_block">
        <div class="sixteen columns d-flex h-100 position-relative">

            <!-- Logo -->
            <div class="logo">
                <h1><a href="index.php"><img src="images/logo.png" alt="Work Scout" style="padding: 0"/></a></h1>
            </div>

            <!-- Menu -->
            <nav id="navigation" class="menu ">
                <ul id="responsive">

                    <li><a href="#">Pages</a>
                        <ul>
                            <li><a href="job-page.php">Job Page</a></li>
                            <li><a href="job-page-alt.php">Job Page Alternative</a></li>
                            <li><a href="resume-page.php">Resume Page</a></li>
                            <li><a href="shortcodes.php">Shortcodes</a></li>
                            <li><a href="pricing-tables.php">Pricing Tables</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </li>
                    <?php
                    if (isCandidate() || isAdmin()){
                        ?>
                        <li><a href="browse-jobs.php">Browse Jobs</a></li>
                        <li><a href="browse-categories.php">Browse Categories</a></li>
                        <li><a href="add-resume.php">Add Resume</a></li>
                        <li><a href="manage-resumes.php">Manage Resumes</a></li>
                        <li><a href="job-alerts.php">Job Alerts</a></li>
                    <?php
                    }
                    ?>
                    <?php
                    if (isEmployer() || isAdmin()){
                        ?>
                        <li><a href="add-job.php">Add Job</a></li>
                        <li><a href="manage-jobs.php">Manage Jobs</a></li>
                        <li><a href="manage-applications.php">Manage Applications</a></li>
                        <li><a href="browse-resumes.php">Browse Resumes</a></li>
                        <li><a href="add_company.php">Add Company</a></li>
                    <?php
                    }
                    ?>
                    <li><a href="blog.php">Blog</a></li>
                </ul>


            </nav>
            <div class="avatar_user position-absolute">

                <div class="dropdown">
                    <div class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                         aria-expanded="false">
                        <img src="<?php
                        if ($data_null != 0 && $data_user['avatar'] != '') {
                            echo $data_user['avatar'];
                        } else {
                            echo 'images/user.png';
                        }
                        ?>">
                    </div>
                    <ul class="dropdown-menu menu_profile" aria-labelledby="dropdownMenuButton1">
                        <li onclick="location.href = 'my_profile.php' ">
                            <a href="my_profile.php">My Profile</a>
                        </li>
                        <li onclick="location.href = '#' ">
                            <a href="my_account.php">Messenger<span>2</span></a>
                        </li>
                        <li onclick="location.href = 'logout.php' ">
                            <a href="logout.php">Logout</a>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- Navigation -->
            <div id="mobile-navigation">
                <a href="#menu" class="menu-trigger"><i class="fa fa-reorder"></i> Menu</a>
            </div>

        </div>
    </div>
</header>