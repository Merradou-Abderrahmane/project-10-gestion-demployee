<?php
$content = file_get_contents('data.json');
$data = json_decode($content);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Prototype-0</title>
</head>
<body>
	<div>
		<a href="insert.php">Insert Data</a>
		<table>
			<tr>
				<th>Nm° </th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Age</th>
				<th>Gender</th>
			</tr>
			<?php $i = 0; foreach($data as $person){
				$i++;
			?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $person[0]; ?></td>
				<td><?php echo $person[1]; ?></td>
				<td><?php echo $person[2]; ?></td>
				<td><?php echo $person[3]; ?></td>
			</tr>
			<?php }?>
		</table>
	</div>
</body>
</html>