<?php 
	include("db_con.php");
	$loading= connect();
	$article_id = $_GET['id'];
	$result = mysqli_query($loading, "DELETE FROM `articles` WHERE `articles`.`id` = $article_id ");
	mysqli_close($loading);
	header("Location: art_list.php");
	die();

?>