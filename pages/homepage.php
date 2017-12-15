<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>TaskManager - Login</title>
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
<div class="container">
	<?php include 'navbar.php';?>
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8 outer-content-div" id="login-div">
			<h1 id="login-header" class="form-title-head">Login</h1>
                <form class="form-horizontal" action="index.php?page=accounts&action=login" method="POST">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Email:</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Password:</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                            <button type="submit" class="btn btn-default" id="login-button">Login</button>
                        </div>
                    </div>
                </form>
		</div>
		<div class="col-sm-2"></div>
	</div>
</div>


<script src="js/scripts.js"></script>
</body>
</html>