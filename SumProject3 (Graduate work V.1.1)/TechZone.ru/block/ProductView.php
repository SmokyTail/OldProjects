<div class="MainViewerDiv">
	<div class="MainTitle">
		<p class="TInfoTitle" id="TMainTitle">
			<?php echo $oneProduct['TypeObject'];?>
			<?php echo $oneProduct['Manufacturer'];?>
			<?php echo $oneProduct['Model'];?>
			<?php echo $oneProduct['MainColor']?>
		</p>
	</div>

	<div class="Float92x30">
		<div class="ViewerIdDiv">
			<p class="TProductInfo">Код товара: <span class="TViewerText"><?php echo $oneProduct['ID'] ?></span></p>
		</div>

		<div class="ViewerStatusDiv">
			<p class="TProductInfo">Статус товара: <span class="TViewerText"><?echo $status?></span></p>
		</div>

		<div class="Comparison">
			<p class="TProductInfo"><a href="" id="TComparison"><img src="images/Comparison.png" alt="">Сравнить товары<a></p>
		</div>
	</div>

	<div class="Float92x500">
		<div class="ViewerImgDiv">
			<img src="<?=$oneProduct['Image'];?>" alt="<?=$oneProduct['Model'];?>">
		</div>

		<div class="ViewerInfoDiv">
			<div class="ViewerInfoFloat">
				<?echo $pricer;?>
			</div>

			<div class="ViewerButtonFloat">
				<a class="product_link_with_id" data-id="<?php echo $oneProduct['ID']?>"><div class="BuyViewer">
					<p class="TButtonBuy" id="TViewerButtonBuy">Добавить в корзину</p>
				</div></a>
			</div>
		</div>
				
		<?php
			switch($T) {
				case 'cases':
					require_once ("block/viewerOptions/ViewerCases.php");
					break;
				case 'monitors':
					require_once ("block/viewerOptions/ViewerMonitors.php");
					break;
			}		
		?>		

		<div class="ViewerAboutDiv">
			<p class="TInfoTitle" id="TInfoTextAbout">
				Описание 
				<?php echo $oneProduct['TypeObject'];?>
				<?php echo $oneProduct['Manufacturer'];?>
				<?php echo $oneProduct['Model'];?>
				<?php echo $oneProduct['MainColor']?>
			</p>
			<p class="TInfoText" id="TInfoTextAbout"><?php echo $oneProduct['Description'] ?></p>
		</div>
	</div>
</div>