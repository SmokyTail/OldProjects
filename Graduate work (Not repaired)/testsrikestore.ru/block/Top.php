<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" content="text/css" href="CSS/Top.css" />
		<link rel="stylesheet" content="text/css" href="CSS/HideAuthorizationForm.css" />
		<script src="JS/Main.js"></script>
	</head>
	<body>

		<div class="HeaderBG1">
		</div>

		<div class="HeaderBG2">
		</div>

		<div class="MainDivHeader">

			<div class="Header1">

				<a href="Main.php"><div class="TEmblem">
				</div></a>

				<div class="Emblem">
				</div>

				<div class="ConTelRegDiv">

					<div class="ContactTelephon">
						<p class="TTelephon1">8 800-555-35-35</p>
						<p class="THeader">Звонок по РФ</p>
					</div>

					<div class="ContactTelephon">
						<p class="TTelephon1">8 (912) 076-35-35</p>
						<p class="THeader">Местный номер</p>
					</div>

					<div class="Region">
						<p class="THeader">Ваш регион:</p>
						<a href="#" class="TRegion">Челябинская область</a>
					</div>

				</div>

				<?php
					if (empty($_SESSION['Login'])) {
						require_once ('block/RegEnter.php');
					} else {
						require_once ('block/ProfExit.php');
					}
				?>

				<div class="BasketDiv">

					<a href="cart.php?action=korzina"><div class="Basket">
						<img src="images/icons/Basket.png" alt="">
					</div></a>

				</div>

			</div>

			<div class="Header2">

				<div id="Catalog_Button">
					<div class="Menu">

						<div class="List">
							<div>
								<div class="ListName">
									<a <?php $MainType='Страйкбольное оружие'?> href="Catalog.php?MainType=<?= urldecode($MainType)?>" class="TMenu">Страйкбольное оружие</a>
								</div>
								<ul>
    								<a <?php $Type='Автоматы'?> href="Catalog.php?Type=<?= urldecode($Type)?>"><li class="TMenu2">Автоматы</li></a>

										<a <?php $ExtraType='АК-серия'?> href="Catalog.php?ExtraType=<?= urldecode($ExtraType)?>"><li class="TMenu3">АК-серия</li></a>
										<a <?php $ExtraType='M-серия'?> href="Catalog.php?ExtraType=<?= urldecode($ExtraType)?>"><li class="TMenu3">M-серия</li></a>
										<a <?php $ExtraType='G-серия'?> href="Catalog.php?ExtraType=<?= urldecode($ExtraType)?>"><li class="TMenu3">G-серия</li></a>
										<a <?php $ExtraType='Другие модели'?> href="Catalog.php?ExtraType=<?= urldecode($ExtraType)?>"><li class="TMenu3">Другие модели</li></a>

									<a <?php $Type='Винтовки'?> href="Catalog.php?Type=<?= urldecode($Type)?>"><li class="TMenu2">Винтовки</li></a>
									<a <?php $Type='Пулемёты'?> href="Catalog.php?Type=<?= urldecode($Type)?>"><li class="TMenu2">Пулемёты</li></a>
									<a <?php $Type='Пистолеты-пулемёты'?> href="Catalog.php?Type=<?= urldecode($Type)?>"><li class="TMenu2">Пистолеты-пулемёты</li></a>
									<a <?php $Type='Пистолеты'?> href="Catalog.php?Type=<?= urldecode($Type)?>"><li class="TMenu2">Пистолеты</li></a>
									
										<a <?php $ExtraType='Beretta'?> href="Catalog.php?ExtraType=<?= urldecode($ExtraType)?>"><li class="TMenu3">Beretta</li></a>
										<a <?php $ExtraType='Colt'?> href="Catalog.php?ExtraType=<?= urldecode($ExtraType)?>"><li class="TMenu3">Colt</li></a>
										<a <?php $ExtraType='Glock'?> href="Catalog.php?ExtraType=<?= urldecode($ExtraType)?>"><li class="TMenu3">Glock</li></a>
										<a <?php $ExtraType='Sig Sauer'?> href="Catalog.php?ExtraType=<?= urldecode($ExtraType)?>"><li class="TMenu3">Sig Sauer</li></a>
										<a <?php $ExtraType='Пистолет Макарова'?> href="Catalog.php?ExtraType=<?= urldecode($ExtraType)?>"><li class="TMenu3">Пистолет Макарова</li></a>
										<a <?php $ExtraType='Пистолет Ярыгина'?> href="Catalog.php?ExtraType=<?= urldecode($ExtraType)?>"><li class="TMenu3">Пистолет Ярыгина</li></a>
										<a <?php $ExtraType='Тульский Токарева'?> href="Catalog.php?ExtraType=<?= urldecode($ExtraType)?>"><li class="TMenu3">Тульский Токарева</li></a>
										<a <?php $ExtraType='Другие модели'?> href="Catalog.php?ExtraType=<?= urldecode($ExtraType)?>"><li class="TMenu3">Другие модели</li></a>
								</ul>
							</div>
						</div>

						<div class="List">
							<div>
								<div class="ListName">
									<a <?php $MainType='Снаряжение'?> href="Catalog.php?MainType=<?= urldecode($MainType)?>" class="TMenu">Снаряжение</a>
								</div>
								<ul>
    								<a <?php $Type='Головные уборы'?> href="Catalog.php?Type=<?= urldecode($Type)?>"><li class="TMenu2">Головные уборы</li></a>
									<a <?php $Type='Очки'?> href="Catalog.php?Type=<?= urldecode($Type)?>"><li class="TMenu2">Очки</li></a>
									<a <?php $Type='Маски'?> href="Catalog.php?Type=<?= urldecode($Type)?>"><li class="TMenu2">Маски</li></a>
									<a <?php $Type='Наколенники, налокотники'?> href="Catalog.php?Type=<?= urldecode($Type)?>"><li class="TMenu2">Наколенники, налокотники</li></a>
									<a <?php $Type='Перчатки'?> href="Catalog.php?Type=<?= urldecode($Type)?>"><li class="TMenu2">Перчатки</li></a>
									<a <?php $Type='Рюкзаки, сумки'?> href="Catalog.php?Type=<?= urldecode($Type)?>"><li class="TMenu2">Рюкзаки, сумки</li></a>
									<a <?php $Type='Разгрузки'?> href="Catalog.php?Type=<?= urldecode($Type)?>"><li class="TMenu2">Разгрузки</li></a>
									<a <?php $Type='Кобуры'?> href="Catalog.php?Type=<?= urldecode($Type)?>"><li class="TMenu2">Кобуры</li></a>
									<a <?php $Type='Шарфы'?> href="Catalog.php?Type=<?= urldecode($Type)?>"><li class="TMenu2">Шарфы</li></a>
								</ul>
							</div>

							<div>
								<div class="ListName">
									<a <?php $MainType='Расходники'?> href="Catalog.php?MainType=<?= urldecode($MainType)?>" class="TMenu">Расходники</a>
								</div>
								<ul>
									<a <?php $Type='Шары'?> href="Catalog.php?Type=<?= urldecode($Type)?>"><li class="TMenu2">Шары</li></a>
									<a <?php $Type='Газ'?> href="Catalog.php?Type=<?= urldecode($Type)?>"><li class="TMenu2">Газ</li></a>

										<a <?php $ExtraType='CO2'?> href="Catalog.php?ExtraType=<?= urldecode($ExtraType)?>"><li class="TMenu3">CO2</li></a>
										<a <?php $ExtraType='Green gas'?> href="Catalog.php?ExtraType=<?= urldecode($ExtraType)?>"><li class="TMenu3">Green gas</li></a>

									<a <?php $Type='Смазки, масло'?> href="Catalog.php?Type=<?= urldecode($Type)?>"><li class="TMenu2">Смазки, масло</li></a>
								</ul>
							</div>
						</div>

						<div class="List">
							<div>
								<div class="ListName">
									<a href="Manufacturers.php" class="TMenu">Производитель</a>
								</div>
								<ul>
    								<a <?php $Manu='AandK'?> href="Catalog.php?Manufacturer=<?= urldecode($Manu)?>"><li class="TMenu2">A&K</li></a>
									<a <?php $Manu='AGM'?> href="Catalog.php?Manufacturer=<?= urldecode($Manu)?>"><li class="TMenu2">AGM</li></a>
									<a <?php $Manu='ASG'?> href="Catalog.php?Manufacturer=<?= urldecode($Manu)?>"><li class="TMenu2">ASG</li></a>
									<a <?php $Manu='Ares'?> href="Catalog.php?Manufacturer=<?= urldecode($Manu)?>"><li class="TMenu2">Ares</li></a>
									<a <?php $Manu='Cyma'?> href="Catalog.php?Manufacturer=<?= urldecode($Manu)?>"><li class="TMenu2">Cyma</li></a>
									<a <?php $Manu='DBoys'?> href="Catalog.php?Manufacturer=<?= urldecode($Manu)?>"><li class="TMenu2">DBoys</li></a>
									<a <?php $Manu='GandG'?> href="Catalog.php?Manufacturer=<?= urldecode($Manu)?>"><li class="TMenu2">G&G</li></a>
    								<a <?php $Manu='Galaxy'?> href="Catalog.php?Manufacturer=<?= urldecode($Manu)?>"><li class="TMenu2">Galaxy</li></a>
    								<a <?php $Manu='Gletcher'?> href="Catalog.php?Manufacturer=<?= urldecode($Manu)?>"><li class="TMenu2">Gletcher</li></a>
									<a <?php $Manu='Guarder'?> href="Catalog.php?Manufacturer=<?= urldecode($Manu)?>"><li class="TMenu2">Guarder</li></a>
									<a <?php $Manu='Jing Gong'?> href="Catalog.php?Manufacturer=<?= urldecode($Manu)?>"><li class="TMenu2">Jing Gong</li></a>
									<a href="Manufacturers.php"><li class="TMenu2">Другие производители</li></a>
								</ul>
							</div>

							<div>
								<div class="ListName">
									<a <?php $MainType='Аккумуляторы и ЗУ'?> href="Catalog.php?MainType=<?= urldecode($MainType)?>" class="TMenu">Аккумуляторы и ЗУ</a>
								</div>
								<ul>
    								<a <?php $Type='Аккумуляторы'?> href="Catalog.php?Type=<?= urldecode($Type)?>"><li class="TMenu2">Аккумуляторы</li></a>
    								<a <?php $Type='Зарядные устройства'?> href="Catalog.php?Type=<?= urldecode($Type)?>"><li class="TMenu2">Зарядные устройства</li></a>
								</ul>
							</div>

							<div>
								<div class="ListName">
									<a <?php $Disc!=''?> href="Catalog.php?ImageDiscount=<?= urldecode($Disc)?>" class="TMenu">Товары со скидками</a>
								</div>
							</div>
						</div>


					</div>
					<p class="TCatalog">КАТАЛОГ</p>
				</div>

				<a href="News.php"><div class="Header_Button">
					<p class="THeaderButtonPanel2">НОВОСТИ</p>
				</div></a>

				<a href="PaymentMethods.php"><div class="Header_Button">
					<p class="THeaderButtonPanel2">СПОСОБЫ ОПЛАТЫ</p>
				</div></a>

				<a href="Delivery.php"><div class="Header_Button">
					<p class="THeaderButtonPanel2">ДОСТАВКА</p>
				</div></a>

				<a href="Guarantees.php"><div class="Header_Button">
					<p class="THeaderButtonPanel2">ГАРАНТИИ</p>
				</div></a>

				<a href="HowToOrder.php"><div class="Header_Button">
					<p class="THeaderButtonPanel2">КАК ЗАКАЗАТЬ</p>
				</div></a>

				<a href="https://ru-ru.facebook.com/"><div class="Social">
					<img src="images/icons/fb.png" alt="">
				</div></a>

				<a href="https://vk.com/"><div class="Social">
					<img src="images/icons/vk.png" alt="">
				</div></a>

				<a href="https://www.skype.com/ru/"><div class="Social">
					<img src="images/icons/skype.png" alt="">
				</div></a>

				<a href="https://discordapp.com/"><div class="Social">
					<img src="images/icons/discord.png" alt="">
				</div></a>

			</div>

			<div class="SearchBlockBG">
			</div>

			<div class="RightElemS">
			</div>

			<div class="SearchBlock">

				<form method="post" class="search" action="CatalogSearch.php" name="search"> 

					<div class="Search">
						<img src="images/icons/Search.png" alt="">
						<input type="submit" name="" value="" class="submit" />
					</div>

					<input type="search" maxlength="100" name="query" placeholder="Поиск товаров..." class="input" />

				</form>

			</div>

			<div class="LeftElemS">
			</div>

		</div>

 	</body>
</html>
