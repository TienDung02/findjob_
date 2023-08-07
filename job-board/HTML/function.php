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


function checkLogged(){
        if (isset($_SESSION['logged']) && $_SESSION['logged'] != 0){
            return 1;
        }else{
            return 0;
        }
}


function isCandidate()
{
    return ($_SESSION['login']['role'] == 1);
}

function isEmployer()
{
    return ($_SESSION['login']['role'] == 2);
}

?>