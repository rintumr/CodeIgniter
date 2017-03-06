<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php echo validation_errors(); ?>
	<h2>Search</h2>
	<form action="http://localhost/project/index.php/searchvalcontroller/search" method="Post">
		<br>Id: <input type="text " name="id" >
		<br>Name: <input type="text" name="name" >
		<input type="submit" name="" value="Search">
	</form>
</body>
</html>