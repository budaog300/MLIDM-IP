<?php
    include_once $_SERVER['DOCUMENT_ROOT']."/dbclass.php";
    session_start();
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);
    $pass2=filter_var(trim($_POST['pass2']),
    FILTER_SANITIZE_STRING);
    
    if (mb_strlen($login) < 5 || mb_strlen($login) > 15) {
        $_SESSION['error'] = "Недопустимая длина логина";
    }
    else if (mb_strlen($name) < 3 || mb_strlen($name) > 15) {
        $_SESSION['error'] = "Недопустимая длина имени";
    }
    else if (mb_strlen($pass) < 6 || mb_strlen($pass) > 20) {
        $_SESSION['error'] = "Недопустимая длина пароля (от 6 до 20 символов)";
    }
    else if($pass!=$pass2){
        $_SESSION['error'] = "Пароли не совпадают";
    }
    else if(empty($_FILES['img_upload']['tmp_name'])){
        $_SESSION['error'] = "Загрузите Аватарку";
    }
    $mysql = new mysqli('127.0.0.1','root','','lab4');
    DB::getInstance();
    $login = htmlspecialchars($_POST['login']);
        $query = "SELECT * FROM users WHERE login = '$login'";
        $res = DB::query($query);
        if (($item = DB::fetch_array($res)) == true) {
            if ($chooseUserLogin != $item['login']) {
                echo "Такой пользователь уже существует";
                exit();
            }
        }
    if($_SESSION['error']!=""){
    header('Location:/registr.php');
    exit();
    } 
   
    $path='./upload/avatars/'.time().$_FILES['img_upload']['name'];
    move_uploaded_file($_FILES['img_upload']['tmp_name'],$path);

    $pass = md5($pass."damn123");
   
    $mysql->query("INSERT INTO `users` (`login`, `pass`, `name`,`img`) VALUES('$login', '$pass', '$name', '$path')");
    $mysql->close();
    header('Location: /avtorisator.php');
    
?>