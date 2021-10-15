<?php
	switch ($type) {
		case "catalog":			
			if(isset($_GET['Type'])){
				$T=$_GET['Type'];
				if(isset($_GET['ID'])){
					$Way = "ПросмотрТовара";
					$ProdID=$_GET['ID'];
					require_once ("block/PHP/ProductViewDB.php");
					require_once ("block/PHP/Way.php");					
					require_once ("block/ProductView.php");
					require_once ("block/DiscProducts.php");
					break;
				}
			}
			if(isset($_GET['Manufacturer'])){
				$Manu=$_GET['Manufacturer'];
			}
			$Way = "Каталог";
			require_once ("block/PHP/Way.php");
			require_once ("block/catalog/CatalogMainBlock.php");
			break;
		case "cart":
			$Way = "Корзина";
			require_once ("block/PHP/Way.php");
			require_once ("block/CartBlock.php");
			break;
		case "search":
			$Way = "Поиск";
			require_once ("block/PHP/Way.php");	
			require_once ("block/catalog/Search/SearchBlock.php");
			break;
		case "profile":
			
			break;
		case "admin":
			$Way = "Панель управления";
			require_once ("block/PHP/Way.php");	
			require_once ("block/adminPanel/AdminPanel.php");
			break;
		case "news":
			if(isset($_GET['ID'])){
				$id = $_GET['ID'];
				$Way = "ПросмотрНовости";
				$result = $conn->query("SELECT * FROM news WHERE ID=$id");
				$oneNews = mysqli_fetch_assoc($result);
				require_once ("block/PHP/Way.php");	
				require_once ("block/NewsView.php");
			} else {
				$Way = "Новости";
				require_once ("block/PHP/Way.php");
				require_once ("block/NewsBlock.php");
			}
			break;
		case "paymeth":
			$Way = "Способы оплаты";
			require_once ("block/PHP/Way.php");		
			require_once ("block/InfoPayMeth.php");
			break;
		case "delivery":
			$Way = "Доставка";
			require_once ("block/PHP/Way.php");					
			require_once ("block/InfoDelivery.php");	
			break;
		case "guarantees":
			$Way = "Гарантии";
			require_once ("block/PHP/Way.php");					
			require_once ("block/InfoGuarantees.php");	
			break;
		case "order":
			$Way = "Как заказать";
			require_once ("block/PHP/Way.php");					
			require_once ("block/InfoHowToOrder.php");
			break;
		case "registration":
			$Way = "Регистрация";
			require_once ("block/PHP/Way.php");					
			require_once ("block/RegistrationBlock.php");
			break;			
		default:
			require_once ("block/Slider.php");
			require_once ("block/NewProducts.php");
			require_once ("block/DiscProducts.php");
	}
?>