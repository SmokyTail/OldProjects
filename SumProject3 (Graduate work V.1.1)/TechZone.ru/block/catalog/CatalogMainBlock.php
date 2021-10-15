<div class="CatalogMainDiv">				
	<?php if(isset($_GET['Type']) or isset($_GET['Manufacturer'])){ ?>
		<div class="LeftBlock">			
			<?php								
				require_once("block/catalog/Filtres/CatalogMinFiltres.php");

				if(isset($_GET['Manufacturer'])){
					require_once("block/catalog/Filtres/CatalogManufacturerFiltres.php");
				}
			?>
		</div>

		<div class="RightBlock">			
			<?php
				require ("block/catalog/CatalogBlock.php");
			?>
		</div>	
	<?php }?>	
</div>