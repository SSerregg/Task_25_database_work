<?php
require_once '..'.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'config.php';

$errors = [];
 
if (!empty($_FILES)) {

 //echo '<pre>'; 
//print_r($_FILES); 
//echo '</pre>';

    for ($i = 0; $i < count($_FILES['file']['name']); $i++) {
 
        //$fileName = str_replace(' ', '', "$_FILES[file][name][$i]");
        $fileName = $_FILES['file']['name'][$i];
        $filePathName = str_replace(' ', '', "$fileName");
      
   
        if ($_FILES['file']['size'][$i] > UPLOAD_MAX_SIZE) {
            $errors[] = 'Недопустимый размер файла ' . $filePathName;
            continue;
        }
 
        if (!in_array($_FILES['file']['type'][$i], ALLOWED_TYPES)) {
            $errors[] = 'Недопустимый формат файла ' . $filePathName;
            continue;
        }
 
        $filePath = UPLOAD_DIR . '/' . basename($filePathName);
 
        if (!move_uploaded_file($_FILES['file']['tmp_name'][$i], $filePath)) {
            $errors[] = 'Ошибка загрузки файла ' . $filePathName;
            continue;
        }
    }
}
header ('Location:/index.php');