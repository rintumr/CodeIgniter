<html>
	<head>
		<title>Upload Form</title>
	</head>
	<body>
	  <?php echo validation_errors(); ?>
	  <?php echo form_open_multipart('uploadfile_controller/do_upload');?>
		<br>Filename:<input type="text" name="filename">
		<br><input type="file" name="userfile"/>
		<br><input type="submit" value="upload" />
	  </form>
	 </body>
</html>
