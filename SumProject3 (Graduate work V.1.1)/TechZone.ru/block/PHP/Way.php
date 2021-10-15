<?php
	if(isset($T)){
		switch($T) {
			case 'cases':
				$NameMainType='Корпуса';
				break;
			case 'monitors':
				$NameMainType='Мониторы';
				break;
		}
	}

	if($Way=='ПросмотрТовара'){ 
		?>
			<div class="WayDiv">
				<p class="TWayALast"><a href="http://techzone.ru" class="TWayA">Главная</a>
					<span class="TWaySlash"> > </span>
					<a href="http://techzone.ru/catalog?Type=<?=$T?>" class="TWayA"><?php echo $NameMainType ?></a>
					<span class="TWaySlash"> > </span>
					<?php echo $oneProduct['Manufacturer'];?>
					<?php echo $oneProduct['Model'];?>
					<?php echo $oneProduct['MainColor']?>
				</p>
			</div>
		<?;
	} elseif($Way=='Каталог') { 
		?>
			<div class="WayDiv">
				<p class="TWayALast"><a href="http://techzone.ru" class="TWayA">Главная</a>
					<span class="TWaySlash"> > </span>
					<?php echo $NameMainType ?>
				</p>
			</div>
		<?;
	} elseif($Way=='Каталог' and $Manu!="") { 
		?>
			<div class="WayDiv">
				<p class="TWayALast"><a href="http://techzone.ru" class="TWayA">Главная</a>
					<span class="TWaySlash"> > </span>
					<a href="Manufacturers.php" class="TWayA">Производители</a>
					<span class="TWaySlash"> > </span>
					<?php echo $Manu ?>
				</p>
			</div>
		<?;
	} elseif($Way=='Панель управления' or $Way=='Корзина' or $Way=='Новости' or $Way=='Способы оплаты' or $Way=='Доставка' or $Way=='Гарантии' or $Way=='Как заказать' or $Way=='Производители' or $Way=='Поиск' or $Way=='Регистрация') {
		?>
			<div class="WayDiv">
				<p class="TWayALast"><a href="http://techzone.ru" class="TWayA">Главная</a>
					<span class="TWaySlash"> > </span>
					<?php echo $Way ?>
				</p>
			</div>
		<?;
	} elseif($Way=='ПросмотрНовости') {
		?>
			<div class="WayDiv">
				<p class="TWayALast"><a href="http://techzone.ru" class="TWayA">Главная</a>
					<span class="TWaySlash"> > </span>
					<a href="http://techzone.ru/news" class="TWayA">Новости</a>
					<span class="TWaySlash"> > </span>
					<?php echo $oneNews['Title'] ?>
				</p>
			</div>
		<?;
	}
?>