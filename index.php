<?php
	include("includes/config.php");
	// session_destroy();
	if(isset($_SESSION['userLoggedIn'])){
		$userLoggedIn = $_SESSION['userLoggedIn'];
	} else {
		header("Location: register.php");
	}
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome to Slotify</title>
	<link rel="stylesheet" href="includes/assets/css/style.css">
</head>
<body>
	<div id="nowPlayingBarContainer">
		<div id="nowPlayingBar">

		</div>
	</div>
</body>
</html>