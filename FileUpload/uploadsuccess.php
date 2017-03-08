<html>
	<head>
		<title>Upload Form</title>
	</head>
	<body>
        <?php echo validation_errors(); ?>
		<h3>Your file was successfully uploaded!</h3>

		<p><?php echo anchor('Upload Another File!'); ?>
		<br><input type="text" name="filename">
		<br><input type="file" name="userfile" size="20" />
		<br><input type="submit" value="upload" /></p>

	</body>
</html>