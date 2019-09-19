<?php 
	require 'post.php';

	$posts = array_reverse(getPosts());
	
	include "views/show.php";
?>