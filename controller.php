<?php

$scanDir=scandir('images');

foreach ($scanDir as $key => $value){
    if (preg_match('/[.png|.jpg]{4}\b/', $value)){
        $correct = 'images/'.$value;
        $path = preg_replace('/[.png|.jpg]{4}\b/', '.txt', $value);
        $delete = preg_replace('/[.png|.jpg]{4}\b/', '', $value);
        include VIEW.'card1.php';
       
        if(file_exists("images/$path")){
            $content=file_get_contents("images/$path");
            include VIEW.'card2.php';
        }
        include VIEW.'card3.php';
    }
}