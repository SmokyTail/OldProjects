<?php
	session_start();
	include ('../../db.php');
?>

<script>
	var explode = function(){
		document.location.replace("http://techzone.ru");
	};
	setTimeout(explode, 3000);
</script>

<?php		
	if (isset($_POST['Login'])) { 
		$Login = $_POST['Login']; 
		if ($Login == '') { 
			unset($Login);
		}
	} 

	if (isset($_POST['Password'])) { 
		$Password=$_POST['Password']; 
		if ($Password =='') { 
			unset($Password);
		} 
	}

	if (empty($Login) or empty($Password)) {
		exit ('<p class="TTopic">'."Имеются пустые поля!".'</p>');
	}

	$Login = stripslashes($Login);
	$Login = htmlspecialchars($Login);
	$Password = stripslashes($Password);
	$Password = htmlspecialchars($Password);

	$Login = trim($Login);
	$Password = trim(md5(md5($Password)));

	$result = $conn->query("SELECT * FROM users WHERE Login='$Login'") or die(mysqli_error()); 
	$myrow = mysqli_fetch_array($result);
	if (empty($myrow['Password'])) {
		exit ('<p class="TTopic">'."Вы ввели невернный логин или пароль.".'</p>');
	}
	else {
		if ($myrow['Password']==$Password) {
			$_SESSION['Login']=$myrow['Login']; 
			$_SESSION['ID']=$myrow['ID'];
			echo '<p class="TTopic">'."Вы успешно вошли на сайт! <a class='TTopic' href='http://techzone.ru'>Переход на главную.</a>".'</p>';
		}
		else {
			exit ('<p class="TTopic">'."Вы ввели невернный логин или пароль.".'</p>');
		}
	}
?>