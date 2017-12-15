<div class="row">
		<div class="col-sm-12" id="header-div">
			<?php
				if(isset($_SESSION['userID'])) {
					echo '
					<nav class="navbar navbar-inverse">
					  <div class="container-fluid">
						<div class="navbar-header">
						  <a class="navbar-brand" href="index.php">Task Manager</a>
						</div>
						<ul class="nav navbar-nav">
						  <li class="active"><a id="home-btn" href="index.php">Home</a></li>
						  <li><a class="navbar-head-btn" href="index.php?page=tasks&action=create">New Task</a></li>
						  <li><a class="navbar-head-btn" href="index.php?page=accounts&action=show&id='.$_SESSION['userID'].'">My Account</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
						  <li><a id="register-btn" class="navbar-head-btn" href="index.php?page=accounts&action=signout">Sign out</a></li>
						</ul>
					  </div>
					</nav>
					';
				}
				else {
					echo '
					<nav class="navbar navbar-inverse">
					  <div class="container-fluid">
						<div class="navbar-header">
						  <a class="navbar-brand" href="index.php">Task Manager</a>
						</div>
						<ul class="nav navbar-nav">
						  <li class="active"><a id="home-btn" href="index.php">Home</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">';
						if(isset($_GET['action']) && $_GET['action'] == "register") {
// 							print_r($_GET);
							echo '<li><a id="register-btn" class="navbar-head-btn" href="index.php">Login</a></li>';
						}else {
                        	echo '<li><a id="register-btn" class="navbar-head-btn" href="index.php?page=accounts&action=register">Register</a></li>';
						}
                       echo '</ul>
					  </div>
					</nav>
					';
				}
			?>
		</div>
	</div>