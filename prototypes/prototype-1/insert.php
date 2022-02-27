<?php
if (!empty($_POST)){
    // create unique id
    $id = uniqid();
	// post Values
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	// store them in an array
	$person = array($id, $firstName, $lastName, $age, $gender);

	$content = file_get_contents("data.json");
	$data = json_decode($content);
	array_push($data, $person);
	file_put_contents("data.json", json_encode($data));
	header("location: index.php");
}
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
		<h3>Create a new user :</h3>
		<form method="POST">
			<div>
				<label for="inputFirstName">First Name</label>
				<input type="text" required  name="firstName" placeholder="First Name">
			</div>

			<div>
				<label for="inputLastName">Last Name</label>
				<input type="text" required  name="lastName" placeholder="Last Name">
			</div>

			<div>
				<label for="inputAge">Age</label>
				<input type="number" required  name="age" placeholder="Age">
			</div>
			<div>
				<label for="inputGender">Gender</label>
				<select name="gender" required  >
					<option>Select</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
			</div>
			<div>
				<button type="submit">Create</button>
				<a href="index.php">Form</a>
			</div>
			</div>
		</form>
	</div>
</body>
</html>