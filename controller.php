<?php

$scanDir=scandir('images');

if($start){
    include VIEW.'upload.php';
}


foreach ($scanDir as $key => $value){
    if (preg_match('/[.png|.jpg]{4}\b/', $value)){
        $correct = 'images/'.$value;
        $path = preg_replace('/[.png|.jpg]{4}\b/', '.txt', $value);
        $delete = preg_replace('/[.png|.jpg]{4}\b/', '', $value);
       
        include VIEW.'card1.php';
        if($start){
            include VIEW.'comment.php';
        }
       
        if(file_exists("images/$path")){
            $content=file_get_contents("images/$path");
            include VIEW.'card2.php';
        }
        if($start){
            include VIEW.'delComment.php';
        }
        if($start){
            include VIEW.'fullDelete.php';
        }
        include VIEW.'card3.php';
    }
}