<?php

$forDelete = dirname(__DIR__,1).DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.$_POST['id'].'.txt';
unlink($forDelete);
header ('Location:/bootstrap.php');