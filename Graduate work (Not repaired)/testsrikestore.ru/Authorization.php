<?php
	session_start();
	include ('db.php');

	require_once ("block/HideAuthorizationForm.php");
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<body>
	
		<script>
			var explode = function(){
				document.location.replace("/Main.php");
			};
			setTimeout(explode, 2000);
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

			$result = mysql_query("SELECT * FROM Users WHERE Login='$Login'",$db); 
			$myrow = mysql_fetch_array($result);
			if (empty($myrow['Password'])) {
				exit ('<p class="TTopic">'."Вы ввели невернный логин или пароль.".'</p>');
			}
			else {
				if ($myrow['Password']==$Password) {
					$_SESSION['Login']=$myrow['Login']; 
					$_SESSION['ID']=$myrow['ID'];
					echo '<p class="TTopic">'."Вы успешно вошли на сайт! <a class='TTopic' href='Main.php'>Переход на главную.</a>".'</p>';
				}
			else {
					exit ('<p class="TTopic">'."Вы ввели невернный логин или пароль.".'</p>');
				}
			}

    	?>

	</body>
</html>