<?php session_start() ?>
<?php require_once('../../connection.php'); ?>
<?php
$updateday = date('Y-m-d');
$id_categories = $_GET['id_category'];
$parent_id = $_POST['parent_id'];
$name_categories = $_POST['category-name'];
$sql_update_product = "UPDATE categories SET parent_id = '$parent_id', name = '$name_categories', update_day = '$updateday' WHERE id_category = '$id_categories' ";
// echo $sql_update_product;die;
if ($connect->query($sql_update_product) === TRUE) {
        $_SESSION['category-status'] = 2;
        echo "<script>
                                // alert('Thêm thành công');
                                window.location.href = '";
        echo FULL_URL;
        echo "/admin/category/admin-category-page.php?page=1';
                                                    </script>";
} else {
        echo "Lỗi: " . $sql_update_product . "<br>" . $conn->error;
}

?>