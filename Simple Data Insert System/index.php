<?php
include('src/php/db_con.php')
?>

<!DOCTYPE html>
<html>
<head>
	<title>User</title>
	<link rel="stylesheet" href="src/css/style.css">
</head>
<body>

	<div class="h1">Enter Your Data</div>

	<form method="POST">
		<br>
		<p class="p1">Enter Email</p>
		<input type="email" name="email" required="required"><br>
		<p class="p1">Enter First Name</p>
		<input type="text" name="fname" required="required"><br>
		<p class="p1">Enter Last Name</p>
		<input type="text" name="lname" required="required"><br>
		<p class="p1">Enter Password</p>
		<input type="password" name="pwd" required="required"><br>
		<input type="submit" name="submit" value="Submit" id="btn">
	</form>

	<?php
		include('src/php/indexphp.php')
	?>

</body>
</html>