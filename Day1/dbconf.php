<?php
//constant variable
//define('SERVERNAME', '127.0.0.1:3306');
//define('USERNAME', 'root');
//define('PASSWORD', 'mariadb');
//define('DBNAME', 'school');
$dbHost = getenv('DB_HOST');
$dbName = getenv('DB_NAME');
$dbUser = getenv('DB_USER');
$dbPass = getenv('DB_PASS');

try{
	//connect with database
	$connect = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
	if (!$connect){
		die("Connection Failed".mysqli_connect_error());
	}
	else{
	//echo "Connection successfully";
	}
}
catch (Exception $e){
	die($e->getMessage());
}
//echo "abc<br>";

?>