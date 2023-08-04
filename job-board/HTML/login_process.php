<?php session_start() ?>
<?php require_once ('connection.php')?>
<?php require_once ('function.php')?>
<?php
$user_name = $_POST['user_name'];
$user_password = $_POST['password'];
$pass = md5($user_password);
$select = mysqli_query($connect, "SELECT * FROM `user` WHERE user_name = '$user_name' and password = '$pass' ") or exit(mysqli_error($connect));
//echo $select;die;
//$sql_login = "select * from user where user_name = '$user_name' and password = '$pass'";
//$select = callsql($sql_login);
//echo $sql_login;die;
if(mysqli_num_rows($select)) {
    $_SESSION['login'] = 1;
//    echo "11111111111111111111";die;
    header("location:my_account.php");
}else{
        $_SESSION['login'] = 0;
        header("location:my_account.php");
}
?>

