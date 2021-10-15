<?php
	if(isset($_GET['action'])){
		$Action = $_GET['action'];
		switch ($Action) {
			case 1:
				require_once ("block/adminPanel/CategoryList.php");
				break;
			case 2:
				
				break;
			case 3:
				
				break;
		}
	} elseif(isset($_GET['category'])) {
		$Categ = $_GET['category'];
		require_once ("block/adminPanel/Characteristics/GeneralCharacteristics.php");
		switch ($Categ) {
			case "cases":
				require_once ("block/adminPanel/Characteristics/CasesCharacteristics.php");
				break;
			case "monitors":
				require_once ("block/adminPanel/Characteristics/MonitorsCharacteristics.php");
				break;
			case 3:
				
				break;
		}
	}
?>