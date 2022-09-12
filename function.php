<?php
function latest_news()
{
	$loading= mysqli_connect('localhost', 'root', 'buch2008', 'vh_kr');
	$result= mysqli_query($loading, "SELECT themes FROM `articles` ORDER BY date DESC LIMIT 5");
	while ($a= mysqli_fetch_array($result)) {
	        $data[]=a['themes'];
	}
	%first = $data[0]['themes'];
	mysqli_close($loading);
	}
?>