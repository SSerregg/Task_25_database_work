<?php
require_once '..'.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'configWays.php';
echo '<pre>';
print_r($_POST);
echo '</pre>';

if (!empty($_POST['delete'])){
    include_once MODULES.'delete.php'; 
}
if (!empty($_POST['delComment'])){
    include_once MODULES.'delComment.php'; 
}
if (!empty($_POST['plusComm'])){
    include_once MODULES.'plusComm.php';
}
if (!empty($_POST['server'])){
    include_once MODULES.'server.php';
}
