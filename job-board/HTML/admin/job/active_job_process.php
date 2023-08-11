<?php session_start() ?>
<?php require_once('../../connection.php'); ?>
<?php require_once ('../../function.php')?>

<?php
$id = $_GET['id'];

if (isset($_POST['active']) && $_POST['active'] == 'on'){
    $active = 1;
}else{
    $active = 0;
}

$sql_active_job = " update `job` set `active` = $active where `id` = $id";
if ($connect->query($sql_active_job) === TRUE) {
    $_SESSION['update_company_active'] = 1;
    header("location:admin_job_page.php");
} else {
    $_SESSION['update_company_active'] = 0;
    header("location:admin_job_page.php");
}

?>
