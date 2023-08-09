<?php
$file_name = $_SERVER["SCRIPT_FILENAME"];
//print_r($file_name);die;
$file_name = explode('/', $file_name);
$file_name = end($file_name);
//echo $file_name;die;
?>
<aside>
    <div class="menu_left">
        <ul>
            <li class="<?php if ($file_name == ''){ echo 'active';} ?>">
                <a href="#"><i class="bi bi-speedometer2"></i>Dashboard</a>
            </li>
            <li class="<?php if ($file_name == 'admin-category-page.php' || $file_name == 'admin-add-category.php'){ echo 'active';} ?>">
                <a href="../category/admin-category-page.php"><i class="bi bi-card-list"></i>Category</a>
            </li>
            <li class="<?php if ($file_name == ''){ echo 'active';} ?>">
                <a href="#"><i class="bi bi-bookmarks"></i>Popular Categories</a>
            </li>
            <li class="<?php if ($file_name == ''){ echo 'active';} ?>">
                <a href="#"><i class="bi bi-briefcase"></i>Recent Jobs</a>
            </li>
            <li class="<?php if ($file_name == 'admin-company-page.php' || $file_name == 'admin-view-company.php'){ echo 'active';} ?>">
                <a href="../company/admin-company-page.php"><i class="bi bi-building"></i>Company</a>
            </li>

<!--            <li class="--><?php //if ($file_name == 'admin-industry-page.php' || $file_name == 'admin-add-industry.php'){ echo 'active';} ?><!--">-->
<!--                <a href="../industry/admin-industry-page.php"><i class="bi bi-gear"></i>Industry</a>-->
<!--            </li>-->
            <li class="<?php if ($file_name == ''){ echo 'active';} ?>">
                <a href="#"><i class="bi bi-pen"></i>Blog</a>
            </li>
            <li class="<?php if ($file_name == 'admin_user_page.php'){ echo 'active';} ?>">
                <a href="../user/admin_user_page.php"><i class="bi bi-person-circle"></i>User</a>
            </li>
            <li class="<?php if ($file_name == ''){ echo 'active';} ?>">
                <a href="#"><i class="bi bi-pen"></i>Blog</a>
            </li>
        </ul>
    </div>
</aside>