<?php
    session_start();
    include("db_con.php");
    $login = $_POST['login'];
    $password = $_POST['password'];
    trim($login);
    trim($password);
    #Подключение к серверу
    $link = connect();
    #Получение данных;
    $sql = "SELECT * FROM `user_data` where login = '$login'";
    $result = mysqli_query($link, $sql);
    if (mysqli_num_rows($result) == 1) {
        $pv = mysqli_query($link, $sql);
        $a= mysqli_fetch_array($pv);
        if(password_verify($password, $a['password'])){
            $_SESSION['user'] = $a['login'];
            $_SESSION['role'] = $a['role'];
            header('Location: index.php');
            mysqli_close($link);
        }
        else{
            $_SESSION['msg1'] = "Неверный пароль";
            header('Location: signin.php');
            mysqli_close($link);
        }
    
    }
    else {
        $_SESSION['msg1'] = "Неверный логин";
        header('Location: signin.php');
        mysqli_close($link);
    }
?>