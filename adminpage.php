<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head> 
<meta charset="UTF-8">
<title>Панель админа</title>
<link rel="stylesheet" href="styles/registr.css">

</head>

<body>
<a href="userpage.php"><img class="button1" src="/images/назад.png"></a>
<div class="head">
     
    <div class="headText">
    <h1>Страница админа</h1>
    </div>
        <div class="username">Пользователь:<a href="userpage.php" class="username1"><?=$_COOKIE['user']?></a> <a href="/exit.php">Выход</a></div>
</div>

<div class="registr">
    
<?php if($_COOKIE['admin']==1):?>
    <?php
     $link= new mysqli('127.0.0.1','root','','lab4');
     if(isset($_GET['del'])){
        $login=$_GET['del'];
         $query="DELETE FROM `users` WHERE `login`='$login'";
         mysqli_query($link,$query);
     }
     $result=$link->query("SELECT * FROM `users`");
     for($data=[];$row=$result->fetch_assoc();){
        if($row['login']!="admin"){
            $data[]=$row;
        }
     };
     ?>
     
    <div class="reg2">
        <h1>Редактировать/удалить</h1>
    <table class="table">
    <tr>
    <td class="pol">Логин</td>
    <td class="pol">Имя</td>
     <?php foreach ($data as $user){?>
        <tr>
            <td class="pol1"><?=$user['login']?></td>
            <td class="pol1"><?=$user['name']?></td>
            <td class="pol1"><a href="?del=<?=$user['login']?>" class="button25">Удалить</a></td>
            <td class="pol1"><a href="update.php?id=<?=$user['login']?>" class="button6">Изменить</a></td>
        </tr>
        <?php }?>
    </table>
    </div>
    <?php else:?>
        Данный пользователь не является админом
    <?php endif;?>
    </div>
</body>

</html>
