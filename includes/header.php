<?php
	/*** begin session ***/
	//session_start();

	if(isset($_SESSION['access_level']))
	{
		$log_link = 'http://localhost/2KrazyLadiesCrafts/login/logout.php';
		$log_link_name = 'Log Out';
	}
	else
	{
		$log_link = 'http://localhost/2KrazyLadiesCrafts/login/login.php?error=';
		$log_link_name = 'Log In';
	}
?>

<!DOCTYPE HTML>
<HEAD>
<TITLE>2KrazyLadiesCrafts</TITLE>
<!-- <link rel='stylesheet' href='includes/bootstrap.min.css'> -->
<!-- <link rel='stylesheet' href='includes/bootstrap-theme.min.css'> -->
<link rel='stylesheet' href='http://localhost/2KrazyLadiesCrafts/includes/Master.css'>
<script type='text/javascript' src='http://localhost/2KrazyLadiesCrafts/includes/jquery.min.js'></script>
<!-- <script type='text/javascript' src='includes/bootstrap.min.js'></script> -->
<SCRIPT type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></SCRIPT>
<SCRIPT type='text/javascript' src="http://localhost/2KrazyLadiesCrafts/includes/controller.js"></SCRIPT>
</HEAD>

<BODY>

<DIV class="main-body-div">
	<div class="navigation">
		<ul>
			<li><a href="http://localhost/2KrazyLadiesCrafts/index.php">Home</a></li>
			<li><a href="http://localhost/2KrazyLadiesCrafts/browse/doBrowse.php">Browse Items For Sale</a></li>
			<li><a href="http://localhost/2KrazyLadiesCrafts/about.php">About Us!</a></li>
			<li><a href="<?php echo $log_link; ?>"><?php echo $log_link_name; ?></a></li>
		</ul>	
	</div>

