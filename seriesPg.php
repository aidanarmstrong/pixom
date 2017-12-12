<?php
session_start();
include 'Api/check-select.php';
?>
<!DOCTYPE HTML>
<html>
<head>

<title>Pixom | Main</title>
<link rel="icon" type="image/png" href="img/Pixom-icon.png"/>
<link rel="stylesheet" type="text/css" href="Style/videoPg.css?v=1.4">
<link rel="stylesheet" type="text/css" href="Style/MainHeader.css?v=1.8">
<link rel="stylesheet" type="text/css" href="Style/SocialHub.css?v=1.9">
<link rel="stylesheet" type="text/css" href="Style/Scrollbar.css?v=1.0">


</head>
<body>
	<div id="video-banner-container">
		<?php include 'include/Overall/MainHeader.php';?>
		<div id="trailerDetails">
			<div id="trailer">
				<a style="font-size: 22px; color: white;">Trailer Placeholder</a>
			</div>
			
			<div id="vid-description">
				<p style="font-size: 50px; color: white;">Description Placeholder</p>
			</div>
		</div>
		<div id="movie-img">
			<p style="font-size: 50px; color: white;">Image Placeholder</p>
		</div>
		<div id="rating" style="color: white;">  </div>
		<div id="nav">
			<button class="nav-btn" onclick="openNav()">Episodes</button>
			<button class="nav-btn">Favourite</button>
			<button class="nav-btn">Play</button>
			<button class="nav-btn">Who's Watching</button>
			<button class="nav-btn">Invite</button>
		</div>
		<div id="episodes" class="overlay">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<div id="episodes-content">
				<div class="episodes-container" style="font-family:'Quicksand', sans-serif; color: white;">Season 1 [Placeholder]</div>
				<div class="episodes-container" style="font-family:'Quicksand', sans-serif; color: white; margin-top: 30px;">Season 2 [Placeholder]</div>
				<div class="episodes-container" style="font-family:'Quicksand', sans-serif; color: white; margin-top: 30px;">Season 3 [Placeholder]</div>
			</div>
		</div>
	</div>
<script>

	function openNav() {
		document.getElementById("episodes").style.width = "100%";
	}
	
	function closeNav() {
		document.getElementById("episodes").style.width = "0%";
	}
	
</script>
</body>
</html>