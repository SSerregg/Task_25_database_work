<?php
session_start();
require_once BD;
class DelCom{
    public static function hfgd (){
$nickName = ucfirst(strtolower($_SESSION['uName']));

$pictureName = $_POST['id'];
echo $nickName;
echo $pictureName;

$db = WorkWithBD::connect();

try {
$sql = "DELETE FROM `mysqldata`.`comments` WHERE  `nickName`='$nickName' AND `pictureName`='$pictureName'";
            $stmt = $db->query($sql);
            header ('Location:/index.php');
} catch (PDOException){
    echo 'Комментарии под вашим никнеймом не найдены-)';
    header ('Location:/index.php');
}
}
}
DelCom::hfgd ();

