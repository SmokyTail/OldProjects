<?php
	session_start();
	require_once ('db.php');
	
	require_once ("block/HideAuthorizationForm.php");
	
	$Way = "ProductWiever";
	$id = $_GET['ID'];

	$result = $conn->query("SELECT * FROM strikegun WHERE ID=$id");
	$oneProduct = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title><?php echo $oneProduct['Name'] ?></title>
		<link rel="SHORTCUT ICON" href="favicon.ico">
		<link rel="stylesheet" href="CSS/Reset.css">
		<link rel="stylesheet" href="CSS/TextBase.css">
		<link rel="stylesheet" href="CSS/Main.css">
	</head>
	<body>
	
    	<div class="MegaDiv">

        	<?php
            		require_once ("block/Top.php");
        	?>

				<div class="MainDiv">

					<?php
					
						require_once ("block/PHP/Way.php");
					
						require_once ("block/ProductView.php");

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
