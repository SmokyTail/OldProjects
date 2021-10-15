<div class="MainViewerNewsDiv">
	<div class="MainTitle">
		<p class="TInfoTitle" id="TMainTitle"><?php echo $oneNews['Title'];?></p>
	</div>

	<div class="ViewerNewsImgDiv">
		<img src="<?=$oneNews[Image];?>" alt="<?=$oneNews['Name'];?>">
	</div>

	<div class="ViewerNewsTextDiv">
		<p class="TInfoText"><?php echo $oneNews['Greeting'];?></p>
		<p class="TInfoText"><?php echo $oneNews['Text'];?></p>
	</div>
</div>