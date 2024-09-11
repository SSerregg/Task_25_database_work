<?php
session_start();


require_once BD;

$comm = $_POST['comment'] ?? null;
$comment = ucfirst(strtolower($comm));
$pictureName = $_POST['pictureName']?? null;
$nickName = ucfirst(strtolower($_SESSION['uName']));
$date = date("Y-m-d H:i:s");
$db = WorkWithBD::connect();
$stmt = $db->prepare("INSERT INTO comments (pictureName, nickName, date, comment) VALUES (:pictureName, :nickName, :date, :comment)");
		$stmt->bindParam(':pictureName', $pictureName);
		$stmt->bindParam(':nickName', $nickName);
		$stmt->bindParam(':date', $date);
		$stmt->bindParam(':comment', $comment);

		
		$stmt->execute();




header ('Location:/index.php');