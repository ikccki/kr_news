<?php
include "db_con.php"; 
$link = connect();
$id = $_POST['id_red'];
$content = $_POST['content'];
$thm = $_POST['themes'];
$tags = $_POST['tags'];
$file = $_FILES["myimage"]["name"];
$image = addslashes(file_get_contents($file));
if(isset($_POST['submit'])){
    
    $result = mysqli_query($link, "UPDATE articles SET themes = '$thm', text = '$content', tags = '$tags', img_name = '$imagename' WHERE id = '$id'");
    if($result){
        mysqli_close($link);
        header("Location: index.php");
    }
    
}

mysqli_close($link); 
?>