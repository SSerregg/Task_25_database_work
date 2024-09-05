<?php
require_once dirname(__DIR__,1).DIRECTORY_SEPARATOR.'config.php';

$errors = [];
 
if (!empty($_FILES)) {

 //echo '<pre>'; 
//print_r($_FILES); 
//echo '</pre>';

    for ($i = 0; $i < count($_FILES['file']['name']); $i++) {
 
        $fileName = $_FILES['file']['name'][$i];
 
        if ($_FILES['file']['size'][$i] > UPLOAD_MAX_SIZE) {
            $errors[] = 'Недопустимый размер файла ' . $fileName;
            continue;
        }
 
        if (!in_array($_FILES['file']['type'][$i], ALLOWED_TYPES)) {
            $errors[] = 'Недопустимый формат файла ' . $fileName;
            continue;
        }
 
        $filePath = UPLOAD_DIR . '/' . basename($fileName);
 
        if (!move_uploaded_file($_FILES['file']['tmp_name'][$i], $filePath)) {
            $errors[] = 'Ошибка загрузки файла ' . $fileName;
            continue;
        }
    }
}
header ('Location:/bootstrap.php');