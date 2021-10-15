<?php
	function getCases($conn){
		$cases = $conn->query("SELECT * FROM cases") or die("ERROR: ".mysqli_error());

		$casesList = [];

		while($case = mysqli_fetch_assoc($cases)) {
			$casesList[] = $case;
		}

		echo json_encode($casesList);
	}
	
	function getCase($conn, $id){
		$case = $conn->query("SELECT * FROM cases WHERE `CaseID` = '$id'") or die("ERROR: ".mysqli_error());
		
		if(mysqli_num_rows($case) === 0){
			http_response_code(404);
			$res = [
				"status" => false,
				"message"  => "Case not found"
			];
			echo json_encode($res);
		} else {
			$case = mysqli_fetch_assoc($case);
			echo json_encode($case);
		}
	}
	
	function addCase($conn, $data){
		$ID = $data['ID'];
		$Model = $data['Model'];
		$Manufacturer = $data['Manufacturer'];
		$FormFactor = $data['FormFactor'];
		$StandartSize = $data['StandartSize'];
		$Lenght = $data['Lenght'];
		$Width = $data['Width'];
		$Height = $data['Height'];
		$Weight = $data['Weight'];
		$MainColor = $data['MainColor'];
		$Country = $data['Country'];
		$Garantee = $data['Garantee'];
		$Description = $data['Description'];
		$Price = $data['Price'];
		$DiscountPrice = $data['DiscountPrice'];
		$Status = $data['Status'];
		$Image = $data['Image'];
		$conn->query("INSERT INTO products (`productID`, `Type`, `TypeObject`, `Model`, `Manufacturer`, `Country`, `Garantee`, `Description`, `Price`, `DiscountPrice`, `Status`, `Image`) VALUES (NULL, 'cases', 'Корпус', '$Model', '$Manufacturer', '$FormFactor', '$StandartSize', '$Lenght', '$Width', '$Height', '$Weight', '$MainColor', '$Country', '$Garantee', '$Description', '$Price', '$DiscountPrice', '$Status', '$Image')") or die("ERROR: ".mysqli_error());
		$conn->query("INSERT INTO cases (`ID`, `FormFactor`, `StandartSize`, `Lenght`, `Width`, `Height`, `Weight`, `MainColor`) VALUES ('$ID', '$FormFactor', '$StandartSize', '$Lenght', '$Width', '$Height', '$Weight', '$MainColor')") or die("ERROR: ".mysqli_error());
		
		http_response_code(201);
		
		$res = [
			"status" => true,
			"post_id"  => mysqli_insert_id($conn)
		];				
		echo json_encode($res);
	}
	
	function updateCase($conn, $id, $data){
		$Model = $data['Model'];
		$Manufacturer = $data['Manufacturer'];
		$FormFactor = $data['FormFactor'];
		$StandartSize = $data['StandartSize'];
		$Lenght = $data['Lenght'];
		$Width = $data['Width'];
		$Height = $data['Height'];
		$Weight = $data['Weight'];
		$MainColor = $data['MainColor'];
		$Country = $data['Country'];
		$Garantee = $data['Garantee'];
		$Description = $data['Description'];
		$Price = $data['Price'];
		$DiscountPrice = $data['DiscountPrice'];
		$Image = $data['Image'];
		
		$conn->query("UPDATE cases SET `Model` = '$Model', `Manufacturer` = '$Manufacturer', `FormFactor` = '$FormFactor', `StandartSize` = '$StandartSize', `Lenght` = '$Lenght', `Width` = '$Width', `Height` = '$Height', `Weight` = '$Weight', `MainColor` = '$MainColor', `Country` = '$Country', `Garantee` = '$Garantee', `Description` = '$Description', `Price` = '$Price',  `DiscountPrice` = '$DiscountPrice',  `Image` = '$Image' WHERE `cases`.`CaseID` = '$id'") or die("ERROR: ".mysqli_error());
	
		http_response_code(200);
		
		$res = [
			"status" => true,
			"message"  => "Case is updated"
		];				
		echo json_encode($res);
	}
	
	function deleteCase($conn, $id){
		$case = $conn->query("DELETE FROM cases WHERE `cases`.`CaseID` = '$id'") or die("ERROR: ".mysqli_error());
		
		http_response_code(200);
		
		$res = [
			"status" => true,
			"message"  => "Case is deleted"
		];
		echo json_encode($res);
	}
?>