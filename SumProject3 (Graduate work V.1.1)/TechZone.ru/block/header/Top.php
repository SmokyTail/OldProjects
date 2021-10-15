<div class="HeaderBG1">
</div>
<div class="HeaderBG2">
</div>
<div class="MainDivHeader">
	<div class="Header1">
		<div class="ConTelRegDiv">
			<div class="ContactTelephon">
				<p class="TTelephon1">8 800-000-00-00</p>
				<p class="THeader">Звонок по РФ</p>
			</div>
			<div class="ContactTelephon">
				<p class="TTelephon1">8 (912) 123-45-67</p>
				<p class="THeader">Местный номер</p>
			</div>
			<div class="Region">
				<p class="THeader">Ваш регион:</p>
				<a href="#" class="TRegion">Челябинская область</a>
			</div>
		</div>				
		<a href="http://techzone.ru">				
			<div class="Emblem">
			</div>				
		</a>
		<div class="BaskRegLogDiv">				
			<?php
				if (empty($_SESSION['Login'])) {
					require_once ('block/header/RegEnter.php');
				} else {
					require_once ('block/header/ProfExit.php');
				}
			?>
			<div class="BasketDiv">
				<a href="http://techzone.ru/cart"><div class="Basket">
					<img src="images/icons/Basket.png" alt="">
					<?php
						if (count($_SESSION['cart_list']) == 0 or !isset($_SESSION['cart_list'])) {
							$count_checker = "counted";
						} else {
							$count_checker = "";
						}
					?>
					<div class="<?=$count_checker;?>" id="BasketCount"><p class="TCount">
						<span id="cart_count">
							<?	if(isset($_SESSION['cart_list']) && count($_SESSION['cart_list']) != 0){?>
								<?php echo count($_SESSION['cart_list']); ?>
							<?	}?>
						</span>
					</p></div>
				</div></a>
			</div>					
		</div>
	</div>
	<div class="Header2">
		<div id="Catalog_Button">
			<div class="Menu">
				<div class="List">
					<div>
						<div class="ListName">
							<a <?php $MainType='Страйкбольное оружие'?> href="http://techzone.ru/catalog?Type=<?= urldecode($MainType)?>" class="TMenu">Компьютеры, ноутбуки и ПО</a>
						</div>
						<ul>
							<a <?php $Type=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Type)?>"><li class="TMenu2" id="TMenuEmpty">Системные блоки</li></a>
							<a <?php $Type=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Type)?>"><li class="TMenu2" id="TMenuEmpty">Ноутбуки</li></a>
							<a <?php $Type=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Type)?>"><li class="TMenu2" id="TMenuEmpty">Моноблоки</li></a>
							<a <?php $Type=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Type)?>"><li class="TMenu2" id="TMenuEmpty">Неттовы и компьютеры флешки</li></a>
							<a <?php $Type=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Type)?>"><li class="TMenu2" id="TMenuEmpty">Тонкие клиенты</li></a>
							<a <?php $Type=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Type)?>"><li class="TMenu2" id="TMenuEmpty">Платформы</li></a>
							<a <?php $Type=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Type)?>"><li class="TMenu2" id="TMenuEmpty">Серверы</li></a>
							<a <?php $Type=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Type)?>"><li class="TMenu2" id="TMenuEmpty">Серверные платформы</li></a>
							<a <?php $Type=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Type)?>"><li class="TMenu2" id="TMenuEmpty">Программное обеспечение</li></a>
							<a <?php $Type=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Type)?>"><li class="TMenu2" id="TMenuEmpty">Микрокомпьютеры</li></a>
							<a <?php $Type=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Type)?>"><li class="TMenu2" id="TMenuEmpty">Аксессуары для микрокомпьютеров</li></a>
							<a <?php $Type=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Type)?>"><li class="TMenu2" id="TMenuEmpty">Аксессуары для ноутбуков</li></a>
							<a <?php $Type=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Type)?>"><li class="TMenu2" id="TMenuEmpty">Запчасти и ПО для ноутбуков и планшетов</li></a>
							<a <?php $Type=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Type)?>"><li class="TMenu2" id="TMenuEmpty">Комплектующие для ноутбуков</li></a>
						</ul>
					</div>
				</div>
				<div class="List">
					<div>
						<div class="ListName">
							<a href="http://techzone.ru/catalog?Type=<?= urldecode($MainType)?>" class="TMenu">Переферия и аксессуары</a>
						</div>
						<ul>
							<a <?php $Manu='monitors'?> href="http://techzone.ru/catalog?Type=<?=$Type?><?= urldecode($Manu)?>"><li class="TMenu2">Мониторы</li></a>
							<a <?php $Manu=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Manu)?>"><li class="TMenu2" id="TMenuEmpty">Клавиатуры</li></a>
							<a <?php $Manu=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Manu)?>"><li class="TMenu2" id="TMenuEmpty">Мыши</li></a>
							<a <?php $Manu=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Manu)?>"><li class="TMenu2" id="TMenuEmpty">Игровые наборы</li></a>
							<a <?php $Manu=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Manu)?>"><li class="TMenu2" id="TMenuEmpty">Коврики мыши</li></a>
							<a <?php $Manu=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Manu)?>"><li class="TMenu2" id="TMenuEmpty">Графические планшеты</li></a>
							<a <?php $Manu=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Manu)?>"><li class="TMenu2" id="TMenuEmpty">Внешние накопители данных</li></a>
							<a <?php $Manu=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Manu)?>"><li class="TMenu2" id="TMenuEmpty">Веб-камеры</li></a>
							<a <?php $Manu=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Manu)?>"><li class="TMenu2" id="TMenuEmpty">Компьютерные кабели и переходники</li></a>
							<a <?php $Manu=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Manu)?>"><li class="TMenu2" id="TMenuEmpty">Крепления для мониторов</li></a>
							<a <?php $Manu=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Manu)?>"><li class="TMenu2" id="TMenuEmpty">Блоки питания для мониторов</li></a>
							<a <?php $Manu=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Manu)?>"><li class="TMenu2" id="TMenuEmpty">Универсальные блоки питания</li></a>
							<a <?php $Manu=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Manu)?>"><li class="TMenu2" id="TMenuEmpty">Наушники</li></a>
							<a <?php $Manu=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Manu)?>"><li class="TMenu2" id="TMenuEmpty">Контроллеры и геймпады для PC</li></a>
							<a <?php $Manu=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Manu)?>"><li class="TMenu2" id="TMenuEmpty">Видеокабели и переходники</li></a>
						</ul>
					</div>
				</div>
				<div class="List">
					<div>
						<div class="ListName">
							<a <?php $MainType='Снаряжение'?> href="http://techzone.ru/catalog?Type=<?= urldecode($MainType)?>" class="TMenu">Комплектующие для ПК</a>
						</div>
						<ul>
							<a <?php $Type=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Type)?>"><li class="TMenu2" id="TMenuEmpty">Процессоры</li></a>
							<a <?php $Type=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Type)?>"><li class="TMenu2" id="TMenuEmpty">Материнские платы</li></a>
							<a <?php $Type=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Type)?>"><li class="TMenu2" id="TMenuEmpty">Видеокарты</li></a>
							<a <?php $Type=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Type)?>"><li class="TMenu2" id="TMenuEmpty">Оперативная память</li></a>
							<a <?php $Type=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Type)?>"><li class="TMenu2" id="TMenuEmpty">Блоки питания</li></a>
							<a <?php $Type='cases'?> href="http://techzone.ru/catalog?Type=<?=$Type?>"><li class="TMenu2">Корпуса</li></a>
							<a <?php $Type=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Type)?>"><li class="TMenu2" id="TMenuEmpty">Охлаждение компьютера</li></a>
							<a <?php $Type=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Type)?>"><li class="TMenu2" id="TMenuEmpty">Моддинг и обслуживание</li></a>
							<a <?php $Type=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Type)?>"><li class="TMenu2" id="TMenuEmpty">SSD накопители</li></a>
							<a <?php $Type=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Type)?>"><li class="TMenu2" id="TMenuEmpty">Жесткие диски</li></a>
							<a <?php $Type=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Type)?>"><li class="TMenu2" id="TMenuEmpty">Устройства расширения</li></a>
							<a <?php $Type=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Type)?>"><li class="TMenu2" id="TMenuEmpty">Комплектующие для сервера</li></a>
						</ul>
					</div>
					<div>
						<div class="ListName" id="Menu3">
							<a <?php $Disc!=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Disc)?>" class="TMenu">Услуги</a>
						</div>
					</div>
					<div>
						<div class="ListName" id="Menu3">
							<a <?php $Disc!=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Disc)?>" class="TMenu">Производители</a>
						</div>
					</div>
					<div>
						<div class="ListName" id="Menu3">
							<a <?php $Disc!=''?> href="http://techzone.ru/catalog?Type=<?= urldecode($Disc)?>" class="TMenu">Товары со скидками</a>
						</div>
					</div>	
				</div>
			</div>
			<p class="TCatalog">КАТАЛОГ</p>
		</div>
		<a href="http://techzone.ru/news"><div class="Header_Button">
			<p class="THeaderButtonPanel2">НОВОСТИ</p>
		</div></a>
		<a href="http://techzone.ru/paymeth"><div class="Header_Button">
			<p class="THeaderButtonPanel2">СПОСОБЫ ОПЛАТЫ</p>
		</div></a>
		<a href="http://techzone.ru/delivery"><div class="Header_Button">
			<p class="THeaderButtonPanel2">ДОСТАВКА</p>
		</div></a>
		<a href="http://techzone.ru/guarantees"><div class="Header_Button">
			<p class="THeaderButtonPanel2">ГАРАНТИИ</p>
		</div></a>
		<a href="http://techzone.ru/order"><div class="Header_Button">
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
		<form method="POST" class="search" action="http://techzone.ru/search" name="search">
			<div class="Searcher">
				<img src="images/icons/Search.png" alt="">
				<input class="Submit" type="submit" name="submit" value=""/>
			</div>
			<input class="Input" type="text" maxlength="100" name="search" placeholder="Поиск товаров..." required/>
		</form>
	</div>
	<div class="LeftElemS">
	</div>
</div>