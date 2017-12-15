<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>TaskManager - Home</title>
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
	<h1></h1>
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8 outer-content-div">
			<?php
			if(count($data) > 1) {
				echo '<table class="table table-striped" id="all-task-table">
					<thead>
					  <tr>
						<th>Message</th>
						<th>Due Date</th>
						<th>Status</th>
						<th></th>
					  </tr>
					</thead>
					<tbody>';
				foreach ($data as $value) {
					$status = ($value->isdone) == 0 ? "Incomplete" : "Done";
					echo '<tr>
							<td><strong>'.ucfirst($value->message).'</strong></td>
							<td>'.$value->duedate.'</td>
							<td>'.$status.'</td>
							<td><a id="edit-task-icon" href="index.php?page=tasks&action=show&id='.$value->id.'"><span class="glyphicon glyphicon-eye-open"></span> View</a></td>
						</tr>';
				}
				echo '</tbody>
				  </table>';
			}else {
				echo '<h1>You do not have any tasks!</h1>';
			}
			
			?>
		</div>
		<div class="col-sm-2"></div>
	</div>
</div>



<script src="js/scripts.js"></script>
</body>
</html>