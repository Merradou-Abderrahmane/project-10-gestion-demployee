<?php
require_once 'employeeManager.php';

	if (!empty($_POST)) {
		$employeeManager = new EmployeeManager();
		$fileName = $_FILES["uploadedFile"]["name"];
		$employee = new Employee();
		$employee->setRegistrationNumber($_POST['registrationNumber']);
		$employee->setFirstName($_POST['firstName']);
		$employee->setLastName($_POST['lastName']);
		$employee->setBirthDate($_POST['birthDate']);
		$employee->setDepartment($_POST['department']);
		$employee->setSalary($_POST['salary']);
		$employee->setOccupation($_POST['occupation']);
		$employee->setPhoto($fileName);

		$tempName = $_FILES["uploadedFile"]["tmp_name"];

		$employeeManager->insertEmployee($employee);
		$employeeManager->uploadPhoto($fileName, $tempName);

		header("Location: index.php");
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<script src="https://kit.fontawesome.com/110fb8b8a8.js" crossorigin="anonymous"></script>
	<title>Employee management</title>
	<link href="css/style.css" rel="stylesheet" />
	<link rel="stylesheet" href="css/custom.css">
</head>

<body class="sb-nav-fixed">
	<nav class="sb-topnav navbar navbar-expand  ">
		<!-- Navbar Brand-->
		<div class="d-flex justify-content-center">
			<div class='w-100'>
				<img id="logo" class=" ms-3 rounded-circle" style="width:50px;" src="images/logo.png" alt="logo">

				<a class="navbar-brand ps-3" id="top-title" href="index.php">Employee management</a>
				<a href="logOut.php" style="text-decoration: none; margin-left: 850px; "  > <i class="fa fa-sign-out" style="margin-right:5px;" aria-hidden="true"></i>log Out</a>
			</div>

		</div>
	</nav>
	<div id="layoutSidenav">
		<div id="layoutSidenav_nav">
			<nav class="sb-sidenav accordion " id="sidenavAccordion">
				<div class="sb-sidenav-menu sb-sidenav-custom">
					<div class="nav">
					<a class="nav-link" href="index.php">
                           <div class="sb-nav-link-icon"><i class="fa fa-fw fa-globe"></i></div>
                            Browse Employees <br>
                        </a> 
                        <a class="nav-link" href="search.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-fw fa-search"></i></div>
                            Find Employee <br>    
                        </a>
                            <a class="nav-link" href="insert.php">
                                <div class="sb-nav-link-icon"><i class="fa fa-fw fa-plus-circle"></i></div>
                                Add Employee <br>    
                            </a>					</div>
				</div>
				<div class="sb-sidenav-footer sb-sidenav-custom">
					<div class="small">Logged in as:</div>
					🟢 Admin
				</div>
			</nav>
		</div>
		<div id="layoutSidenav_content">
			<main>
				<div class="container-fluid px-4">
					<h1 class="mt-4"><i class="fa fa-fw fa-plus-circle"></i>Add Employee</h1>

					<div id="formCard" class="card mb-4 ">

						<div class="card-header">
							<div>✒️ Form</div>
						</div>
						<div class="card-body">
							<form method="POST" enctype="multipart/form-data" id="formSubmit" class="row g-3">
								<div class="col-md-6">
									<label for="inputTitle" class="form-label">Registration Number</label>
									<input type="text" required name="registrationNumber" class="form-control" id="inputTitle">
								</div>
								<div class="col-md-6">
									<label for="inputAuthor" class="form-label">First Name</label>
									<input type="text" required name="firstName" class="form-control" id="inputAuthor">
								</div>
								<div class="col-6">
									<label for="inputPrix" class="form-label">last Name</label>
									<input type="text" required name="lastName" class="form-control" id="inputPrix">
								</div>
								<div class="col-6">
									<label for="inputDate" class="form-label">Birth date </label>
									<input type="date" required name="birthDate" class="form-control" id="inputDate">
								</div>
								<div class="col-6">
									<label for="department" class="form-label">Department </label>
									<input type="text" required name="department" class="form-control">
								</div>
								<div class="col-md-6">
									<label for="salary" class="form-label">Salary</label>
									<input type="number" required name="salary" class="form-control">
								</div>
								<div class="col-6">
									<label for="occupation" class="form-label">Occupation</label>
									<input type="text" required name="occupation" class="form-control">
								</div>
								<div class="col-6">
									<label for="photo" class="form-label">Photo</label>
									<input type="file" required name="uploadedFile" class="form-control" value="">
								</div>

								<div class="col-12">
									<button id="submitButton" type="submit" class="btn btn-primary-custom-2">💾Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
		</div>
	</div>
	</main>
	</div>
	</div>
</body>

</html>