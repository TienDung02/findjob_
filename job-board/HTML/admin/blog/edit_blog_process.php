<?php session_start() ?>
<?php require_once('../../connection.php') ?>
<?php

$postday = date('Y-m-d');
$updateday = date('Y-m-d');

$id = $_GET['id'];

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
}else{
    $img = $_POST['img_old'];
}

// echo $postday; echo $updateday; echo $parent_id; echo $name_categories;die;
$sql_insert_blog = "UPDATE `blog` SET `title`='$title',`author`='$author',`category_blog`='$category',`img`='$img',`desc`='$desc',`create_day`=$postday,`update_date`=$updateday WHERE `id_blog` = $id";
// echo $sql_insert_blog;die;
if ($connect->query($sql_insert_blog) === TRUE) {
    $_SESSION['edit_blog_status'] = 1;
    header("location:admin_blog_page.php?page=1");

} else {
    $_SESSION['add_blog_status'] = 0;
    header("location:admin_blog_page.php?page=1");

}
?>