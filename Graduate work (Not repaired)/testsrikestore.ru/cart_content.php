<?php
session_start();
include ("db1.php");

	if ($_POST['korzina']) {
    // ≈сли существует tid - id товара
    if (isset($_POST['tid'])) { 
	// ≈сли не существует сесси¤ goods, создаем сессию goods, котора¤ будет массивом
	if (!isset($_SESSION['prod'])) $_SESSION['prod'] = array(); 
	//  ѕолучаем целые значени¤ id товара и его количество
	$id = intval($_POST['tid']); 
	$kol = intval($_POST['kol']); 
	// ≈сли id товара больше нул¤ то к массиву сессии добавл¤ем новое значение с заданным количеством
	if ($id > 0) $_SESSION['prod'][$id] = $kol; 
 
    }
    // „ерез JS скрипт обновл¤ем страницу, чтобы отобразились данные сверху
    echo '<script language="JavaScript">window.location.href = "'.$_SERVER['REQUEST_URI'].'"</script>';
	}

?>