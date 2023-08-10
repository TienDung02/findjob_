<?php
$file_name = $_SERVER["SCRIPT_FILENAME"];
//print_r($file_name);die;
$file_name = explode('/', $file_name);
$file_name = end($file_name);
//echo $file_name;die;
?>
<aside class="animate__animated animate__backInLeft animate__delay-2s menu_01 d-block">
    <div class="menu_left  ">
        <ul>
            <li class="btn_hidden_menu">
                <a class="hide_menu" href="#"><</a>
            </li>
            <li class="<?php if ($file_name == ''){ echo 'active';} ?>">
                <a><i class="bi bi-speedometer2"></i>Dashboard</a>
            </li>
            <li class="<?php if ($file_name == 'admin-category-page.php' || $file_name == 'admin-add-category.php'){ echo 'active';} ?>">
                <a href="../category/admin-category-page.php"><i class="bi bi-card-list"></i>Category</a>
            </li>
            <li class="<?php if ($file_name == 'admin_candidate_page.php'){ echo 'active';} ?>">
                <a href="../candidate/admin_candidate_page.php"><i class="bi bi-person-video2"></i>Candidate</a>
            </li>
            <li class="<?php if ($file_name == 'admin_job_page.php'){ echo 'active';} ?>">
                <a href="../job/admin_job_page.php"><i class="bi bi-briefcase"></i>Recent Jobs</a>
            </li>
            <li class="<?php if ($file_name == 'admin-company-page.php' || $file_name == 'admin_view_company.php'){ echo 'active';} ?>">
                <a href="../company/admin_company_page.php"><i class="bi bi-building"></i>Company</a>
            </li>
            <li class="<?php if ($file_name == 'admin_user_page.php'){ echo 'active';} ?>">
                <a href="../user/admin_user_page.php"><i class="bi bi-person-circle"></i>User</a>
            </li>
            <li class="<?php if ($file_name == 'admin_blog_page.php'|| $file_name == 'admin_add_blog.php' || $file_name == 'admin_view_blog.php'){ echo 'active';} ?>">
                <a href="../blog/admin_blog_page.php"><i class="bi bi-pen"></i>Blog</a>
            </li>
        </ul>
    </div>

</aside>
<aside class="animate__animated animate__backInLeft animate__delay-2s menu_02 d-none menu_left_2">
    <div class="menu_left  ">
        <ul>
            <li class="btn_Show_menu">
                <a class="show_menu" href="#" style="font-size: 3rem !important;">></a>
            </li>
            <li class="<?php if ($file_name == ''){ echo 'active';} ?>">
                <a href="#"><i class="bi bi-speedometer2"></i></a>
            </li>
            <li class="<?php if ($file_name == 'admin-category-page.php' || $file_name == 'admin-add-category.php'){ echo 'active';} ?>">
                <a href="../category/admin-category-page.php"><i class="bi bi-card-list"></i></a>
            </li>
            <li class="<?php if ($file_name == 'admin_candidate_page.php'){ echo 'active';} ?>">
                <a href="../candidate/admin_candidate_page.php"><i class="bi bi-person-video2"></i></a>
            </li>
            <li class="<?php if ($file_name == 'admin_job_page.php'){ echo 'active';} ?>">
                <a href="../job/admin_job_page.php"><i class="bi bi-briefcase"></i></a>
            </li>
            <li class="<?php if ($file_name == 'admin-company-page.php' || $file_name == 'admin_view_company.php'){ echo 'active';} ?>">
                <a href="../company/admin_company_page.php"><i class="bi bi-building"></i></a>
            </li>

            <!--            <li class="--><?php //if ($file_name == 'admin-industry-page.php' || $file_name == 'admin-add-industry.php'){ echo 'active';} ?><!--">-->
            <!--                <a href="../industry/admin-industry-page.php"><i class="bi bi-gear"></i>Industry</a>-->
            <!--            </li>-->

            <li class="<?php if ($file_name == 'admin_user_page.php'){ echo 'active';} ?>">
                <a href="../user/admin_user_page.php"><i class="bi bi-person-circle"></i></a>
            </li>
            <li class="<?php if ($file_name == ''){ echo 'active';} ?>">
                <a href="#"><i class="bi bi-pen"></i></a>
            </li>
        </ul>
    </div>
</aside>