<?php
session_start();

$comment = $_POST['comment'] ?? null;
$uName = ucfirst(strtolower($_SESSION['uName']));


$comm = ucfirst(strtolower($comment));

$way = dirname(__DIR__,1).DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.$_POST['id'].'.txt';

$file = fopen($way, 'a');



fwrite($file, 'Дата:'.date("Y-m-d H:i")."\r\n".'Пользователь:'.$uName.":\r\n".'->'.$comm."\r\n");

fclose($file);

echo $uName;


header ('Location:/bootstrap.php');