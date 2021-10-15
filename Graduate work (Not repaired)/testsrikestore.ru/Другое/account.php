<?php
session_start();
include ("block/db.php");
?>
<!Doctype html>
<html>
 <head>
	 <title>Личный кабинет</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="/markiz/images/icon.ico" type="image/x-icon">
	<link rel="stylesheet" href="/markiz/styles/style_v2.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="/markiz/styles/account.css">
	<link rel="stylesheet" href="/markiz/styles/media.css" type="text/css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	
	<script src="/markiz/script/jquery-3.3.1.min.js"></script>
	<script src="/markiz/script/lichnii_kabinet.js"></script>
	<script type="text/javascript" src="/markiz/script/js_account_form.js"></script>
	
	
	<?php 
			$id=($_SESSION['user_id']);
			$user_login=($_SESSION['user_login']);
			$result = mysql_query("SELECT * FROM users WHERE user_id=$id");
			$myrow = mysql_fetch_assoc($result);
	?>
 </head>
<body>
<div>
	<?php
	include("block/header.php")
	?>
</div>
	<div class="content">
	<div class="blockmenu">
		<?php
	include("block/topmenu.php")
	?>
    </div>
	<div class="categor">
		<div class="left">
			<?php
				include("block/sidebar.php");
			?>
		</div>
		<div class="right">
		
		<?php 
			$id=($_SESSION['user_id']);
			$result = mysql_query("SELECT * FROM users WHERE user_id=$id");
			$myrow = mysql_fetch_assoc($result);
		?>
			<h1>Здравствуйте, <?php echo $myrow['name']." ".$myrow['otchestvo']?></h1>
			<div>
				<form class="account-change" action="#" method='POST'>
					<h2>Изменение пароля</h2>
					<p>Текущий пароль:<br>
					<input name="password" id="current_password" size="30" type="password" placeholder="Введите текущий пароль"></p>
					<p>Новый пароль:</p>
					<input name="change_password" id="change_password" size="30" type="password" placeholder="Введите новый пароль"></p>
					<p>Повторите новый пароль:</p>
					<input name="change_password_repeat" id="change_password_repeat" size="30" type="password" placeholder="Повторите новый пароль"></p>
					<div align="center" id='loadBarImgPass'></div>
					<input type="submit" name="submit" id="pass_click" value="Ок">
				</form>
			
				<form  class="account-change" action="#" method="post">
					<h2>Изменение логина</h2>
					<p>Текущий логин:<br>
					<input name="login"="30" id="login" type="text" placeholder="Введите логин"></p>
					<p>Новый логин<br>
					<input name="login"="30" id="newlogin" type="text" placeholder="Введите новый логин"></p>
					<p>Повторите новый логин<br>
					<input name="login"="30" id="repeatlogin" type="text" placeholder="Введите новый логин"></p>
					<input type="submit" name="submit" id="click" value="Ок">
					<div align="center" id='loadBarImg'></div>
				</form >
				
				<form class="account-change" action="#" method="post" id="cForm2">
					<div align="center" id='loadBar'></div>
					<h2>Изменение личных данных</h2>
					<p>Фамилия:<br>
					<input name="familiya" type="text" id="familiya" placeholder="<?php echo $myrow['familiya']?>"></p>
					<p>Имя:<br>
					<input name="name" type="text" id="name" placeholder="<?php echo $myrow['name']?>"></p>
					<p>Отчество:<br>
					<input name="otchestvo"="30" id="otchestvo" type="text" placeholder="<?php echo $myrow['otchestvo']?>"></p>
					<input type="submit" id="btn" value="Ок">
				</form>
				<div>
				<h2>Ваши предыдущие заказы</h2>
				</div>
			</div>		
		</div>
    </div>
	</div>
<div class="footer">
<?php
include("block/footer.php")
?>
	</div>
</body>
</html>
