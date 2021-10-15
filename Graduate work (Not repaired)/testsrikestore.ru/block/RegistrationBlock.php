<html lang="ru">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="CSS/Reset.css">
		<link rel="stylesheet" href="CSS/TextBase.css">
	  	<link rel="stylesheet" href="CSS/MainInfo.css">
	</head>
	<body>

		<div class="MainInfoDiv">

			<div class="MainTitle">
				
				<p class="TInfoTitle" id="TMainTitle">Регистрация нового пользователя</p>

			</div>

			<div class="MainInfoText">
				
					<form action="block/UserSaver.php" method="POST" class="">
					
						<div class="DivHalf">
						
							<div class="Div0x35">

								<p class="TInfoTextRight" id="TRegistr"> Введите вашу почту: </p>
								
							</div>
								
							<div class="Div0x35">
								
								<p class="TInfoTextRight"> Введите логин пользователя: </p>
								
							</div>
								
							<div class="Div0x35">
								
								<p class="TInfoTextRight"> Введите пароль: </p>
								
							</div>
								
							<div class="Div0x35">
								
								<p class="TInfoTextRight"> Повторите пароль: </p>

							</div>
							
							<div class="Div0x35">
												
								<p class="TInfoTextRight"> Введите ваше имя: </p>
								
							</div>
								
							<div class="Div0x35">
								
								<p class="TInfoTextRight"> Введите вашу фамилию: </p>
								
							</div>
							
						</div>
						
						<div class="DivHalf">
						
							<div class="Div0x35">
						
								<p class="TInfoText" id="TPad"> <input class="RegisInp" name="Email" id="Email" type="text" maxlength="50" placeholder="E-mail" required> </p>
								
							</div>
								
							<div class="Div0x35">
								
								<p class="TInfoText" id="TPad"> <input class="RegisInp" name="Login" id="Login" type="text" maxlength="20" placeholder="Логин" required> </p>
								
							</div>
								
							<div class="Div0x35">
								
								<p class="TInfoText" id="TPad"> <input class="RegisInp" name="Password" id="Password" type="password" maxlength="50" placeholder="Пароль" required> </p>
								
							</div>
								
							<div class="Div0x35">

								<p class="TInfoText" id="TPad"> <input class="RegisInp" name="RepeatPassword" id="RepeatPassword" type="password" maxlength="50" placeholder="Повторите пароль" required> </p>
								
							</div>
								
							<div class="Div0x35">
								
								<p class="TInfoText" id="TPad"> <input class="RegisInp" name="FirstName" id="FirstName" type="text" maxlength="20" placeholder="Имя" required> </p>
								
							</div>
								
							<div class="Div0x35">
								
								<p class="TInfoText" id="TPad"> <input class="RegisInp" name="LastName" id="LastName" type="text" maxlength="20" placeholder="Фамилия" required> </p>
								
							</div>
							
						</div>
						
						<div class="Div0x0">
						
							<p class="TRegisTrue">
							
								<input name="CheckBoxClick" class="CheckBoxClick" type="checkbox" value="0" placeholder="Пароль"> Нажимая кнопку «Зарегистрироваться», Вы принимаете условия <a class="TARegisTrue" href="#">Пользовательского соглашения</a>.
								
							</p>
							
						</div>
						
						<div class="DivRegisBut"> <button class="RegisBut" name="Submit" id="Submit"> <p> Зарегистрироваться </p> </button> </div>
						
					</form>

			</div>

		</div>

 	</body>
</html>