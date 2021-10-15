<div class="MainTitle">
	<p class="TInfoTitle" id="TMainTitle">Корзина</p>
</div>

<div class="CartMainBlock">
	<?php if ( isset($_SESSION['cart_list']) && count($_SESSION['cart_list']) != 0) : ?>
		<div class="CartLeft">
			<?php 
				$FullCost = 0;
				
				foreach($_SESSION['cart_list'] as $course) : ?>
				<div class="CartProduct">
					<?php
						$query = "SELECT * FROM products WHERE `productID`='$course[ID]'";
						$req = $conn->query($query);
						$resp = $req->fetch_array();						
						$FullCost += $course['Price'];
					?>
					<div class="CartImg">
						<a href="http://techzone.ru/catalog?Type=<?=$resp['Type']?>&ID=<?=$course['ID'];?>"><img src="<?=$course['Image'];?>" alt="<?=$course['Model'];?>"></a>
					</div>
					<div class="CartName">
						<p class="TCartID">Код товара: <?=$course['ID'];?></p>
						<a href="http://techzone.ru/catalog?Type=<?=$resp['Type']?>&ID=<?=$course['ID'];?>" class="TCartTable" id="TACartTable"><?php echo $course['TypeObject']; ?> <?php echo $course['Manufacturer']; ?> <?php echo $course['Model']; ?> <?php echo $course['MainColor']; ?></a>
					</div>
					<div class="CartCount">
						<p class="TCartTable">Количество (в разработке)</p>
					</div>
					<div class="CartPriceBlock">
						<div class="CartDiscPrice">
							<? if($course['DiscountPrice']!=0){?>
								<p class="TCartTable" id="TCartDiscPrice"><?php echo $course['Price']; ?> ₽</p>
							<? }?>
						</div>					
						<div class="CartPrice">
							<? if($course['DiscountPrice']!=0){?>
								<p class="TCartTable" id="TCartPrice"><?php echo $course['DiscountPrice']; ?> ₽</p>
							<? } else {?>
								<p class="TCartTable" id="TCartPrice"><?php echo $course['Price']; ?> ₽</p>
							<? }?>
						</div>
					</div>
					<div class="CartDelete"><a href="http://techzone.ru/cart?delete_id=<?php echo $course['ID'];?>" class="TCartTable" id="TDelCartTable">Убрать из корзины</a></div>
				</div>
			<?php endforeach; ?>			
		</div>
		<div class="CartRight">
			<p class="TCartOrder">В корзине</p>
			<div class="CartBlueOrder">
				<p class="TCartOrder" id="TCartCount">
					<?	if(isset($_SESSION['cart_list']) && count($_SESSION['cart_list']) != 0){?>
						<?php 
							echo count($_SESSION['cart_list']);
							echo pluralForm(count($_SESSION['cart_list']), ' товар', ' товара', ' товаров');					
						?>
					<?php	}?>					
				</p>
				<p class="TCartOrder" id="TCartFullCost"><?php echo $FullCost; ?> ₽</p>
				<div class="CartButtonOrder">
					<p class="TCartButtonOrder">Оформить заказ</p>
				</div>
				<a href="http://techzone.ru/cart?delete_id=all" class="TCartTable" id="TDelCartOrder">Очистить корзину</a>
			</div>
		</div>
	<?php else : ?>
		<div class="EmptyCartBlock">
			<p class="TEmptyBascket">В корзине нет товаров</p>
			<a href="http://techzone.ru" class="TCartTable" id="TACartBack">Вернуться к покупкам</a>
		</div>
	<?php endif;?>
</div>