<?php
	$countView = 6;

	if(isset($_GET['page'])){
		$pageNum = (int)$_GET['page'];
	}else{
		$pageNum = 1;
	}
	$startIndex = ($pageNum-1)*$countView;

	$sql = $conn->query("SELECT SQL_CALC_FOUND_ROWS * FROM News ORDER BY `ID` DESC LIMIT $startIndex, $countView") or die(mysqli_error());
	$newsData = array();
	while($result = mysqli_fetch_array($sql, MYSQLI_ASSOC)){
	$newsData[] = $result;
	}

	$sql2 = $conn->query("SELECT FOUND_ROWS()");
	$result2 = mysqli_fetch_array($sql2, MYSQLI_ASSOC);
	$countAllNews = $result2["FOUND_ROWS()"];

	$lastPage = ceil($countAllNews/$countView);
?>

<div class="MainTitle">
	<p class="TInfoTitle" id="TMainTitle">Новости</p>
</div>

<div class="NewsDiv">
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
				<a href="http://techzone.ru/news?ID=<?=$oneNews['ID'];?>" class="TNewsLink">Читать полностью...</a>	
			</div>
		</div>
	<?php } ?>
</div>

<div class="FloatTwo">
	<?php if($pageNum > 1) { ?>
		<a class="TPageButton" href="http://techzone.ru/news?page=1"> <div class="PageButton">&lt;&lt;</div> </a>
		<a class="TPageButton" href="http://techzone.ru/news?page=<?=$pageNum-1;?>"> <div class="PageButton">&lt;</div> </a>
	<?php } ?>

	<?php for($i = 1; $i<=$lastPage; $i++) { ?>
		<a class="TPageButton" href="http://techzone.ru/news?page=<?=$i;?>"> <div class="PageButton" <?=($i == $pageNum) ? 'id="current"' : '';?>> <?=$i;?> </div> </a>
	<?php } ?>

	<?php if($pageNum < $lastPage) { ?>
		<a class="TPageButton" href="http://techzone.ru/news?page=<?=$pageNum+1;?>"> <div class="PageButton">&gt;</div> </a>
		<a class="TPageButton" href="http://techzone.ru/news?page=<?=$lastPage;?>"> <div class="PageButton">&gt;&gt;</div> </a>
	<?php } ?>
</div>