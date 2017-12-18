<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>TaskManager - Register</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    <?php include 'styles.php';
    	session_start();
    ?>
    
    
</head>

<body>

<div class="container">
	<?php include 'navbar.php';?>
	<h1></h1>
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8 outer-content-div">
			<h1 class="form-title-head">Register</h1>
			<form class="form-horizontal" action="index.php?page=accounts&action=register" method="POST">
				<div class="form-group">
					<label class="control-label col-sm-2" for="fname">First Name:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="fname" placeholder="Enter first name" name="fname" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="lname">Last Name:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="lname" placeholder="Enter last name" name="lname" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">Email:</label>
					<div class="col-sm-8">
						<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="phone">Phone:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="phone" placeholder="Enter your phone" name="phone">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="birthday">Birthday:</label>
					<div class="col-sm-8">
						<input type="date" class="form-control" id="birthday" name="birthday">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="gender">Gender:</label>
					<div class="col-sm-8">
						<label class="radio-inline">
							<input type="radio" name="gender" value="male">Male
						</label>
						<label class="radio-inline">
							<input type="radio" name="gender" value="female">Female
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd">Password:</label>
					<div class="col-sm-8">
						<input type="password" pattern="^.{6,12}$" class="form-control" id="password" placeholder="Enter password" name="password" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-8">
						<button type="submit" class="btn btn-default" id="register-submit-btn">Submit</button>
					</div>
				</div>
			</form>
		</div>
		<div class="col-sm-2"></div>
	</div>
</div>


<!-- 
<form action="index.php?page=accounts&action=register" method="post">
    First name: <input type="text" name="fname" required><br>
    Last name: <input type="text" name="lname" required><br>
    Email: <input type="email" name="email" required><br>
    Phone: <input type="text" name="phone" required><br>
    Birthday: <input type="date" name="birthday" required><br>
    Gender: <input type="text" name="gender"><br>
    Password: <input type="password" name="password" required><br>
    <input type="submit" value="Submit form">
</form>
 -->


<script src="js/scripts.js"></script>
</body>
</html>
