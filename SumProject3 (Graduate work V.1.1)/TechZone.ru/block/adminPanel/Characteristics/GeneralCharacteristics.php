<?php
	$sqls = $conn->query("SELECT * FROM products ORDER BY `productID` DESC LIMIT 1") or die(mysqli_error());
	$results = mysqli_fetch_array($sqls, MYSQLI_ASSOC);
	$id = $results['productID'] + 1;
?>

<button class="AdminPanelButtonAction" onclick="addCase()"> Добавить товар </button>

<p class="TAdminText">Идентификатор:</p>

<p class="TInfoText" id="TPad"> <input class="AdminInp" name="ID" id="ID" type="text" maxlength="50" value="<?=$id?>" disabled> </p>

<p class="TAdminText">Тип:</p>

<p class="TInfoText" id="TPad"> <input class="AdminInp" name="Type" id="Type" type="text" maxlength="50" required> </p>

<p class="TAdminText">Модель:</p>

<p class="TInfoText" id="TPad"> <input class="AdminInp" name="Model" id="Model" type="text" maxlength="100" required> </p>

<p class="TAdminText">Производитель:</p>

<p class="TInfoText" id="TPad"> <input class="AdminInp" name="Manufacturer" id="Manufacturer" type="text" maxlength="100" required> </p>

<p class="TAdminText">Страна:</p>

<p class="TInfoText" id="TPad"> <input class="AdminInp" name="Country" id="Country" type="text" maxlength="50" required> </p>

<p class="TAdminText">Гарантия:</p>

<p class="TInfoText" id="TPad"> <input class="AdminInp" name="Garantee" id="Garantee" type="text" maxlength="3" required> </p>

<p class="TAdminText">Описание:</p>

<p class="TInfoText" id="TPad"> <textarea class="AdminInp" name="Description" id="Description" type="text" cols="40" rows="3"></textarea> </p>

<p class="TAdminText">Стоимость:</p>

<p class="TInfoText" id="TPad"> <input class="AdminInp" name="Price" id="Price" type="text" maxlength="10" required> </p>

<p class="TAdminText">Стоимость со скидкой:</p>

<p class="TInfoText" id="TPad"> <input class="AdminInp" name="DiscountPrice" id="DiscountPrice" type="text" maxlength="10"> </p>

<p class="TAdminText">Имеется в наличии:</p>

<p class="TInfoText" id="TPad"> <input class="AdminInp" name="Status" id="Status" type="text" maxlength="1000" placeholder="0 - нет в наличии, 1 - есть в наличии"> </p>

<p class="TAdminText">Картинка:</p>

<p class="TInfoText" id="TPad"> <input class="AdminInp" name="Image" id="Image" type="text" maxlength="1000"> </p>