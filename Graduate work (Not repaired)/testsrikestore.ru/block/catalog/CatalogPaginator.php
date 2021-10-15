<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  		<link rel="stylesheet" href="CSS/Catalog_Product.css">
	  	<link rel="stylesheet" href="CSS/Product.css">
 	</head>
	<body>
	
		<div class="FloatTwo">

			<!-- вывод пагинатора -->
			
			<?php if(isset($_GET['MainType'])){ ?>
			
				<?php if($pageNum > 1) { ?>
					<a class="TPageButton" href="Catalog.php?MainType=<?=$MT;?>&Count=<?=$countView;?>&page=1"> <div class="PageButton">&lt;&lt;</div> </a>
					<a class="TPageButton" href="Catalog.php?MainType=<?=$MT;?>&Count=<?=$countView;?>&page=<?=$pageNum-1;?>"> <div class="PageButton">&lt;</div> </a>
				<?php } ?>
		
				<?php for($i = $left_neighbour; $i<=$right_neighbour; $i++) { ?>
					<a class="TPageButton" href="Catalog.php?MainType=<?=$MT;?>&Count=<?=$countView;?>&page=<?=$i;?>"> <div class="PageButton" <?=($i == $pageNum) ? 'id="current"' : '';?>> <?=$i;?> </div> </a>
				<?php } ?>

				<?php if($pageNum < $lastPage) { ?>
					<a class="TPageButton" href="Catalog.php?MainType=<?=$MT;?>&Count=<?=$countView;?>&page=<?=$pageNum+1;?>"> <div class="PageButton">&gt;</div> </a>
					<a class="TPageButton" href="Catalog.php?MainType=<?=$MT;?>&Count=<?=$countView;?>&page=<?=$lastPage;?>"> <div class="PageButton">&gt;&gt;</div> </a>
				<?php } ?>
				
			<?php }elseif(isset($_GET['Type'])){ ?>
			
				<?php if($pageNum > 1) { ?>
					<a class="TPageButton" href="Catalog.php?Type=<?=$T;?>&Count=<?=$countView;?>&page=1"> <div class="PageButton">&lt;&lt;</div> </a>
					<a class="TPageButton" href="Catalog.php?Type=<?=$T;?>&Count=<?=$countView;?>&page=<?=$pageNum-1;?>"> <div class="PageButton">&lt;</div> </a>
				<?php } ?>
		
				<?php for($i = $left_neighbour; $i<=$right_neighbour; $i++) { ?>
					<a class="TPageButton" href="Catalog.php?Type=<?=$T;?>&Count=<?=$countView;?>&page=<?=$i;?>"> <div class="PageButton" <?=($i == $pageNum) ? 'id="current"' : '';?>> <?=$i;?> </div> </a>
				<?php } ?>

				<?php if($pageNum < $lastPage) { ?>
					<a class="TPageButton" href="Catalog.php?Type=<?=$T;?>&Count=<?=$countView;?>&page=<?=$pageNum+1;?>"> <div class="PageButton">&gt;</div> </a>
					<a class="TPageButton" href="Catalog.php?Type=<?=$T;?>&Count=<?=$countView;?>&page=<?=$lastPage;?>"> <div class="PageButton">&gt;&gt;</div> </a>
				<?php } ?>
				
			<?php }elseif(isset($_GET['ExtraType'])){ ?>
			
				<?php if($pageNum > 1) { ?>
					<a class="TPageButton" href="Catalog.php?ExtraType=<?=$ET;?>&Count=<?=$countView;?>&page=1"> <div class="PageButton">&lt;&lt;</div> </a>
					<a class="TPageButton" href="Catalog.php?ExtraType=<?=$ET;?>&Count=<?=$countView;?>&page=<?=$pageNum-1;?>"> <div class="PageButton">&lt;</div> </a>
				<?php } ?>
		
				<?php for($i = $left_neighbour; $i<=$right_neighbour; $i++) { ?>
					<a class="TPageButton" href="Catalog.php?ExtraType=<?=$ET;?>&Count=<?=$countView;?>&page=<?=$i;?>"> <div class="PageButton" <?=($i == $pageNum) ? 'id="current"' : '';?>> <?=$i;?> </div> </a>
				<?php } ?>

				<?php if($pageNum < $lastPage) { ?>
					<a class="TPageButton" href="Catalog.php?ExtraType=<?=$ET;?>&Count=<?=$countView;?>&page=<?=$pageNum+1;?>"> <div class="PageButton">&gt;</div> </a>
					<a class="TPageButton" href="Catalog.php?ExtraType=<?=$ET;?>&Count=<?=$countView;?>&page=<?=$lastPage;?>"> <div class="PageButton">&gt;&gt;</div> </a>
				<?php } ?>
				
			<?php }elseif(isset($_GET['ImageDiscount'])){ ?>
			
				<?php if($pageNum > 1) { ?>
					<a class="TPageButton" href="Catalog.php?ImageDiscount=<?=$Disc;?>&Count=<?=$countView;?>&page=1"> <div class="PageButton">&lt;&lt;</div> </a>
					<a class="TPageButton" href="Catalog.php?ImageDiscount=<?=$Disc;?>&Count=<?=$countView;?>&page=<?=$pageNum-1;?>"> <div class="PageButton">&lt;</div> </a>
				<?php } ?>
		
				<?php for($i = $left_neighbour; $i<=$right_neighbour; $i++) { ?>
					<a class="TPageButton" href="Catalog.php?ImageDiscount=<?=$Disc;?>&Count=<?=$countView;?>&page=<?=$i;?>"> <div class="PageButton" <?=($i == $pageNum) ? 'id="current"' : '';?>> <?=$i;?> </div> </a>
				<?php } ?>

				<?php if($pageNum < $lastPage) { ?>
					<a class="TPageButton" href="Catalog.php?ImageDiscount=<?=$Disc;?>&Count=<?=$countView;?>&page=<?=$pageNum+1;?>"> <div class="PageButton">&gt;</div> </a>
					<a class="TPageButton" href="Catalog.php?ImageDiscount=<?=$Disc;?>&Count=<?=$countView;?>&page=<?=$lastPage;?>"> <div class="PageButton">&gt;&gt;</div> </a>
				<?php } ?>
			
			<?php }elseif(isset($_GET['Recomendated'])){ ?>
			
				<?php if($pageNum > 1) { ?>
					<a class="TPageButton" href="Catalog.php?Recomendated=<?=$Recom;?>&Count=<?=$countView;?>&page=1"> <div class="PageButton">&lt;&lt;</div> </a>
					<a class="TPageButton" href="Catalog.php?Recomendated=<?=$Recom;?>&Count=<?=$countView;?>&page=<?=$pageNum-1;?>"> <div class="PageButton">&lt;</div> </a>
				<?php } ?>
		
				<?php for($i = $left_neighbour; $i<=$right_neighbour; $i++) { ?>
					<a class="TPageButton" href="Catalog.php?Recomendated=<?=$Recom;?>&Count=<?=$countView;?>&page=<?=$i;?>"> <div class="PageButton" <?=($i == $pageNum) ? 'id="current"' : '';?>> <?=$i;?> </div> </a>
				<?php } ?>

				<?php if($pageNum < $lastPage) { ?>
					<a class="TPageButton" href="Catalog.php?Recomendated=<?=$Recom;?>&Count=<?=$countView;?>&page=<?=$pageNum+1;?>"> <div class="PageButton">&gt;</div> </a>
					<a class="TPageButton" href="Catalog.php?Recomendated=<?=$Recom;?>&Count=<?=$countView;?>&page=<?=$lastPage;?>"> <div class="PageButton">&gt;&gt;</div> </a>
				<?php } ?>
			
			<?php }elseif(isset($_GET['Manufacturer'])){ ?>
			
				<?php if($pageNum > 1) { ?>
					<a class="TPageButton" href="Catalog.php?Manufacturer=<?=$Manu;?>&Count=<?=$countView;?>&page=1"> <div class="PageButton">&lt;&lt;</div> </a>
					<a class="TPageButton" href="Catalog.php?Manufacturer=<?=$Manu;?>&Count=<?=$countView;?>&page=<?=$pageNum-1;?>"> <div class="PageButton">&lt;</div> </a>
				<?php } ?>
		
				<?php for($i = $left_neighbour; $i<=$right_neighbour; $i++) { ?>
					<a class="TPageButton" href="Catalog.php?Manufacturer=<?=$Manu;?>&Count=<?=$countView;?>&page=<?=$i;?>"> <div class="PageButton" <?=($i == $pageNum) ? 'id="current"' : '';?>> <?=$i;?> </div> </a>
				<?php } ?>

				<?php if($pageNum < $lastPage) { ?>
					<a class="TPageButton" href="Catalog.php?Manufacturer=<?=$Manu;?>&Count=<?=$countView;?>&page=<?=$pageNum+1;?>"> <div class="PageButton">&gt;</div> </a>
					<a class="TPageButton" href="Catalog.php?Manufacturer=<?=$Manu;?>&Count=<?=$countView;?>&page=<?=$lastPage;?>"> <div class="PageButton">&gt;&gt;</div> </a>
				<?php } ?>
			
			<?php } ?>

		</div>

	</body>
</html>