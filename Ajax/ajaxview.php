<!DOCTYPE html>
<html>
<head>
	<title></title>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Ajax  -->
<script type="text/javascript">
			$(document).ready(function(){
			    $("#submit").click(function(work){
			    	work.preventDefault();
			    	var username = $("#uname").val();
			    	var password = $("#pword").val();
			        $.ajax(
			        {
			        	type: "POST",
						url: "<?php echo base_url(); ?>" + "index.php/ajaxcontroller/update",
						dataType: 'html',
						data: {username: username, password: password },
						success: function(result) {
							$("#update").html(result);
						},
						error: function() { 
							$("#update").html(result);
						}
			        });
			    });
			});	
</script>
</head>
<body>
<h1>Update</h1>
<form>
	<input type="text" name="username" id="uname">
	<input type="password" name="password" id="pword">
	<input type="submit" id="submit">
	<p id="update"></p>
</form>
</body>
</html>
