-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 21 2018 г., 12:32
-- Версия сервера: 5.5.45
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `MainBase`
--

-- --------------------------------------------------------

--
-- Структура таблицы `StrikeGun`
--

CREATE TABLE IF NOT EXISTS `StrikeGun` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `MainType` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `ExtraType` varchar(100) DEFAULT NULL,
  `Name` varchar(100) NOT NULL,
  `Manufacturer` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `Gearbox` varchar(100) NOT NULL,
  `Cost` int(10) NOT NULL,
  `DiscountCost` varchar(10) DEFAULT NULL,
  `ImageDiscount` varchar(100) DEFAULT NULL,
  `Status` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Дамп данных таблицы `StrikeGun`
--

INSERT INTO `StrikeGun` (`ID`, `MainType`, `Type`, `ExtraType`, `Name`, `Manufacturer`, `Country`, `Gearbox`, `Cost`, `DiscountCost`, `ImageDiscount`, `Status`, `Image`) VALUES
(1, 'StrikeGuns1', 'AssaultRifle', 'AK', 'Автомат АКС-74У Cyma', 'Cyma', 'Китай', 'V3', 14175, '15750 Р', '<img src="images/DISCOUNT.PNG" alt="">', 'Есть в наличии', 'images/Products/AssaultRifles/Assault_Rifle_AKS-74U_Cyma_1.jpg'),
(2, 'StrikeGuns', 'AssaultRifle', 'M', 'Автомат M4 CQB RIS AGM', 'AGM', 'Китай', 'V2', 11100, NULL, NULL, 'Нет в наличии', 'images/Products/AssaultRifles/Assault-Rifle_M4_CQB_RIS_AGM_2.jpg'),
(3, 'StrikeGuns', 'AssaultRifle', 'G', 'Автомат G36C Cyma', 'Cyma', 'Китай', 'V3', 6670, '7410 Р', '<img src="images/DISCOUNT.PNG" alt="">', 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_G36C_Cyma_3.jpg'),
(4, 'StrikeGuns', 'AssaultRifle', 'AK', 'Автомат AK-74M Cyma', 'Cyma', 'Китай', 'V3', 7650, '8500 Р', '<img src="images/DISCOUNT.PNG" alt="">', 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_AK-74M_Cyma_4.jpg'),
(5, 'StrikeGuns', 'AssaultRifle', 'AK', 'Автомат AK-74M Tactical Cyma', 'Cyma', 'Китай', 'V3', 10800, '12000 Р', '<img src="images/DISCOUNT.PNG" alt="">', 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_AK-74M_Tactical_Cyma_5.jpg'),
(6, 'StrikeGuns', 'AssaultRifle', 'M', 'Автомат M4 RIS Cyma', 'Cyma', 'Китай', 'V2', 5400, '6000 Р', '<img src="images/DISCOUNT.PNG" alt="">', 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_M4_RIS_Cyma_6.jpg'),
(7, 'StrikeGuns', 'AssaultRifle', 'M', 'Автомат M4A1 G&G, Розовый', 'G&G', 'Тайвань', 'V2', 13000, NULL, NULL, 'Нет в наличии', 'images/Products/AssaultRifles/Assault-Rifle_M4A1_Pink_G&G_7.jpg'),
(8, 'StrikeGuns', 'AssaultRifle', 'M', 'Автомат M4A1 G&G', 'G&G', 'Тайвань', 'V2', 13000, NULL, NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_M4A1_G&G_8.jpg'),
(9, 'StrikeGuns', 'AssaultRifle', 'G', 'Автомат G36K Jing Gong', 'Jing Gong', 'Гонконг', 'V3', 12500, NULL, NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_G36K_Jing_Gong_9.jpg'),
(10, 'StrikeGuns', 'AssaultRifle', 'Another', 'Автомат СР-3М Вихрь LCT', 'LCT', 'Тайвань', 'V3', 14300, NULL, NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_CP-3M_Vihr _LCT_10.jpg'),
(11, 'StrikeGuns', 'AssaultRifle', 'Another', 'Автомат АС ВАЛ LCT', 'LCT', 'Тайвань', 'V3', 19800, NULL, NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_AS_VAL_LCT_11.jpg'),
(12, 'StrikeGuns', 'AssaultRifle', 'Another', 'Автомат SCAR-L DBoys', 'DBoys', 'Китай', 'V2', 12900, NULL, NULL, 'Нет в наличии', 'images/Products/AssaultRifles/Assault-Rifle_SCAR-L_DBoys_12.jpg'),
(13, 'StrikeGuns', 'AssaultRifle', 'Another', 'Автомат SCAR-H DBoys', 'DBoys', 'Китай', 'V2', 12300, NULL, NULL, 'Нет в наличии', 'images/Products/AssaultRifles/Assault-Rifle_SCAR-H_DBoys_13.jpg'),
(14, 'StrikeGuns', 'AssaultRifle', 'Another', 'Автомат SIG556 Shorty King Arms', 'King Arms', 'Гонконг', 'V2', 10800, NULL, NULL, 'Нет в наличии', 'images/Products/AssaultRifles/Assault-Rifle_SIG556_Shorty_King_Arms_14.jpg'),
(15, 'StrikeGuns', 'AssaultRifle', 'Another', 'Автомат Steyr AUG A2 AU-1G Jing Gong', 'Jing Gong', 'Гонконг', 'V2', 9800, NULL, NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_Steyr_AUG_A2_AU-1G_Jing_Gong_15.jpg'),
(16, 'StrikeGuns', 'AssaultRifle', 'AK', 'Автомат АКС-74 Cyma', 'Cyma', 'Китай', 'V3', 7020, '7800 Р', '<img src="images/DISCOUNT.PNG" alt="">', 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_AKS-74_Cyma_16.jpg'),
(17, 'StrikeGuns', 'AssaultRifle', 'AK', 'Автомат АК-105 Cyma', 'Cyma', 'Китай', 'V3', 7515, '8350 Р', '<img src="images/DISCOUNT.PNG" alt="">', 'Нет в наличии', 'images/Products/AssaultRifles/Assault-Rifle_AK-105_Cyma_17.jpg'),
(18, 'StrikeGuns', 'AssaultRifle', 'AK', 'Автомат АК47 Tactical, тактический обвес Cyma', 'Cyma', 'Китай', 'V3', 9990, '11100 Р', '<img src="images/DISCOUNT.PNG" alt="">', 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_AK47_Tactical_Cyma_18.jpg'),
(19, 'StrikeGuns', 'AssaultRifle', 'AK', 'Автомат АК-74М G&G', 'G&G', 'Тайвань', 'V3', 11900, NULL, NULL, 'Нет в наличии', 'images/Products/AssaultRifles/Assault-Rifle_AK-74M_G&G_19.jpg'),
(20, 'StrikeGuns', 'AssaultRifle', 'AK', 'Автомат АКС-74 G&G', 'G&G', 'Тайвань', 'V3', 11990, NULL, NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_AKS-74_G&G_20.jpg'),
(21, 'StrikeGuns', 'AssaultRifle', 'M', 'Автомат M4A1 RIS SD СQB DBoys', 'DBoys', 'Китай', 'V2', 9900, NULL, NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_M4A1_RIS_SD_СQB_DBoys_21.jpg'),
(22, 'StrikeGuns', 'AssaultRifle', 'M', 'Автомат M4A1 MOD 0, EBB G&G', 'G&G', 'Тайвань', 'V2', 14800, NULL, NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_M4A1_MOD_0_EBB_G&G_22.jpg'),
(23, 'StrikeGuns', 'AssaultRifle', 'M', 'Автомат Amoeba M4 Ares', 'Ares', 'Гонконг', 'V2', 14500, NULL, NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_Amoeba_M4_Ares_23.jpg'),
(24, 'StrikeGuns', 'AssaultRifle', 'M', 'Автомат М16A3 AGM', 'AGM', 'Китай', 'V2', 11400, NULL, NULL, 'Нет в наличии', 'images/Products/AssaultRifles/Assault-Rifle_M16A3_AGM_24.jpg'),
(25, 'StrikeGuns', 'AssaultRifle', 'G', 'Автомат G36, удлиненный ствол Jing Gong', 'Jing Gong', 'Гонконг', 'V3', 13500, NULL, NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_G36_Long_Barrel_Jing_Gong_25.jpg'),
(26, 'StrikeGuns', 'AssaultRifle', 'G', 'Автомат G36C RIS G&G', 'G&G', 'Тайвань', 'V3', 16500, NULL, NULL, 'Нет в наличии', 'images/Products/AssaultRifles/Assault-Rifle_G36C_RIS_G&G_26.jpg'),
(27, 'StrikeGuns', 'AssaultRifle', 'G', 'Автомат G36E Jing Gong', 'Jing Gong', 'Гонконг', 'V3', 13400, NULL, NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_G36E_Jing_Gong_27.jpg'),
(28, 'StrikeGuns', 'AssaultRifle', 'G', 'Автомат G36C G&G', 'G&G', 'Тайвань', 'V3', 15700, NULL, NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_G36C_G&G_28.jpg'),
(29, 'StrikeGuns', 'AssaultRifle', 'G', 'Автомат G36K Ares', 'Ares', 'Гонконг', 'V3', 15200, NULL, NULL, 'Нет в наличии', 'images/Products/AssaultRifles/Assault-Rifle_G36K_Ares_29.jpg'),
(30, 'StrikeGuns', 'AssaultRifle', 'Another', 'Винтовка ВСС Винторез LCT', 'LCT', 'Тайвань', 'V3', 14800, NULL, NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_VSS_Vintorez_LCT_30.jpg'),
(31, 'StrikeGuns', 'AssaultRifle', 'Another', 'Винтовка ВСС Винторез King Arms', 'King Arms', 'Гонконг', 'V3', 12700, NULL, NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_VSS_Vintorez_King_Arms_31.jpg'),
(32, 'StrikeGuns', 'AssaultRifle', 'Another', 'Винтовка ВСС Винторез G&G', 'G&G', 'Тайвань', 'V3', 15000, NULL, NULL, 'Нет в наличии', 'images/Products/AssaultRifles/Assault-Rifle_VSS_Vintorez_G&G_32.jpg'),
(33, 'StrikeGuns', 'AssaultRifle', 'M', 'Автомат M4 S-System DBoys', 'DBoys', 'Китай', 'V2', 12600, NULL, NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_M4_S-System_DBoys_33.jpg'),
(34, 'StrikeGuns', 'AssaultRifle', 'Another', 'Автомат LR300 Short A&K', 'A&K', 'Китай', 'V2', 12500, NULL, NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_LR300_Short_A&K_34.jpg'),
(35, 'StrikeGuns', 'AssaultRifle', 'Another', 'Автомат LR300 Long A&K', 'A&K', 'Китай', 'V2', 13300, NULL, NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_LR300_Long_A&K_35.jpg'),
(36, 'StrikeGuns', 'AssaultRifle', 'Another', 'Автомат MC51 RAS Jing Gong', 'Jing Gong', 'Гонконг', 'V2', 11700, NULL, NULL, 'Нет в наличии', 'images/Products/AssaultRifles/Assault-Rifle_MC51_RAS_Jing_Gong_36.jpg'),
(37, 'StrikeGuns', 'AssaultRifle', 'Another', 'Автомат НК 416 Short, EBB G&G', 'G&G', 'Тайвань', 'V2', 14900, NULL, NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_НК_416_Short_EBB_G&G_37.jpg'),
(38, 'StrikeGuns', 'AssaultRifle', 'Another', 'Автомат Steyr AUG A2 Civilian Top Rail Jing Gong', 'Jing Gong', 'Гонконг', 'V2', 9700, NULL, NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_Steyr_AUG_A2_Civilian_Top_Rail_Jing_Gong_38.jpg'),
(39, 'StrikeGuns', 'AssaultRifle', 'Another', 'Автомат SCAR-L, tan DBoys', 'DBoys', 'Китай', 'V2', 12900, NULL, NULL, 'Есть в наличии', 'images/Products/AssaultRifles/Assault-Rifle_SCAR-L_tan_DBoys_39.jpg'),
(40, 'StrikeGuns', 'AssaultRifle', 'AK', 'Автомат АК, EBB Cyma', 'Cyma', 'Китай', 'V3', 10710, '11900 Р', '<img src="images/DISCOUNT.PNG" alt="">', 'Нет в наличии', 'images/Products/AssaultRifles/Assault-Rifle_АК_EBB_Cyma_39.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
