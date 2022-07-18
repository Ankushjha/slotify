<?php
include("includes/config.php");
// session_destroy();
if (isset($_SESSION['userLoggedIn'])) {
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
	<div id="mainContainer">
		<div id="topContainer"></div>
	</div>

	<div id="nowPlayingBarContainer">
		<div id="nowPlayingBar">

			<div id="nowPlayingLeft">
				<div class="content">
					<span class="albumLink">
						<img src="https://www.illustoon.com/photo/thum/7251.png" alt="" class="albumArtWork">
					</span>
					<div class="trackInfo">
						<span class="trackName">
							<span>Happy Birthday</span>
						</span>
						<span class="artistName">
							<span>Ankush Jha</span>
						</span>

					</div>
				</div>
			</div>

			<div id="nowPlayingCenter">
				<div class="content playerControls">
					<div class="buttons">
						<button class="controlButton shuffle" title="Shuffle button">
							<img src="includes/assets/images/icons/shuffle.png" alt="Shuffle">
						</button>
						<button class="controlButton previous" title="Previous button">
							<img src="includes/assets/images/icons/previous.png" alt="Previous">
						</button>
						<button class="controlButton play" title="Play button">
							<img src="includes/assets/images/icons/play.png" alt="Play">
						</button>
						<button class="controlButton pause" title="Pause button" style="display: none;">
							<img src="includes/assets/images/icons/pause.png" alt="Pause">
						</button>
						<button class="controlButton next" title="next button">
							<img src="includes/assets/images/icons/next.png" alt="Next">
						</button>
						<button class="controlButton repeat" title="Repeat button">
							<img src="includes/assets/images/icons/repeat.png" alt="Repeat">
						</button>
					</div>

					<div class="playbackBar">
						<span class="progressTime current">0.00</span>

						<div class="progressBar">
							<div class="progressBarBg">
								<div class="progress"></div>
							</div>
						</div>

						<span class="progressTime remaining">0.00</span>
					</div>
				</div>

			</div>
			<div id="nowPlayingRight">

				<div class="volumeBar">
					<button class="controlButton volume" title="Volume button">
						<img src="includes/assets/images/icons/volume.png" alt="Volume">
					</button>
					<div class="progressBar">
						<div class="progressBarBg">
							<div class="progress"></div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</body>

</html>