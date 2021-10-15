<?php session_start();
include ("db1.php");
?>
<!DOCTYPE html>
<html>
 <head>
	 <title>Корзина</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="CSS/Sources/Reset.css">
		<link rel="stylesheet" href="CSS/Sources/TextBase.css">
  	<link rel="stylesheet" href="CSS/DiscProduct.css">
 </head>
<body>
<?php 
include ("block/Top.php");
?>
	
	<div class="content">
			<div class="categor">
			
				<div class="right">		
					
					<h1>Корзина</h1>
					<?php	// Если action=korzina то отображать эти данные
if ($_GET['action']=='korzina') {

 // Если запрос на удаление корзины, удаляем сессию-массив 
	if (isset($_POST['clear'])) unset($_SESSION['prod']); 
 
	// Если сессия goods не пуста продолжаем
	if (!empty($_SESSION['prod'])) {		
 
	  // Задаем эти значения равными нулю, чтобы далее количество товара 
	  // и общая стоимость считались нормально (на самом деле не обязательно)
	  $k = 0; 
	  $m = 0; 
 
	  // Формируем таблицу для отображения корзины
	  echo '<table bgcolor=#F2F2F2 width=100%><tr>
	  <td><b>Наименование товара</b></td>
	  <td><b>Стоимость</b></td>
	  <td><b>Кол-во</b></td></tr>';
	  
 
	  // Цикл обхода массива, разбираем данные где $key это тот id и $val то количество 
	  // которые добавляются в массив при добавление товара в корзину на этапе работы с каталогом.
	  foreach($_SESSION['prod'] as $key => $val) { 
 
	  // Звпрос к базе и формирование данных на основе этого запроса
	  $qat = $pdo->prepare('SELECT * FROM StrikeGun WHERE ID=?');
	  $qat->bindValue(1,$key, PDO::PARAM_INT);
	  $qat->execute();
	  $cat = $qat->fetch();
	  
	  
	       // Количество увеличивается на значение $val которое является количеством данного товара
	      if($val<=1){$val=1;}
		  $k += $val; 
		  // Общая стоимость - количество умножается на цену взятую из базы
	      $m += $cat['Cost']*$val; 
	      // Счетчик требуется для того чтобы каждый новый пункт рисовать другим цветов
	      $count++;
	      // Собственно делим на 2 чтобы получить четное или нечетное значение
	      if($count%2) { echo ("<tr bgcolor=#DEEFF9 valign=top>"); } else { echo ('<tr bgcolor=#F0F1F1 valign=top>'); }
 
	      // Далее просто подставляем полученные значения в необходимые поля для вывода
	      // Также формируем форму с кнопкой удалить где два поля одно с количеством, другое с id товара.
	      echo '<td>'.$cat['Name'].'</td>
		  <td>'.$cat['Cost'].'</td>
		  <td> '.$val.'</td>
		  <td>
	      <form method="post"> 
	      <input type="hidden" size=8 name="prod[' .$key. ']" value="' .$val. '">
	      <input type=hidden name="del[]" value="' .$key. '">
	      <button name="update" class="button blue">Удалить</button></form>
	      </td></tr>'; 
 
 
	  } 
	  // Цикл заканчивается и выводим общие данные и заканчиваем формирование таблицы
	  ?></table><br>
		<div class="zakaz-panel">
			
			<div class="cart-prod"> Количество товаров: <red-text><?echo $k;?> шт.</red-text><br>Общая стоимость заказа: <red-text> <?echo $m; ?> руб.</red-text><br><br></div>
			
			<form method="post"> 
				<button type="submit" name="clear" class="button blue">Очистить корзину</button>
			</form>
			
		</div>
				<!--Вывод кнопки для заказа-->
				<?php
				//------- Проверяем, авторизован ли пользователь---------
				if (empty($_SESSION['user_login']) or empty($_SESSION['user_id']))
				{
				//-----------Если не авторизован, то:----------------
				echo "Войдите на сайт для заказа.";}else{
				//-------------- Если авторизован,то :---------------
				?>
				<button class='spoiler-title button blue'>Оформить заказ</button>
				 <? } 
				}
    
}
// Далее если запрос на обновление корзины
if (isset($_POST['update'])) { 
 
    // Опять цикл обхода массива
   foreach($_POST['prod'] as $key => $val) { 
      // Приводим к целому значению
      $key = intval($key); 
	// Если id товара больше нуля
	if ($key > 0) { 
	    // Количество приводим к целому значениею
	    $val = intval($val); 
	    // Если было передано значение del в случае удаления товара из корзины
	    // и в массиве присутствуют необходимые значения 
	    if (isset($_POST['del']) && in_array($key, $_POST['del']) || !$val) { 
	      // Если ключ в массиве существует, то удаляем из массива сессии goods, значение с ключом равном id товара
	      if (array_key_exists($key, $_SESSION['prod'])) unset($_SESSION['prod'][$key]); 
	    } 
	    // Иначе добавляем новое количество к существующему id (в нашем случае это рудимент, тк подразумевается 
	    // что в корзине можно было бы обновлять количество того или иного товара, а у нас кол-во товара 
	    // может быть только равное 1му)
	    else $_SESSION['prod'][$key] = $val; 
	} 
    }
    // Обновляем страницу посредством JS
    echo '<script language="JavaScript">window.location.href = "'.$_SERVER['REQUEST_URI'].'"</script>';
}
 
// Если запрос на очистку корзины
if (isset($_POST['clear'])) {
    // Рассформировываем сессию-массив
    unset($_SESSION['prod']);
    // Обновляем страницу посредством JS
    echo '<script language="JavaScript">window.location.href = "'.$_SERVER['REQUEST_URI'].'"</script>';
}
// Если запрос на продолжение
if (isset($_POST['zakaz'])) {
    // Обновляем страницу посредством JS
    echo '<script language="JavaScript">window.location.href = "/block/cart.php?action=korzina"</script>';
}
					?>

				</div>
			</div>
		</div>
		<div class="footer">
			
		</div>
	</body>
</html>