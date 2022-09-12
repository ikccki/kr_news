<!DOCTYPE html>
<?php
    include("db_con.php");
    $loading= connect();
    $tag = $_GET['tag'];
    $res = mysqli_query($loading, $sql = "SELECT *  FROM articles WHERE tags LIKE '%$tag%'");
    mysqli_close($loading);
?>

<html lang="ru">
<head>
        <meta charset="utf-8"> 
        <title><?=$tag?></title>
        <link rel="stylesheet" href="style.css">
</head>
<?php 
    include("header.php");
    include("latest_news.php"); 
?>
        <div class="main">
            <?php foreach($res as $articles):?>  
                <article  class="main_news"><a class="link_on_main" href="/news.php?id=<?=$articles['id']?>"><div class="caption"><?=$articles['themes']?></div></a></article>
            <?php endforeach;?> 
        </div>      
    </body>
</html>