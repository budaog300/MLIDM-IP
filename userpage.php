<!DOCTYPE html>
<html lang="en">
<head> 
<meta charset="UTF-8">
<title>Мой сайт</title>
<link rel="stylesheet" href="styles/registr.css">
<link rel="stylesheet" href="styles/styles.css">
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
<div class="userpage">
	<div class="userpage1">
		<img class="usericon" src="<?php echo $_COOKIE['img']?>" alt="">
	</div>
	<div class="polsovatel">
		<?php if($_COOKIE['admin']==1):?>
				Админ:
				<?php echo ($_COOKIE['user']) ?><br>
				<a href="adminpage.php" class="button12">Панель админа</a>
		<?php else:?>
				Пользователь:
				<?php echo ($_COOKIE['user']) ?><br>
				<a href="redactor.php?id=<?=$_COOKIE['login']?>" class="button12">Изменить</a>
		<?php endif;?>
	</div>
</div>
</body> 
</html>