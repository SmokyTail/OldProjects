<div class="FloatOne">
	<div class="CategoriesName" id="SearchName">
		<p class="TCategoryName">			
			<?php
				include_once("functions.php");
				
				if(isset($_POST['submit'])){
					$a .= "По запросу ";
					$a .= $_POST['search'];
					$a .= " найдено ";
					$a .= $ResultCount;
					$a .= pluralForm($ResultCount, ' товар', ' товара', ' товаров');
					echo $a;
				}
			?>
		</p>
	</div>

	<div class="Comparison">
		<p class="TProductInfo"><a href="" id="TComparison"><img src="images/Comparison.png" alt="">Сравнить товары<a></p>
	</div>
</div>