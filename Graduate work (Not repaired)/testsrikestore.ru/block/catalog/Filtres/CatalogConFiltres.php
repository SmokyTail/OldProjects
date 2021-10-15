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

				<a <?php $Type='Шары'?> href="Catalog.php?Type=<?= urldecode($Type)?>" class="TCategories"><li class="Categories">
					Шары
				</li></a>

				<a <?php $Type='Газ'?> href="Catalog.php?Type=<?= urldecode($Type)?>" class="TCategories"><li class="Categories">
					Газ
				</li></a>

				<a <?php $Type='Смазки, масло'?> href="Catalog.php?Type=<?= urldecode($Type)?>" class="TCategories"><li class="Categories">
					Смазки, масло
				</li></a>

			</ul>

		</div>
			
</body>
</html>
