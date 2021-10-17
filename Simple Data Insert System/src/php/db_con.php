
	<?php

	try {
		$serverName = "localhost";
		$userName = "root";
		$pwd = "";
		$db = "login_form";

		$conn = mysqli_connect($serverName,$userName,$pwd,$db);

		if($conn){
			//echo "Successfully connected to the Database!<br>";
		}
		else{
			echo "Failed";
		}

	} catch (Exception $e) {
		echo "Error";
		
	}

	?>
