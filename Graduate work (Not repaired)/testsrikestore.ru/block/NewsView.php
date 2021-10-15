<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="CSS/Reset.css">
		<link rel="stylesheet" href="CSS/TextBase.css">
		<link rel="stylesheet" href="CSS/Viewer.css">
		<link rel="stylesheet" href="CSS/MainInfo.css">
	</head>
	<body>

		<?php
			$id = $_GET['ID'];

			$result = $conn->query("SELECT * FROM news WHERE ID=$id");
			$oneNews = mysqli_fetch_assoc($result);
			
			require_once ("block/PHP/Way.php");
		?>
		
		<div class="MainViewerNewsDiv">

			<div class="MainTitle">
				<p class="TInfoTitle" id="TMainTitle"><?php echo $oneNews['Title'];?></p>
			</div>

			<div class="ViewerNewsImgDiv">
				<img src="<?=$oneNews[Image];?>" alt="<?=$oneNews['Name'];?>">
			</div>

			<div class="ViewerNewsTextDiv">

				<p class="TInfoText"><?php echo $oneNews['Greeting'];?></p>
				<p class="TInfoText"><?php echo $oneNews['Text'];?></p>

			</div>

		</div>

	</body>
</html>