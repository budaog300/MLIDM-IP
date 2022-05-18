<?php
    include_once $_SERVER['DOCUMENT_ROOT']."/dbclass.php";
    session_start();
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);
    $log=$_GET['id'];
    $mysql = new mysqli('127.0.0.1','root','','lab4');
    if (mb_strlen($login) < 5 || mb_strlen($login) > 15) {
        $_SESSION['error'] = "Недопустимая длина логина";
    }
    else if (mb_strlen($name) < 3 || mb_strlen($name) > 15) {
        $_SESSION['error'] = "Недопустимая длина имени";
    }
    else if (mb_strlen($pass) < 6 || mb_strlen($pass) > 20) {
        $_SESSION['error'] = "Недопустимая длина пароля (от 6 до 20 символов)";
    }
    else if(empty($_FILES['img_upload']['tmp_name'])){
        $_SESSION['error'] = "Загрузите Аватарку";
    }
    
    $pass = md5($pass."damn123");
    DB::getInstance();
    $login = htmlspecialchars($_POST['login']);
        $query = "SELECT * FROM users WHERE login = '$login'";
        $res = DB::query($query);
        if (($item = DB::fetch_array($res)) == true && $login != $log) {
            if ($chooseUserLogin != $item['login']) {
                echo "Такой пользователь уже существует";
                exit();
            }
        }
    if($_SESSION['error']!=""){
    header('Location:/redactor.php?id='.$log);
    exit();
    } 
    //$img=addslashes(file_get_contents($_FILES['img_upload']['tmp_name']));

    $mysql->query("UPDATE `users` SET `name` = '$name' WHERE `users`.`login` = '$log'");
    $mysql->query("UPDATE `users` SET `pass` = '$pass' WHERE `users`.`login` = '$log'");
    if(!empty($_FILES['img_upload']['tmp_name'])){
        $path='./upload/avatars/'.time().$_FILES['img_upload']['name'];
        move_uploaded_file($_FILES['img_upload']['tmp_name'],$path);
        $mysql->query("UPDATE `users` SET `img` = '$path' WHERE `users`.`login` = '$log'");
    }
    $mysql->query("UPDATE `users` SET `login` = '$login' WHERE `users`.`login` = '$log'");
    
    $mysql->close();

    setcookie('user',$user['name'],time()-3600,"/");
    setcookie('login',$user['login'],time()-3600,"/");
    setcookie('admin',$user['admin'],time()-3600,"/");
    setcookie('img', $user['img'], time()-3600, "/");
    
    $mysql= new mysqli('127.0.0.1','root','','lab4');
    $result=$mysql->query("SELECT * FROM `users` WHERE `login`='$login' AND `pass`='$pass'");
    $user=$result->fetch_assoc();
   
    setcookie('user',$user['name'],time()+3600,"/");
    setcookie('login',$user['login'],time()+3600,"/");
    setcookie('admin',$user['admin'],time()+3600,"/");
    setcookie('img', $user['img'], time()+3600, "/");

    header('Location: /userpage.php');
?>