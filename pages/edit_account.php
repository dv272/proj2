<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>TaskManager - My Account</title>
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
    <?php include 'styles.php';?>
</head>

<body>

<?php
//this is how you print something  $data contains the record that was selected on the table.
// print_r($data);
	session_start();
?>

<div class="container">
	<?php include 'navbar.php';?>
	<h1></h1>
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="row">
				<div class="col-sm-12 outer-content-div" id="account-head-title">
					<h2><?php echo ucfirst($data->fname).' '.ucfirst($data->lname);?></h2>
					<h5>Email: <?php echo $data->email;?></h5>
				</div>
			</div>
			<h1></h1>
			<div class="row">
				<div class="col-sm-12 outer-content-div">
					<h1 class="form-title-head"></h1>
					<form class="form-horizontal" action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="POST">
						<div class="form-group">
							<label class="control-label col-sm-2" for="fname">First Name:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="fname" value="<?php echo ucfirst($data->fname);?>" name="fname" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="lname">Last Name:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="lname" value="<?php echo $data->lname;?>" name="lname" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="email">Email:</label>
							<div class="col-sm-8">
								<input type="email" class="form-control" id="email" value="<?php echo $data->email;?>" name="email" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="ownerid">Phone:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" value="<?php echo $data->phone;?>" id="phone" name="phone" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="birthday">Birthday:</label>
							<div class="col-sm-8">
								<input type="date" class="form-control" value="<?php echo $data->birthday;?>" id="birthday" name="birthday" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="isdone">Gender:</label>
							<div class="col-sm-8">
								<?php
									if ($data->gender == 'male' || $data->gender == 'Male') {
										echo '<label class="radio-inline">
											<input type="radio" name="gender" value="male" checked>Male
										</label>
										<label class="radio-inline">
											<input type="radio" name="gender" value="female">Female
										</label>';
									}elseif ($data->gender == 'female' || $data->gender == 'Female') {
										echo '<label class="radio-inline">
											<input type="radio" name="gender" value="male">Male
										</label>
										<label class="radio-inline">
											<input type="radio" name="gender" value="female" checked>Female
										</label>';
									}else {
										echo '<label class="radio-inline">
											<input type="radio" name="gender" value="male">Male
										</label>
										<label class="radio-inline">
											<input type="radio" name="gender" value="female">Female
										</label>';
									}
								?>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-8">
								<button type="submit" class="btn btn-default" id="register-submit-btn">Save</button>
							</div>
						</div>
					</form>
					<form class="form-horizontal" action="index.php?page=accounts&action=delete&id=<?php echo $data->id;?>" method="post" id="form1">
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-8">
								<button type="submit" class="btn btn-danger" form="form1" value="delete">Delete</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div>
</div>

<!-- 
<h1>Email: <?php echo $data->email; ?></h1>
<h1>First Name: <?php echo $data->fname; ?></h1>
<h1>Last Name: <?php echo $data->lname; ?></h1>



<form action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="post">

    First name: <input type="text" name="fname" value="<?php echo $data->fname; ?>" required><br>

    Last name: <input type="text" name="lname" value="<?php echo $data->lname; ?>" required><br>
    Email: <input type="text" name="email" value="<?php echo $data->email; ?>" required><br>
    Phone: <input type="text" name="phone" value="<?php echo $data->phone; ?>" required><br>
    Birthday: <input type="text" name="birthday" value="<?php echo $data->birthday; ?>" required><br>
    Gender: <input type="text" name="gender" value="<?php echo $data->gender; ?>"><br>
    <input type="submit" value="Submit form">
</form>


<form action="index.php?page=accounts&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>
 -->


<script src="js/scripts.js"></script>
</body>
</html>