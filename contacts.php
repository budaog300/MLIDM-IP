<!DOCTYPE html>
<html lang="en">
<head> 
<meta charset="UTF-8">
<title>Контакты</title>
<link rel="stylesheet" href="styles/styles.css">
<script type="text/javascript" src="scripts/jquery-3.6.0.js"></script>
<script type="text/javascript" src="scripts/scripts1.js"></script>
<script type="text/javascript" src="scripts/gallery.js"></script>
</head>
<body bgcolor="white">

<tr>
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
</tr>

<br>
<br>
<br>
<div class="container">
	
			
		<a href= "https://vk.com/guapsir"><div class="icon"> <img src="/images/vk.png" ></div>	</a>
			
		
		
		
		<a href= "https://github.com/budaog300"><div class="icon"><img src="/images/git.png" ></div></a>
			
		
	
</div>

	
	<div class=contact>
		<div class=contact1>
		<table>
		<tr>
			<td><h1 class="con">Мой номер телефона:</h1></td>
			<td><b class=tel>89648596968</b></h1></td>
		</tr>
		
		<tr>
			<td><h1 class="con">Моя электронная почта:</h1></td>			
			<td><b class=tel>danila.kirillov@list.ru</b></h1></td>
		</tr>
		
		</table>
		</div>
	<img class=boss src="/images/ya1.jpg">
	</div>




<!-- <div class=niz>
	<footer>
	<p><font size=4>Этот сайт создан в 2022 г.</font></p>
	</footer>
</div> -->
</body> 
</html>