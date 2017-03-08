<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
</head>
<body>
<h2>Search Result</h2>
	<table>
		<tr>
			<th>Title  </th>
			<th>Postedon  </th>
			<th>Postedby</th>
		</tr>

		<?php foreach ($result as $val) { ;?>
		<tr>
		    <td><?php echo $val->Title;?></td>
			<td><?php echo $val->Posted_on;?></td>
			<td><?php echo $val->Posted_by;?></td>
		</tr>
		<?php } ;?>
	</table>
</body>
</html>