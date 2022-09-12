<?php
    session_start();
    if ($_SESSION['role'] != 'admin'){
      header("Location : index.php");
    }
    include("db_con.php");
    $loading= connect();
    $result = mysqli_query($loading, "SELECT * FROM articles");
    mysqli_close($loading);  
?>
<!DOCTYPE html>
<html lang="ru">
<head>
        <meta charset="utf-8"> 
        <title>VH - Список статей</title>
        <link rel="stylesheet" href="admin.css">
        <link rel="stylesheet" href="style.css">
    </head>
<?php
  include("header.php"); 
?>

    <table>
      <thead>
        <tr>
          <td></td>
          <td>id</td>
          <td>themes</td>
          <td>tags</td>
          <td>date</td>
        </tr>
      </thead>
      <tbody>
        <?php foreach($result as $art):?>  
          <tr>
              <td><a  class="list_admin" href="/delete_art.php?id=<?=$art['id']?>">Удалить</a></td>
              <td><?=$art['id']?></td>
              <td><a class="list_admin" href="/news.php?id=<?=$art['id']?>"><?=$art['themes']?></a></td>
              <td><?=$art['tags']?></td>
              <td><?=$art['date']?></td>
              <td><?=$art['img_name']?></td>
          </tr>
        <?php endforeach;?>  
      </tbody>
    </table>



  </body>
</html>