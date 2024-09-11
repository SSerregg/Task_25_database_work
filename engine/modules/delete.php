<?php
require_once BD;

$forDelete = '..'.DIRECTORY_SEPARATOR.'public_html'.DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.$_POST['id'];

$pictureName = $_POST['id'];
unlink($forDelete);


$db = WorkWithBD::connect();
try {
$sql = "DELETE FROM `mysqldata`.`comments` WHERE  `pictureName`='$pictureName'";
            $stmt = $db->query($sql);
            header ('Location:/index.php');
} catch (PDOException){
    //echo 'Комментарии под вашим никнеймом не найдены-)';
    header ('Location:/index.php');
}
