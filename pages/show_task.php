<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>TaskManager - My Task</title>

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
<?php 
	 function formatter($temp) {
	 	$arr = explode(' ',$temp);
	 	$arr = explode('-',$arr[0]);
	 	return $arr[0].'-'.$arr[1].'-'.$arr[2];
	 }
?>

<div class="container">
	<?php include 'navbar.php';?>
	<h1></h1>
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8 outer-content-div">
			<h1 class="form-title-head"></h1>
			<div class="row">
				<div class="col-sm-12">
					<h1 class="form-title-head"></h1>
					<form class="form-horizontal" method="POST">
						<div class="form-group">
							<label class="control-label col-sm-2 custom-form-label" for="message">Message:</label>
							<div class="col-sm-8">
								<h4><?php echo ucfirst($data->message);?></h4>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2 custom-form-label" for="createddate">Created Date:</label>
							<div class="col-sm-8">
								<h4><?php echo formatter(''.$data->createddate.'');?></h4>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2 custom-form-label" for="duedate">Due Date:</label>
							<div class="col-sm-8">
								<h4><?php echo formatter(''.$data->duedate.'');?></h4>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2 custom-form-label" for="ownerid">Owner id:</label>
							<div class="col-sm-8">
								<h4><?php echo $data->ownerid;?></h4>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2 custom-form-label" for="birthday">Owner Email:</label>
							<div class="col-sm-8">
								<h5><?php echo $data->owneremail;?></h5>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2 custom-form-label" for="isdone">Is Done?:</label>
							<div class="col-sm-8">
								<?php
									if ($data->isdone == 0) {
										echo '<h5>No</h5>';
									}elseif ($data->isdone == 1) {
										echo '<h5>Yes</h5>';
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
								<a style="color:white; text-decoration:none;" href="index.php?page=tasks&action=edit&id=<?php echo $data->id;?>"><button class="btn btn-danger" value="edit" id="edit-btn" >Edit</button></a>
							</div>
						</div>
					</div>
				</div>
			</div>
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