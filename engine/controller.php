<?php

$scanDir=scandir('images');

if($start){
    include VIEW.'upload.php';
}
require_once BD;
$db = WorkWithBD::connect();
foreach ($scanDir as $key => $value){
    if (preg_match('/[.png|.jpg]{4}\b/', $value)){
        $correct = 'images/'.$value;
       
        $delete = preg_replace('/[.png|.jpg]{4}\b/', '', $value);

        include VIEW.'card1.php';
            if ($db){
            $sql = "SELECT `nickName`, `date`, `comment` FROM `comments` WHERE  `pictureName` IN ('$value')";
           
            $stmt = $db->query($sql);
            $result = $stmt->FetchAll(PDO::FETCH_ASSOC);
    
        
          
           foreach ($result as $key => $alue){
            include VIEW.'card2.php';
           }
         
           if($start){
            include VIEW.'comment.php';
        }   } 
      
        if($start){
            //include VIEW.'editComment.php';
            include VIEW.'delComment.php';
       
            include VIEW.'fullDelete.php';
        }
        include VIEW.'card3.php';
    }
}