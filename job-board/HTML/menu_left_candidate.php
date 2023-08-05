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
            <li class="<?php if ($file_name == 'job-alerts.php'){ echo 'active';} ?>">
                <a href="job-alerts.php">Job Alerts &nbsp; <span>2</span></a>
            </li>
                <h4>Candidate</h4>
            <li class="<?php if ($file_name == 'browse-jobs.php'){ echo 'active';} ?>">
                <a href="browse-jobs.php">Browse Jobs</a>
            </li>
            <li class="<?php if ($file_name == 'browse-categories.php'){ echo 'active';} ?>">
                <a href="browse-categories.php">Browse Categories</a>
            </li>
            <li class="<?php if ($file_name == 'add-resume.php'){ echo 'active';} ?>">
                <a href="add-resume.php">Add Resume</a>
            </li>
            <li class="<?php if ($file_name == 'manage-resumes.php'){ echo 'active';} ?>">
                <a href="manage-resumes.php">Manage Resume</a>
            </li >


                <h4>Account</h4>
            <li class="<?php if ($file_name == 'my_profile.php'){ echo 'active';} ?>">
                <a href="my_profile.php">My Profile</a>
            </li>
            <li  class="<?php if ($file_name == 'change_password.php'){ echo 'active';} ?>">
                <a href="change_password.php">Change Password</a>
            </li>
            <li>
                <a href="my_account.php">Logout</a>
            </li>

        </ul>
    </div>
</aside>