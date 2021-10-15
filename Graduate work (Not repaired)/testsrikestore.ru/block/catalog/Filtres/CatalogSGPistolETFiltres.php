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

				<a <?php $ExtraType='Beretta'?> href="Catalog.php?ExtraType=<?= urldecode($ExtraType)?>" class="TCategories"><li class="Categories">
					Beretta
				</li></a>

				<a <?php $ExtraType='Colt'?> href="Catalog.php?ExtraType=<?= urldecode($ExtraType)?>" class="TCategories"><li class="Categories">
					Colt
				</li></a>

				<a <?php $ExtraType='Glock'?> href="Catalog.php?ExtraType=<?= urldecode($ExtraType)?>" class="TCategories"><li class="Categories">
					Glock
				</li></a>

				<a <?php $ExtraType='Sig Sauer'?> href="Catalog.php?ExtraType=<?= urldecode($ExtraType)?>" class="TCategories"><li class="Categories">
					Sig Sauer
				</li></a>

				<a <?php $ExtraType='Пистолет Макарова'?> href="Catalog.php?ExtraType=<?= urldecode($ExtraType)?>" class="TCategories"><li class="Categories">
					Пистолет Макарова
				</li></a>

				<a <?php $ExtraType='Пистолет Ярыгина'?> href="Catalog.php?ExtraType=<?= urldecode($ExtraType)?>" class="TCategories"><li class="Categories">
					Пистолет Ярыгина
				</li></a>

				<a <?php $ExtraType='Тульский Токарева'?> href="Catalog.php?ExtraType=<?= urldecode($ExtraType)?>" class="TCategories"><li class="Categories">
					Тульский Токарева
				</li></a>

				<a <?php $ExtraType='Другие модели'?> href="Catalog.php?ExtraType=<?= urldecode($ExtraType)?>" class="TCategories"><li class="Categories">
					Другие модели
				</li></a>
				
			</ul>

		</div>
			
</body>
</html>
