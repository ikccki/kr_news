<?php
    
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
        <meta charset="utf-8"> 
        <title>VH - вход</title>
        <link rel="stylesheet" href="style.css">
</head>
<?php
include("header.php");
?> 
    <h2 class="reg_label">Вход</h2>
    <form method="post" action="log_in.php" name="reg-form">
        <div class="form-element">
            <label>Логин:</label>
            <input type="text" name="login" id="login" required>
        </div>
        <div class="form-element">
        <label>Пароль:</label>
        <input type="password" name="password" required>
        </div>
        <button type="submit" name="register" value="register">Вход</button>
        <?php
            if(isset ($_SESSION['msg1'])){
                echo '<p class="msg">' . $_SESSION['msg1'] . '<p>';
            }
            unset ($_SESSION['msg1']);
        ?>
    </form>
    
</body>

</html>