<div class="RegEnterProf">
	<p class="TEnter" id="THello"> Здравствуйте, <?php
		echo $_SESSION['Login'];
	?>!</p>
	
	<a href="block/PHP/Exit.php"><div class="Exit">
		<p class="TEnter">ВЫХОД</p>
	</div></a>

		
	<?php
		if($_SESSION['Admin']=1){?>
			<a href="http://techzone.ru/admin"><div class="Profile" id="Admin">
				<p class="TRegistration">
					ПАНЕЛЬ УПРАВЛЕНИЯ
				</p>
			</div></a>
		<?} else { ?>
			<a href="http://techzone.ru/profile"><div class="Profile">
				<p class="TRegistration">
					ЛИЧНЫЙ КАБИНЕТ
				</p>
			</div></a>
	<?}	?>	
</div>