<?php
    session_start();
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

    $pass=md5($pass."damn123");

    $mysql = new mysqli('127.0.0.1','root','','lab4');

    $result = $mysql -> query("SELECT * FROM users WHERE login='$login' AND pass='$pass'");
    $user = $result -> fetch_assoc();
    if(count($user) == 0) {
        $_SESSION['error'] = "Такой пользователь не найден";
    }
    if($_SESSION['error']!=""){
        header('Location:/avtorisator.php');
        exit();
    } 

    setcookie('user', $user['name'], time() + 3600 * 24 * 30, "/");
    setcookie('login', $user['login'], time() + 3600 * 24 * 30, "/");
    setcookie('admin', $user['admin'], time() + 3600 * 24 * 30, "/");
    setcookie('img', $user['img'], time() + 3600 * 24 * 30, "/");
    $mysql->close();

    header('Location: /userpage.php');

?>

   
