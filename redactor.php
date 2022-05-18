<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head> 
<meta charset="UTF-8">
<title>Изменить пользователя</title>
<link rel="stylesheet" href="styles/registr.css">

</head>

<body>
<?php
        $mysql= new mysqli('127.0.0.1','root','','lab4');
        $log=$_GET['id'];
        $result=$mysql->query("SELECT * FROM `users` WHERE `login`='$log'");
        $data=$result->fetch_assoc(); 
        ?>
<a href="userpage.php"><img class="button1" src="/images/назад.png"></a>
<div class="head">
    <div class="username">Пользователь:<a href="userpage.php" class="username"><?=$_COOKIE['user']?></a> <a href="/exit.php">Выход</a></div>
</div>

<div class="registr">
<?php if($_COOKIE['admin']!=1):?>
    <div class="reg2">
    <form action="updateuser.php?id=<?print($data['login'])?>" method="post" enctype="multipart/form-data" class="admininput">
        <h1>Изменить себя</h1>
        <input type="text"  value="<?print($data['login'])?>" placeholder="Новый логин" class="form-control" name="login" id="login"/>
        <input type="text"  value="<?print($data['name'])?>" placeholder="Новое имя" class="form-control" name="name" id="name"/>
        <input type="password"  placeholder="Новый пароль" class="form-control" name="pass" id="pass"/>
        <input type="file" class="file" name="img_upload" id="img_upload"/>
        <div class="errortxt"> 
            <?php 
                if (!empty($_SESSION['error'])) {
                    echo '<p>'.$_SESSION['error'].'</p>';
                }
                unset($_SESSION['error']);
            ?></div>
        <button class="btn btn-success" type="submit" id="add" name="add">Изменить</button>
    </form>
    <?php else:?>
        Данный пользователь является админом
    <?php endif;?>
    </div>
    </div>
</body>

</html>