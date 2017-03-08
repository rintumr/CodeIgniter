<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <h1>Countries</h1>
  
<?php
foreach($results as $data) {
    echo $data->No . " - " . $data->Name . "<br>";
}
?>
   <p><?php echo $links; ?></p>
  </div>
  <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
 </div>
</body>
</html> 