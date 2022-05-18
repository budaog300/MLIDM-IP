<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Лабораторные работы</title>
    <link rel="stylesheet" href="styles/styles.css">
    <script type="text/javascript" src="scripts/scripts1.js"></script>

</head>
<body>


<div class="panelnav">
<a href="glavnaya.php"><font size=5>Главная</font></a></td>
		<a href="aboutme.php"><font size=5>О себе</font></a></td>
		<a href="labs.php"><font size=5>Лабы по дискретке</font></a></td>
		<a href="gallery.php"><font size=5>Галерея</font></a></td>
		<a href="contacts.php"><font size=5>Контакты</font></a></td>
		<div class="avtorisator">
			<?php
				if($_COOKIE['user']==''):
			?>
			
			
			<a href="registr.php"><font size=5>Регистрация</font></a></td>
			<a href="avtorisator.php"><font size=5>Вход</font></a></td>
			
			</a>
			<?php else:?>
				<div>
					<a href="exit.php"><font size=5>Выход</font></a>
					<a href="userpage.php"><font size=5><?=$_COOKIE['user']?></font></a> 
				</div>
			<?php endif;?>
		</div>
</div>
<h1 class=mylabs> Мои лабораторные работы </h1>
<div class=labs>
    <a href="mldmlab1.php">Первая лабораторная работа по МЛиДМ</a> <br>
	<a href="mldmlab2.php">Вторая лабораторная работа по МЛиДМ</a> <br>
	<a href="mldmlab3.php">Третья лабораторная работа по МЛиДМ</a> <br>
	<a href="mldmlab4.php">Четвертая лабораторная работа по МЛиДМ</a> <br>
	<a href="mldmlab5.php">Пятая лабораторная работа по МЛиДМ</a> <br>
</div>
</body>
</html>