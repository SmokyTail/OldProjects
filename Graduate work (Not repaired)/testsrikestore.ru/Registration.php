<?php

	require_once ("block/HideAuthorizationForm.php");
	
	$Way = "Регистрация";
	
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Регистрация</title>
		<link rel="SHORTCUT ICON" href="favicon.ico">
		<link rel="stylesheet" href="CSS/Sources/Reset.css">
		<link rel="stylesheet" href="CSS/Sources/TextBase.css">
	  	<link rel="stylesheet" href="CSS/Main.css">
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script src="JS/Main.js"></script>
	</head>
	<body>

		<div class="MegaDiv">

        	<?php
            		require_once ("block/Top.php");
        	?>

			<div class="MainDiv">

				<?php
				
					require_once ("block/PHP/Way.php");
					
					require_once ("block/RegistrationBlock.php");
					
				?>

				<div class="FooterBG" id="MiniFooter">

					<div class="Footer">

					</div>

				</div>
				
			</div>

		</div>

		<div class="scrollUp">

		</div>

	</body>
</html>
