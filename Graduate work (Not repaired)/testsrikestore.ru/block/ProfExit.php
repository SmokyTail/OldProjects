<!Doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="CSS/Reset.css" />
		<link rel="stylesheet" href="CSS/TextBase.css" />
        <link rel="stylesheet" href="CSS/Top.css" />
		<script src="JS/Main.js"></script>
	</head>
	<body>
	
		<div class="RegEnterProf">
		
			<p class="TEnter" id="THello"> Здравствуйте, <?php
				echo $_SESSION['Login'];
			?>!</p>
			
			<a href="block/Exit.php"><div class="Exit">
				<p class="TEnter">ВЫХОД</p>
			</div></a>

			<a href="Profile.php"><div class="Profile">
				<p class="TRegistration">ЛИЧНЫЙ КАБИНЕТ</p>
			</div></a>

		</div>
		
 	</body>
</html>