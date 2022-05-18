<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Лабораторная работа 2</title>
    <link rel="stylesheet" href="styles/styles.css">
   
    <script type="text/javascript" src="scripts/scripts2.js"></script>

</head>
<body>
<a href="labs.php"><img class="button1" src="/images/назад.png"></a>
<h3>Лабораторная работа №2</h3>
        <div>
            <div>Введите пары элементов</div>
            <div>
                <textarea id="textField" type="text" size="500"></textarea>
            </div>
            <div>
                <button onclick="showMatrix();">Сделать рассчет</button>
            </div>
            <div id="matrix"></div> 
            <br>
            <br>
            <div id="reflection"></div>
            <div id="symmetry"></div>
            <div id="antisymmetry"></div>
            <div id="transitivity"></div>
            <div>Пример ввода: a b, c d, e f</div>
        </div>
    </body>
</html>