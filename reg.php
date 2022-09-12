<?php
	
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
        <meta charset="utf-8"> 
        <title>VH - регистрация</title>
        <link rel="stylesheet" href="style.css">
</head>
<?php 
include("header.php");
?>
	<h2 class="reg_label">Регистрация</h2>
	<form method="post" action="registration.php" name="reg-form">
		<div class="form-element">
			<label>Логин:</label>
			<input type="text" name="login" required>
		</div>
		<div class="form-element">
		<label>Пароль:</label>
		<input type="password" name="password" required>
		</div>
		<button type="submit" name="register" value="register">Регистрация</button>
		<?php
			if(isset ($_SESSION['msg'])){
				echo '<p class="msg">' . $_SESSION['msg'] . '<p>';
			}
			unset ($_SESSION['msg']);
		?>
	</form>
	
</body>

</html>