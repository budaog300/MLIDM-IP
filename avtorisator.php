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
<a href="registr.php"><img class="button1" src="/images/назад.png"></a>
<div class="registr">
    <?php
        if ($_COOKIE['user'] == ''):
    ?>
    <div class="row">
        <div class="reg2">
            <h1>Авторизация</h1>
            <form action= "auth.php" method="post">
                <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                <div class="errortxt"> 
                <?php 
                    if (!empty($_SESSION['error'])) {
                        echo '<p>'.$_SESSION['error'].'</p>';
                    }
                    unset($_SESSION['error']);
                ?></div>
                <button class="btn btn-success" type="submit">Авторизироваться</button>
                <a href="registr.php"><font size=3>Зарегистрироваться</font></a>
            </form>
        </div>
    </div>
    <?php endif; ?>
</div>

</body> 
</html>