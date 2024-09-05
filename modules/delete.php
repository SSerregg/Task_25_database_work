<?php

$forDelete = dirname(__DIR__,1).DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.$_POST['id'];


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
