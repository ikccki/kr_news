<?php 
	include("db_con.php");
	$loading= connect();
	$user_id = $_GET['id'];
	if($user_id != 1){
		$result = mysqli_query($loading, "DELETE FROM `user_data` WHERE `id` = $user_id ");
		mysqli_close($link);
		header("Location: user_list.php");
		die();
	}
	else {
        mysqli_close($link);
		header("Location: user_list.php");
		die();
	}
	
?>