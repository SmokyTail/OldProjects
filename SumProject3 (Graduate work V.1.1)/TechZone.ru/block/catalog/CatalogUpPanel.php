<div class="FloatOne">
	<div class="CategoriesName">
		<p class="TCategoryName"><?=$NameMainType?></p>
	</div>

	<div class="OnPage">
		<p class="TProductInfo" id="TOnPage">Количество на странице:</p>
		
		<?php if(isset($_GET['Type'])){ ?>
			<p class="TProductInfo"><a href="http://techzone.ru/catalog?Type=<?=$T;?>&Count=<?=12;?>" class="TOnPage">12<a></p>
			<p class="TProductInfo"><a href="http://techzone.ru/catalog?Type=<?=$T;?>&Count=<?=24;?>" class="TOnPage">24<a></p>
			<p class="TProductInfo"><a href="http://techzone.ru/catalog?Type=<?=$T;?>&Count=<?=36;?>" class="TOnPage">36<a></p>
		<?php }elseif(isset($_GET['Manufacturer'])){ ?>
			<p class="TProductInfo"><a href="http://techzone.ru/catalog?Manufacturer=<?=$Manu;?>&Count=<?=12;?>" class="TOnPage">12<a></p>
			<p class="TProductInfo"><a href="http://techzone.ru/catalog?Manufacturer=<?=$Manu;?>&Count=<?=24;?>" class="TOnPage">24<a></p>
			<p class="TProductInfo"><a href="http://techzone.ru/catalog?Manufacturer=<?=$Manu;?>&Count=<?=36;?>" class="TOnPage">36<a></p>
		<?php } ?>		
	</div>

	<div class="Comparison">
		<p class="TProductInfo"><a href="" id="TComparison"><img src="images/Comparison.png" alt="">Сравнить товары<a></p>
	</div>
</div>