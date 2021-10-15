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

		<div class="FloatOne">

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

			<div class="Comparison">

				<p class="TProductInfo"><a href="" id="TComparison"><img src="images/Comparison.png" alt="">Сравнить товары<a></p>

			</div>

		</div>

	</body>
</html>