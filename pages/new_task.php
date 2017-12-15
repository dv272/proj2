<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
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
			<h1 class="form-title-head">New Task</h1>
			<form class="form-horizontal" action="index.php?page=tasks&action=create" method="POST">
				<div class="form-group">
					<label class="control-label col-sm-2" for="message">Message:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="message" placeholder="Enter message" name="message" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="createddate">Created Date:</label>
					<div class="col-sm-8">
						<input type="date" class="form-control" id="createddate" name="createddate" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="duedate">Due Date:</label>
					<div class="col-sm-8">
						<input type="date" class="form-control" id="duedate" name="duedate" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="ownerid">Owner id:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" placeholder="Enter owner id" id="ownerid" name="ownerid" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="owneremail">Owner email:</label>
					<div class="col-sm-8">
						<input type="email" class="form-control" placeholder="Enter owner email" id="owneremail" name="owneremail" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="isdone">Is done:</label>
					<div class="col-sm-8">
						<select name="isdone" class="form-control" required>
							<option value="0" selected>No</option>						
							<option value="1">Yes</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-8">
						<button type="submit" class="btn btn-default" id="register-submit-btn">Save</button>
					</div>
				</div>
			</form>
		</div>
		<div class="col-sm-2"></div>
	</div>
</div>

<!-- 
form action="index.php?page=tasks&action=create" method="post">
	Message: <input type="text" name="message" required><br>
    Created Date: <input type="date" name="createddate" required><br>
    Due Date: <input type="date" name="duedate" required><br>
    Owner ID: <input type="text" name="ownerid" required><br>
    Owner Email: <input type="text" name="owneremail" required><br>
    Status: <input type="text" name="isdone" required><br>
    <input type="submit" value="Save">
</form>
 -->




<script src="js/scripts.js"></script>
</body>
</html>