<?php
function renderHead($title){
	
	$ptitle = $title;
	
	$head = <<<head
		<head>
			<meta charset="UTF-8">
        	<meta name="viewport"
        
	        content="width=device-width,inital-scale=1">
	        
			<link rel="Stylesheet" type="text/css" href="Style/welcome.css?v=4.6">
			<link rel="stylesheet" type="text/css" href="Style/MainHeader.css?v=3.2">
			<link rel="stylesheet" type="text/css" href="plugins/slick/slick.css"/>
			<link rel="stylesheet" type="text/css" href="plugins/slick/slick-theme.css"/>
			<link rel="stylesheet" type="text/css" href="Style/SocialHub.css?v=2.6">
			<link rel="stylesheet" type="text/css" href="Style/Scrollbar.css?v=1.0">
			<link rel="stylesheet" type="text/css" href="Style/media_player.css?v=1.5">
			<link rel="stylesheet" type="text/css" href="Style/Shop.css?v=1.6">
	        <link rel="icon" type="image/png" href="img/Pixom-icon.png"/>
	        <title>{$ptitle}</title>

		</head>
head;
	return $head;
}

function renderLogo(){
	$logo = <<<logo
		<div class="logo" onclick="location.href='index.php'">
        	<img src="img/pixom.png">
		</div>
logo;
	return $logo;
}

function renderTermsNav() {
	$terms = <<<terms
		<nav>
			<div class="logo" onclick="location.href='../index.php'">
				<div>Fil<span>mix</span></div>
			</div>
			<div class="nav-conatiner">
				<a href="login.php" class="signin-btn">Member Sign In?</a>
				<a href="register.php" class="signup-btn">Join Now</a>
			</div>
		</nav>
		<div id="terms-container"></div>
terms;
	return $terms;
}

function checkImg(){
	$checkImg = <<<checkImg
	if({$user}['img'] == ""){
		echo "<img  src='img/Default.png' alt='Default Profile Pic'>";
	} else {
		echo "<img  src='img/".{$user}['img']."' alt='Profile Pic'>";
	}
checkImg;
	return $checkImg;
}

function renderFooter() {
	$footer = <<<footer
		<footer>
			<div class="footer-nav">
				<ul>
					<li><u><b>Company</b></u></li>
					<li><a href="Account.php">Pixom Ltd</a></li>
					<li><a href="Contact-us.php">News</a></li>
					<li><a href="Careers.php">Careers</a></li>
				</ul>

			</div>
			<div class="footer-nav2">
				<ul>
					<li><u><b>Community</b></u></li>
					<li><a href="Account.php">Account</a></li>
					<li><a href="Contact-us.php">Contact Us</a></li>
					<li><a href="Help.php">Help</a></li>
					<li><a href="Customer-Support.php">Customer Support</a></li>
				</ul>
			</div>
			<div class="footer-nav3">
				<ul>
					<li><u><b>Bussiness</b></u></li>
					<li><a href="ads.php">Advertising</a></li>
					<li><a href="ad-policy.php">Advertising Policy</a></li>
					<li><a href="Investors..php">Investors</a></li>
				</ul>
			</div>
			<div class="footer-nav4">
				<ul>	
					<li><u><b>Legal</b></u></li>
					<li><a href="Terms.php">Terms of service</a></li>
					<li><a href="copyright.php">Copyright</a></li>
					<li><a href="Privacy.php">Privacy & Cookies</a></li>
				</ul>
			</div>
			<div class="copyright-container">
				<p>&copy; Pixom 2017. All Rights Reserved</p>
			</div>
		</footer>
footer;
	return $footer;
}

function renderMainHeader() {
	$header = <<<'header'
		<div id="header-container">
			<?php include 'include/Overall/Logo-Main.php';?>
		    <div id="search-bar_container">
		    	<form action="Results-page.php" method="POST">
		            <input class="search-bar" type="text" name="search-bar" placeholder="Search..">
		            <input class="search-btn" type="submit" value="" >
		        </form>
		    </div>
            <div class="Account-container">
            	<p>My Account <a id="my-accountbtn"></a></p>
    		</div>
    		<div class="SocialHub-container" onclick="location='./socialHub.php'">
            	<p class="SocialHub">Social<a>HUB</a> </p>
    		</div>
    	</div>
    	<div id='silding_div'>
       		<a class="logout-btn" href="Logout.php">Logout?</a>
       		<div class="unique-container">
       		<?php if( !empty($user) );?>
       			<img src="img/user-profile-icon.png">
       			<p class="user-name"> Hi <?= $user['fname']; ?></p><br/>

       			<a class="preimum-account" href="premium-account.php">Premium</a>
       				
       		</div>
       	<div id="frnds-oln">
       		<h3><i>Friends Online</i></h3>
       	</div>
       	<div class="settings">
       		<a class="settings-btn" href="setting.php">Settings</a>
       		<a class="account-btn" href="account.php">Account</a>
       		<a class="privacy-btn" href=".php">Privacy</a>
       	</div>
		</div>
header;
	return $header;
}

function renderPlayer($vidWidth, $vidHeight, $vidPath) {
	
	$width = $vidWidth."px";
	$height = $vidHeight."px";
	$vid = $vidPath;
	$videoSlider = ($vidWidth - 234)."px";
	
	$player = <<<player
			<div class="movie-container" style="width: {$width}; height: {$height};">
      			<video id="VideoPlayer" width="{$width}" height="{$height}" style="border: 1px solid transparent;" src="{$vid}">
				</video>
				<div id="video_controls_bar" onMouseOver="mediaControlsShow()" onMouseOut="mediaControlsHide()">
				    <button id="playpausebtn" onclick="playPause(this,'VideoPlayer')" style="margin-top: 5px; postion: absolute;"><img class="play-btn"src="img/Media_player/play1.png"></button>
				    <input id="seekslider" type="range" min="0" max="100" value="0" step="1" >
				    <span id="curtimetext" style="margin-bottom: 5px;">00:00</span> / <span id="durtimetext">00:00</span>
				    <button id="mutebtn" onclick="mute(this,'VideoPlayer')"><img class='mute1-btn'src='img/Media_player/sound-orange.png'></button>
				    <button id="fullscreenbtn" onclick="fullscreen()"><img class='fscrn-btn'src='img/Media_player/fullscreen-orange.png'></button>
				</div>
      		</div>
player;
	return $player;
}

function renderScripts() {
	$scripts = <<<scripts
		<script src="Scripts/media_player.js"></script>
		<script src="Scripts/bootstrap/bootstrap.js"></script>
		<script src="Scripts/bootstrap/npm.js"></script>
		<script src="Scripts/jQuery/jquery-3.2.1.js"></script>
		<script src="Scripts/media_player.js"></script>
scripts;
	return $scripts;
}