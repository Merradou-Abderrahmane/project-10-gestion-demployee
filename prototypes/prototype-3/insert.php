<?php
require_once 'employeeManager.php';

if(!empty($_POST)){
        $employee = new Employee();
        $employeeManager = new EmployeeManager();

    $employee->setFirstName($_POST['firstName']);
    $employee->setLastName($_POST['lastName']);
    $employee->setBirthDate($_POST['birthDate']);
    $employee->setGender($_POST['gender']);

        $employeeManager->insertEmployee($employee);
    
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insert</title>
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
				<label for="inputAge">Birth Date</label>
				<input type="date" required  name="birthDate" >
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