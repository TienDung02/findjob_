
<?php require_once('../../connection.php') ?>
<?php
$page = $_GET['page'];
$id_categories = $_GET['id_categories'];
$sql = "DELETE FROM categories WHERE id_category  = $id_categories ";
if ($connect->query($sql) === TRUE) {
    echo "<script> window.location.href = '";
    echo FULL_URL;
    echo "/admin/category/admin-category-page.php?page=$page';
                                                    </script>";
} else {
    echo 'Lỗi: ' . $sql . '<br>' . $conn->error;
}
?>