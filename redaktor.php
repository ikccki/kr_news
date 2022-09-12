<?php 
include "db_con.php";

$link = connect();
$id = $_GET['id'];

$result = mysqli_query($link, "SELECT * from articles where id = '$id' ");

?>

<!DOCTYPE html>
<html lang="ru">
 <head>
     <title>Редактирование статей</title>
     <style type="text/css">
    </style>
     <link rel="stylesheet" href="style.css">
<script src="ckeditor/ckeditor.js " ></script>
 </head>
 <?php 
 include("header.php"); 
 ?>
<form id="edit_form" method="post" action="red.php" enctype="multipart/form-data">
    <?php foreach($result as $a):?>  
    <div class="edit">
        <label for='themes'>Тема(не более 90 символов)</label><br>
            <textarea id='themes' name='themes'><?=$a['themes']?></textarea>
    </div>
    <div class="edit">
        <label for='content'>Статья</label><br>
        <textarea id='content' name='content'><?=$a['text']?></textarea>
    </div>
    <div class="edit">
        <label>Теги(с большой буквы, разделяя пробелом)</label><br>
        <textarea id='tags' name='tags' ><?=$a['tags']?></textarea>
    </div>
    <div class="edit">
        <input type="file" name="myimage">
    </div>
    <input type="hidden" name="id_red" value="<?=$a['id']?>">
    <?php endforeach; ?>
    <input id="add_art" type="submit" name="submit" value="Изменить статью">
</form>


 <body> 
<script>
    CKEDITOR.replace('content',{

     width: "500px",
     height: "300px"

}); 
</script>

 </body>
</html>