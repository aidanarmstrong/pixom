<?php
session_start();
include 'Pini/P-Api/check.php';
include 'post.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="icon" type="image/png" href="Pini-img/Icons/Pini-icon.png"/>
<link rel="stylesheet" type="text/css" href="Pini/PiniStyle/main.css?v=1.9">
<link rel="stylesheet" type="text/css" href="Pini/PiniStyle/navbar.css?v=1.0">
<link rel="stylesheet" type="text/css" href="Style/scrollbar.css?v=1.0">
<title>Pinim</title>
</head>
<body>
    <!--  <p style="font-family: Helvetica, Arial, sans-serif;">PINI COMING SOON!!</p>-->
    <div class="loader"></div>
    <?php include 'pini/include/header-nav.php';?>
    	<div id="wrte-posticks">
				<div class="usr-isrt">
					<div class="stat-usr-container">
					<p></p>
					</div>
					<div>
						<?php 
							echo "  <form method='POST' action='".submitPost()."'>
										<input type='hidden' name='user_fname' value='".$user['fname']."'>
										<textarea class='text' name='user_post' maxlength='200' placeholder='Whats new, ".$user['fname']."?'></textarea>
										<button class='txt-submit' id='submitPost' type='submit'>Pin</button>
									</form>";
						?>
					</div>
				</div>
		</div>
		<div id="sect-container">
			<div class="account-pf-container">
				<div class="ac-banner">
					<p>Profile</p>
				</div>
				<div class="shrt-accnt-pf-pic">
					<?php 
						if($user['img'] == ""){
							echo "<img src='img/Profile-Pictures/person-1.png' alt='Default Profile Pic'>";
						} else {
							echo "<img src='img/".$user['img']."' alt='Profile Pic'>";
						}
					?>
				</div>
			</div>
			<div class="shrt-accnt-info">
				<ul>
					<li><b><?= $user['fname']; ?> <?= $user['lname']; ?></b> <img class="vertified" src="img/icons/verified-icon.png">
						<ul>
	    					<li class="un-ph">@<?= $user['username']; ?></li>
	    				</ul>
					</li>
					<li><i>United Kingdom</i>, London</li>
					<li><i>Single</i></li>
					<li>Followers: <b><i>2.9M</i></b></li>
					
				</ul>
			</div>
			<div class="adi-info">
				<ul>
					<li><img class="onli-icn"src=".img/icons/online-icon.png"><i>Online</i></li>
					<li><img class="pops-icn" src="img/icons/pop-icon.png"><b>15.9k</b></li>
				</ul>
			</div>
			<div id="favs-container">
				<div class="fav-title-banner">
					<p>Favourites</p>
				</div>
				<ul>
					<li><img src="img/TV shows/Billions.jpg"></li>
					<li><img src="img/Movies/fight-club.jpg"></li>
					<li><img src="img/Movies/interstellar.jpg"></li>
				</ul>
			</div>
		
		</div>
    <div id="main-container">
    	<button class="shw-more">Show More</button>
    	<div class="Test-1">
    		<div class="followers-pf-pic">
    			<img src='img/Profile-Pictures/person-2.png'>
    		</div>
    		<div class="follower-name">
    			<p style="margin: 10px; margin-left: 0px; font-weight: bold;">Jessica Mathews</p>
    		</div>
    		<div class="hrts-stickies-container">
    			<ul>
    				<li>135<img src="pini/Pini-img/Icons/hearts-icon.png"></li>
    				<li>15<img src="pini/Pini-img/Icons/stickies-icon.png"></li>
    			</ul>
    		</div>
    	</div>
    </div>
    <div id="trending-container">
    	<div class="live-banner">
    		<p>Live</p>
    	</div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(window).load(function() {
			$(".loader").fadeOut(2000);
		})
	</script>
</body>
</html>