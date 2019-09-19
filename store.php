<?php
	require 'post.php';

	addPost('posts', [
		'name' => $_POST['title'],
		'content' => $_POST['content'],
		'reg_date' => date("H:i   d.m.Y"),
		]);
	header('Location: /');	
?>