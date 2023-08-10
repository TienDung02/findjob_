<?php session_start() ?>
<?php require_once('../../connection.php') ?>
<?php
$page = $_GET['page'];
$id = $_GET['id'];
$sql = "DELETE FROM blog WHERE id_blog   = $id ";
if ($connect->query($sql) === TRUE) {
    $_SESSION['delete_blog_status'] = 1;
    header("location:admin_blog_page.php?page=1");

} else {
    $_SESSION['delete_blog_status'] = 0;
    header("location:admin_blog_page.php?page=1");

}
?>