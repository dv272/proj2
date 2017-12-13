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

<a href="index.php?page=tasks&action=create">New Task</a>
<a href="index.php?page=accounts&action=show&id=<?php echo $_SESSION['userID']?>">My Account</a>
<a href="index.php?page=accounts&action=signout">Sign Out</a>
<?php
//this is how you print something

// print utility\htmlTable::genarateTableFromMultiArray($data);
	if(count($data) > 1) {
		echo '<table border="1" cellpadding="10">
			<tr>
				<th>Message</th>
				<th>Due Date</th>
				<th>Status</th>
				<th></th>
			</tr>';
			foreach ($data as $value) {
				echo '<tr>
					<td>'.$value->message.'</td>
					<td>'.$value->duedate.'</td>
					<td>'.$value->isdone.'</td>
					<td><a href="index.php?page=tasks&action=show&id='.$value->id.'">Edit</a></td>
				</tr>';
			}
		echo '</table>';
	}

?>


<script src="js/scripts.js"></script>
</body>
</html>