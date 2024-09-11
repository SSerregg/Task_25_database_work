<?php



class WorkWithBD{
	public static function connect(){
	try{
		return new PDO("mysql:host=locallhost;dbname=mysqldata", 'root', 'admin');
		
	}
	catch(PDOException){
		echo 'нет соединения с базой';
		return null;
	}
}
}