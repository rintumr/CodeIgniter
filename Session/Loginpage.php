<!DOCTYPE html>
<html>
<head>
	<title>LoginPage</title>
</head>
<body>
<?php echo validation_errors(); ?>
<h1>LOGIN!!!</h1>
<form action="http://localhost/project/index.php/session_controller/index" method="Post">
<br><span style="font-weight: bold;">Username:</span><input type="text" name="username"> 
<br><span style="font-weight: bold;">Email:</span><input type="email" name="email"> 
<br><span style="font-weight: bold;">Password:</span><input type="password" name="password"> 
<input type="submit" name="Submit" value="Submit">
</form>
</body>
</html>