<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Лабораторная работа 5</title>
    <link rel="stylesheet" href="styles/styles.css">
    <script type="text/javascript" src="scripts/scripts5.php"></script>
</head>
<body>
<a href="labs.php"><img class="button1" src="/images/назад.png"></a>
    <h3>Лабораторная работа №5</h3>
    <form method="post" action="/scripts/scripts5.php">
    <div>Введите матрицу смежности</div>
        <textarea name="mass" placeholder="nxn" style="height: 110px; width: 200px;"></textarea><br><br>
        <input type="submit" value="Рассчитать"><br>
    <div class="gir">Пример ввода:<br>
        0 4 1 4<br>
        3 0 7 5<br>
        0 1 0 2<br>
        5 1 9 0<br>
    </div>
    </form>
    <div class="gir">
    <?php 
        if (isset($_SESSION['error_text']) && !empty($_SESSION['error_text'])) {
            echo '<p> Ошибка: '.$_SESSION['error_text'].'</p>';
        }
        unset($_SESSION['error_text']);
        if (isset($_SESSION['mas']) && !empty($_SESSION['mas'])) {
            echo '<p>'.$_SESSION['mas'].'</p>';
        }
        unset($_SESSION['mas']);
    ?> 
    </div>
</body>
</html>
   