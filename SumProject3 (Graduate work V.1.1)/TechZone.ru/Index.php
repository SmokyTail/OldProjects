<?php
	session_start();
	
	ini_set('display_errors',0);
	error_reporting(E_ALL);
	require_once ('db.php');
	
	$locate = $_GET['q'];
	$params = explode('/', $locate);
	
	$type = $params[0];
	if(isset($params[1])){		
		$id = $params[1];
	}
	
	if ($type === 'cart') {
		require_once "cart.php";
	}
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>TechZone - интернет магазин компьютерной техники.</title>
		<link rel="SHORTCUT ICON" href="favicon.ico">
		<link rel="stylesheet" content="text/css" href="CSS/Reset.css">
		<link rel="stylesheet" content="text/css" href="CSS/TextBase.css">
	  	<link rel="stylesheet" content="text/css" href="CSS/Main.css">
	</head>
	<body>
    	<div class="MegaDiv">
        	<?php
				require_once ("block/header/Top.php");
        	?>
			
			<div class="MainDiv">
				<?php
					require_once ("controllers/BlockSwitcher.php");
					
					if ($type != '' and $type != 'catalog') {
				?>				
						<div class="FooterBG" id="MiniFooter">
							<div class="Footer">
							</div>
						</div>
				<?	}?>
			</div>
			<? 	if ($type === '' or $type === 'catalog') { ?>		
					<div class="FooterBG">
						<div class="Footer">
						</div>
					</div>
			<?	}?>
		</div>
		
		<div class="scrollUp">
		</div>
		
		<?php
			require_once ("block/HideAuthorizationForm.php");
		?>	
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>		
		<script src="JS/Main.js"></script>
			
 	</body>
</html>
