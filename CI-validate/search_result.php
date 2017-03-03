<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Search Result</h2>
	<table>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Roll No</th>
		</tr>

		<?php foreach ($result as $val) { ;?>
		<tr>
		    <td><?php echo $val->Id;?></td>
			<td><?php echo $val->Name;?></td>
			<td><?php echo $val->Roll_no;?></td>
		</tr>
		<?php } ;?>
	</table>

</body>
</html>