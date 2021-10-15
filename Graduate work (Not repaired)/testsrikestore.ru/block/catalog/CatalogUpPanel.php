<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="CSS/Sources/Reset.css">
		<link rel="stylesheet" href="CSS/Sources/TextBase.css">
  		<link rel="stylesheet" href="CSS/Catalog_Product.css">
	  	<link rel="stylesheet" href="CSS/Product.css">
 	</head>
	<body>
	
		<?php
		
			if($MT=='Страйкбольное оружие'){ 
				$NameMainType='Страйкбольное оружие' ;
			} elseif($MT=='Снаряжение') { 
				$NameMainType='Снаряжение'; 
			} elseif($MT=='Расходники') { 
				$NameMainType='Расходники'; 
			} elseif($MT=='Аккумуляторы и ЗУ') { 
				$NameMainType='Аккумуляторы и ЗУ'; 
			}
			
			if($T=='Автоматы') { 
				$NameMainType='Автоматы' ;
			} elseif($T=='Винтовки') { 
				$NameMainType='Винтовки';
			} elseif($T=='Пулемёты') { 
				$NameMainType='Пулемёты';
			} elseif($T=='Пистолеты-пулемёты') { 
				$NameMainType='Пистолеты-пулемёты';
			} elseif($T=='Пистолеты') { 
				$NameMainType='Пистолеты';
			} elseif($T=='Головные уборы') { 
				$NameMainType='Головные уборы';
			} elseif($T=='Очки') { 
				$NameMainType='Очки';
			} elseif($T=='Маски') { 
				$NameMainType='Маски';
			} elseif($T=='Перчатки') {
				$NameMainType='Перчатки';
			} elseif($T=='Наколенники, налокотники') { 
				$NameMainType='Набор щитков';
			} elseif($T=='Рюкзаки, сумки') { 
				$NameMainType='Рюкзаки';
			} elseif($T=='Разгрузки') { 
				$NameMainType='Разгрузки';
			} elseif($T=='Кобуры') { 
				$NameMainType='Кобуры';
			} elseif($T=='Шарфы') { 
				$NameMainType='Шарфы';
			} elseif($T=='Шары') { 
				$NameMainType='Шары';
			} elseif($T=='Смазки, масло') { 
				$NameMainType='Смазки и масло'; 
			} elseif($T=='Газ') { 
				$NameMainType='Газ'; 
			} elseif($T=='Аккумуляторы') { 
				$NameMainType='Аккумуляторы'; 
			} elseif($T=='Зарядные устройства') { 
				$NameMainType='Зарядные устройства'; 
			}
			
			if($ET=='АК-серия') { 
				$NameMainType='АК-серия';
			} elseif($ET=='M-серия') { 
				$NameMainType='M-серия';
			} elseif($ET=='G-серия') { 
				$NameMainType='G-серия';
			} elseif($ET=='Другиe модели') { 
				$NameMainType='Другие модели';
			} elseif($ET=='Beretta') { 
				$NameMainType='Модель Beretta';
			} elseif($ET=='Colt') { 
				$NameMainType='Модель Colt';
			} elseif($ET=='Glock') { 
				$NameMainType='Модель Glock';
			} elseif($ET=='Sig_Sauer') { 
				$NameMainType='Модель Sig Sauer';
			} elseif($ET=='Пистолет Макарова') { 
				$NameMainType='Пистолет Макарова';
			} elseif($ET=='Пистолет Ярыгина') { 
				$NameMainType='Пистолет Ярыгина';
			} elseif($ET=='Тульский Токарева') { 
				$NameMainType='Тульский Токарева';
			} elseif($ET=='Другие модели') { 
				$NameMainType='Другие модели';
			} elseif($ET=='CO2') { 
				$NameMainType='CO2'; 
			} elseif($ET=='Green gas') { 
				$NameMainType='Green gas'; 
			}
			
			if(isset($_GET['Manufacturer']) and $Manu=='AandK') { 
				$NameMainType='A&K';
			} elseif(isset($_GET['Manufacturer']) and $Manu=='AGM') { 
				$NameMainType='AGM';
			} elseif(isset($_GET['Manufacturer']) and $Manu=='ASG') { 
				$NameMainType='ASG';
			} elseif(isset($_GET['Manufacturer']) and $Manu=='Ares') { 
				$NameMainType='Ares';
			} elseif(isset($_GET['Manufacturer']) and $Manu=='Cyma') { 
				$NameMainType='Cyma';
			} elseif(isset($_GET['Manufacturer']) and $Manu=='DBoys') { 
				$NameMainType='DBoys';
			} elseif(isset($_GET['Manufacturer']) and $Manu=='GandG') { 
				$NameMainType='G&G';
			} elseif(isset($_GET['Manufacturer']) and $Manu=='Galaxy') { 
				$NameMainType='Galaxy';
			} elseif(isset($_GET['Manufacturer']) and $Manu=='Gletcher') { 
				$NameMainType='Gletcher';
			} elseif(isset($_GET['Manufacturer']) and $Manu=='Guarder') { 
				$NameMainType='Guarder';
			} elseif(isset($_GET['Manufacturer']) and $Manu=='Jing Gong') { 
				$NameMainType='Jing Gong';
			} elseif(isset($_GET['Manufacturer']) and $Manu=='King Arms') { 
				$NameMainType='King Arms';
			} elseif(isset($_GET['Manufacturer']) and $Manu=='Kingrin') { 
				$NameMainType='Kingrin'; 
			} elseif(isset($_GET['Manufacturer']) and $Manu=='KJW') { 
				$NameMainType='KJW'; 
			} elseif(isset($_GET['Manufacturer']) and $Manu=='LCT') { 
				$NameMainType='LCT'; 
			} elseif(isset($_GET['Manufacturer']) and $Manu=='Mechanix') { 
				$NameMainType='Mechanix'; 
			} elseif(isset($_GET['Manufacturer']) and $Manu=='Umarex') { 
				$NameMainType='Umarex'; 
			} elseif(isset($_GET['Manufacturer']) and $Manu=='WE') { 
				$NameMainType='WE'; 
			}
			
			if(isset($_GET['ImageDiscount']) and $Disc=='') { 
				$NameMainType='Товары со скидкой';
			}
			
			if(isset($_GET['Recomendated']) and $Recom=='1') { 
				$NameMainType='Наши рекомендации';
			}
			
		?>
		
		<div class="FloatOne">
		
			<div class="CategoriesName">

				<p class="TCategoryName"><?=$NameMainType?></p>

			</div>

			<div class="OnPage">

				<p class="TProductInfo" id="TOnPage">Количество на странице:</p>
				
				<?php if(isset($_GET['MainType'])){ ?>
					<p class="TProductInfo"><a href="Catalog.php?MainType=<?=$MT;?>&Count=<?=12;?>" class="TOnPage">12<a></p>
					<p class="TProductInfo"><a href="Catalog.php?MainType=<?=$MT;?>&Count=<?=24;?>" class="TOnPage">24<a></p>
					<p class="TProductInfo"><a href="Catalog.php?MainType=<?=$MT;?>&Count=<?=36;?>" class="TOnPage">36<a></p>
				<?php }elseif(isset($_GET['Type'])){ ?>
					<p class="TProductInfo"><a href="Catalog.php?Type=<?=$T;?>&Count=<?=12;?>" class="TOnPage">12<a></p>
					<p class="TProductInfo"><a href="Catalog.php?Type=<?=$T;?>&Count=<?=24;?>" class="TOnPage">24<a></p>
					<p class="TProductInfo"><a href="Catalog.php?Type=<?=$T;?>&Count=<?=36;?>" class="TOnPage">36<a></p>
				<?php }elseif(isset($_GET['ExtraType'])){ ?>
					<p class="TProductInfo"><a href="Catalog.php?ExtraType=<?=$ET;?>&Count=<?=12;?>" class="TOnPage">12<a></p>
					<p class="TProductInfo"><a href="Catalog.php?ExtraType=<?=$ET;?>&Count=<?=24;?>" class="TOnPage">24<a></p>
					<p class="TProductInfo"><a href="Catalog.php?ExtraType=<?=$ET;?>&Count=<?=36;?>" class="TOnPage">36<a></p>
				<?php }elseif(isset($_GET['ImageDiscount'])){ ?>
					<p class="TProductInfo"><a href="Catalog.php?ImageDiscount=<?=$Disc;?>&Count=<?=12;?>" class="TOnPage">12<a></p>
					<p class="TProductInfo"><a href="Catalog.php?ImageDiscount=<?=$Disc;?>&Count=<?=24;?>" class="TOnPage">24<a></p>
					<p class="TProductInfo"><a href="Catalog.php?ImageDiscount=<?=$Disc;?>&Count=<?=36;?>" class="TOnPage">36<a></p>
				<?php }elseif(isset($_GET['Recomendated'])){ ?>
					<p class="TProductInfo"><a href="Catalog.php?Recomendated=<?=$Recom;?>&Count=<?=12;?>" class="TOnPage">12<a></p>
					<p class="TProductInfo"><a href="Catalog.php?Recomendated=<?=$Recom;?>&Count=<?=24;?>" class="TOnPage">24<a></p>
					<p class="TProductInfo"><a href="Catalog.php?Recomendated=<?=$Recom;?>&Count=<?=36;?>" class="TOnPage">36<a></p>
				<?php }elseif(isset($_GET['Manufacturer'])){ ?>
					<p class="TProductInfo"><a href="Catalog.php?Manufacturer=<?=$Manu;?>&Count=<?=12;?>" class="TOnPage">12<a></p>
					<p class="TProductInfo"><a href="Catalog.php?Manufacturer=<?=$Manu;?>&Count=<?=24;?>" class="TOnPage">24<a></p>
					<p class="TProductInfo"><a href="Catalog.php?Manufacturer=<?=$Manu;?>&Count=<?=36;?>" class="TOnPage">36<a></p>
				<?php } ?>
				

			</div>

			<div class="Sorting">

			</div>

			<div class="Comparison">

				<p class="TProductInfo"><a href="" id="TComparison"><img src="images/Comparison.png" alt="">Сравнить товары<a></p>

			</div>

		</div>

	</body>
</html>