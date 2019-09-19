<?php 
	require 'configdb.php';
	$db = new PDO('mysql:host='.$config["host"].'; dbname='.$config["dbname"], $config["user"], $config["password"]);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "CREATE table posts (id INT(11) AUTO_INCREMENT PRIMARY KEY, name VARCHAR(50) NOT NULL, content TEXT NOT NULL, reg_date VARCHAR(20) NOT NULL);";

	$createTable = $db->exec($sql);

	header("Location: /index.php");
?>