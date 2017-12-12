<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

<?php
//this is how you print something  $data contains the record that was selected on the table.

// print_r($data);
?>
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




<script src="js/scripts.js"></script>
</body>
</html>