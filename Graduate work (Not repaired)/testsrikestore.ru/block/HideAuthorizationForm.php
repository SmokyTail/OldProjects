<!DOCTYPE html>
<html lang="ru">
	<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<link rel="stylesheet" href="CSS/Reset.css">
			<link rel="stylesheet" href="CSS/TextBase.css">
	  		<link rel="stylesheet" href="CSS/HideAuthorizationForm.css">
			<script src="JS/jquery-3.2.1.min.js"></script>
	   		<script src="JS/Main.js"></script>
	</head>
	<body>				

			<div class="ModalShadow"></div>

				<div class="ModalWindowDiv">
					
					<form action="Authorization.php" class="ModalWindow" method="post">

						<div class="WindowFloatOne">

							<p class="THideMenu" id="THideMenuMain">Вход на сайт</p> 
							<div class="Close">X</div>

						</div>

						<div class="WindowFloatTwo">

							<p class="THideMenu">Ваш логин:<br>
							<input name="Login" type="text" placeholder="Введите логин"></p>

						</div>

						<div class="WindowFloatTwo">

							<p class="THideMenu">Пароль:<br>
							<input name="Password" size="30" type="Password" placeholder="Введите пароль"></p>

						</div>

						<div class="WindowFloatThree">

							<input type="submit" name="submit" value="Войти">

						</div>

						<div class="WindowFloatFour">

    							<?php

    								if (empty($_SESSION['Login']) or empty($_SESSION['ID'])) {
    									echo "<p>Вы вошли на сайт, как гость<br></p>";
    								}
    								else
   								{
    									echo "<p>Вы вошли на сайт, как ".$_SESSION['Login']."</p>";
    								}

    							?>

						</div>

					</form>

				</div>

 	</body>
</html>