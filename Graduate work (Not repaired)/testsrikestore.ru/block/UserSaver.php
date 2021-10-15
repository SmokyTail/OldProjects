<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<body>
		<?php
			if (isset($_POST['Login'])) { $Login = $_POST['Login']; if ($Login == '') { unset($Login);} } 
			if (isset($_POST['Password'])) { $Password=$_POST['Password']; if ($Password =='') { unset($Password);} }
			if (isset($_POST['RepeatPassword'])) { $RepeatPassword=$_POST['RepeatPassword']; if ($RepeatPassword =='') { unset($RepeatPassword);} }
			if (isset($_POST['FirstName'])) { $FirstName = $_POST['FirstName']; if ($FirstName == '') { unset($FirstName);} } 
			if (isset($_POST['LastName'])) { $LastName=$_POST['LastName']; if ($LastName =='') { unset($LastName);} }
			if (isset($_POST['Email'])) { $Email=$_POST['Email']; if ($Email =='') { unset($Email);} }

		$log =="";
		$error="no";
			$Login = stripslashes($Login);
			$Login = htmlspecialchars($Login);
			$Password = stripslashes($Password);
			$Password = htmlspecialchars($Password);
			$Login = trim($Login);
		if (empty($Login) or empty($Password))
			{
			$log.="<li>Необходимо заполнить все поля</li>"; $error="yes";
			}
			elseif($Password!=$RepeatPassword){
				$log.="<li>Пароли не совпадают</li>"; $error="yes";
			}
			elseif(strlen($Login)<2){
				$log.="<li>Логин не менее 2 символов</li>"; $error="yes";
			}
			elseif(empty($Email)||(!preg_match("/^[a-zA-Z0-9_\.\-]+@([a-zA-Z0-9\-]+\.)+[a-zA-Z]{2,6}$/", $Email))){
				$log.="<li>Неправильно введен адрес электронной почты</li>"; $error="yes";
			}
			elseif((strlen($Password)< 6)||(!preg_match("/([a-z]+)/", $Password)))	{
					$log.="<li>Пароль должен быть не менее 6 символов  и должен содержать латинские буквы</li>"; $error="yes";
			}

		if($error=="no")
			{   
			$Password = trim(md5(md5($Password)));
			require_once ("../db.php");
			$result = mysql_query("SELECT ID FROM Users WHERE Login='$Login'",$db);
				$myrow = mysql_fetch_array($result);
				if (!empty($myrow['ID'])) {
				exit ("Введённый логин уже зарегистрирован. Введите другой логин.");
				}
				if(isset($_POST['CheckBoxClick']) && $_POST['CheckBoxClick'] == '1')
				{
				$result2 = mysql_query ("INSERT INTO Users (Login,Password,Email,FirstName,LastName) VALUES('$Login','$Password','$Email','$FirstName','$LastName')");
				echo "Вы успешно зарегистрированы!";
				}
				else {echo "Нужно разрешение на обработку данных<br><a href='../Registration.php'>Назад</a>";}
			}
		else
			{ 
					echo "<p style='font-family: 'Arial', cursive;'><font color=#FF3333></font></p><ul style='list-style: none; font: 11px Verdana; color:#000; border:1px solID black; background-color:#f8b50059; padding:5px; margin:5px 10px;'><strong>Ошибка!</strong>".$log."</ul><br />";
			}
			
		?>
		
	</body>
</html>