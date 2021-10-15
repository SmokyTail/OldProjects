<?php
    if (isset($_POST['user_login'])) { $login = $_POST['user_login']; if ($login == '') { unset($user_login);} } 
	//заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['user_password'])) { $password=$_POST['user_password']; if ($password =='') { unset($password);} }
	if (isset($_POST['repeat_password'])) { $repeat_password=$_POST['repeat_password']; if ($repeat_password =='') { unset($repeat_password);} }
	if (isset($_POST['name'])) { $name = $_POST['name']; if ($name == '') { unset($name);} } 
    if (isset($_POST['otchestvo'])) { $otchestvo=$_POST['otchestvo']; if ($otchestvo =='') { unset($otchestvo);} }
	if (isset($_POST['familiya'])) { $familiya=$_POST['familiya']; if ($familiya =='') { unset($familiya);} }
	if (isset($_POST['email'])) { $email=$_POST['email']; if ($email =='') { unset($email);} }
	if (isset($_POST['phone'])) { $phone=$_POST['phone']; if ($phone =='') { unset($phone);} }
	
$log =="";
$error="no";
	$login = stripslashes($login);
    $login = htmlspecialchars($login);
	$password = stripslashes($password);
    $password = htmlspecialchars($password);
    $login = trim($login);
 if (empty($login) or empty($password))
    {
    $log.="<li>Введите всю информацию</li>"; $error="yes";
    }
elseif($password!=$repeat_password){
	$log.="<li>Пароли не совпадают</li>"; $error="yes";
}
elseif(strlen($login)<2){
	$log.="<li>Логин не менее 2 символов</li>"; $error="yes";
}
elseif(empty($email)||(!preg_match("/^[a-zA-Z0-9_\.\-]+@([a-zA-Z0-9\-]+\.)+[a-zA-Z]{2,6}$/", $email))){
	$log.="<li>Неправильно введен адрес электронной почты</li>"; $error="yes";
}
elseif
	((strlen($password)< 6)||(!preg_match("/([a-z]+)/", $password)))	{
		$log.="<li>Пароль должен быть не менее 6 символов  и должны быть буквы</li>"; $error="yes";
	}

	
//Если нет ошибок  
if($error=="no")
	{   
	$password = trim(md5(md5($password)));
	include ("db.php");
	$result = mysql_query("SELECT user_id FROM users WHERE user_login='$login'",$db);
		$myrow = mysql_fetch_array($result);
		if (!empty($myrow['user_id'])) {
		exit ("<p>Извините, введённый вами логин уже зарегистрирован. Введите другой логин.</p>");
		}
		if(isset($_POST['checkbox_click']) && $_POST['checkbox_click'] == '1')
		{
		$result2 = mysql_query ("INSERT INTO users (user_login,user_password,name,otchestvo,familiya,email,phone) VALUES('$login','$password','$name','$otchestvo','$familiya','$email','$phone')");
		echo "<p>Вы успешно зарегистрированы!</p>";
		}
		else {echo "<p>Нужно разрешение на обработку данных<br><a href='../register.php'>Назад</a></p>";}
	}
else//если ошибки есть
	{ 
			echo "<p style='font-family: 'Comic Sans MS', cursive;'><font color=#FF3333><strong>Ошибка !</strong></font></p><ul style='list-style: none; font: 11px Verdana; color:#000; border:1px solid #c00; border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px; background-color:#f8b50059; padding:5px; margin:5px 10px;'>".$log."</ul><br />"; //Нельзя отправлять пустые сообщения
	}
	
?>