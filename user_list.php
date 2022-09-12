<?php
    session_start();
    if ($_SESSION['role'] != 'admin'){
      header("Location : index.php");
    }
    include("db_con.php");
    $loading= connect();
    $result = mysqli_query($loading, "SELECT * FROM user_data where id > 1");
    mysqli_close($loading);  
?>
<!DOCTYPE html>
<html lang="ru">
<head>
        <meta charset="utf-8"> 
        <title>VH - Список пользователей</title>
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
          <td>login</td>
          <td>role</td>
        </tr>
      </thead>
      <tbody>
        <?php foreach($result as $usr):?>  
          <tr>
              <td><a  class="list_admin" href="/delete_user.php?id=<?=$usr['id']?>">Удалить</a></td>
              <td><?=$usr['id']?></td>
              <td><?=$usr['login']?></td>
              <td><?=$usr['role']?></td>
              <td>
                <form method="post" id="form_for_admin" action="change_role.php">
                  <input type="hidden" name="id_r" value="<?=$usr['id']?>">
                  <select type="text" name="role_variant" style="width: 180px;">
                    <option value="common">common</option>
                    <option value="author">author</option>
                  </select>
                  <button id="change" type="submit" name="change_role" value="Сменить роль" style=" ">Сменить роль</submit>
                </form>
                  
              </td>
          </tr>
        <?php endforeach;?>  
      </tbody>
    </table>

  </body>
</html>