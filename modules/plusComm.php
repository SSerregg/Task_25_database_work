<?php

echo '<pre>'; 
print_r($_POST); 
echo '</pre>';

$usern = $_POST['username'] ?? null;
$comment = $_POST['username'] ?? null;

$comment = ucfirst(strtolower($comment));

$way = dirname(__DIR__,1).DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.$_POST['id'].'.txt';

$file = fopen($way, 'a');

echo '<pre>'; 
print_r($way); 
echo '</pre>';

fwrite($file, 'Дата:'.date("Y-m-d H:i")."\r\n".'Пользователь:'.$usern.":\r\n".'->'.$comment."\r\n");

fclose($file);

header ('Location:/bootstrap.php');