<?php
// connect to db
require_once 'config.php';
// POST 
if (!empty($_POST)){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $person = array($firstName, $lastName, $age, $gender);

    // sql insert query
    $sqlInsertQuery = "INSERT INTO employees_db(firstName, lastName, age, gender)
                       VALUES('$firstName', '$lastName', '$age', '$gender') ";

    // save to db and check
    if(mysqli_query($conn, $sqlInsertQuery)){
        // success
        header('Location: index.php');
    } else {
        // error
        echo 'query error:' . mysqli_error($conn);
    }
	// mysqli_query($conn, $sqlInsertQuery);

	// header('Location: index.php');

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
					<option>Select here</option>
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