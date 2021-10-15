-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 09 2018 г., 18:55
-- Версия сервера: 5.5.50
-- Версия PHP: 5.4.45

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `MainBase`
--

-- --------------------------------------------------------

--
-- Структура таблицы `News`
--

CREATE TABLE IF NOT EXISTS `News` (
  `ID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Greeting` text NOT NULL,
  `Text` text NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `News`
--

INSERT INTO `News` (`ID`, `Title`, `Greeting`, `Text`, `Date`, `Image`) VALUES
(1, 'Новость №1', 'Новость №1', '', '2018-02-23 19:00:00', 'images/news/4-1.png'),
(2, 'Новость №2', 'Новость №2', '', '2018-02-23 19:00:00', 'images/news/4-1.png'),
(3, 'Новость №3', 'Новость №3', '', '2018-02-23 19:00:00', 'images/news/4-1.png'),
(4, 'Новость №4', 'Новость №4', '', '2018-02-23 19:00:00', 'images/news/4-1.png'),
(5, 'Новость №5', 'Новость №5', '', '2018-02-23 19:00:00', 'images/news/4-1.png'),
(6, 'Скидка 10% на все винтовки и автоматы от Cyma', 'Товарищи,', 'С радостью объявляем, что на все автоматы и винтовки от фирмы Cyma действует скидка 10%!\r\n<br/><br/>\r\nПоспешите приобрести привод от фирмы Cyma по сниженной цене!\r\n<br/><br/>\r\nАкция действует до 1 июня 2018 года.', '2018-02-24 12:36:40', 'images/news/3-2.png'),
(7, 'Большое поступление CYMA', 'Дорогие покупатели,', 'Множество товаров от фирмы Cyma в нашем каталоге.\r\n<br/><br/>\r\nПоспеши приобрести новые товары!', '2018-02-24 12:56:40', 'images/news/2-2.png'),
(8, 'Новое поступление пистолетов от GALAXY', 'Друзья,', 'В нашем каталоге пополнение!\r\n<br/><br/>\r\nПистолеты от фирмы Galaxy ждут пока вы их не приобретёте.\r\n<br/><br/>\r\nПоспешите купить качественный страйкбольный пистолет.', '2018-02-24 13:14:08', 'images/news/1-2.png');

-- --------------------------------------------------------

--
-- Структура таблицы `StrikeGun`
--

CREATE TABLE IF NOT EXISTS `StrikeGun` (
  `ID` int(10) NOT NULL,
  `MainType` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `ExtraType` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Manufacturer` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `Gearbox` varchar(100) NOT NULL,
  `Principe` varchar(100) NOT NULL,
  `Material` varchar(100) NOT NULL,
  `MaskType` varchar(100) NOT NULL,
  `VendorCode` varchar(100) NOT NULL,
  `Cost` int(10) NOT NULL,
  `DiscountCost` varchar(10) DEFAULT NULL,
  `About` text NOT NULL,
  `ImageDiscount` varchar(100) DEFAULT NULL,
  `Status` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL DEFAULT 'images/Products/NoImage.png',
  `Recomendated` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=170 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `StrikeGun`
--

INSERT INTO `StrikeGun` (`ID`, `MainType`, `Type`, `ExtraType`, `Name`, `Manufacturer`, `Country`, `Gearbox`, `Principe`, `Material`, `MaskType`, `VendorCode`, `Cost`, `DiscountCost`, `About`, `ImageDiscount`, `Status`, `Image`, `Recomendated`) VALUES
(1, 'Страйкбольное оружие', 'Автоматы', 'АК-серия', 'Автомат АКС-74У Cyma', 'Cyma', 'Китай', 'V3', 'AEG', '', '', 'NuHlfydxbM', 14175, '15750 Р', 'В АКС-74У от Cyma установлен гирбокс версии 3. Базовые показатели мощности выстрела колеблются в пределах 125 м/с шаром 0.2 грамма. Это отличный показатель для базового привода и максимально допустимый по правилам для боя в зданиях и на близких дистанциях. Так что фактически вы получаете готовый тюнингованный привод из коробки, не требующий вложений. Разве что рекомендуется его провести переборку с шиммингом после приобретения. Если все же хочется несколько улучшить показатели стрельбы – можно поменять внутренний стволик на более тонкий, и поставить более мощный аккумулятор для увеличения скорострельности.\r\n<br/><br/>\r\nШтатная аккумуляторная батарея будет слабовата для этого зверька, и рекомендуем использовать ее как запасную и приобрести 7.4 вольтовый Li-Po или Li-Ion аккумулятор. Такой аккумулятор повысит темп стрельбы за счет более высокой токоотдачи. Для игры в холодную погоду можно приобрести 9.9 вольтовый аккумулятор LiFePo4. Он обладает лучшими характеристиками среди используемых для приводов аккумуляторных батарей. При покупке вышеперечисленных АКБ рекомендуем поменять разъемы на Т-образные.\r\n<br/><br/>\r\nВ комплекте с приводом поставляется рыжий пластиковый бункерный магазин на 500 шаров. Данный магазин сделан под бакелит и выглядит достаточно своеобразно. Рекомендуем запастись механическими магазинами, потому что во-первых, это гораздо реалистичнее, ведь лучше перезаряжать магазины во время боя, нежели крутить колесо подачи шаров, а во-вторых механические магазины надежней своих бункерных собратов. Подача шаров постоянная, шары не гремят.\r\n<br/><br/>\r\nК приводу подойдет как стандартный двухточечный ремень АК, так и другие одноточечные и трехточечные автоматный ремни. В частности очень удобен будет одноточечный ремень. \r\n<br/><br/>\r\nСтрайкбольный АКС-74У от Cyma обладает отличным соотношением цена/качество. Он будет хорош и в качестве основного оружия, и в качестве вторички или запасного автомата. Габариты позволяют. Цена тоже.', '<img src="images/DISCOUNT.PNG" alt="">', 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_AKS-74U_Cyma_1.jpg', 1),
(2, 'Страйкбольное оружие', 'Автоматы', 'M-серия', 'Автомат M4 CQB RIS AGM', 'AGM', 'Китай', 'V2', 'AEG', '', '', '6FLQG8ZF78', 11100, NULL, '', NULL, 'Нет в наличии', 'images/Products/AssaultRifles/Assault-Rifle_M4_CQB_RIS_AGM_2.jpg', 0),
(3, 'Страйкбольное оружие', 'Автоматы', 'G-серия', 'Автомат G36C Cyma', 'Cyma', 'Китай', 'V3', 'AEG', '', '', 'Smnf3B7Ggw', 6670, '7410 Р', '', '<img src="images/DISCOUNT.PNG" alt="">', 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_G36C_Cyma_3.jpg', 1),
(4, 'Страйкбольное оружие', 'Автоматы', 'АК-серия', 'Автомат AK-74M Cyma', 'Cyma', 'Китай', 'V3', 'AEG', '', '', 'uSPiSUX0EM', 7650, '8500 Р', '', '<img src="images/DISCOUNT.PNG" alt="">', 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_AK-74M_Cyma_4.jpg', 0),
(5, 'Страйкбольное оружие', 'Автоматы', 'АК-серия', 'Автомат AK-74M Tactical Cyma', 'Cyma', 'Китай', 'V3', 'AEG', '', '', 'AHAOS8KPIY', 10800, '12000 Р', '', '<img src="images/DISCOUNT.PNG" alt="">', 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_AK-74M_Tactical_Cyma_5.jpg', 0),
(6, 'Страйкбольное оружие', 'Автоматы', 'M-серия', 'Автомат M4 RIS Cyma', 'Cyma', 'Китай', 'V2', 'AEG', '', '', 'bQaVEZCoPw', 5400, '6000 Р', '', '<img src="images/DISCOUNT.PNG" alt="">', 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_M4_RIS_Cyma_6.jpg', 0),
(7, 'Страйкбольное оружие', 'Автоматы', 'M-серия', 'Автомат M4A1 G&G, розовый', 'GandG', 'Тайвань', 'V2', 'AEG', '', '', 'AvRXlQ1mSC', 13000, NULL, '', NULL, 'Нет в наличии', 'images/Products/AssaultRifles/Assault-Rifle_M4A1_Pink_G&G_7.jpg', 0),
(8, 'Страйкбольное оружие', 'Автоматы', 'M-серия', 'Автомат M4A1 G&G', 'GandG', 'Тайвань', 'V2', 'AEG', '', '', 'tLfMzSLK5T', 13000, NULL, '', NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_M4A1_G&G_8.jpg', 0),
(9, 'Страйкбольное оружие', 'Автоматы', 'G-серия', 'Автомат G36K Jing Gong', 'Jing Gong', 'Гонконг', 'V3', 'AEG', '', '', 'IeOjdhjfHL', 12500, NULL, '', NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_G36K_Jing_Gong_9.jpg', 0),
(10, 'Страйкбольное оружие', 'Автоматы', 'Другие', 'Автомат СР-3М Вихрь LCT', 'LCT', 'Тайвань', 'V3', 'AEG', '', '', 'K6u9nskrs0', 14300, NULL, '', NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_CP-3M_Vihr _LCT_10.jpg', 1),
(11, 'Страйкбольное оружие', 'Автоматы', 'Другие', 'Автомат АС ВАЛ LCT', 'LCT', 'Тайвань', 'V3', 'AEG', '', '', '38XWkx5T0u', 19800, NULL, '', NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_AS_VAL_LCT_11.jpg', 1),
(12, 'Страйкбольное оружие', 'Автоматы', 'Другие', 'Автомат SCAR-L DBoys', 'DBoys', 'Китай', 'V2', 'AEG', '', '', '44Y147TFDL', 12900, NULL, '', NULL, 'Нет в наличии', 'images/Products/AssaultRifles/Assault-Rifle_SCAR-L_DBoys_12.jpg', 0),
(13, 'Страйкбольное оружие', 'Автоматы', 'Другие', 'Автомат SCAR-H DBoys', 'DBoys', 'Китай', 'V2', 'AEG', '', '', 'jywdiXNyB6', 12300, NULL, '', NULL, 'Нет в наличии', 'images/Products/AssaultRifles/Assault-Rifle_SCAR-H_DBoys_13.jpg', 0),
(14, 'Страйкбольное оружие', 'Автоматы', 'Другие', 'Автомат SIG556 Shorty King Arms', 'King Arms', 'Гонконг', 'V2', 'AEG', '', '', '1EZRPG4RO8', 10800, NULL, '', NULL, 'Нет в наличии', 'images/Products/AssaultRifles/Assault-Rifle_SIG556_Shorty_King_Arms_14.jpg', 0),
(15, 'Страйкбольное оружие', 'Автоматы', 'Другие', 'Автомат Steyr AUG A2 AU-1G Jing Gong', 'Jing Gong', 'Гонконг', 'V2', 'AEG', '', '', 'aLA8FXY16i', 9800, NULL, '', NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_Steyr_AUG_A2_AU-1G_Jing_Gong_15.jpg', 0),
(16, 'Страйкбольное оружие', 'Автоматы', 'АК-серия', 'Автомат АКС-74 Cyma', 'Cyma', 'Китай', 'V3', 'AEG', '', '', 'mgmwO2efGP', 7020, '7800 Р', '', '<img src="images/DISCOUNT.PNG" alt="">', 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_AKS-74_Cyma_16.jpg', 0),
(17, 'Страйкбольное оружие', 'Автоматы', 'АК-серия', 'Автомат АК-105 Cyma', 'Cyma', 'Китай', 'V3', 'AEG', '', '', 'lECEtOOvmp', 7515, '8350 Р', '', '<img src="images/DISCOUNT.PNG" alt="">', 'Нет в наличии', 'images/Products/AssaultRifles/Assault-Rifle_AK-105_Cyma_17.jpg', 0),
(18, 'Страйкбольное оружие', 'Автоматы', 'АК-серия', 'Автомат АК47 Tactical, тактический обвес Cyma', 'Cyma', 'Китай', 'V3', 'AEG', '', '', 'IRffLyPHDq', 9990, '11100 Р', '', '<img src="images/DISCOUNT.PNG" alt="">', 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_AK47_Tactical_Cyma_18.jpg', 0),
(19, 'Страйкбольное оружие', 'Автоматы', 'АК-серия', 'Автомат АК-74М G&G', 'GandG', 'Тайвань', 'V3', 'AEG', '', '', 'Cy2cNoUXzh', 11900, NULL, '', NULL, 'Нет в наличии', 'images/Products/AssaultRifles/Assault-Rifle_AK-74M_G&G_19.jpg', 0),
(20, 'Страйкбольное оружие', 'Автоматы', 'АК-серия', 'Автомат АКС-74 G&G', 'GandG', 'Тайвань', 'V3', 'AEG', '', '', 'T3XTE9D1V1', 11990, NULL, '', NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_AKS-74_G&G_20.jpg', 0),
(21, 'Страйкбольное оружие', 'Автоматы', 'M-серия', 'Автомат M4A1 RIS SD СQB DBoys', 'DBoys', 'Китай', 'V2', 'AEG', '', '', 'nmlYcQshjo', 9900, NULL, '', NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_M4A1_RIS_SD_СQB_DBoys_21.jpg', 1),
(22, 'Страйкбольное оружие', 'Автоматы', 'M-серия', 'Автомат M4A1 MOD 0, EBB G&G', 'GandG', 'Тайвань', 'V2', 'AEG', '', '', 'SxyLeDg04z', 14800, NULL, '', NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_M4A1_MOD_0_EBB_G&G_22.jpg', 0),
(23, 'Страйкбольное оружие', 'Автоматы', 'M-серия', 'Автомат Amoeba M4 Ares', 'Ares', 'Гонконг', 'V2', 'AEG', '', '', 'N5dvUXEUuV', 14500, NULL, '', NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_Amoeba_M4_Ares_23.jpg', 1),
(24, 'Страйкбольное оружие', 'Автоматы', 'M-серия', 'Автомат М16A3 AGM', 'AGM', 'Китай', 'V2', 'AEG', '', '', 'K1TJ9SIONC', 11400, NULL, '', NULL, 'Нет в наличии', 'images/Products/AssaultRifles/Assault-Rifle_M16A3_AGM_24.jpg', 1),
(25, 'Страйкбольное оружие', 'Автоматы', 'G-серия', 'Автомат G36, удлиненный ствол Jing Gong', 'Jing Gong', 'Гонконг', 'V3', 'AEG', '', '', '2jCGdOC0UE', 13500, NULL, '', NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_G36_Long_Barrel_Jing_Gong_25.jpg', 0),
(26, 'Страйкбольное оружие', 'Автоматы', 'G-серия', 'Автомат G36C RIS G&G', 'GandG', 'Тайвань', 'V3', 'AEG', '', '', 'fKksdzqqDN', 16500, NULL, '', NULL, 'Нет в наличии', 'images/Products/AssaultRifles/Assault-Rifle_G36C_RIS_G&G_26.jpg', 0),
(27, 'Страйкбольное оружие', 'Автоматы', 'G-серия', 'Автомат G36E Jing Gong', 'Jing Gong', 'Гонконг', 'V3', 'AEG', '', '', 'IJfEH6HuW5', 13400, NULL, '', NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_G36E_Jing_Gong_27.jpg', 0),
(28, 'Страйкбольное оружие', 'Автоматы', 'G-серия', 'Автомат G36C G&G', 'GandG', 'Тайвань', 'V3', 'AEG', '', '', 'DZ5PhwPTej', 15700, NULL, '', NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_G36C_G&G_28.jpg', 0),
(29, 'Страйкбольное оружие', 'Автоматы', 'G-серия', 'Автомат G36K Ares', 'Ares', 'Гонконг', 'V3', 'AEG', '', '', 'BOQJZ0DRVC', 15200, NULL, '', NULL, 'Нет в наличии', 'images/Products/AssaultRifles/Assault-Rifle_G36K_Ares_29.jpg', 0),
(30, 'Страйкбольное оружие', 'Винтовки', '', 'Винтовка ВСС Винторез LCT', 'LCT', 'Тайвань', 'V3', 'AEG', '', '', 'wZPNN1BsSI', 14800, NULL, '', NULL, 'Есть в наличии', 'images/Products/Rifles/Rifle_VSS_Vintorez_LCT_30.jpg', 0),
(31, 'Страйкбольное оружие', 'Винтовки', '', 'Винтовка ВСС Винторез King Arms', 'King Arms', 'Гонконг', 'V3', 'AEG', '', '', 'PYA75AV6K2', 12700, NULL, '', NULL, 'Есть в наличии', 'images/Products/Rifles/Rifle_VSS_Vintorez_King_Arms_31.jpg', 0),
(32, 'Страйкбольное оружие', 'Винтовки', '', 'Винтовка ВСС Винторез G&G', 'GandG', 'Тайвань', 'V3', 'AEG', '', '', 'LhNQmbemtD', 15000, NULL, '', NULL, 'Нет в наличии', 'images/Products/Rifles/Rifle_VSS_Vintorez_G&G_32.jpg', 0),
(33, 'Страйкбольное оружие', 'Автоматы', 'M-серия', 'Автомат M4 S-System DBoys', 'DBoys', 'Китай', 'V2', 'AEG', '', '', 'A2Dek0UH5X', 12600, NULL, '', NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_M4_S-System_DBoys_33.jpg', 0),
(34, 'Страйкбольное оружие', 'Автоматы', 'Другиe модели', 'Автомат LR300 Short A&K', 'AandK', 'Китай', 'V2', 'AEG', '', '', 'pjj0yzHI9p', 12500, NULL, '', NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_LR300_Short_A&K_34.jpg', 0),
(35, 'Страйкбольное оружие', 'Автоматы', 'Другиe модели', 'Автомат LR300 Long A&K', 'AandK', 'Китай', 'V2', 'AEG', '', '', 'FhILKXRKvh', 13300, NULL, '', NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_LR300_Long_A&K_35.jpg', 0),
(36, 'Страйкбольное оружие', 'Автоматы', 'Другиe модели', 'Автомат MC51 RAS Jing Gong', 'Jing Gong', 'Гонконг', 'V2', 'AEG', '', '', '3S8ERo7CEi', 11700, NULL, '', NULL, 'Нет в наличии', 'images/Products/AssaultRifles/Assault-Rifle_MC51_RAS_Jing_Gong_36.jpg', 1),
(37, 'Страйкбольное оружие', 'Автоматы', 'Другиe модели', 'Автомат НК 416 Short, EBB G&G', 'GandG', 'Тайвань', 'V2', 'AEG', '', '', 'N9IBD6OSA1', 14900, NULL, '', NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_НК_416_Short_EBB_G&G_37.jpg', 0),
(38, 'Страйкбольное оружие', 'Автоматы', 'Другиe модели', 'Автомат Steyr AUG A2 Civilian Top Rail Jing Gong', 'Jing Gong', 'Гонконг', 'V2', 'AEG', '', '', 'TRCLCqwjfs', 9700, NULL, '', NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_Steyr_AUG_A2_Civilian_Top_Rail_Jing_Gong_38.jpg', 0),
(39, 'Страйкбольное оружие', 'Автоматы', 'Другиe модели', 'Автомат SCAR-L, tan DBoys', 'DBoys', 'Китай', 'V2', 'AEG', '', '', '5YD1NDVB9J', 12900, NULL, '', NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_SCAR-L_tan_DBoys_39.jpg', 0),
(40, 'Страйкбольное оружие', 'Автоматы', 'АК-серия', 'Автомат АК, EBB Cyma', 'Cyma', 'Китай', 'V3', 'AEG', '', '', 'qR6pWmmPB2', 10710, '11900 Р', '', '<img src="images/DISCOUNT.PNG" alt="">', 'Нет в наличии', 'images/Products/AssaultRifles/Assault-Rifle_АК_EBB_Cyma_39.jpg', 0),
(41, 'Страйкбольное оружие', 'Винтовки', '', 'Винтовка СВД-С Cyma', 'Cyma', 'Китай', 'SVD type', 'AEG', '', '', 'PLYTB14KKW', 10800, '12000 Р', '', '<img src="images/DISCOUNT.PNG" alt="">', 'Есть в наличии', 'images/Products/Rifles/Rifle_SVD-S_Cyma_41.jpg', 1),
(42, 'Страйкбольное оружие', 'Винтовки', '', 'Винтовка СВД Cyma', 'Cyma', 'Китай', 'SVD type', 'AEG', '', '', 'A91JVWrTBo', 11700, '13000 Р', '', '<img src="images/DISCOUNT.PNG" alt="">', 'Есть в наличии', 'images/Products/Rifles/Rifle_SVD_Cyma_42.jpg', 0),
(43, 'Страйкбольное оружие', 'Винтовки', '', 'Винтовка Amoeba STRIKER AS-01 Ares', 'Ares', 'Гонконг', 'V2', 'Газ', '', '', 'wxC1sOoX1U', 15800, NULL, '', NULL, 'Нет в наличии', 'images/Products/Rifles/Rifle_Amoeba_STRIKER_AS-01_Ares_43.jpg', 0),
(44, 'Страйкбольное оружие', 'Винтовки', '', 'Винтовка L96 AGM', 'AGM', 'Китай', 'V2', 'Газ', '', '', 'S0EJJH2G6H', 12200, NULL, '', NULL, 'Есть в наличии', 'images/Products/Rifles/Rifle_L96_AGM_44.jpg', 0),
(45, 'Страйкбольное оружие', 'Винтовки', '', 'Винтовка MCM700X Ares', 'Ares', 'Гонконг', 'V2', 'Газ', '', '', 'ezK9SYl2uQ', 16500, NULL, '', NULL, 'Нет в наличии', 'images/Products/Rifles/Rifle_MCM700X_Ares_45.jpg', 0),
(46, 'Страйкбольное оружие', 'Винтовки', '', 'Винтовка СВД-С A&K', 'AandK', 'Китай', 'SVD type', 'AEG', '', '', 'OR13JCKIZJ', 13500, NULL, '', NULL, 'Есть в наличии', 'images/Products/Rifles/Rifle_SVD-S_A&K_46.jpg', 0),
(47, 'Страйкбольное оружие', 'Винтовки', '', 'Винтовка VSR-10 Cyma', 'Cyma', 'Китай', 'V2', 'Газ', '', '', 'CKW6GDER7O', 11250, '12500 Р', '', '<img src="images/DISCOUNT.PNG" alt="">', 'Нет в наличии', 'images/Products/Rifles/Rifle_VSR-10_Cyma_47.jpg', 0),
(48, 'Страйкбольное оружие', 'Пулемёты', '', 'Пулемёт РПК-74 Cyma', 'Cyma', 'Китай', 'V3', 'AEG', '', '', 'SkG8dppXIH', 13000, NULL, '', NULL, 'Нет в наличии', 'images/Products/MachineGuns/MachineGun_RPK-74_Cyma_48.jpg', 0),
(49, 'Страйкбольное оружие', 'Пулемёты', '', 'Пулемёт M249 MKII A&K', 'AandK', 'Китай', 'V2', 'AEG', '', '', 'UFGFOLDVXM', 14700, NULL, '', NULL, 'Есть в наличии', 'images/Products/MachineGuns/MachineGun_M249_MKII_A&K_49.jpg', 0),
(50, 'Страйкбольное оружие', 'Пулемёты', '', 'Пулемёт M60VN A&K', 'AandK', 'Китай', 'V2', 'AEG', '', '', 'CXEH25GWD1', 15200, NULL, '', NULL, 'Нет в наличии', 'images/Products/MachineGuns/MachineGun_M60VN_A&K_50.jpg', 0),
(51, 'Страйкбольное оружие', 'Пулемёты', '', 'Пулемёт РПК-74М Cyma', 'Cyma', 'Китай', 'V3', 'AEG', '', '', 'Tf8ORb8dv6', 12700, NULL, '', NULL, 'Есть в наличии', 'images/Products/MachineGuns/MachineGun_RPK-74M_Cyma_51.jpg', 0),
(52, 'Страйкбольное оружие', 'Пулемёты', '', 'Пулемёт РПКС-74 LCT', 'LCT', 'Тайвань', 'V3', 'AEG', '', '', 'HFoVbUaJ3z', 15600, NULL, '', NULL, 'Нет в наличии', 'images/Products/MachineGuns/MachineGun_RPKS-74_LCT_52.jpg', 0),
(53, 'Страйкбольное оружие', 'Пулемёты', '', 'Пулемёт M249 Para A&K', 'AandK', 'Китай', 'V2', 'AEG', '', '', 'v65RiEHRCm', 13700, NULL, '', NULL, 'Есть в наличии', 'images/Products/MachineGuns/MachineGun_M249_Para_A&K_53.jpg', 0),
(54, 'Страйкбольное оружие', 'Пулемёты', '', 'Пулемёт MK42 A&K', 'AandK', 'Китай', 'V2', 'AEG', '', '', 'G0npnVV9Fy', 14000, NULL, '', NULL, 'Нет в наличии', 'images/Products/MachineGuns/MachineGun_MK43_A&K_54.jpg', 0),
(55, 'Страйкбольное оружие', 'Пистолеты-пулемёты', '', 'Пистолет-пулемёт MP5A4 RIS Cyma', 'Cyma', 'Китай', 'V2', 'AEG', '', '', '4WhdyA31oc', 9400, NULL, '', NULL, 'Есть в наличии', 'images/Products/SubmachineGun/SubmachineGun_MP5A4_RIS_Cyma_55.jpg', 0),
(56, 'Страйкбольное оружие', 'Пистолеты-пулемёты', '', 'Пистолет-пулемёт MP5A3 Cyma', 'Cyma', 'Китай', 'V2', 'AEG', '', '', 'tVZS8NCSne', 9600, NULL, '', NULL, 'Есть в наличии', 'images/Products/SubmachineGun/SubmachineGun_MP5A3_Cyma_56.jpg', 0),
(57, 'Страйкбольное оружие', 'Пистолеты-пулемёты', '', 'Пистолет-пулемёт MP40 AGM', 'AGM', 'Китай', 'V2', 'AEG', '', '', 'Z2mUYr0O2M', 12200, NULL, '', NULL, 'Есть в наличии', 'images/Products/SubmachineGun/SubmachineGun_MP40_AGM_57.jpg', 0),
(58, 'Страйкбольное оружие', 'Пистолеты-пулемёты', '', 'Пистолет-пулемёт MP5SD6 G&G', 'GandG', 'Тайвань', 'V2', 'AEG', '', '', 'uwGNQmqDB9', 14500, NULL, '', NULL, 'Есть в наличии', 'images/Products/SubmachineGun/SubmachineGun_MP5SD6_G&G_58.jpg', 0),
(59, 'Страйкбольное оружие', 'Пистолеты-пулемёты', '', 'Пистолет-пулемёт H&K UMP Umarex', 'Umarex', 'Германия', 'V2', 'AEG', '', '', 'tAy7hBkmD9', 16000, NULL, '', NULL, 'Нет в наличии', 'images/Products/SubmachineGun/SubmachineGun_H&K_UMP_Umarex_59.jpg', 0),
(60, 'Страйкбольное оружие', 'Пистолеты-пулемёты', '', 'Пистолет-пулемёт PP-19 Bizon Cyma', 'Cyma', 'Китай', 'V3', 'AEG', '', '', 'Pma549mIKZ', 10450, NULL, '', NULL, 'Есть в наличии', 'images/Products/SubmachineGun/SubmachineGun_PP-19_Bizon_Cyma_60.jpg', 0),
(61, 'Страйкбольное оружие', 'Пистолеты', 'Beretta ', 'Пистолет Beretta 92 mini Galaxy', 'Galaxy', 'Тайвань', '', 'Газ', '', '', '0VxuPQ03jw', 6350, NULL, '', NULL, 'Есть в наличии', 'images/Products/Pistols/Pistol_Beretta_92_mini_Galaxy_61.jpg', 0),
(62, 'Страйкбольное оружие', 'Пистолеты', 'Beretta ', 'Пистолет Beretta 92FS Gletcher', 'Gletcher', 'США', '', 'Газ', '', '', '3mWxhdOvds', 8000, NULL, '', NULL, 'Есть в наличии', 'images/Products/Pistols/Pistol_Beretta_92FS_Gletcher_62.jpg', 0),
(63, 'Страйкбольное оружие', 'Пистолеты', 'Beretta ', 'Пистолет Beretta M84 WE', 'WE', 'Тайвань', '', 'Газ', '', '', 'xsXaZfeydk', 6200, NULL, '', NULL, 'Нет в наличии', 'images/Products/Pistols/Pistol_Beretta_M84_WE_63.jpg', 0),
(64, 'Страйкбольное оружие', 'Пистолеты', 'Beretta ', 'Пистолет Beretta M92FS WE', 'WE', 'Тайвань', '', 'Газ', '', '', 'l2zv5QNGSF', 6100, NULL, '', NULL, 'Нет в наличии', 'images/Products/Pistols/Pistol_Beretta_M92FS_WE_64.jpg', 0),
(65, 'Страйкбольное оружие', 'Пистолеты', 'Colt', 'Пистолет Colt 25 Galaxy', 'Galaxy', 'Тайвань', '', 'Газ', '', '', 'YfuecXNg8b', 980, NULL, '', NULL, 'Есть в наличии', 'images/Products/Pistols/Pistol_Colt_25_Galaxy_65.jpg', 0),
(66, 'Страйкбольное оружие', 'Пистолеты', 'Colt', 'Пистолет Colt 1911 Galaxy', 'Galaxy', 'Тайвань', '', 'Газ', '', '', 'XAu3Hf5b6f', 1020, NULL, '', NULL, 'Есть в наличии', 'images/Products/Pistols/Pistol_Colt_1911_Galaxy_66.jpg', 0),
(67, 'Страйкбольное оружие', 'Пистолеты', 'Colt', 'Пистолет Colt G2 Galaxy', 'Galaxy', 'Тайвань', '', 'Газ', '', '', 'UAjEACGYOO', 900, NULL, '', NULL, 'Нет в наличии', 'images/Products/Pistols/Pistol_Colt_G2_Galaxy_67.jpg', 1),
(68, 'Страйкбольное оружие', 'Пистолеты', 'Colt', 'Пистолет Colt PD mini Galaxy', 'Galaxy', 'Тайвань', '', 'Газ', '', '', 'X6AjlWTIJv', 1200, NULL, '', NULL, 'Есть в наличии', 'images/Products/Pistols/Pistol_Colt_PD_mini_Galaxy_68.jpg', 0),
(69, 'Страйкбольное оружие', 'Пистолеты', 'Glock', 'Пистолет G18C ASG', 'ASG', 'Китай', '', 'AEG', '', '', 'ZTnjtMy7sI', 6000, NULL, '', NULL, 'Есть в наличии', 'images/Products/Pistols/Pistol_G18C_ASG_69.jpg', 0),
(70, 'Страйкбольное оружие', 'Пистолеты', 'Glock', 'Пистолет Glock 23 KJW', 'KJW', 'Тайвань', '', 'AEG', '', '', 'HEWycF3L7M', 6100, NULL, '', NULL, 'Есть в наличии', 'images/Products/Pistols/Pistol_Glock_23_KJW_70.jpg', 0),
(71, 'Страйкбольное оружие', 'Пистолеты', 'Glock', 'Пистолет Glock 19 KJW', 'KJW', 'Тайвань', '', 'AEG', '', '', '91TaBHt5mM', 5900, NULL, '', NULL, 'Есть в наличии', 'images/Products/Pistols/Pistol_Glock_19_KJW_71.jpg', 0),
(72, 'Страйкбольное оружие', 'Пистолеты', 'Glock', 'Пистолет Glock 27 WE', 'WE', 'Тайвань', '', 'AEG', '', '', '88SFkeqkVY', 6400, NULL, '', NULL, 'Есть в наличии', 'images/Products/Pistols/Pistol_Glock_27_WE_72.jpg', 0),
(73, 'Страйкбольное оружие', 'Пистолеты', 'Glock', 'Пистолет Glock 33 WE', 'WE', 'Тайвань', '', 'AEG', '', '', '2OEObPpiyo', 6800, NULL, '', NULL, 'Есть в наличии', 'images/Products/Pistols/Pistol_Glock_33_WE_73.jpg', 1),
(74, 'Страйкбольное оружие', 'Пистолеты', 'Sig Sauer', 'Пистолет Sig Sauer P226 WE', 'WE', 'Тайвань', '', 'Газ', '', '', '1zUpT57hG5', 6400, NULL, '', NULL, 'Есть в наличии', 'images/Products/Pistols/Pistol_Sig_Sauer_P226_WE_74.jpg', 0),
(75, 'Страйкбольное оружие', 'Пистолеты', 'Sig Sauer', 'Пистолет Sig Sauer P226 WE, розовый', 'WE', 'Тайвань', '', 'Газ', '', '', 'HdgDP7AT0z', 5980, NULL, '', NULL, 'Нет в наличии', 'images/Products/Pistols/Pistol_Sig_Sauer_P226_Pink_WE_75.jpg', 0),
(76, 'Страйкбольное оружие', 'Пистолеты', 'Sig Sauer', 'Пистолет Sig Sauer P228 WE', 'WE', 'Тайвань', '', 'Газ', '', '', 'J4JKO2et7W', 6120, NULL, '', NULL, 'Нет в наличии', 'images/Products/Pistols/Pistol_Sig_Sauer_P228_WE_76.jpg', 0),
(77, 'Страйкбольное оружие', 'Пистолеты', 'Sig Sauer', 'Пистолет Sig Sauer P226 Cyma', 'Cyma', 'Китай', '', 'AEG', '', '', 'ceFzXJwa66', 1300, NULL, '', NULL, 'Нет в наличии', 'images/Products/Pistols/Pistol_Sig_Sauer_P226_Cyma_77.jpg', 0),
(78, 'Страйкбольное оружие', 'Пистолеты', 'Sig Sauer', 'Пистолет Sig Sauer P228 E2 KJW', 'KJW', 'Тайвань', '', 'AEG', '', '', 'culSlBF9aB', 900, NULL, '', NULL, 'Есть в наличии', 'images/Products/Pistols/Pistol_Sig_Sauer_P228_E2_KJW_78.jpg', 0),
(79, 'Страйкбольное оружие', 'Пистолеты', 'Пистолет Макарова', 'Пистолет Макарова Galaxy', 'Galaxy', 'Тайвань', '', 'Газ', '', '', 'wTVcwBy4E3', 1300, NULL, '', NULL, 'Нет в наличии', 'images/Products/Pistols/Pistol_Makarov_Galaxy_79.jpg', 1),
(80, 'Страйкбольное оружие', 'Пистолеты', 'Пистолет Макарова', 'Пистолет Макарова NBB Gletchter', 'Gletcher', 'США', '', 'Газ', '', '', 'Taurbu6If7', 5100, NULL, '', NULL, 'Есть в наличии', 'images/Products/Pistols/Pistol_Makarov_NBB_Gletchter_80.jpg', 1),
(81, 'Страйкбольное оружие', 'Пистолеты', 'Пистолет Макарова', 'Пистолет Макарова с глушителем Galaxy', 'Galaxy', 'Тайвань', '', 'Газ', '', '', '5e65Kq4FbV', 1600, NULL, '', NULL, 'Есть в наличии', 'images/Products/Pistols/Pistol_Makarov_Silence_Galaxy_81.jpg', 0),
(82, 'Страйкбольное оружие', 'Пистолеты', 'Пистолет Ярыгина', 'Пистолет Грач Galaxy', 'Galaxy', 'Тайвань', '', 'Газ', '', '', 'UZVosR8RzY', 1200, NULL, '', NULL, 'Есть в наличии', 'images/Products/Pistols/Pistol_Grach_Galaxy_82.jpg', 0),
(83, 'Страйкбольное оружие', 'Пистолеты', 'Тульский Токарева', 'Пистолет ТТ mini Galaxy', 'Galaxy', 'Тайвань', '', 'Газ', '', '', 'IFcLkVVMjm', 1500, NULL, '', NULL, 'Есть в наличии', 'images/Products/Pistols/Pistol_TT_mini_Galaxy_83.jpg', 0),
(84, 'Страйкбольное оружие', 'Пистолеты', 'Другие модели', 'Пистолет USP Compact KJW', 'KJW', 'Тайвань', '', 'Газ', '', '', 'D3FFG9li2m', 1600, NULL, '', NULL, 'Есть в наличии', 'images/Products/Pistols/Pistol_USP_Compact_KJW_84.jpg', 0),
(85, 'Страйкбольное оружие', 'Пистолеты', 'Другие модели', 'Пистолет Browning Galaxy', 'Galaxy', 'Тайвань', '', 'Газ', '', '', 'xdBUOFMfC3', 6200, NULL, '', NULL, 'Есть в наличии', 'images/Products/Pistols/Pistol_Browning_Galaxy_85.jpg', 0),
(86, 'Страйкбольное оружие', 'Пистолеты', 'Другие модели', 'Пистолет Mauser 712 Galaxy', 'Galaxy', 'Тайвань', '', 'Газ', '', '', '2vduz53RLu', 4500, NULL, '', NULL, 'Нет в наличии', 'images/Products/Pistols/Pistol_Mauser_712_Galaxy_86.jpg', 0),
(87, 'Страйкбольное оружие', 'Пистолеты', 'Другие модели', 'Пистолет PPS Galaxy', 'Galaxy', 'Тайвань', '', 'Газ', '', '', 'pNgWqc6JEd', 5500, NULL, '', NULL, 'Нет в наличии', 'images/Products/Pistols/Pistol_PPS_Galaxy_87.jpg', 0),
(88, 'Страйкбольное оружие', 'Пистолеты', 'Другие модели', 'Пистолет Walther P38 Galaxy', 'Galaxy', 'Тайвань', '', 'Газ', '', '', 'inJf0d1ea5', 4300, NULL, '', NULL, 'Нет в наличии', 'images/Products/Pistols/Pistol_Walther_P38_Galaxy_88.jpg', 0),
(89, 'Страйкбольное оружие', 'Пистолеты', 'Другие модели', 'Пистолет USP Tactical KJW', 'KJW', 'Тайвань', '', 'Газ', '', '', '4VfRlndlxT', 1400, NULL, '', NULL, 'Есть в наличии', 'images/Products/Pistols/Pistol_USP_Tactical_KJW_89.jpg', 0),
(90, 'Снаряжение', 'Головные уборы', '', 'Шлем m88 Kingrin', 'Kingrin', 'Китай', '', '', 'Пластик', '', 'hI7vgpUXSQ', 900, NULL, '', NULL, 'Есть в наличии', 'images/Products/Hats/Hat_m88_Kingrin_90.jpg', 0),
(91, 'Снаряжение', 'Головные уборы', '', 'Шлем MICH 2000 Kingrin', 'Kingrin', 'Китай', '', '', 'Пластик', '', '17c2B5pDIO', 1900, NULL, '', NULL, 'Есть в наличии', 'images/Products/Hats/Hat_MICH_2000_Kingrin_91.jpg', 0),
(92, 'Снаряжение', 'Головные уборы', '', 'Шлем Fast combat helmet Kingrin', 'Kingrin', 'Китай', '', '', 'Пластик', '', '3bvwFBUD9v', 2100, '1900 Р', '', '<img src="images/DISCOUNT.PNG" alt="">', 'Есть в наличии', 'images/Products/Hats/Hat_Fast_combat_helmet_Kingrin_92.jpg', 1),
(93, 'Снаряжение', 'Головные уборы', '', 'Шлем MICH 2002 Kingrin', 'Kingrin', 'Китай', '', '', 'Пластик', '', '42XrPd4TJ2', 2300, NULL, '', NULL, 'Нет в наличии', 'images/Products/Hats/Hat_MICH_2002_Kingrin_93.jpg', 0),
(94, 'Снаряжение', 'Головные уборы', '', 'Шлем K6-3 Guarder', 'Guarder', 'Тайвань', '', '', 'Метал', '', 'b8mD7fIyg8', 8900, NULL, '', NULL, 'Есть в наличии', 'images/Products/Hats/Hat_K6-3_Guarder_94.jpg', 1),
(95, 'Снаряжение', 'Очки', '', 'Очки тактические Kingrin, чёрные', 'Kingrin', 'Китай', '', '', '', '', 'ZGky3egmeh', 480, NULL, '', NULL, 'Есть в наличии', 'images/Products/Glasses/Glasses_Tactical_Black_Kingrin_95.jpg', 1),
(96, 'Снаряжение', 'Очки', '', 'Очки тактические Kingrin, жёлтые', 'Kingrin', 'Китай', '', '', '', '', 'H6Ss6ihjvE', 480, '380 Р', '', '<img src="images/DISCOUNT.PNG" alt="">', 'Есть в наличии', 'images/Products/Glasses/Glasses_Tactical_Yellow_Kingrin_96.jpg', 0),
(97, 'Снаряжение', 'Очки', '', 'Очки тактические  Guarder, жёлтые', 'Guarder', 'Тайвань', '', '', '', '', 'iHRmJ6GMiD', 610, '510 Р', '', '<img src="images/DISCOUNT.PNG" alt="">', 'Есть в наличии', 'images/Products/Glasses/Glasses_Tactical_Yellow_Guarder_97.jpg', 0),
(98, 'Снаряжение', 'Очки', '', 'Очки баллистические Guarder, чёрные', 'Guarder', 'Тайвань', '', '', '', '', 'E7fy92bSl5', 920, '820 Р', '', '<img src="images/DISCOUNT.PNG" alt="">', 'Есть в наличии', 'images/Products/Glasses/Glasses_Ballistic_Black_Guarder_98.jpg', 0),
(99, 'Снаряжение', 'Очки', '', 'Очки баллистические Guarder, зелёные', 'Guarder', 'Тайвань', '', '', '', '', '3SgeEw71Px', 950, '850 Р', '', '<img src="images/DISCOUNT.PNG" alt="">', 'Есть в наличии', 'images/Products/Glasses/Glasses_Ballistic_Green_Guarder_99.jpg', 0),
(100, 'Снаряжение', 'Очки', '', 'Очки баллистические Guarder, жёлтые', 'Guarder', 'Тайвань', '', '', '', '', 'OIoowbKco1', 950, NULL, '', NULL, 'Есть в наличии', 'images/Products/Glasses/Glasses_Ballistic_Yellow_Guarder_100.jpg', 0),
(101, 'Снаряжение', 'Маски', '', 'Маска Kingrin, чёрная', 'Kingrin', 'Китай', '', '', '', 'На всё лицо', 'kur1ZNQJxw', 550, NULL, '', NULL, 'Есть в наличии', 'images/Products/Masks/Masks_Face_Black_Kingrin_101.jpg', 0),
(102, 'Снаряжение', 'Маски', '', 'Маска Kingrin, чёрная', 'Kingrin', 'Китай', '', '', '', 'Нижняя часть лица', 'Sxd6uAUpsg', 500, NULL, '', NULL, 'Есть в наличии', 'images/Products/Masks/Masks_HalfFace_Black_Kingrin_102.jpg', 0),
(103, 'Снаряжение', 'Маски', '', 'Маска Kingrin, коричневый', 'Kingrin', 'Китай', '', '', '', 'Нижняя часть лица', 'gEmi4i57Os', 500, NULL, '', NULL, 'Есть в наличии', 'images/Products/Masks/Masks_HalfFace_Brown_Kingrin_103.jpg', 0),
(104, 'Снаряжение', 'Маски', '', 'Маска Kingrin, коричневый череп', 'Kingrin', 'Китай', '', '', '', 'Нижняя часть лица', 'tCNhUuJrZI', 500, NULL, '', NULL, 'Нет в наличии', 'images/Products/Masks/Masks_HalfFace_Skull_Brown_Kingrin_104.jpg', 1),
(105, 'Снаряжение', 'Маски', '', 'Маска Kingrin, зелёная', 'Kingrin', 'Китай', '', '', '', 'На всё лицо', 'EdvrCvUbFL', 550, NULL, '', NULL, 'Есть в наличии', 'images/Products/Masks/Masks_Face_Green_Kingrin_105.jpg', 0),
(106, 'Снаряжение', 'Наколенники, налокотники', '', 'Комплект наколенников и налокотников V4 Kingrin, коричневые', 'Kingrin', 'Китай', '', '', '', '', 'CeFpq7LaWv', 890, NULL, '', NULL, 'Есть в наличии', 'images/Products/Shields/Shields_V4_Brown_Kingrin_106.jpg', 0),
(107, 'Снаряжение', 'Наколенники, налокотники', '', 'Комплект наколенников и налокотников V4 Kingrin, чёрные', 'Kingrin', 'Китай', '', '', '', '', 'mX6wQmlNIx', 890, NULL, '', NULL, 'Есть в наличии', 'images/Products/Shields/Shields_V4_Black_Kingrin_107.jpg', 0),
(108, 'Снаряжение', 'Наколенники, налокотники', '', 'Комплект наколенников и налокотников V3 Kingrin, чёрные', 'Kingrin', 'Китай', '', '', '', '', 'bz9sHDuNIY', 950, NULL, '', NULL, 'Нет в наличии', 'images/Products/Shields/Shields_V3_Black_Kingrin_108.jpg', 0),
(109, 'Снаряжение', 'Наколенники, налокотники', '', 'Комплект наколенников и налокотников V2 Kingrin, коричневые', 'Kingrin', 'Китай', '', '', '', '', 'Nh7Gr0mO5L', 1350, NULL, '', NULL, 'Есть в наличии', 'images/Products/Shields/Shields_V2_Brown_Kingrin_109.jpg', 0),
(110, 'Снаряжение', 'Наколенники, налокотники', '', 'Комплект наколенников и налокотников V2 Kingrin, чёрные', 'Kingrin', 'Китай', '', '', '', '', 'EIWP80UDYm', 1350, NULL, '', NULL, 'Есть в наличии', 'images/Products/Shields/Shields_V2_Black_Kingrin_110.jpg', 0),
(111, 'Снаряжение', 'Перчатки', '', 'Перчатки M-Pact 3 Mechanix, чёрные', 'Mechanix', 'США', '', '', '', '', 'Xns832bdQI', 2200, NULL, '', NULL, 'Нет в наличии', 'images/Products/Gloves/Gloves_M-Pact_3_Black_Mechanix_111.jpg', 0),
(112, 'Снаряжение', 'Перчатки', '', 'Перчатки M-Pact 3 Mechanix, коричневые', 'Mechanix', 'США', '', '', '', '', 'TN1xNMIyDW', 2200, NULL, '', NULL, 'Есть в наличии', 'images/Products/Gloves/Gloves_M-Pact_3_Brown_Mechanix_112.jpg', 0),
(113, 'Снаряжение', 'Перчатки', '', 'Перчатки Original Mechanix, чёрные', 'Mechanix', 'США', '', '', '', '', 'rsakYdfeHZ', 1950, NULL, '', NULL, 'Есть в наличии', 'images/Products/Gloves/Gloves_Original_Black_Mechanix_113.jpg', 0),
(114, 'Снаряжение', 'Перчатки', '', 'Перчатки FastFit Mechanix, синие', 'Mechanix', 'США', '', '', '', '', 'KRq5ewumxK', 1850, NULL, '', NULL, 'Нет в наличии', 'images/Products/Gloves/Gloves_FastFit_Blue_Mechanix_114.jpg', 0),
(115, 'Снаряжение', 'Перчатки', '', 'Перчатки FastFit Mechanix, красные', 'Mechanix', 'США', '', '', '', '', 'zOl8AsxT7T', 1850, NULL, '', NULL, 'Нет в наличии', 'images/Products/Gloves/Gloves_FastFit_Red_Mechanix_115.jpg', 0),
(116, 'Снаряжение', 'Рюкзаки, сумки', '', 'Рюкзак 1', '', '', '', '', '', '', 'z37CpQfUM3', 1000, NULL, '', NULL, 'Есть в наличии', 'images/Products/NoImage.png', 0),
(117, 'Снаряжение', 'Рюкзаки, сумки', '', 'Рюкзак 2', '', '', '', '', '', '', 'F8Mt5aDwpF', 1200, NULL, '', NULL, 'Есть в наличии', 'images/Products/NoImage.png', 0),
(118, 'Снаряжение', 'Рюкзаки, сумки', '', 'Рюкзак 3', '', '', '', '', '', '', 'Dgq7wG1cFY', 990, NULL, '', NULL, 'Нет в наличии', 'images/Products/NoImage.png', 0),
(119, 'Снаряжение', 'Рюкзаки, сумки', '', 'Рюкзак 4', '', '', '', '', '', '', 'xz98OIWTc8', 950, NULL, '', NULL, 'Есть в наличии', 'images/Products/NoImage.png', 0),
(120, 'Снаряжение', 'Рюкзаки, сумки', '', 'Рюкзак 5', '', '', '', '', '', '', 'QgQussOsgQ', 1150, NULL, '', NULL, 'Нет в наличии', 'images/Products/NoImage.png', 0),
(121, 'Снаряжение', 'Разгрузки', '', 'Разгрузка 1', '', '', '', '', '', '', 'BdP9mpZ3IA', 0, NULL, '', NULL, 'Есть в наличии', 'images/Products/NoImage.png', 0),
(122, 'Снаряжение', 'Разгрузки', '', 'Разгрузка 2', '', '', '', '', '', '', 'heiraoy5Sw', 0, NULL, '', NULL, 'Есть в наличии', 'images/Products/NoImage.png', 0),
(123, 'Снаряжение', 'Разгрузки', '', 'Разгрузка 3', '', '', '', '', '', '', 'UyUxHKGkM9', 0, NULL, '', NULL, 'Нет в наличии', 'images/Products/NoImage.png', 0),
(124, 'Снаряжение', 'Разгрузки', '', 'Разгрузка 4', '', '', '', '', '', '', 'xoxRx7sd68', 0, NULL, '', NULL, 'Есть в наличии', 'images/Products/NoImage.png', 0),
(125, 'Снаряжение', 'Разгрузки', '', 'Разгрузка 5', '', '', '', '', '', '', '5A8ho3PUzq', 0, NULL, '', NULL, 'Нет в наличии', 'images/Products/NoImage.png', 0),
(126, 'Снаряжение', 'Кобуры', '', 'Кобура 1', '', '', '', '', '', '', 'f9jI7o3fEe', 0, NULL, '', NULL, 'Есть в наличии', 'images/Products/NoImage.png', 0),
(127, 'Снаряжение', 'Кобуры', '', 'Кобура 2', '', '', '', '', '', '', 'ScQLmgPFff', 0, NULL, '', NULL, 'Есть в наличии', 'images/Products/NoImage.png', 0),
(128, 'Снаряжение', 'Кобуры', '', 'Кобура 3', '', '', '', '', '', '', 'm896LmkPkF', 0, NULL, '', NULL, 'Нет в наличии', 'images/Products/NoImage.png', 0),
(129, 'Снаряжение', 'Кобуры', '', 'Кобура 4', '', '', '', '', '', '', '6xnUB7ZJx5', 0, NULL, '', NULL, 'Есть в наличии', 'images/Products/NoImage.png', 0),
(130, 'Снаряжение', 'Кобуры', '', 'Кобура 5', '', '', '', '', '', '', 'efuziQrG4C', 0, NULL, '', NULL, 'Нет в наличии', 'images/Products/NoImage.png', 0),
(131, 'Снаряжение', 'Шарфы', '', 'Шарф 1', '', '', '', '', '', '', '5X4KUKDGuL', 0, NULL, '', NULL, 'Есть в наличии', 'images/Products/NoImage.png', 0),
(132, 'Снаряжение', 'Шарфы', '', 'Шарф 2', '', '', '', '', '', '', 'JpR3HUDbub', 0, NULL, '', NULL, 'Есть в наличии', 'images/Products/NoImage.png', 0),
(133, 'Снаряжение', 'Шарфы', '', 'Шарф 3', '', '', '', '', '', '', 'uhERYybOOw', 0, NULL, '', NULL, 'Нет в наличии', 'images/Products/NoImage.png', 0),
(134, 'Снаряжение', 'Шарфы', '', 'Шарф 4', '', '', '', '', '', '', 'n8qkj4QPhm', 0, NULL, '', NULL, 'Есть в наличии', 'images/Products/NoImage.png', 0),
(135, 'Снаряжение', 'Шарфы', '', 'Шарф 5', '', '', '', '', '', '', 'dzRccAbldB', 0, NULL, '', NULL, 'Нет в наличии', 'images/Products/NoImage.png', 0),
(136, 'Расходники', 'Шары', '', 'Шары 1', '', '', '', '', '', '', 'v4yWuZ3G1z', 0, NULL, '', NULL, 'Есть в наличии', 'images/Products/NoImage.png', 0),
(137, 'Расходники', 'Шары', '', 'Шары 2', '', '', '', '', '', '', 'pWwU37PaWJ', 0, NULL, '', NULL, 'Есть в наличии', 'images/Products/NoImage.png', 0),
(138, 'Расходники', 'Шары', '', 'Шары 3', '', '', '', '', '', '', 'jL9ZLoGTVV', 0, NULL, '', NULL, 'Нет в наличии', 'images/Products/NoImage.png', 0),
(139, 'Расходники', 'Шары', '', 'Шары 4', '', '', '', '', '', '', 'wAupwrLLZX', 0, NULL, '', NULL, 'Есть в наличии', 'images/Products/NoImage.png', 0),
(140, 'Расходники', 'Шары', '', 'Шары 5', '', '', '', '', '', '', 'MaLX9Xry3y', 0, NULL, '', NULL, 'Нет в наличии', 'images/Products/NoImage.png', 0),
(141, 'Расходники', 'Газ', 'CO2', 'Баллончик 1', '', '', '', '', '', '', '7SEhAn3gWR', 0, NULL, '', NULL, 'Есть в наличии', 'images/Products/NoImage.png', 0),
(142, 'Расходники', 'Газ', 'CO2', 'Баллончик 2', '', '', '', '', '', '', '30CzB5Noui', 0, NULL, '', NULL, 'Есть в наличии', 'images/Products/NoImage.png', 0),
(143, 'Расходники', 'Газ', 'CO2', 'Баллончик 3', '', '', '', '', '', '', 'Vr8VTcimPf', 0, NULL, '', NULL, 'Нет в наличии', 'images/Products/NoImage.png', 0),
(144, 'Расходники', 'Газ', 'CO2', 'Баллончик 4', '', '', '', '', '', '', 'IQ5Ih8SGvO', 0, NULL, '', NULL, 'Есть в наличии', 'images/Products/NoImage.png', 0),
(145, 'Расходники', 'Газ', 'CO2', 'Баллончик 5', '', '', '', '', '', '', 'mJymm1zy7m', 0, NULL, '', NULL, 'Нет в наличии', 'images/Products/NoImage.png', 0),
(146, 'Расходники', 'Газ', 'Green gas', 'Газ 1', '', '', '', '', '', '', 'ONcdGniSGj', 0, NULL, '', NULL, 'Есть в наличии', 'images/Products/NoImage.png', 0),
(147, 'Расходники', 'Газ', 'Green gas', 'Газ 2', '', '', '', '', '', '', '8ses2IvOPI', 0, NULL, '', NULL, 'Есть в наличии', 'images/Products/NoImage.png', 0),
(148, 'Расходники', 'Газ', 'Green gas', 'Газ 3', '', '', '', '', '', '', 'jIIU5npvZJ', 0, NULL, '', NULL, 'Нет в наличии', 'images/Products/NoImage.png', 0),
(149, 'Расходники', 'Газ', 'Green gas', 'Газ 4', '', '', '', '', '', '', 'eUQlude0qJ', 0, NULL, '', NULL, 'Есть в наличии', 'images/Products/NoImage.png', 0),
(150, 'Расходники', 'Газ', 'Green gas', 'Газ 5', '', '', '', '', '', '', '8oijUcSD2q', 0, NULL, '', NULL, 'Нет в наличии', 'images/Products/NoImage.png', 0),
(151, 'Расходники', 'Смазки, масло', '', 'Смазка 1', '', '', '', '', '', '', '3mRR7GzMUC', 0, NULL, '', NULL, 'Есть в наличии', 'images/Products/NoImage.png', 0),
(152, 'Расходники', 'Смазки, масло', '', 'Смазка 2', '', '', '', '', '', '', 'faAmUyoQKz', 0, NULL, '', NULL, 'Есть в наличии', 'images/Products/NoImage.png', 0),
(153, 'Расходники', 'Смазки, масло', '', 'Смазка 3', '', '', '', '', '', '', 'swk4XtI43a', 0, NULL, '', NULL, 'Нет в наличии', 'images/Products/NoImage.png', 0),
(154, 'Расходники', 'Смазки, масло', '', 'Масло 4', '', '', '', '', '', '', 'w4MSOW0UTu', 0, NULL, '', NULL, 'Есть в наличии', 'images/Products/NoImage.png', 0),
(155, 'Расходники', 'Смазки, масло', '', 'Масло 5', '', '', '', '', '', '', 'w0Og1xisdN', 0, NULL, '', NULL, 'Нет в наличии', 'images/Products/NoImage.png', 0),
(156, 'Аккумуляторы и ЗУ', 'Аккумуляторы', '', 'Аккумулятор 1', '', '', '', '', '', '', 'OePA4VzsYz', 0, NULL, '', NULL, 'Есть в наличии', 'images/Products/NoImage.png', 0),
(157, 'Аккумуляторы и ЗУ', 'Аккумуляторы', '', 'Аккумулятор 2', '', '', '', '', '', '', 'nkxVyDPTiA', 0, NULL, '', NULL, 'Есть в наличии', 'images/Products/NoImage.png', 0),
(158, 'Аккумуляторы и ЗУ', 'Аккумуляторы', '', 'Аккумулятор 3', '', '', '', '', '', '', 'jyqBEhpCx1', 0, NULL, '', NULL, 'Нет в наличии', 'images/Products/NoImage.png', 0),
(159, 'Аккумуляторы и ЗУ', 'Аккумуляторы', '', 'Аккумулятор 4', '', '', '', '', '', '', 'FdBlZdPFIQ', 0, NULL, '', NULL, 'Есть в наличии', 'images/Products/NoImage.png', 0),
(160, 'Аккумуляторы и ЗУ', 'Аккумуляторы', '', 'Аккумулятор 5', '', '', '', '', '', '', '50Z7r4HpJk', 0, NULL, '', NULL, 'Нет в наличии', 'images/Products/NoImage.png', 0),
(161, 'Аккумуляторы и ЗУ', 'Зарядные устройства', '', 'ЗУ 1', '', '', '', '', '', '', 'w8H1Aai4Wm', 0, NULL, '', NULL, 'Есть в наличии', 'images/Products/NoImage.png', 0),
(162, 'Аккумуляторы и ЗУ', 'Зарядные устройства', '', 'ЗУ 2', '', '', '', '', '', '', 'Wuy75epAYc', 0, NULL, '', NULL, 'Есть в наличии', 'images/Products/NoImage.png', 0),
(163, 'Аккумуляторы и ЗУ', 'Зарядные устройства', '', 'ЗУ 3', '', '', '', '', '', '', 'L9mYKcwATX', 0, NULL, '', NULL, 'Нет в наличии', 'images/Products/NoImage.png', 0),
(164, 'Аккумуляторы и ЗУ', 'Зарядные устройства', '', 'ЗУ 4', '', '', '', '', '', '', 'lHrJAHTTQe', 0, NULL, '', NULL, 'Есть в наличии', 'images/Products/NoImage.png', 0),
(165, 'Аккумуляторы и ЗУ', 'Зарядные устройства', '', 'ЗУ 5', '', '', '', '', '', '', 'e3SlI8tktS', 0, NULL, '', NULL, 'Нет в наличии', 'images/Products/NoImage.png', 0),
(166, 'Снаряжение', 'Маски', '', 'Маска Kingrin, чёрная', 'Kingrin', 'Китай', '', '', '', 'На всё лицо', 'kur1ZNQJxw', 550, NULL, '', NULL, 'Есть в наличии', 'images/Products/Masks/Masks_Face_Black_Kingrin_101.jpg', 0),
(167, 'Страйкбольное оружие', 'Автоматы', 'M-серия', 'Автомат M4A1 MOD 0, EBB G&G', 'GandG', 'Тайвань', 'V2', 'AEG', '', '', 'SxyLeDg04z', 14800, NULL, '', NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_M4A1_MOD_0_EBB_G&G_22.jpg', 0),
(168, 'Страйкбольное оружие', 'Пистолеты', 'Beretta ', 'Пистолет Beretta M92FS WE', 'WE', 'Тайвань', '', 'Газ', '', '', 'l2zv5QNGSF', 6100, NULL, '', NULL, 'Нет в наличии', 'images/Products/Pistols/Pistol_Beretta_M92FS_WE_64.jpg', 0),
(169, 'Снаряжение', 'Перчатки', '', 'Перчатки M-Pact 3 Mechanix, чёрные', 'Mechanix', 'США', '', '', '', '', 'Xns832bdQI', 2200, NULL, '', NULL, 'Нет в наличии', 'images/Products/Gloves/Gloves_M-Pact_3_Black_Mechanix_111.jpg', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `ID` int(11) NOT NULL,
  `Login` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Users`
--

INSERT INTO `Users` (`ID`, `Login`, `Password`, `Email`, `FirstName`, `LastName`) VALUES
(2, 'SmokyTail', '2112d48744d41815677d3299507c8088', 'Runtime@mail.ru', 'Павел', 'Некрасов'),
(3, 'SadMan', '6cfdca6f9633968c72a2a6e0fe2756ca', 'SadMan@mail.ru', 'Олень', 'Грустный'),
(4, 'Jojo', '897c8fde25c5cc5270cda61425eed3c8', 'Jep2@mail.ru', 'Джонатан', 'Джостар');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `News`
--
ALTER TABLE `News`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `StrikeGun`
--
ALTER TABLE `StrikeGun`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `VendorCode` (`VendorCode`);

--
-- Индексы таблицы `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `News`
--
ALTER TABLE `News`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `StrikeGun`
--
ALTER TABLE `StrikeGun`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=170;
--
-- AUTO_INCREMENT для таблицы `Users`
--
ALTER TABLE `Users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
