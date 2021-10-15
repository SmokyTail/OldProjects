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
					<p class="TProductInfo"><a href="CatalogSearch.php?Name=<?=$name;?>&Country=<?=$country;?>&Count=<?=12;?>" class="TOnPage">12<a></p>
					<p class="TProductInfo"><a href="CatalogSearch.php?Name=<?=$name;?>&Country=<?=$country;?>&Count=<?=24;?>" class="TOnPage">24<a></p>
					<p class="TProductInfo"><a href="CatalogSearch.php?Name=<?=$name;?>&Country=<?=$country;?>&Count=<?=36;?>" class="TOnPage">36<a></p>

				</div>

				<div class="Comparison">

					<p class="TProductInfo"><a href="" id="TComparison"><img src="images/Comparison.png" alt="">Сравнить товары<a></p>

				</div>

			</div>

	</body>
</html>