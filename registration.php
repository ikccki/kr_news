<?php
    session_start();
    include("db_con.php");
    $login = $_POST['login'];
    $password = $_POST['password'];
    #Подключение к серверу
    $link = connect();
    #Получение данных;

    trim($login);
    trim($password);
    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "SELECT * FROM `user_data` where login = '$login'";
    $result = mysqli_query($link, $sql);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['msg'] = "Этот логин уже занят";
        header('Location: reg.php');
        mysqli_close($link);
        }
    else{
        $sql="INSERT INTO user_data (login, password) VALUES('$login','$password')";
        $result = mysqli_query($link, $sql);
        if($result){
            $_SESSION['user'] = $login;
            header("Location: index.php");
            mysqli_close($link);
            die();

            }
        }
    
?>