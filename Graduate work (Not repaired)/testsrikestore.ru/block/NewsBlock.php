<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="CSS/Reset.css">
		<link rel="stylesheet" href="CSS/TextBase.css">
	  	<link rel="stylesheet" href="CSS/MainInfo.css">
		<link rel="stylesheet" href="CSS/Catalog_Product.css">
 	</head>
	<body>
	
		<?php

			$countView = 6; // количество новостей на странице
			
			// номер страницы
			if(isset($_GET['page'])){
				$pageNum = (int)$_GET['page'];
			}else{
				$pageNum = 1;
			}
			$startIndex = ($pageNum-1)*$countView; // с какой записи начать выборку
	
			// запрос к бд
			$sql = $conn->query("SELECT SQL_CALC_FOUND_ROWS * FROM News ORDER BY `ID` DESC LIMIT $startIndex, $countView") or die(mysqli_error());
			$newsData = array();
			while($result = mysqli_fetch_array($sql, MYSQLI_ASSOC)){
			$newsData[] = $result;
			}
			
			// получение полного количества новостей
			$sql2 = $conn->query("SELECT FOUND_ROWS()");
			$result2 = mysqli_fetch_array($sql2, MYSQLI_ASSOC);
			$countAllNews = $result2["FOUND_ROWS()"];
			
			// номер последней страницы
			$lastPage = ceil($countAllNews/$countView);

		?>

		<div class="MainTitle">
			<p class="TInfoTitle" id="TMainTitle">Новости</p>
		</div>

		<div class="NewsDiv">
					
			<!-- вывод новостей -->
			<?php
				arsort($newsData);
				foreach ($newsData as $oneNews){ 
			?>
				
					<div class="News">

					<div class="NewsImage">
						<img src="<?=$oneNews['Image'];?>" alt="<?=$oneNews['Title'];?>">
					</div>

					<div class="MainInfoText">
						<p class="TDate"><?=$oneNews['Date'];?></p>
					</div>

					<div class="MainInfoName" id="NewsFixed">
						<p class="TNewsTitle"><?=$oneNews['Title'];?></p>
					</div>

					<div class="NewsText">
						<p class="TNewsText"><?=$oneNews['Greeting'];?></p>
						<p class="TNewsText"><?=$oneNews['Text'];?></p>
					</div>

					<div class="NewsLink">
						<a href="NewsViewer.php?ID=<?=$oneNews['ID'];?>" class="TNewsLink">Читать полностью...</a>	
					</div>

				</div>
				
			<?php } ?>

		</div>

		<div class="FloatTwo">

			<!-- вывод пагинатора -->

			<?php if($pageNum > 1) { ?>
				<a class="TPageButton" href="News.php?page=1"> <div class="PageButton">&lt;&lt;</div> </a>
				<a class="TPageButton" href="News.php?page=<?=$pageNum-1;?>"> <div class="PageButton">&lt;</div> </a>
			<?php } ?>
	
			<?php for($i = 1; $i<=$lastPage; $i++) { ?>
				<a class="TPageButton" href="News.php?page=<?=$i;?>"> <div class="PageButton" <?=($i == $pageNum) ? 'id="current"' : '';?>> <?=$i;?> </div> </a>
			<?php } ?>
	 
			<?php if($pageNum < $lastPage) { ?>
				<a class="TPageButton" href="News.php?page=<?=$pageNum+1;?>"> <div class="PageButton">&gt;</div> </a>
				<a class="TPageButton" href="News.php?page=<?=$lastPage;?>"> <div class="PageButton">&gt;&gt;</div> </a>
			<?php } ?>

		</div>

  </body>
</html>