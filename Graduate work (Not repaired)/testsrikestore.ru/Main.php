<?php
	session_start();	
	ini_set('display_errors',0);
	error_reporting(E_ALL);	
	require_once ('db.php');
	//require_once ('db1.php');
	require_once ("block/HideAuthorizationForm.php");
?>

<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>StrikeStore - Магазин страйкбольного оружия и снаряжения</title>
		<link rel="SHORTCUT ICON" href="favicon.ico">
		<link rel="stylesheet" content="text/css" href="CSS/Reset.css">
		<link rel="stylesheet" content="text/css" href="CSS/TextBase.css">
	  	<link rel="stylesheet" content="text/css" href="CSS/Main.css">
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="JS/Main.js"></script>
		<script src="JS/js.js"></script>
	</head>
	<body>

    	<div class="MegaDiv">

        	<?php
				require_once ("block/Top.php");
        	?>

				<div class="MainDiv">

					<?php

						require_once ("block/Slider.php");

						require_once ("block/NewProducts.php");

						require_once ("block/DiscProducts.php");

						require_once ("block/MainInfo.php");

						require_once ("block/StrikeInfo.php");

						require_once ("block/MenuCatalog.php");
							
					?>

				</div>

				<div class="FooterBG">

					<div class="Footer">

					</div>

				</div>

			</div>

		<div class="scrollUp">

		</div>

 	</body>
</html>
