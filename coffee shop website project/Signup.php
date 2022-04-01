<?php
  include('connection.php');
  if (isset($_POST['username'])) {

    global $conn;
    $user = $_POST['username'];
    $pw = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $check_email = $conn->query("SELECT * FROM users WHERE email = '$user'");

    if($_POST['password'] != $_POST['retype-password']){
      echo "<script>alert('Password Not Match!')</script>";
    } elseif($check_email->num_rows > 0){
      echo "<script>alert('Username Already Exists!')</script>";
    }else {
      $result = $conn->query("INSERT INTO users SET email = '$user', password = '$pw'");

      if ($result) {
        echo "<script>alert('Registration Successful!');document.location = 'login.php'</script>";
      } else {
        echo "<script>alert('Registration Failed!')</script>";
      }
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
		<?php
			include 'css/bootstrap.min.css';
			include 'css/style.css';


		?>
	</style>
</head>
<body>
	<div class="h1 py-3 px-2 mb-0 title-font "><a href="index.php" class="brand">
		<img class="logo" src="image/brand/logo.png" alt="...">CAFFEIMATE
        </a>
    </div>
		<hr size="0" width="100%" color="#e6c6a8">
    </div>

	<div class="container my-5">
		<div class="row d-flex justify-content-center">
			<div class="col-md-5">
				<div class="card signup px-5 pt-3 pb-4" id="form1">
					<a href="index.php">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
  						<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  						<path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
						</svg>
					</a>
					<form action="" method="post">

						<div class="form-data">
							<h4 class="text-center mb-4 font-color font-weight-bold font-size">SIGN UP</h4>

							<div class="forms-input mb-4"> <span class="font-color">E-mail</span>
								<input autocomplete="off" type="text" name="username" class="w-100" required>
							</div>
							<div class="forms-input mb-4"> <span class="font-color">Password</span>
								<input autocomplete="off" type="password" name="password" class="w-100" required>
							</div>
							<div class="forms-input mb-4"> <span class="font-color">Confirm Password</span>
								<input autocomplete="off" type="password" name="retype-password" class="w-100" required>
							</div>
							<div class="text-center mb-4">
								<button type="submit" class="btn btn-lightbrown w-50">Register</button>
							</div>
							<div class="text-center py-0">
								<div class="font-color">SIGN UP WITH:
									<div class="py-1">
										<button class="btn"><img class="px-0" src="image/socials/IG Icon.png" alt="..."></button>
										<button class="btn"><img class="px-0" src="image/socials/Facebook Icon.png" alt="..."></button>
										<button class="btn"><img class="px-0" src="image/socials/Twitter Icon.png" alt="..."></button>
										<button class="btn"><img class="px-0" src="image/socials/Google Icon.png" alt="..."></button>
									</div>
								</div>
							</div>

							<div class="text-center py-4">
							<h6 class="font-weight-light">Already have an account?
								<a class="font-color" href="Login.php"> Login</a></h6>
								</div>

						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
