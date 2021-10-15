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

				<a <?php $Type='Головные уборы'?> href="Catalog.php?Type=<?= urldecode($Type)?>" class="TCategories"><li class="Categories">
					Головные уборы
				</li></a>

				<a <?php $Type='Очки'?> href="Catalog.php?Type=<?= urldecode($Type)?>" class="TCategories"><li class="Categories">
					Очки
				</li></a>

				<a <?php $Type='Маски'?> href="Catalog.php?Type=<?= urldecode($Type)?>" class="TCategories"><li class="Categories">
					Маски
				</li></a>

				<a <?php $Type='Наколенники, налокотники'?> href="Catalog.php?Type=<?= urldecode($Type)?>" class="TCategories"><li class="Categories">
					Наколенники, налокотники
				</li></a>

				<a <?php $Type='Перчатки'?> href="Catalog.php?Type=<?= urldecode($Type)?>" class="TCategories"><li class="Categories">
					Перчатки
				</li></a>

				<a <?php $Type='Рюкзаки, сумки'?> href="Catalog.php?Type=<?= urldecode($Type)?>" class="TCategories"><li class="Categories">
					Рюкзаки, сумки
				</li></a>

				<a <?php $Type='Разгрузки'?> href="Catalog.php?Type=<?= urldecode($Type)?>" class="TCategories"><li class="Categories">
					Разгрузки
				</li></a>

				<a <?php $Type='Кобуры'?> href="Catalog.php?Type=<?= urldecode($Type)?>" class="TCategories"><li class="Categories">
					Кобуры
				</li></a>

				<a <?php $Type='Шарфы'?> href="Catalog.php?Type=<?= urldecode($Type)?>" class="TCategories"><li class="Categories">
					Шарфы
				</li></a>

			</ul>

		</div>
			
</body>
</html>
