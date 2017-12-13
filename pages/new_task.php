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

<form action="index.php?page=tasks&action=create" method="post">
	Message: <input type="text" name="message"><br>
    Created Date: <input type="date" name="createddate"><br>
    Due Date: <input type="date" name="duedate"><br>
    Owner ID: <input type="text" name="ownerid"><br>
    Owner Email: <input type="text" name="owneremail"><br>
    Status: <input type="text" name="isdone"><br>
    <input type="submit" value="Save">
</form>




<script src="js/scripts.js"></script>
</body>
</html>