<?php

class Autorization{
    public static function autoriz(){
$start = $_SESSION['start']?? null;
$set = $_GET['username'] ?? null;
$unset = $_GET['submit'] ?? null;


if ($set){
    session_start();
    $_SESSION['uName'] = $set;
    $_SESSION['start'] = 1;
    header ('Location:/index.php');
}
if ($unset){
    session_unset();

    header ('Location:/index.php');
}
return $start;
    }
}