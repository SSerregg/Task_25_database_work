<?php
session_start();
$start = $_SESSION['start']?? null;
$set = $_GET['username'] ?? null;


$unset = $_GET['submit'] ?? null;


if ($set){
    session_start();
    $_SESSION['uName'] = $set;
    $_SESSION['start'] = 1;
    header ('Location:/bootstrap.php');
}
if ($unset){
    session_unset();

    header ('Location:/bootstrap.php');
}
require_once 'config.php';
require_once VIEW.'view.php';