<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Лабораторная работа 3</title>
    <link rel="stylesheet" href="styles/styles.css">
    <script type="text/javascript" src="scripts/scripts3.js"></script>
</head>
<body>
<a href="labs.php"><img class="button1" src="/images/назад.png"></a>
<h3>Лабораторная работа №3</h3>
<div>
        <div>Первый массив</div>
            <div><input id="setA" type="text" id="arr_1" value="" size=200/></div>
        <div>Второй массив</div>
            <div><input id="setB" type="text" id="arr_2" value="" size=200/></div>
        <div>Отношение</div>
            <div><input id="ratio" type="text" id="arr_2" value="" size=200/></div>
    <div>
        <button onclick="start();">Рассчитать</button>
    </div>
        <div id="resultAB"></div>
        <div id="resultBA"></div>   
        
</div>
<br>
        <br>
        <br>
<div>Пример ввода:<br>
            Первый массив: a b c d<br>
            Второй массив: 1 2 3 4<br>
            Отношение: a 1, b 2, c 3, d 4</div>

</body>
</html>