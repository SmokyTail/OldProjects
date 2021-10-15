<div class="PopProductsDiv">
	<div class="PopProducts">
		<div class="PopProdText">
			<p class="TTopic">НОВЫЕ ПОСТУПЛЕНИЯ</p>
		</div>
		
		<?php
			$sqls = $conn->query("SELECT * FROM `products` ORDER BY `productID` DESC LIMIT 4") or die(mysqli_error());
			$productDatas = array();
			while($results = mysqli_fetch_array($sqls, MYSQLI_ASSOC)){
				$productDatas[] = $results;
			}
			
			arsort($productDatas);

			foreach($productDatas as $oneProducts){
				$TofProd=$oneProducts['Type'];
				$prodID=$oneProducts['productID'];				
				$sql = $conn->query("SELECT * FROM `products` INNER JOIN `$TofProd` WHERE products.productID='$prodID' and $TofProd.ID='$prodID'") or die(mysqli_error());	
				$result = mysqli_fetch_array($sql, MYSQLI_ASSOC);
				$productData[] = $result;
			}
			
			include ("Product.php");
		?>
	</div>
</div>