<html>
<body>
	<form action="test_form.php" method="post">
		Name: <input type="text" name="name"><br>
		E-mail: <input type="text" name="email"><br>
		<input type="submit">
	</form>
	<?php echo $_POST["name"]; ?>
	<br/>
	<?php echo $_POST["email"]; ?>
</body>
</html>