<!DOCTYPE html>
<html>

<head>
	<title>
		Login Page
	</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Asul&family=Didact+Gothic&family=Lato:wght@300&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/ab606e87e4.js" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="login_style.css">
</head>
<body>
	<div class="container-fluid row">
		<div class="col-6">
			<div class="green">
				<h1><a href="#">APT567
					</a>
				</h1>
			</div>
		</div>
		<div class="col-6">
			<a href="create_account.php">
				<button type="button" class="btn btn-light"> Create Account
				</button>
			</a>
		</div>
	</div>
	<div class="container-fluid blue">
		<div class="col-6 white">
			<div class="LoginForm">
				<h3>Log In To Your Account</h3>
				<form action="includes/login.inc.php" method="post">
          <div class="error"><?php if (isset($_GET["error"])) {
                                  if ($_GET["error"] == "emptyInputLogin")
                                      echo "<p>Please fill all the fields</p>";
                              }
                              ?>
          </div>
					<h6>Enter your College/Email Id</h6>
					<input type="text" name="id">
          <div class="error"><?php if (isset($_GET["error"])) {

                                  if ($_GET["error"] == "usernotfound")
                                      echo "<p>User Not Found</p>";
                              }
                              ?>
          </div>
					<br>
					<h6>You are a Teacher/Student</h6>
					<select id="" name="type">
						<option value="F">Teacher</option>
						<option value="S">Student</option>
					</select>
					<br>
					<h6>Enter your Password</h6>
					<input type="password" name="pwd">
          <div class="error"><?php if (isset($_GET["error"])) {

                                  if ($_GET["error"] == "wrongPassword")
                                      echo "<p>User Not Found</p>";
                              }
                              ?>
          </div>
					<br>
					<button type="submit" name="submit" href="#">
						LOGIN
					</button>
				</form>
				<br>
				<br>
				<p>
					<a href="#">Forgot Password?</a>
				</p>
			</div>
		</div>
		<div class="col-6 side">
			<p>TAKE YOUR CLASSROOM
				EVERYWHERE....
			</p>
			<div><img src="login_img.png">
			</div>
		</div>
	</div>
</body>
</html>
