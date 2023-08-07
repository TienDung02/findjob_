<?php session_start() ?>
<?php require_once('connection.php') ?>
<?php require_once('function.php') ?>
<?php
$user_name = $_POST['user_name'];
$user_password = $_POST['password'];
$pass = md5($user_password);
//$pass = $user_password;
$sql_select_login = "SELECT * FROM `user` WHERE user_name = '$user_name'";
$login = callsql($sql_select_login);
if (!empty($login)) {
    $login = $login[0];
    if ($pass == $login['password']) {
        $_SESSION['login'] = $login;
        $_SESSION['logged'] = 1;
        $_SESSION['login_success'] = 1;
        if ($login['role'] == 3){
            header("location:admin/category/admin-industry-page.php?page=1");
        }
        header("location:my_profile.php");
    } else {
        $_SESSION['login_success'] = 0;
        header("location:my_account.php");
    }
} else {
    $_SESSION['login_success'] = 0;
    header("location:my_account.php");
}
?>

