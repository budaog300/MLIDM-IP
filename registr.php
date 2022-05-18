<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head> 
<meta charset="UTF-8">
<title>Регистрация</title>
<link rel="stylesheet" href="styles/registr.css">
</head>
<body>
<a href="index.php"><img class="button1" src="/images/назад.png"></a>
<div class="registr">
    <?php
        if ($_COOKIE['user'] == ''):
    ?>
    <div class="row">
        <div class="reg2">
        <h1>Регистрация</h1>
            <form class="form1" action= "check.php" method="post" enctype="multipart/form-data">
             <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                <input type="password" class="form-control" name="pass2" id="pass2" placeholder="Введите пароль еще раз"><br>
                <input type="file" class="file" name="img_upload" id="img_upload"/>
                <div class="errortxt"> 
                <?php 
                    if (!empty($_SESSION['error'])) {
                        echo '<p>'.$_SESSION['error'].'</p>';
                    }
                    unset($_SESSION['error']);
                ?></div>
                <button class="btn btn-success" type="submit">Зарегистрироваться</button>
                <a href="avtorisator.php"><font size=3>Войти</font></a>
            </form>
        </div>
        
    </div>
    <?php endif; ?>
</div>

</body> 
</html>