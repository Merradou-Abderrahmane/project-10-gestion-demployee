<?php
require_once 'config.php';

if (isset($_GET['id'])){
    $id = $_GET['id'];


$sqlGetQuery = " SELECT * FROM employees_db WHERE id=$id ";

// get result
$result = mysqli_query($conn, $sqlGetQuery);

// fetch to array
$employee = mysqli_fetch_array($result);
}

if (isset($_POST['update'])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    // updaxte query
    $sqlUpdateQuery = "UPDATE employees_db SET
                       firstName='$firstName', lastName='$lastName', age='$age', gender='$gender'
                       WHERE id= $id ";
    // make query
    mysqli_query($conn, $sqlUpdateQuery);

    // check for possible errors
    if(mysqli_error($conn)){
        echo 'query failed' . mysqli_error($conn);
    } else{
        header('Location: index.php');
    }
                       
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
				<input type="text" required value=<?= $employee['firstName'] ?>  name="firstName" placeholder="First Name">
			</div>

			<div>
				<label for="inputLastName">Last Name</label>
				<input type="text" required value=<?= $employee['lastName']?>  name="lastName" placeholder="Last Name">
			</div>

			<div>
				<label for="inputAge">Age</label>
				<input type="number" required value=<?= $employee['age']?>  name="age" placeholder="Age">
			</div>
			<div>
				<label for="inputGender">Gender</label>
				<select name="gender" required  >
					<option>Select here</option>
					<option value="Male" <?= $employee['gender']=='Male' ? 'selected' : '' ?> >Male</option>
					<option value="Female" <?= $employee['gender']=='Female' ? 'selected' : '' ?>>Female</option>
				</select>
			</div>
			<div>
				<button type="submit" name="update" value="update">Update</button>
				<a href="index.php">Form</a>
			</div>
			</div>
		</form>
	</div>
</body>
</html>