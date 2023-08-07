<?php session_start() ?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
?>
<?php require_once ('connection.php')?>
<?php require_once ('function.php')?>
<?php
$type_register = $_POST['type_register'];
$user_name = $_POST['user_name'];
$email = $_POST['email'];
$user_password = rand(99999, 999999999);
$pass = md5($user_password);
$postday = date('Y-m-d');
$updateday = date('Y-m-d');
//echo $type_register; echo $user_name; echo $email; die;
//Load Composer's autoloader
require 'vendor/autoload.php';

$select = mysqli_query($connect, "SELECT `email` FROM `user` WHERE `email` = '".$_POST['email']."' or `user_name` = '".$_POST['user_name']."' ") or exit(mysqli_error($connect));
if(mysqli_num_rows($select)) {
    $_SESSION['reg'] = 2;
//    echo "111111111";die;
    header("location:my_account.php");
}else{
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = false;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'nongtiendung2810@gmail.com';                     //SMTP username
        $mail->Password   = 'qhupytxxvspbypyo';                               //SMTP password
        $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('nongtiendung2810@gmail.com', 'aaaaaaaaaaaa'); // email nguoi gui
        $mail->addAddress($email, 'nong tien dung');     //email nguoi nhan

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Mat khau cua ban la: ';
        $mail->Body    = $user_password;
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
        // print_r($pass);die;
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    $sql_insert_user = "insert into user (id_user, user_name, email, password, role, create_day, update_day) values ('', '$user_name', '$email', '$pass', $type_register, '$postday', '$updateday')";
    if ($type_register == 1){
        $sql_insert_profile = "insert into candidate (avatar, first_name, last_name, tel, email, about, create_day) values ('', '', '', '', '$email', '', '$postday')";
    }else{
        $sql_insert_profile = "insert into employer (avatar, first_name, last_name, tel, email, about, create_day) values ('', '', '', '', '$email', '', '$postday')";
    }


    if ($connect->query($sql_insert_user) === TRUE && $connect->query($sql_insert_profile) === TRUE) {
        $_SESSION['reg'] = 1;
        header("location:my_account.php");
    } else {
        $_SESSION['reg'] = 0;
        echo "Lỗi: " . $sql_insert_user . "<br>" . $conn->error;
    }
}
//Create an instance; passing `true` enables exceptions






?>

