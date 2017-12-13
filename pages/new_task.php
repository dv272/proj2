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
</head>

<body>

<form action="index.php?page=tasks&action=create" method="post">
	Message: <input type="text" name="message" required><br>
    Created Date: <input type="date" name="createddate" required><br>
    Due Date: <input type="date" name="duedate" required><br>
    Owner ID: <input type="text" name="ownerid" required><br>
    Owner Email: <input type="text" name="owneremail" required><br>
    Status: <input type="text" name="isdone" required><br>
    <input type="submit" value="Save">
</form>




<script src="js/scripts.js"></script>
</body>
</html>