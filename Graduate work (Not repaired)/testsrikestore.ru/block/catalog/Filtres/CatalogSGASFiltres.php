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

				<a <?php $ExtraType='АК-серия'?> href="Catalog.php?ExtraType=<?= urldecode($ExtraType)?>" class="TCategories"><li class="Categories">
					AK-серия
				</li></a>

				<a <?php $ExtraType='M-серия'?> href="Catalog.php?ExtraType=<?= urldecode($ExtraType)?>" class="TCategories"><li class="Categories">
					M-серия
				</li></a>

				<a <?php $ExtraType='G-серия'?> href="Catalog.php?ExtraType=<?= urldecode($ExtraType)?>" class="TCategories"><li class="Categories">
					G-серия
				</li></a>

				<a <?php $ExtraType='Другиe модели'?> href="Catalog.php?ExtraType=<?= urldecode($ExtraType)?>" class="TCategories"><li class="Categories">
					Другие модели
				</li></a>

			</ul>

		</div>
			
</body>
</html>
