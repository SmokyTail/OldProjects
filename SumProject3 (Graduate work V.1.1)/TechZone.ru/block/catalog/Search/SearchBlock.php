<div class="CatalogMainDiv">
	<div class="LeftBlock">			
		<?php
			require_once ("block/catalog/Filtres/CatalogMinFiltres.php");
		?>
	</div>

	<div class="RightBlock">
		<?php
			require_once ("db.php");		

			if(!isset($_GET['Count'])){
				$countView = 12;
			}else{
				$countView=$_GET['Count'];
			}

			if(isset($_GET['page'])){
				$pageNum = (int)$_GET['page'];
			}else{
				$pageNum = 1;
			}
			$startIndex = ($pageNum-1)*$countView;
						
			if(isset($_POST['submit'])){
				$ResultCount = 0;
				$search = $_POST['search'];
				$query = $conn->query("SELECT * FROM `products` WHERE `Model` LIKE '%$search%' OR `TypeObject` LIKE '%$search%' ") or die(mysqli_error());
				while($row = $query->fetch_array()){
					$ResultCount++;
					$productData[] = $row;
				}			
			}
			
			require_once ("block/catalog/Search/CatalogSearchUpPanel.php");
			require_once ("block/catalog/CatalogProduct.php");			
		?>
	</div>
</div>