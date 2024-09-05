<?php


$forDelete = dirname(__DIR__,1).DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.array_keys($_POST)[0];

function delete ($del){
    global $forDelete;
if(file_exists($forDelete.$del)){
    unlink($forDelete.$del);
}
}
delete('.png');
delete('.txt');
delete('.jpg');
header ('Location:/bootstrap.php');
//echo '<pre>';
//echo dirname(__DIR__,1).DIRECTORY_SEPARATOR;

//print_r($forDelete);
//echo '<pre>';