<?php session_start() ?>
<?php require_once('connection.php') ?>
<?php require_once('function.php') ?>
<?php
//$avatar = $_FILES["upload-file"];
//$folder = "./img_temp/" . $avatar;
//if (isset($_FILES["fileInput2"]["name"])) {
//    $avatar = $_POST['fileInput2'];
//}


if (isset($_FILES['avatar']['tmp_name']) && $_FILES['avatar']['tmp_name']) {
    echo 'aaaaaaaaaaaaaaaaaaaaaaa';
} else {
    echo 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbb';
}
die;

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$desc = $_POST['desc'];

//    echo $avatar;
//    echo  $first_name;
//    echo $last_name;
//    echo $tel;
//    echo $email;
//    echo $desc;die;
//
//$target_dir = "/img_temp/";
//$avatar = $target_dir . basename($avatar);
//move_uploaded_file($_FILES['avatar']['tmp_name'], '..' . $avatar);
//echo $avatar;
//die;




?>