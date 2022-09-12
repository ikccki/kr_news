<!DOCTYPE html>
<?php
    include("db_con.php");
     
    
    $loading= connect();
    $article_id = $_GET['id'];
    $result = mysqli_query($loading, "SELECT * FROM articles WHERE id = '$article_id'");
    $a= mysqli_fetch_array($result);
    $b = $a['tags'];
    $c = explode(" ",$b);
    $img = $a['img_name'];
    mysqli_close($loading);
?>
<?php foreach($result as $content):?>  
<html lang="ru">
<head>
        <meta charset="utf-8"> 
        <title><?=$content['themes']?></title>
        <link rel="stylesheet" href="style.css">
    </head>
<?php 
include("header.php");
?>
<?php
include("latest_news.php")

?>
    <div class="news">
        <div class="tags">
        <?php foreach($c as $tag):?>  
            <a href="/news_by_tag.php?tag=<?=$tag?>"><h3 class="tag"><?=$tag?></h3></a>
        <?php endforeach;?> 
        </div>
            <?php if ($_SESSION['role'] == 'admin' or $_SESSION['role'] == 'author'): ?>
             <a href="/redaktor.php?id=<?=$content['id']?>"><div class="edit_text">Редактировать статью</div></a>
            <?php endif; ?>
        
        <div class="date_news">
            <?=$content['date']?>
        </div>
        <div class="head_news">
            <h2><?=$content['themes']?></h2>
        </div>
        <p>
            
            <?php if ($img != ""): ?>
                <img src="/img/<?=$content['img_name']?>" alt=""/>
            <?php endif; ?>
            <?=$content['text']?>
    </div>       
<?php endforeach;?>     
    </body>
</html>