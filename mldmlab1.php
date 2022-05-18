<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Лабораторная работа 1</title>
    <link rel="stylesheet" href="styles/styles.css">
    <script type="text/javascript" src="scripts/scripts1.js"></script>

</head>
<body>
<a href="labs.php"><img class="button1" src="/images/назад.png"></a>

<form method="" action="">
    <table>
        <tr>
            <td>Первый массив</td>
            <td><input type="text" id="arr_1" value="" size=200/></td>
        </tr>
        <tr>
            <td>Второй массив</td>
            <td><input type="text" id="arr_2" value="" size=200/></td>
        </tr>
        <tr>
            <td><input type="button" class="button1" value="Объединение" onclick="unification();"/></td>
            <td><input type="button" class="button1" value="Пересечение" onclick="intersection();"/></td>
        </tr>
        <tr>
            <td><input type="button" class="button1" value="Дополнение A\B" onclick="additionAB();"/></td>
            <td><input type="button" class="button1" value="Дополнение B\A" onclick="additionBA();"/></td>
        </tr>
        <tr>
            <td><input type="button" class="button1" value="Симметрическая разность" onclick="symmetricdifference();"/></td>
        </tr>        
    </table>
</form>

<div id="outResult"></div>


</body>

</html>