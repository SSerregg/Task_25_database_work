<?php
session_start();
require_once BD;

$nickName = ucfirst(strtolower($_SESSION['uName']));

$pictureName = $_POST['id'];

$db = WorkWithBD::connect();
//try {


    $sql = "SELECT * FROM `comments` WHERE  `nickName`='$nickName' AND `pictureName`='$pictureName'";
                $stmt = $db->query($sql);
                $result = $stmt->FetchAll(PDO::FETCH_ASSOC);
  ?><article>
<form action="" method="post" ><?php             
foreach($result as $key=>$user) {
    ?><article><input type="hidden" name="id" value=<?php echo $value;?>><textarea><?php echo $user["comment"];?>
</textarea></article><?php

}
?><input type="submit" value="Удалить свои коментарии" class="btn btn-success">

</form>  
</article><?php
                //header ('Location:/index.php');
    //} catch (PDOException){
        //echo 'Комментарии под вашим никнеймом не найдены-)';
        //header ('Location:/index.php');
    //}