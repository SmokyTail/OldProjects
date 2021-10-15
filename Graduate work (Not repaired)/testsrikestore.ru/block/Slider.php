<!DOCTYPE html>
<html lang="ru">
	<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<link rel="stylesheet" href="CSS/Reset.css">
			<link rel="stylesheet" href="CSS/TextBase.css">
	  	<link rel="stylesheet" href="CSS/Slider.css">
			<script src="JS/jquery-3.2.1.min.js"></script>
	   	<script src="JS/Slider.js"></script>
	</head>
  <body>

		<div class="SlideShowDiv">

			<div class="SlideShow">
				<div class="active"> <a href="NewsViewer.php?&ID=<?=8;?>"> <img src="images/news/1-1.png" alt=""> </a> </div>
				<div> <a href="NewsViewer.php?&ID=<?=7;?>"> <img src="images/news/2-1.png" alt=""> </a> </div>
				<div> <a href="NewsViewer.php?&ID=<?=6;?>"> <img src="images/news/3-1.png" alt=""> </a> </div>
			</div>

			<div class="SlideShow2">
				<div> <a href="NewsViewer.php?&ID=<?=8;?>"> <img src="images/news/1-1.png" alt=""> </a> </div>
				<div class="active2"> <a href="NewsViewer.php?&ID=<?=7;?>"> <img src="images/news/2-1.png" alt=""> </a> </div>
				<div> <a href="NewsViewer.php?&ID=<?=6;?>"> <img src="images/news/3-1.png" alt=""> </a> </div>
			</div>

			<div class="SlideShow3">
				<div> <a href="NewsViewer.php?&ID=<?=8;?>"> <img src="images/news/1-1.png" alt=""> </a> </div>
				<div> <a href="NewsViewer.php?&ID=<?=7;?>"> <img src="images/news/2-1.png" alt=""> </a> </div>
				<div class="active3"> <a href="NewsViewer.php?&ID=<?=6;?>"> <img src="images/news/3-1.png" alt=""> </a> </div>
			</div>

		</div>

		<div class="DiscNewAboutButtonDiv">

			<a <?php $Disc!=''?> href="Catalog.php?ImageDiscount=<?= urldecode($Disc)?>"><div class="DiscNewAboutButton" id="LeftBut">
				<img src="images/icons/Sale.png" alt="">
				<p class="TButtonPanel1">Скидки, акции и распродажи</p>
			</div></a>

			<a <?php $Recom='1'?> href="Catalog.php?Recomendated=<?= urldecode($Recom)?>"><div class="DiscNewAboutButton">
				<img src="images/icons/Recomendated.png" alt="">
				<p class="TButtonPanel1">Наши рекомендации</p>
			</div></a>

			<a href="#StrikeStore"><div class="DiscNewAboutButton" id="ThreeBut">
				<img src="images/icons/AboutMagazine.png" alt="">
				<p class="TButtonPanel2">О магазине</p>
			</div></a>

			<a href="#Strike"><div class="DiscNewAboutButton" id="RightBut">
				<img src="images/icons/AboutStrike.png" alt="">
				<p class="TButtonPanel2">О страйболе</p>
			</div></a>

		</div>

 	</body>
</html>
