<?php
	session_start();
	include ('db.php');
	
	$Way = "NewsViewer";
	
	require_once ("block/HideAuthorizationForm.php");
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<title><?php echo $oneProduct['Title'] ?></title>
			<link rel="SHORTCUT ICON" href="favicon.ico">
			<link rel="stylesheet" href="CSS/Sources/Reset.css">
			<link rel="stylesheet" href="CSS/Sources/TextBase.css">
	  		<link rel="stylesheet" href="CSS/Main.css">
	</head>
	<body>
  
		<?php
			$id = $_GET['ID'];

			$result = $conn->query("SELECT * FROM news WHERE ID=$id");
			$oneProduct = mysqli_fetch_assoc($result);
		?>
		
    	<div class="MegaDiv">

        	<?php
            		require_once ("block/Top.php");
        	?>

				<div class="MainDiv">

					<?php
						
						require_once ("block/NewsView.php");

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
