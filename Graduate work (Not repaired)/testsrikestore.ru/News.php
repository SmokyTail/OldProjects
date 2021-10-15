<?php
	session_start();
	include ('db.php');

	$Way = "Новости";
	
	require_once ("block/HideAuthorizationForm.php");
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Новости</title>
		<link rel="SHORTCUT ICON" href="favicon.ico">
		<link rel="stylesheet" href="CSS/Sources/Reset.css">
		<link rel="stylesheet" href="CSS/Sources/TextBase.css">
	  	<link rel="stylesheet" href="CSS/Main.css">
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
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
				
						require_once ("block/NewsBlock.php");

						require_once ("block/MainInfo.php");

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
