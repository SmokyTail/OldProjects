<div class="FloatTwo">		
	<?php if(isset($_GET['Type'])){ ?>			
		<?php if($pageNum > 1) { ?>
			<a class="TPageButton" href="http://techzone.ru/catalog?Type=<?=$T;?>&Count=<?=$countView;?>&page=1"> <div class="PageButton">&lt;&lt;</div> </a>
			<a class="TPageButton" href="http://techzone.ru/catalog?Type=<?=$T;?>&Count=<?=$countView;?>&page=<?=$pageNum-1;?>"> <div class="PageButton">&lt;</div> </a>
		<?php } ?>

		<?php for($i = $left_neighbour; $i<=$right_neighbour; $i++) { ?>
			<a class="TPageButton" href="http://techzone.ru/catalog?Type=<?=$T;?>&Count=<?=$countView;?>&page=<?=$i;?>"> <div class="PageButton" <?=($i == $pageNum) ? 'id="current"' : '';?>> <?=$i;?> </div> </a>
		<?php } ?>

		<?php if($pageNum < $lastPage) { ?>
			<a class="TPageButton" href="http://techzone.ru/catalog?Type=<?=$T;?>&Count=<?=$countView;?>&page=<?=$pageNum+1;?>"> <div class="PageButton">&gt;</div> </a>
			<a class="TPageButton" href="http://techzone.ru/catalog?Type=<?=$T;?>&Count=<?=$countView;?>&page=<?=$lastPage;?>"> <div class="PageButton">&gt;&gt;</div> </a>
		<?php } ?>						
	<?php }elseif(isset($_GET['Manufacturer'])){ ?>			
		<?php if($pageNum > 1) { ?>
			<a class="TPageButton" href="http://techzone.ru/catalog?Manufacturer=<?=$Manu;?>&Count=<?=$countView;?>&page=1"> <div class="PageButton">&lt;&lt;</div> </a>
			<a class="TPageButton" href="http://techzone.ru/catalog?Manufacturer=<?=$Manu;?>&Count=<?=$countView;?>&page=<?=$pageNum-1;?>"> <div class="PageButton">&lt;</div> </a>
		<?php } ?>

		<?php for($i = $left_neighbour; $i<=$right_neighbour; $i++) { ?>
			<a class="TPageButton" href="http://techzone.ru/catalog?Manufacturer=<?=$Manu;?>&Count=<?=$countView;?>&page=<?=$i;?>"> <div class="PageButton" <?=($i == $pageNum) ? 'id="current"' : '';?>> <?=$i;?> </div> </a>
		<?php } ?>

		<?php if($pageNum < $lastPage) { ?>
			<a class="TPageButton" href="http://techzone.ru/catalog?Manufacturer=<?=$Manu;?>&Count=<?=$countView;?>&page=<?=$pageNum+1;?>"> <div class="PageButton">&gt;</div> </a>
			<a class="TPageButton" href="http://techzone.ru/catalog?Manufacturer=<?=$Manu;?>&Count=<?=$countView;?>&page=<?=$lastPage;?>"> <div class="PageButton">&gt;&gt;</div> </a>
		<?php } ?>			
	<?php } ?>
</div>