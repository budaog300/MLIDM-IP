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



<div class=obomne>
	<div class=obomne1>
		<div class="text1">
			<div class="обомне">
				<h1 class="заголовок">Учеба в школе</h1>
				Я учился в Лицее при УлГТУ №45. Проучился я там с 1 по 11 класс, учился хорошо, участвовал в олимпиадах, спортивных мероприятиях	
			</div>
			<img class=ya1 src="/images/школа1.jpg">
		</div>
	</div>

	<div class=obomne2>
		<div class="text2">
			<div class="обомне">
				<h1 class="заголовок">Спорт</h1>
				Занимаюсь волейболом и играю за сборную УлГТУ. Также до волейбола занимался плаваньем, 
				что помогло в формировании физики тела	
			</div>
			<img class=ya1 src="/images/волейбол.jpg">
		</div>
	</div>
		
	<div class=obomne3>
		<div class="text3">
			<div class="обомне">
				<h1 class="заголовок">Учеба в УлГТУ</h1>
				На данный момент я являюсь студентом Ульяновского Государственного Технического Университета на факультете информаионных систем и технологий
				Также я староста в группе ИВТАСбд-12
			</div>
			<img class=ya1 src="/images/УлГТУ.jpg">
		</div>
	</div>
	
</div>
	


<!-- <div class=niz>
	<footer>
		<p><font size=4>Этот сайт создан в 2022 г.</font></p>
	</footer>
</div>
 -->


</body>

</html>