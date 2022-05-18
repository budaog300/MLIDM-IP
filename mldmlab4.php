<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Лабораторная работа 4</title>
    <link rel="stylesheet" href="styles/styles.css">
    <script type="text/javascript" src="scripts/scripts4.php"></script>

</head>
<body>
<a href="labs.php"><img class="button1" src="/images/назад.png"></a>
    <h3>Лабораторная работа №4</h3>
    <form class ="gir" method="post" action="/scripts/scripts4.php">
        <div>Введите матрицу смежности</div>
            <textarea name="mass" placeholder="nxn"  style="height: 110px; width: 200px;"></textarea><br><br>
            <div>Начальная точка</div>
            <input type="text" name="begin"><br><br>
            <div>Конечная точка</div>
            <input type="text" name="end"><br><br>
            <input type="submit" value="Рассчитать"><br>
    </form>
    <div class="gir">Пример ввода:<br>
        0 4 1 4<br>
        3 0 7 5<br>
        0 1 0 2<br>
        5 1 9 0<br>
    </div>
    <div class="gir">
        <?php 
            if (isset($_SESSION['error_text']) && !empty($_SESSION['error_text'])) {
                echo '<p> Ошибка: '.$_SESSION['error_text'].'</p>';
            }
            unset($_SESSION['error_text']);
            if (isset($_SESSION['finalmas']) && !empty($_SESSION['finalmas'])) {
                echo '<p>'.$_SESSION['finalmas'].'</p>';
            }
            unset($_SESSION['finalmas']);
            /* if (isset($_SESSION['ways']) && !empty($_SESSION['ways'])) {
                echo '<p>'.$_SESSION['ways'].'</p>';
            }
            unset($_SESSION['ways']); */
        ?> 
        </div>
</body>
</html>
   