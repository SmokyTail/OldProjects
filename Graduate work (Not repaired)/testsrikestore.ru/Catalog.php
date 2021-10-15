<?php
	session_start();
	require_once ('db.php');

	require_once ("block/HideAuthorizationForm.php");
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Каталог</title>
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
				
				$MT=$_GET['MainType'];
				$T=$_GET['Type'];
				$ET=$_GET['ExtraType'];
				$Disc=$_GET['ImageDiscount'];
				$Recom=1;
				$Manu=$_GET['Manufacturer'];
				$Way="Catalog";
				
			?>

			<div class="MainDiv">

				<?php
				
					require_once ("block/PHP/Way.php");
					
				?>
									
				<div class="CatalogMainDiv">
				
					<?php if(isset($_GET['MainType']) or isset($_GET['Type']) or isset($_GET['ExtraType']) or isset($_GET['Manufacturer'])){ ?>
						
						<div class="LeftBlock">
			
							<?php
								
								if($MT=='Страйкбольное оружие'){
									require_once("block/catalog/Filtres/CatalogSGFiltres.php");
								} elseif($MT=='Снаряжение'){
									require_once("block/catalog/Filtres/CatalogEqFiltres.php");
								} elseif($MT=='Расходники'){
									require_once("block/catalog/Filtres/CatalogConFiltres.php");
								} elseif($MT=='Аккумуляторы и ЗУ'){
									require_once("block/catalog/Filtres/CatalogBatFiltres.php");
								}

								if($T=='Автоматы'){
									require_once("block/catalog/Filtres/CatalogSGFiltres.php");
									require_once("block/catalog/Filtres/CatalogSGASFiltres.php");
									require_once("block/catalog/Filtres/CatalogSGnotPistolFiltres.php");
								} elseif($T=='Винтовки' or $T=='Пулемёты' or $T=='Пистолеты-пулемёты'){
									require_once("block/catalog/Filtres/CatalogSGFiltres.php");
									require_once("block/catalog/Filtres/CatalogSGnotPistolFiltres.php");
								} elseif($T=='Пистолеты'){
									require_once("block/catalog/Filtres/CatalogSGFiltres.php");
									require_once("block/catalog/Filtres/CatalogSGPistolETFiltres.php");
									require_once("block/catalog/Filtres/CatalogSGPistolFiltres.php");
								} elseif($T=='Головные уборы'){
									require_once("block/catalog/Filtres/CatalogEqFiltres.php");
									require_once("block/catalog/Filtres/CatalogEqHatFiltres.php");
								} elseif($T=='Маски'){
									require_once("block/catalog/Filtres/CatalogEqFiltres.php");
									require_once("block/catalog/Filtres/CatalogEqMaskFiltres.php");
								} elseif($T=='Очки' or $T=='Наколенники, налокотники' or $T=='Перчатки' or $T=='Рюкзаки, сумки' or $T=='Разгрузки' or $T=='Кобуры' or $T=='Шарфы'){
									require_once("block/catalog/Filtres/CatalogEqFiltres.php");
									require_once("block/catalog/Filtres/CatalogMinFiltres.php");
								} elseif($T=='Шары' or $T=='Смазки, масло'){
									require_once("block/catalog/Filtres/CatalogConFiltres.php");
									require_once("block/catalog/Filtres/CatalogMinFiltres.php");
								} elseif($T=='Газ'){
									require_once("block/catalog/Filtres/CatalogConFiltres.php");
									require_once("block/catalog/Filtres/CatalogConGasFiltres.php");
									require_once("block/catalog/Filtres/CatalogMinFiltres.php");
								} elseif($T=='Аккумуляторы' or $T=='Зарядные устройства'){
									require_once("block/catalog/Filtres/CatalogBatFiltres.php");
									require_once("block/catalog/Filtres/CatalogMinFiltres.php");
								}

								if($ET=='АК-серия' or $ET=='G-серия' or $ET=='M-серия' or $ET=='Другиe модели'){
									require_once("block/catalog/Filtres/CatalogSGFiltres.php");
									require_once("block/catalog/Filtres/CatalogSGASFiltres.php");
									require_once("block/catalog/Filtres/CatalogSGnotPistolFiltres.php");
								} elseif($ET=='Beretta' or $ET=='Colt' or $ET=='Glock' or $ET=='Sig Sauer' or $ET=='Пистолет Макарова' or $ET=='Пистолет Ярыгина' or $ET=='Тульский Токарева' or $ET=='Другие модели'){
									require_once("block/catalog/Filtres/CatalogSGFiltres.php");
									require_once("block/catalog/Filtres/CatalogSGPistolETFiltres.php");
									require_once("block/catalog/Filtres/CatalogSGPistolFiltres.php");
								} elseif($ET=='CO2' or $ET=='Green gas'){
									require_once("block/catalog/Filtres/CatalogConFiltres.php");
									require_once("block/catalog/Filtres/CatalogConGasFiltres.php");
									require_once("block/catalog/Filtres/CatalogMinFiltres.php");
								}
								
								if(isset($_GET['Manufacturer'])){
									require_once("block/catalog/Filtres/CatalogManufacturerFiltres.php");
								}

							?>

						</div>

						<div class="RightBlock">

							<?php
								require ("block/catalog/CatalogBlock.php");
							?>

						</div>
						
					<?php }elseif(isset($_GET['ImageDiscount']) or isset($_GET['Recomendated'])){ ?>
						
						<?php
							require ("block/catalog/CatalogBlock.php");
						?>
						
					<?php } ?>

				</div>

				<?php
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
