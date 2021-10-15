<div class="SlideShowDiv">
	
	<?php
		// запрос к бд
		$sql = $conn->query("SELECT SQL_CALC_FOUND_ROWS * FROM `News` ORDER BY `ID`") or die(mysqli_error());
		$newsData = array();
		while($result = mysqli_fetch_array($sql, MYSQLI_ASSOC)){
			$newsData[] = $result;
		}
		
		// получение полного количества новостей
		$sql2 = $conn->query("SELECT FOUND_ROWS()");
		$result2 = mysqli_fetch_array($sql2, MYSQLI_ASSOC);
		$countAllNews = $result2["FOUND_ROWS()"];
		
		arsort($newsData);
		
		$IDs = array();
		foreach ($newsData as $oneNews) {
			$IDs[] = $oneNews['ID'];
		}				
		
		$ImRes1 = $conn->query("SELECT Image FROM News WHERE ID = '$IDs[0]'") or die(mysqli_error());
		$Image1 = mysqli_fetch_array($ImRes1);				
		$ImRes2 = $conn->query("SELECT Image FROM News WHERE ID = '$IDs[1]'") or die(mysqli_error());
		$Image2 = mysqli_fetch_array($ImRes2);				
		$ImRes3 = $conn->query("SELECT Image FROM News WHERE ID = '$IDs[2]'") or die(mysqli_error());
		$Image3 = mysqli_fetch_array($ImRes3);				
		$ImRes4 = $conn->query("SELECT Image FROM News WHERE ID = '$IDs[3]'") or die(mysqli_error());
		$Image4 = mysqli_fetch_array($ImRes4);				
		$ImRes5 = $conn->query("SELECT Image FROM News WHERE ID = '$IDs[4]'") or die(mysqli_error());
		$Image5 = mysqli_fetch_array($ImRes5);
	?>
	
	<div class="SlideShow">
		<div class="active"> <a href="http://techzone.ru/news?ID=<?=$IDs[0];?>"> <img src="<?=$Image1['Image']?>" alt=""> </a> </div>
		<div> <a href="http://techzone.ru/news?ID=<?=$IDs[1];?>"> <img src="<?=$Image2['Image']?>" alt=""> </a> </div>
		<div> <a href="http://techzone.ru/news?ID=<?=$IDs[2];?>"> <img src="<?=$Image3['Image']?>" alt=""> </a> </div>
		<div> <a href="http://techzone.ru/news?ID=<?=$IDs[3];?>"> <img src="<?=$Image4['Image']?>" alt=""> </a> </div>
		<div> <a href="http://techzone.ru/news?ID=<?=$IDs[4];?>"> <img src="<?=$Image5['Image']?>" alt=""> </a> </div>
	</div>
	
	<div class="progress">
		<div class="progress-value" id="progress-value"></div>
	</div>

	<div class="SlideShow2">
		<div> <a href="http://techzone.ru/news?ID=<?=$IDs[0];?>"> <img src="<?=$Image1['Image']?>" alt=""> </a> </div>
		<div class="active2"> <a href="http://techzone.ru/news?ID=<?=$IDs[1];?>"> <img src="<?=$Image2['Image']?>" alt=""> </a> </div>
		<div> <a href="http://techzone.ru/news?ID=<?=$IDs[2];?>"> <img src="<?=$Image3['Image']?>" alt=""> </a> </div>
		<div> <a href="http://techzone.ru/news?ID=<?=$IDs[3];?>"> <img src="<?=$Image4['Image']?>" alt=""> </a> </div>
		<div> <a href="http://techzone.ru/news?ID=<?=$IDs[4];?>"> <img src="<?=$Image5['Image']?>" alt=""> </a> </div>
	</div>
	
	<div class="SlideShow3">
		<div> <a href="http://techzone.ru/news?ID=<?=$IDs[0];?>"> <img src="<?=$Image1['Image']?>" alt=""> </a> </div>
		<div> <a href="http://techzone.ru/news?ID=<?=$IDs[1];?>"> <img src="<?=$Image2['Image']?>" alt=""> </a> </div>
		<div class="active3"> <a href="http://techzone.ru/news?ID=<?=$IDs[2];?>"> <img src="<?=$Image3['Image']?>" alt=""> </a> </div>
		<div> <a href="http://techzone.ru/news?ID=<?=$IDs[3];?>"> <img src="<?=$Image4['Image']?>" alt=""> </a> </div>
		<div> <a href="http://techzone.ru/news?ID=<?=$IDs[4];?>"> <img src="<?=$Image5['Image']?>" alt=""> </a> </div>
	</div>
	
	<div class="SliderKeyDiv">
		<div class="SliderKey" id="leftArrow">
		</div>
		
		<div class="SliderPoint">
			<div id="SliderPoint" class="activePoint"></div>
			<div id="SliderPoint" class="unactivePoint"></div>
			<div id="SliderPoint" class="unactivePoint"></div>
			<div id="SliderPoint" class="unactivePoint"></div>
			<div id="SliderPoint" class="unactivePoint"></div>
		</div>
		
		<div class="SliderKey" id="rightArrow">
		</div>
	</div>

</div>

<script src="JS/Slider.js"></script>