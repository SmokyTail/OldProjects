<?php
	foreach($productData as $oneProduct){
		//$sqlType = $conn->query("SELECT `Type` FROM `products` WHERE `productID`='".$oneProduct['ID']."'") or die(mysqli_error());	
		//$result = mysqli_fetch_array($sqlType);
		
		if($oneProduct['Status'] == 1) {
			$status = "Есть в наличии";
		} else {
			$status = "Нет в наличии";
		}
		
		if($oneProduct['DiscountPrice'] != 0) {
			$dscImage ='
				<img src="images/DISCOUNT.PNG" alt="">
			';
			$pricer ='
				<div class="ProductCostDisc">
					<p class="TProductCostDisc">'.$oneProduct['Price'].' ₽</p>
				</div>

				<div class="ProductCost">
					<p class="TProductCost">'.$oneProduct['DiscountPrice'].' ₽</p>
				</div>
			';
		} else {
			$dscImage ='';
			$pricer ='
				<div class="ProductCost">
					<p class="TProductCost">'.$oneProduct['Price'].' ₽</p>
				</div>
			';
		}
?>	
		<div class="Tovar" id="Tovar">		
			<input type="hidden" name="tid" value="<?=$oneProduct['ID'];?>">
			
			<div class="Status">
				<p class="TProductStatus"><?echo $status;?></p>
			</div>

			<div class="Discount">
				<?echo $dscImage;?>
			</div>
			
			<a href="http://techzone.ru/catalog?Type=<?=$oneProduct['Type'];?>&ID=<?=$oneProduct['ID'];?>"><div class="ProductPhoto">
				<img src="<?=$oneProduct['Image'];?>" alt="<?=$oneProduct['Model'];?>">
			</div></a>

			<a href="http://techzone.ru/catalog?Type=<?=$oneProduct['Type'];?>&ID=<?=$oneProduct['ID'];?>"><div class="ProductName">
				<p class="TProductName"><?=$oneProduct['TypeObject'];?> <?=$oneProduct['Model'];?> <?=$oneProduct['MainColor'];?></p>
			</div></a>

			<div class="ProductInfo">
				<p class="TProductInfo">Производитель: <?=$oneProduct['Manufacturer'];?>, <?=$oneProduct['Country'];?></p>
			</div>

			<?echo $pricer;?>

			<a class="product_link_with_id" data-id="<?php echo $oneProduct['ID']?>"><div class="Buy">
				<p class="TButtonBuy">Добавить в корзину</p>
			</div></a>
		</div>	
<?php } ?>
