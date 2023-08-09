
<?php require_once('../../connection.php') ?>
<?php
$page = $_GET['page'];
$id_categories = $_GET['id_categories'];
$sql = "DELETE FROM categories WHERE id_category  = $id_categories ";
if ($connect->query($sql) === TRUE) {
    header("location:admin-industry-page.php?page=last");
} else {
    echo 'Lỗi: ' . $sql . '<br>' . $conn->error;
}
?>