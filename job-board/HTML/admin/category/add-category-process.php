<?php session_start() ?>
<?php require_once('../../connection.php') ?>
<?php
$postday = date('Y-m-d');
$updateday = date('Y-m-d');
$parent_id = $_POST['parent_id'];
$name_categories = $_POST['category-name'];
if ($parent_id == 0) {
    $parent_id = '';
}
// echo $postday; echo $updateday; echo $parent_id; echo $name_categories;die;
$sql_insert_categories = "INSERT INTO categories (id_category , parent_id, name, create_day, update_day) 
                        VALUES ('', '$parent_id', '$name_categories', '$postday' , '$updateday')";
// echo $sql_insert_categories;
if ($connect->query($sql_insert_categories) === TRUE) {
    $_SESSION['category-status'] = 1;
    header("location:admin-category-page.php?page=1");
} else {
    echo "Lỗi: " . $sql_insert_categories . "<br>" . $conn->error;
}
?>