<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="CSS/Sources/Reset.css">
		<link rel="stylesheet" href="CSS/Sources/TextBase.css">
		<link rel="stylesheet" href="CSS/Product.css">
	</head>
	<body>

    		<div class="Tovar">

			<div class="Status">
				<p class="TProductStatus"><?=$oneNews[Status];?></p>
			</div>

			<div class="Discount">
				<?=$oneNews[ImageDiscount];?>
			</div>

			<a href=""><div class="ProductPhoto">
				<img src="<?=$oneNews[Image];?>" alt="">
			</div></a>

			<a href=""><div class="ProductName">
				<p class="TProductName"><?=$oneNews[Name];?></p>
			</div></a>

			<div class="ProductInfo">
				<p class="TProductInfo">Код товара: <?=$oneNews[ID];?></p>
				<p class="TProductInfo">Производитель: <?=$oneNews[Manufacturer];?>, <?=$oneNews[Country];?></p>
			</div>

			<div class="ProductCostDisc">
				<p class="TProductCostDisc"><?=$oneNews[DiscountCost];?></p>
			</div>

			<div class="ProductCost">
				<p class="TProductCost"><?=$oneNews[Cost];?> Р</p>
			</div>

			<a href=""><div class="Buy">
				<p class="TButtonBuy">Добавить в корзину</p>
			</div></a>

		</div>

	</body>
</html>

