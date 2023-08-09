<?php session_start() ?>
<?php require_once('../../connection.php'); ?>
<?php require_once ('../../function.php')?>

<?php


$id_company = $_GET['id_company'];
if (isset($_POST['active']) && $_POST['active'] == 'on'){
    $active = 1;
}else{
    $active = 0;
}

$sql_active_company = " update `company` set `active` = $active where `id_company` = $id_company";

if ($connect->query($sql_active_company) === TRUE) {
    $_SESSION['update_company_active'] = 1;
    header("location:admin-company-page.php");
} else {
    $_SESSION['update_company_active'] = 0;
    header("location:admin-company-page.php");
}

?>
