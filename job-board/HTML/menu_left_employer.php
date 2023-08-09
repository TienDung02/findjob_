<?php
$file_name = $_SERVER["SCRIPT_FILENAME"];
$file_name = explode('/', $file_name);
$file_name = end($file_name);
?>
<aside class="my_profile_menu_left">
    <div class="menu_left">
        <ul class="nav-link menu_profile">
            <h4>Main</h4>
            <li class="<?php if ($file_name == ''){ echo 'active';} ?>">
                <a href="">Messenger &nbsp; <span>2</span></a>
            </li>
            <li class="<?php if ($file_name == ''){ echo 'active';} ?>">
                <a href="">Bookmarks</a>
            </li>
            <h4>Employer</h4>
            <li class="<?php if ($file_name == 'add-job.php'){ echo 'active';} ?> ">
                <a href="add-job.php">Add Jobs</a>
            </li>
            <li class="<?php if ($file_name == 'manage-jobs.php'){ echo 'active';} ?>">
                <a href="manage-jobs.php"></i>Manage Jobs</a>
            </li>
            <li class="<?php if ($file_name == 'manage-applications.php'){ echo 'active';} ?>">
                <a href="manage-applications.php"></i>Manage Applications</a>
            </li>
            <li class="<?php if ($file_name == 'browse-resumes.php'){ echo 'active';} ?>">
                <a href="browse-resumes.php"></i>Browse Resumes</a>
            </li>
            <li class="<?php if ($file_name == 'add_company.php'){ echo 'active';} ?> ">
                <a href="add_company.php"></i>Add Company</a>
            </li>
            <h4>Account</h4>
            <li class="<?php if ($file_name == 'my_profile.php'){ echo 'active';} ?>">
                <a href="my_profile.php">My Profile</a>
            </li>
            <li>
                <a href="my_account.php">Logout</a>
            </li>
        </ul>
    </div>
</aside>