<?php 
	include("db_con.php");
	$loading= connect();
	$role = $_POST['role_variant'];
	$id = $_POST['id_r'];
	$result = mysqli_query($loading, "UPDATE `user_data` SET `role` = '$role' WHERE `user_data`.`id` = $id;");
		mysqli_close($loading);
		header("Location: user_list.php");
		die();

	
?>