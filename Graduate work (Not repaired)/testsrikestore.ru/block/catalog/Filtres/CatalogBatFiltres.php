<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="CSS/Sources/Reset.css">
		<link rel="stylesheet" href="CSS/Sources/TextBase.css">
  		<link rel="stylesheet" href="CSS/Catalog_Filtres.css">
		<script src="JS/Main.js"></script>
 	</head>
	<body>
			
		<div class="CategoriesDiv">

			<ul>

				<a <?php $Type='Аккумуляторы'?> href="Catalog.php?Type=<?= urldecode($Type)?>" class="TCategories"><li class="Categories">
					Аккумуляторы
				</li></a>

				<a <?php $Type='Зарядные устройства'?> href="Catalog.php?Type=<?= urldecode($Type)?>" class="TCategories"><li class="Categories">
					Зарядные устройства
				</li></a>

			</ul>

		</div>
			
</body>
</html>
