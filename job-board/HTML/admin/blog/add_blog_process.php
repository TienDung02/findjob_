<?php session_start() ?>
<?php require_once('../../connection.php') ?>
<?php

$postday = date('Y-m-d');
$updateday = date('Y-m-d');



$author = $_POST['author'];
$category = $_POST['category'];
$title = $_POST['title'];

$desc = $_POST['desc'];

$img = '';
if (isset($_FILES['img']['name']) && $_FILES['img']['name'] != ''){
    $target_dir = "img_blog/";
    $file_tmp = $_FILES['img']['tmp_name'];
    $img = $target_dir . time() . basename($_FILES['img']['name']);
    move_uploaded_file($file_tmp, $img);
}

// echo $postday; echo $updateday; echo $parent_id; echo $name_categories;die;
$sql_insert_blog = "INSERT INTO `blog`(`id_blog`, `title`, `author`, `category_blog`, `img`, `desc`, `create_day`, `update_date`) 
VALUES ('','$title','$author','$category','$img','$desc','$postday','$updateday')";
// echo $sql_insert_blog;die;
if ($connect->query($sql_insert_blog) === TRUE) {
    $_SESSION['add_blog_status'] = 1;
    header("location:admin_blog_page.php?page=1");

} else {
    $_SESSION['add_blog_status'] = 0;
    header("location:admin_blog_page.php?page=1");

}
?>