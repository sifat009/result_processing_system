<?php
	$host = 'localhost';
	$db_name = 'result_processing';
	$user = 'root';
	$password = '';

	try {
		$db = new PDO("mysql:dbname={$db_name};host={$host}", $user, $password);
	} catch(PDOException $e) {
		echo "Couldn't Connect ". $e->getMessage();
	}


?>