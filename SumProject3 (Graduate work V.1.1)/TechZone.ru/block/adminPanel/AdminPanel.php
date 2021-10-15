<div class="MainTitle">		
		<p class="TInfoTitle" id="TMainTitle">Панель управления</p>
	</div>
<div class="AdminMainBlock">				
	<div class="AdminLeftPanel">						
		<a href="http://techzone.ru/admin?action=1"><div class="AdminButtonsPanel">						
			<p class="TAdminButtonsPanel">Добавить товар</p>
		</div></a>
		<a href="http://techzone.ru/admin?action=2"><div class="AdminButtonsPanel">						
			<p class="TAdminButtonsPanel">Изменить товар</p>
		</div></a>
		<a href="http://techzone.ru/admin?action=3"><div class="AdminButtonsPanel">						
			<p class="TAdminButtonsPanel">Добавить новость</p>
		</div></a>
	</div>
	<div class="AdminRightPanel">		
		<?php
			require_once ('controllers/CategotySwitcher.php');
		?>
	</div>
</div>