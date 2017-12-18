<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>TaskManager - Page Not Found</title>
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
    session_start();?>
</head>

<body>
<div class="container">
	<?php include 'navbar.php';?>
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8 outer-content-div" id="login-div">
			<h1 id="login-header" class="form-title-head"><?php echo $data;?></h1>
                
		</div>
		<div class="col-sm-2"></div>
	</div>
</div>
<script src="js/scripts.js"></script>
</body>
</html>