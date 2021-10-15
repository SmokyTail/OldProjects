<?php
	
	if($ET=='АК-серия' or $ET=='G-серия' or $ET=='M-серия' or $ET=='Другиe модели') {
		$WayExtraType='Автоматы';
		$T='Автоматы';
	} elseif($ET=='Beretta' or $ET=='Colt' or $ET=='Glock' or $ET=='Sig Sauer' or $ET=='Пистолет Макарова' or $ET=='Пистолет Ярыгина' or $ET=='Тульский Токарева' or $ET=='Другие модели') {
		$WayExtraType='Пистолеты';
		$T='Пистолеты';
	}elseif($ET=='CO2' or $ET=='Green gas') {
		$WayExtraType='Расходники';
		$T='Расходники';
	}
	
	if($T=='Автоматы' or $T=='Винтовки' or $T=='Пулемёты' or $T=='Пистолеты-пулемёты' or $T=='Пистолеты') {
		$WayType='Страйкбольное оружие';
	} elseif($T=='Головные уборы' or $T=='Очки' or $T=='Маски' or $T=='Наколенники, налокотники' or $T=='Перчатки' or $T=='Рюкзаки, сумки' or $T=='Разгрузки' or $T=='Кобуры' or $T=='Шарфы') {
		$WayType='Снаряжение';
	}elseif($T=='Шары' or $T=='Газ' or $T=='Смазки, масло') {
		$WayType='Расходники';
	}elseif($T=='Аккумуляторы' or $T=='Зарядные устройства') {
		$WayType='Аккумуляторы и ЗУ';
	}

	if($Way=='ProductWiever' and $oneProduct['ExtraType']!=''){ 
		?>
			<div class="WayDiv">
				<p class="TWayALast"><a href="Main.php" class="TWayA">Главная</a>
					<span class="TWaySlash"> > </span>
					<a <?php $MainType=$oneProduct['MainType']?> href="Catalog.php?MainType=<?= urldecode($MainType)?>" class="TWayA"><?php echo $oneProduct['MainType'] ?></a>
					<span class="TWaySlash"> > </span>
					<a <?php $Type=$oneProduct['Type']?> href="Catalog.php?Type=<?= urldecode($Type)?>" class="TWayA"><?php echo $oneProduct['Type'] ?></a>
					<span class="TWaySlash"> > </span>
					<a <?php $ExtraType=$oneProduct['ExtraType']?> href="Catalog.php?ExtraType=<?= urldecode($ExtraType)?>" class="TWayA"><?php echo $oneProduct['ExtraType'] ?></a>
					<span class="TWaySlash"> > </span>
					<?php echo $oneProduct['Name'] ?>
				</p>
			</div>
		<?;
	} elseif($Way=='ProductWiever' and $oneProduct['ExtraType']=' ') {
		?>
			<div class="WayDiv">
				<p class="TWayALast"><a href="Main.php" class="TWayA">Главная</a>
					<span class="TWaySlash"> > </span>
					<a <?php $MainType=$oneProduct['MainType']?> href="Catalog.php?MainType=<?= urldecode($MainType)?>" class="TWayA"><?php echo $oneProduct['MainType'] ?></a>
					<span class="TWaySlash"> > </span>
					<a <?php $Type=$oneProduct['Type']?> href="Catalog.php?Type=<?= urldecode($Type)?>" class="TWayA"><?php echo $oneProduct['Type'] ?></a>
					<span class="TWaySlash"> > </span>
					<?php echo $oneProduct['Name'] ?>
				</p>
			</div>
		<?;
	} elseif($Way=='Catalog' and $MT!="") { 
		?>
			<div class="WayDiv">
				<p class="TWayALast"><a href="Main.php" class="TWayA">Главная</a>
					<span class="TWaySlash"> > </span>
					<?php echo $MT ?>
				</p>
			</div>
		<?; 
	} elseif($Way=='Catalog' and $T!="" and $WayExtraType=="") { 
		?>
			<div class="WayDiv">
				<p class="TWayALast"><a href="Main.php" class="TWayA">Главная</a>
					<span class="TWaySlash"> > </span>
					<a <?php $MainType=$WayType ?> href="Catalog.php?MainType=<?= urldecode($MainType)?>" class="TWayA"><?php echo $WayType ?></a>
					<span class="TWaySlash"> > </span>
					<?php echo $T ?>
				</p>
			</div>
		<?;
	} elseif($Way=='Catalog' and $ET!="") { 
		?>
			<div class="WayDiv">
				<p class="TWayALast"><a href="Main.php" class="TWayA">Главная</a>
					<span class="TWaySlash"> > </span>
					<a <?php $MainType=$WayType ?> href="Catalog.php?MainType=<?= urldecode($MainType)?>" class="TWayA"><?php echo $WayType ?></a>
					<span class="TWaySlash"> > </span>
					<a <?php $Type=$WayExtraType ?> href="Catalog.php?Type=<?= urldecode($Type)?>" class="TWayA"><?php echo $WayExtraType ?></a>
					<span class="TWaySlash"> > </span>
					<?php echo $ET ?>
				</p>
			</div>
		<?;
	} elseif($Way=='Catalog' and $Manu!="") { 
		?>
			<div class="WayDiv">
				<p class="TWayALast"><a href="Main.php" class="TWayA">Главная</a>
					<span class="TWaySlash"> > </span>
					<a href="Manufacturers.php" class="TWayA">Производители</a>
					<span class="TWaySlash"> > </span>
					<?php echo $Manu ?>
				</p>
			</div>
		<?;
	} elseif($Way=='Новости' or $Way=='Способы оплаты' or $Way=='Доставка' or $Way=='Гарантии' or $Way=='Как заказать' or $Way=='Производители' or $Way=='Поиск' or $Way=='Регистрация') {
		?>
			<div class="WayDiv">
				<p class="TWayALast"><a href="Main.php" class="TWayA">Главная</a>
					<span class="TWaySlash"> > </span>
					<?php echo $Way ?>
				</p>
			</div>
		<?;
	} elseif($Way=='NewsViewer') {
		?>
			<div class="WayDiv">
				<p class="TWayALast"><a href="Main.php" class="TWayA">Главная</a>
					<span class="TWaySlash"> > </span>
					<a href="News.php" class="TWayA">Новости</a>
					<span class="TWaySlash"> > </span>
					<?php echo $oneNews['Title'] ?>
				</p>
			</div>
		<?;
	} elseif(isset($_GET['Recomendated'])) {
		?>
			<div class="WayDiv">
				<p class="TWayALast"><a href="Main.php" class="TWayA">Главная</a>
					<span class="TWaySlash"> > </span>
					Наши рекомендации
				</p>
			</div>
		<?;
	} elseif(isset($_GET['ImageDiscount'])) {
		?>
			<div class="WayDiv">
				<p class="TWayALast"><a href="Main.php" class="TWayA">Главная</a>
					<span class="TWaySlash"> > </span>
					Товары со скидкой
				</p>
			</div>
		<?;
	}
	
?>