<div class="ModalShadow"></div>

<div class="ModalWindowDiv">	
	<form action="block/PHP/Authorization.php" class="ModalWindow" method="post">
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
					else {
						echo "<p>Вы вошли на сайт, как ".$_SESSION['Login']."</p>";
					}
				?>
		</div>
	</form>
</div>