<?php
	$id = $_GET['ID'];

	$sql = $conn->query("SELECT * FROM `products` WHERE `productID`=$id") or die(mysqli_error());
	$oneProducts = mysqli_fetch_assoc($sql);
	
	$TofProd=$oneProducts['Type'];
	
	$sql = $conn->query("SELECT * FROM `products` INNER JOIN `$TofProd` WHERE products.productID='$id' and $TofProd.ID='$id'") or die(mysqli_error());	
	$oneProduct = mysqli_fetch_array($sql, MYSQLI_ASSOC);
	
	if($oneProduct['Status'] == 1) {
		$status = "Есть в наличии";
	} else {
		$status = "Нет в наличии";
	}
		
	if($oneProduct['DiscountPrice'] != 0) {
		$pricer ='
			<div class="ViewerInfoFloatHalf">
				<p class="TInfoText" id="TPad">Цена: <span class="TViewerText">'.$oneProduct['DiscountPrice'].' Р</span></p>
			</div>

			<div class="ViewerInfoFloatHalf">
				<p class="TViewerDiscCoast">'.$oneProduct['Price'].' Р</p>
			</div>
		';
	} else {
		$pricer ='
			<div class="ViewerInfoFloatHalf">
				<p class="TInfoText" id="TPad">Цена: <span class="TViewerText">'.$oneProduct['Price'].' Р</span></p>
			</div>
		';
	}
?>