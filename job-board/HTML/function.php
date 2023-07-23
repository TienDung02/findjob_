<?php require_once('connection.php') ?>

<?php

function custom_echo($x, $length = 60)
{
        if (strlen($x) <= $length) {
                echo $x;
        } else {
                $y = mb_substr($x, 0, $length);
                $z = strrpos($y, " ");
                $t = substr($y, 0, $z) . '...';
                echo $t;
        }
}

function callsql($sql)
{
        $data = [];
        $connect = $GLOBALS['connect'];
        $result = $connect->query($sql);
        if ($result->num_rows > 0) {
                while ($row__ = $result->fetch_assoc()) {
                        $data[] = $row__;
                }
        }
        return $data;
}

function custom_price_echo($numbers)
{
        $fmt = numfmt_create( 'de_DE', NumberFormatter::CURRENCY );
        echo numfmt_format_currency($fmt, $numbers, "VND")."\n";
}


function checkSession1(){
        if (isset($_SESSION['user'])){
                if($_SESSION['user']['role'] != 1 && $_SESSION['user']['role'] != 0){
                        // header("Location:" . FULL_URL . "/html/login/login.php");
                }
        }else{
                // header("Location:" . FULL_URL . "/html/login/login.php");
        }
}

function checkSession2(){
        if (isset($_SESSION['user'])){
                if($_SESSION['user']['role'] != 1){
                        header("Location:" . FULL_URL . "/html/login/login.php");
                }
        }else{
                header("Location:" . FULL_URL . "/html/login/login.php");
        }
}


?>