<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="CSS/Reset.css">
		<link rel="stylesheet" href="CSS/TextBase.css">
  		<link rel="stylesheet" href="CSS/MenuCatalog.css">
 	</head>
	<body>

		<div class="MenuCatalog">

						<div class="MenuList">
							<div>
								<div class="MenuListName">
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

						<div class="MenuList">
							<div>
								<div class="MenuListName">
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
								<div class="MenuListName">
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

						<div class="MenuList">
							<div>
								<div class="MenuListName">
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
								<div class="MenuListName">
									<a <?php $MainType='Аккумуляторы и ЗУ'?> href="Catalog.php?MainType=<?= urldecode($MainType)?>" class="TMenu">Аккумуляторы и ЗУ</a>
								</div>
								<ul>
    								<a <?php $Type='Аккумуляторы'?> href="Catalog.php?Type=<?= urldecode($Type)?>"><li class="TMenu2">Аккумуляторы</li></a>
    								<a <?php $Type='Зарядные устройства'?> href="Catalog.php?Type=<?= urldecode($Type)?>"><li class="TMenu2">Зарядные устройства</li></a>
								</ul>
							</div>

							<div>
								<div class="MenuListName">
									<a <?php $Disc!=''?> href="Catalog.php?ImageDiscount=<?= urldecode($Disc)?>" class="TMenu">Товары со скидками</a>
								</div>
							</div>
						</div>


					</div>

  </body>
</html>