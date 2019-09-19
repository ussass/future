<?php	
function addPost($table, $data){
	require 'configdb.php';
	$keys = implode(',', array_keys($data));
	$tags = ":" . implode(', :', array_keys($data));

	$pdo = new PDO('mysql:host='.$config["host"].'; dbname='.$config["dbname"], $config["user"], $config["password"]);
	$sql = "INSERT INTO {$table} ({$keys}) VALUES ({$tags})";
	$statement = $pdo->prepare($sql);
	$statement->execute($data);
}

function getPosts(){
	require 'configdb.php';
	$pdo = new PDO('mysql:host='.$config["host"].'; dbname='.$config["dbname"], $config["user"], $config["password"]);
	$sql = "SELECT * FROM posts";
	$statement = $pdo->prepare($sql);
	$statement->execute();
	$posts = $statement->fetchAll(PDO::FETCH_ASSOC);
	return $posts;
}
?>