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

		<div class="FiltresDiv">

			<div class="Filtres" id="FilterCost">

				<div id="FilterCostName">

					<p class="TFilter">ЦЕНА</p>

				</div>

				<div class="FromTo">
					
					<div class="From">

						<p class="TFilter">От</p> <input id="InputFrom" type="text" maxlength="10" placeholder="0">
					
					</div>
						
					<div class="To">

						<p class="TFilter">до</p> <input id="InputTo" type="text" maxlength="10" placeholder="100000">
					
					</div>

				</div>

			</div>

			<div class="Filtres">
				<p class="TFilter">ЕСТЬ В НАЛИЧИИ</p> <p class="TCheckBox"> <input type="checkbox" name="CBDiscount" value="0"> </p>
			</div>

			<div class="Filtres">
				<p class="TFilter">ИМЕЕТСЯ СКИДКА</p> <p class="TCheckBox"> <input type="checkbox" name="CBDiscount" value="0"> </p>
			</div>

			<div class="Filtres" id="ManufactureFiltres">
				<p class="TFilter">ПРОИЗВОДИТЕЛЬ</p>
			</div>

			<div class="Filtres">
				<p class="TFilter">ПРИНЦИП ДЕЙСТВИЯ</p>
			</div>

		</div>

</body>
</html>
