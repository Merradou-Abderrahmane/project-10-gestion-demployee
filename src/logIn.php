<?php


if(isset($_POST['username'],$_POST['password'])){
  
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == 'admin' && $password == 'admin'){
      
        header('location:index.php');
    
    }
      
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Employee management</title>
	<link href="css/style.css" rel="stylesheet" />
	<link rel="stylesheet" href="css/custom.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>

<body class="sb-nav-fixed">
	<nav class="sb-topnav navbar navbar-expand  " style="height : 75px">
		<!-- Navbar Brand-->
		<div class="d-flex justify-content-center">
			<div class='w-100'>
				<img id="logo" class=" ms-3 rounded-circle" style="width:65px;" src="images/logo.png" alt="logo">

				<a class="navbar-brand ps-3" id="top-title" style="font-size : 27px">Employee management</a>
			</div>

		</div>
		<!-- Sidebar Toggle-->
	</nav>
	</div>

		<div class="container-fluid vh-1">
            <div class="" style="margin:150px auto 0 auto">
                <div class="rounded d-flex justify-content-center";>
                    <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                        <div class="text-center">
                            <h3  style="color:#7B498D;">Sign In</h3>
							<form method="POST">
                            <div class="p-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text icon-background" style="background-color: #7B498D !important ;"><i
                                            class="bi bi-person-plus-fill text-white"></i></span>
                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text icon-background" style="background-color: #7B498D !important ;" ><i
                                            class="bi bi-key-fill text-white"></i></span>
                                    <input type="password" class="form-control" name="password" placeholder="password">
                                </div>

                                </div>
                                <button class="btn text-center mt-2" style="background-color:#7B498D; color:white;" type="submit">
                                    Login
                                </button>
                            </div>
                        </form>
        </div>
</body>
</html>
