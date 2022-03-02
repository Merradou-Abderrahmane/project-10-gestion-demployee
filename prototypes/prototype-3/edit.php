<?php
require_once 'employeeManager.php';

$employeeManager = new EmployeeManager();

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $employee = $employeeManager->getEmployee($id);
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $birthDate = $_POST['birthDate'];
    $gender = $_POST['gender'];

    $employeeManager->editEmployee($id, $firstName, $lastName, $birthDate, $gender);

    header('location: index.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Employee</title>
</head>
<body>
	<div>
		<h3>Create a new user :</h3>
		<form method="POST">
            <input type="hidden" id='id' name='id' value=<?php echo $employee->getId() ?>>
			<div>
				<label for="inputFirstName">First Name</label>
				<input type="text" required value=<?= $employee->getFirstName() ?>  name="firstName" placeholder="First Name">
			</div>

			<div>
				<label for="inputLastName">Last Name</label>
				<input type="text" required value=<?= $employee->getLastName()?>  name="lastName" placeholder="Last Name">
			</div>

			<div>
				<label for="inputAge">Age</label>
				<input type="date" required value=<?= $employee->getBirthDate()?>  name="birthDate" placeholder="Birth Date">
			</div>
			<div>
				<label for="inputGender">Gender</label>
				<select name="gender" required  >
					<option>Select here</option>
					<option value="Male" <?= $employee->getGender()=='Male' ? 'selected' : '' ?> >Male</option>
					<option value="Female" <?= $employee->getGender()=='Female' ? 'selected' : '' ?>>Female</option>
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