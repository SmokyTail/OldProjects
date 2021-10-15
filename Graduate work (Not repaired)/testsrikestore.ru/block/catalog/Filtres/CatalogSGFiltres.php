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

				<a <?php $Type='Автоматы'?> href="Catalog.php?Type=<?= urldecode($Type)?>" class="TCategories"><li class="Categories">
					Автоматы
				</li></a>

				<a <?php $Type='Винтовки'?> href="Catalog.php?Type=<?= urldecode($Type)?>" class="TCategories"><li class="Categories">
					Винтовки
				</li></a>

				<a <?php $Type='Пулемёты'?> href="Catalog.php?Type=<?= urldecode($Type)?>" class="TCategories"><li class="Categories">
					Пулемёты
				</li></a>

				<a <?php $Type='Пистолеты-пулемёты'?> href="Catalog.php?Type=<?= urldecode($Type)?>" class="TCategories"><li class="Categories">
					Пистолеты-пулемёты
				</li></a>

				<a <?php $Type='Пистолеты'?> href="Catalog.php?Type=<?= urldecode($Type)?>" class="TCategories"><li class="Categories">
					Пистолеты
				</li></a>

			</ul>

		</div>
			
</body>
</html>
