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
			$Type = $_GET['Type'];

			$result = $conn->query("SELECT * FROM StrikeGun WHERE ID=$id");
			$oneProduct = mysqli_fetch_assoc($result);
		?>

		<div class="MainViewerDiv">

			<div class="MainTitle">
				<p class="TInfoTitle" id="TMainTitle"><?php echo $oneProduct['Name'] ?></p>
			</div>

			<div class="Float92x30">

				<div class="ViewerIdDiv">

					<p class="TProductInfo">Артикул: <span class="TViewerText"><?php echo $oneProduct['VendorCode'] ?></span></p>

				</div>

				<div class="ViewerStatusDiv">

					<p class="TProductInfo">Статус товара: <span class="TViewerText"><?php echo $oneProduct['Status'] ?></span></p>

				</div>		

				<div class="Comparison">

					<p class="TProductInfo"><a href="" id="TComparison"><img src="images/Comparison.png" alt="">Сравнить товары<a></p>

				</div>

			</div>

			<div class="Float92x500">

				<div class="ViewerImgDiv">
					<img src="<?=$oneProduct[Image];?>" alt="<?=$oneProduct['Name'];?>">
				</div>

				<div class="ViewerInfoDiv">

					<div class="ViewerInfoFloat">
						<p class="TInfoText" id="TPad">Производитель: <span class="TViewerText"><?php echo $oneProduct['Manufacturer'] ?></span></p>
					</div>

					<div class="ViewerInfoFloat">
						<p class="TInfoText" id="TPad">Страна: <span class="TViewerText"><?php echo $oneProduct['Country'] ?></span></p>
					</div>

					<?php
					
						if ($Type=='Автоматы' or $Type=='Винтовки' or $Type=='Пулемёты' or $Type=='Пистолеты-Пулемёты') {
							require_once ("block/viewerOptions/ViewerAS.php");
						} elseif ($Type=='Пистолеты') {
							require_once ("block/viewerOptions/ViewerPistol.php");
						} elseif ($Type=='Головные уборы') {
							require_once ("block/viewerOptions/ViewerHat.php");
						} elseif ($Type=='Маски') {
							require_once ("block/viewerOptions/ViewerMask.php");
						}
					
					?>

					<div class="ViewerInfoFloat">

						<div class="ViewerInfoFloatHalf">
							<p class="TInfoText" id="TPad">Цена: <span class="TViewerText"><?php echo $oneProduct['Cost'] ?> Р</span></p>
						</div>

						<div class="ViewerInfoFloatHalf">
							<p class="TViewerDiscCoast"><?php echo $oneProduct['DiscountCost'] ?></p>
						</div>
		
					</div>

					<div class="ViewerButtonFloat">

						<a href=""><div class="Buy">
							<p class="TButtonBuy">Добавить в корзину</p>
						</div></a>

					</div>

				</div>

				<div class="ViewerAboutDiv">

					<p class="TInfoTitle" id="TInfoTextAbout">Описание</p>
					<p class="TInfoText" id="TInfoTextAbout"><?php echo $oneProduct['About'] ?></p>

				</div>

			</div>

		</div>

	</body>
</html>