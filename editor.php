<?php 
include "db_con.php";
 
$link = connect();
$content = $_POST['content'];
$thm = $_POST['themes'];
$tags = $_POST['tags'];
$imgname = $_FILES["myimage"]['name'];
if(isset($_POST['submit'])){
    $result = mysqli_query($link, "INSERT INTO articles (themes,text,tags,img_name) VALUES ('$thm','$content','$tags','$imgname')");
    if($result){
        mysqli_close($link);
    }
    
}

 
?>

<!DOCTYPE html>
<html lang="ru">
 <head>
    <meta charset="utf-8">
 <title>Добавление статей</title>
 <style type="text/css">
</style>
 <link rel="stylesheet" href="style.css">
<script src="ckeditor/ckeditor.js " ></script>
    <script src="editor.js"></script>
 </head>
 <?php 
 include("header.php");
 ?>

<form id="edit_form" method="post" action="editor.php" enctype="multipart/form-data" onsubmit="return validateFormReg();">
    <div class="edit">
        <label for='themes'>Тема(не более 90 символов)</label>
        <label class="msg"></label><br>
        <br>
        <textarea id='themes' name='themes'></textarea>
    </div>
    <div class="edit">
        <label for='content'>Статья</label>
        <label class="msg"></label><br>
        <textarea id='content' name='content'></textarea>
    </div>
    <div class="edit">
        <label>Теги(с большой буквы, разделяя пробелом)</label>
        <label class="msg"></label><br><br>
        <textarea id='tags' name='tags'></textarea>
    </div>
    <div class="edit">
        <input type="file" name="myimage">
    </div>
    <input id="add_art" type="submit" name="submit" value="Добавить статью">
</form>


<script>
    CKEDITOR.replace('content',{

     width: "500px",
     height: "300px"

}); 
</script>


</html>