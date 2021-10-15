<div class="DiscProductsDiv">
	<div class="DiscProducts">
		<div class="DiscProdText">
			<p class="TTopic">ТОВАРЫ СО СКИДКОЙ</p>
		</div>

		<?php
			UnSet($productData);

			$sqls = $conn->query("SELECT * FROM products WHERE `DiscountPrice`>0 LIMIT 4") or die(mysqli_error());
			$productDatas = array();
			while($results = mysqli_fetch_array($sqls, MYSQLI_ASSOC)){
				$productDatas[] = $results;
			}
			
			shuffle($productDatas);
			
			foreach($productDatas as $oneProducts){
				$TofProd = $oneProducts['Type'];
				$prodID = $oneProducts['productID'];
				$sql = $conn->query("SELECT * FROM `products` INNER JOIN `$TofProd` WHERE products.productID='$prodID' and $TofProd.ID='$prodID'") or die(mysqli_error());	
				$result = mysqli_fetch_array($sql, MYSQLI_ASSOC);
				$productData[] = $result;						
			}
			
			include ("Product.php");
		?>	
	</div>
</div>
