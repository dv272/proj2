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
    <?php 
    	include 'styles.php';
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
			<h1 class="form-title-head"></h1>
			<form class="form-horizontal" action="index.php?page=tasks&action=edit&id=<?php echo $data->id;?>" method="POST">
				<div class="form-group">
					<label class="control-label col-sm-2" for="message">Message:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="message" value="<?php echo ucfirst($data->message);?>" name="message" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="createddate">Created Date:</label>
					<div class="col-sm-8">
						<input type="date" class="form-control" id="createddate" value="<?php echo $data->createddate;?>" name="createddate" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="duedate">Due Date:</label>
					<div class="col-sm-8">
						<input type="date" class="form-control" id="duedate" value="<?php echo $data->duedate;?>" name="duedate" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="ownerid">Owner id:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" value="<?php echo $data->ownerid;?>" id="ownerid" name="ownerid" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="owneremail">Owner email:</label>
					<div class="col-sm-8">
						<input type="email" class="form-control" value="<?php echo $data->owneremail;?>" id="owneremail" name="owneremail" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="isdone">Is done?:</label>
					<div class="col-sm-8">
						<select name="isdone" class="form-control">
							<?php
							if($data->isdone == 0) {
								echo '
									<option value="1">1</option>
									<option value="0" selected>0</option>';
							}else {
								echo '
									<option value="1" selected>1</option>
									<option value="0">0</option>';
							}
							?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-8">
						<button type="submit" class="btn btn-default" id="register-submit-btn">Save</button>
					</div>
				</div>
			</form>
			<form class="form-horizontal" action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
			    <div class="form-group">
			    	<div class="col-sm-offset-2 col-sm-8">
						<button type="submit" class="btn btn-danger" form="form1" value="delete">Delete</button>
					</div>
			    </div>
			</form>
		</div>
		<div class="col-sm-2"></div>
	</div>
</div>

<?php
//this is how you print something  $data contains the record that was selected on the table.

// print_r($data);
?>
<!-- 
<form action="index.php?page=tasks&action=edit&id=<?php echo $data->id;?>" method="post">
	Message: <input type="text" name="message" value="<?php echo $data->message;?>"><br>
    Created Date: <input type="date" value="<?php echo $data->createddate;?>" name="createddate"><br>
    Due Date: <input type="date" value="<?php echo $data->duedate;?>" name="duedate"><br>
    Owner ID: <input type="text" value="<?php echo $data->ownerid;?>" name="ownerid"><br>
    Owner Email: <input type="text" value="<?php echo $data->owneremail;?>" name="owneremail"><br>
    Status: <input type="text" value="<?php echo $data->isdone;?>" name="isdone"><br>
    <input type="submit" value="Save">
</form>
<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>
 -->




<script src="js/scripts.js"></script>
</body>
</html>