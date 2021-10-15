<!Doctype html>
<html>
 <head>
	 <title>Зоомагазин Маркиз</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="/images/icon.ico" type="image/x-icon">
	<link rel="stylesheet" href="styles/style_v2.css" type="text/css">
	<link rel="stylesheet" href="styles/lichnii_kabinet.css" type="text/css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/lichnii_kabinet.js"></script>
 </head>
<body>
<div>
	<?php
	include("block/header.php")
	?>
</div>
	<div id="content">
	<div id="blockmenu">
		<?php
	include("block/topmenu.php")
	?>
    </div>
	<div class="categor">
	
	<div class="left">
	<?php
		include("block/sidebar.php");
    ?>
	
	
	
	</div>
	<div class="right">
	
		<ul class="products" >		
		<?php
	include ("block/db.php")
		?>
		<?php
		$result = mysql_query("SELECT * FROM products");
		while ($myrow = mysql_fetch_array($result))
		{
echo <<<HERE
	<li>
		<a href='viev.php?category=cat&id=$myrow[id]'>
			<img src=$myrow[image] alt="">
			<p>$myrow[title]<br>$myrow[description]</p>
			<p>$myrow[prise] руб.<button>Купить</button></p>
		</a>
	</li>
HERE;
		}
		?>
	</ul>
	
	</div>
    </div>
	</div>
<div class="footer">
<?php
include("block/footer.php")
?>
	</div>
	
</body>
</html>
