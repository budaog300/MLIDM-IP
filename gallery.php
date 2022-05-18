<!DOCTYPE html>
<html lang="en">
<head> 
<meta charset="UTF-8">
<title>Галерея</title>
<link rel="stylesheet" href="styles/styles.css">
<script type="text/javascript" src="scripts/jquery-3.6.0.js"></script>
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


<div class="gallery">
		<div class="main_gallery">
			<!-- <div class="buttonGallery" onclick="leftChangeImage()"> <img class="button" src="/images/gallery/влево.png"> </div> -->
               
					
					  	<div class="knopki"> 		
							<div class="buttonGallery" onclick="leftChangeImage()"> <img class="button" src="/images/gallery/влево.png"> </div>
							
								<div id="mainImage">  
                  
				  					</div>
								
							<div class="buttonGallery" onclick="rightChangeImage()"> <img class="button" src="/images/gallery/вправо.png"> </div>
						</div>
				<!-- <div class="buttonGallery" onclick="rightChangeImage()"> <img class="button" src="/images/gallery/вправо.png"> </div> -->
            
	    </div>
</div>




<!-- <div class=niz>
	<footer>
	<p><font size=4>Этот сайт создан в 2022 г.</font></p>
	</footer>
</div> -->

</body> 
</html>