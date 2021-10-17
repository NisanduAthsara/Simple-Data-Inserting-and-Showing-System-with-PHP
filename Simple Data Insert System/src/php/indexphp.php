	<?php

		if(isset($_POST['submit'])){
			$email = $_POST['email'];
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$pwd = $_POST['pwd'];

			// $sql = "INSERT INTO login_data('Email_Ad','First_Name','Last_Name','Email_Pwd') VALUES('$email','$fname','$lname','$pwd')";
			$sql = "INSERT INTO login_data(Email_Ad,First_Name,Last_Name,Email_Pwd) VALUES('$email','$fname','$lname','$pwd')";

			if(mysqli_query($conn,$sql)){
				?>
				<script type="text/javascript">
					alert("Successfully Data Inserted to the Database!");
				</script>
				<?php
			}
			else{
				?>
				<script type="text/javascript">
					alert("Oops! Something went wrong!");
				</script>
				<?php
			}
		}




	?>