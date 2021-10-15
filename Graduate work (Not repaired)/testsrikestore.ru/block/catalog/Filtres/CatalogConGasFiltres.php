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

				<a <?php $ExtraType='CO2'?> href="Catalog.php?ExtraType=<?= urldecode($ExtraType)?>" class="TCategories"><li class="Categories">
					CO2
				</li></a>

				<a <?php $ExtraType='Green gas'?> href="Catalog.php?ExtraType=<?= urldecode($ExtraType)?>" class="TCategories"><li class="Categories">
					Green Gas
				</li></a>

			</ul>

		</div>
			
</body>
</html>
