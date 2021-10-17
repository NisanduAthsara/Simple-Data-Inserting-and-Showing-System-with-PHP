<?php

	$sql_select = "SELECT * FROM login_data";

	$res = mysqli_query($conn,$sql_select);

	$res_check = mysqli_num_rows($res);

	if($res_check>0){
		echo "<div class='db_table'>DataBase Data</div>";
		echo "<table>";
		echo "<tr style='background:#34ebe1;''><td>Id</td><td>Email</td><td>First Name</td><td>Last Name</td><td>Email Passwords</td></tr>";
		//echo ""
		while ($row = mysqli_fetch_assoc($res)) {	

			echo "<tr><td>".$row['id']."</td><td>".$row['Email_Ad']."</td><td>".$row['First_Name']."</td><td>".$row['Last_Name']."</td><td>".$row['Email_Pwd']."</td></tr>";
			
		}
		echo "</table>";
	}


?>