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
					<form class="form-horizontal" method="POST">
						<div class="form-group">
							<label class="control-label col-sm-2 custom-form-label" for="fname">First Name:</label>
							<div class="col-sm-8">
                                <h4><?php echo ucfirst($data->fname);?></h4>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2 custom-form-label" for="lname">Last Name:</label>
							<div class="col-sm-8">
                                <h4><?php echo ucfirst($data->lname);?></h4>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2 custom-form-label" for="email">Email:</label>
							<div class="col-sm-8">
                                <h4><?php echo $data->email;?></h4>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2 custom-form-label" for="ownerid">Phone:</label>
							<div class="col-sm-8">
                                <h4><?php echo $data->phone;?></h4>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2 custom-form-label" for="birthday">Birthday:</label>
							<div class="col-sm-8">
                                <h5><?php echo $data->birthday;?></h5>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2 custom-form-label" for="isdone">Gender:</label>
							<div class="col-sm-8">
								<?php
									if ($data->gender == 'male' || $data->gender == 'Male') {
										echo '<h5>Male</h5>';
									}elseif ($data->gender == 'female' || $data->gender == 'Female') {
										echo '<h5>Female</h5>';
									}else {
										echo '<h5></h5>';
									}
								?>
							</div>
						</div>
					</form>
					<div class="form-horizontal" id="form1">
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-8">
								<a style="color:white; text-decoration:none;" href="index.php?page=accounts&action=edit&id=<?php echo $data->id;?>"><button class="btn btn-danger" value="edit" id="edit-btn" >Edit</button></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div>
</div>



<script src="js/scripts.js"></script>
</body>
</html>