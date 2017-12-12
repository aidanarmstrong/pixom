<?php
session_start();
include './P-Api/check.php';
include './P-Api/Conn.php';
include 'post.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="icon" type="image/png" href="Pini-img/Icons/Pini-icon.png"/>
<link rel="stylesheet" type="text/css" href="PiniStyle/main.css?v=3.3">
<link rel="stylesheet" type="text/css" href="PiniStyle/navbar.css?v=1.5">

<title>Pinim</title>
</head>
<body>
    <!--  <p style="font-family: Helvetica, Arial, sans-serif;">PINI COMING SOON!!</p>-->
    <div class="loader"></div>
    <?php include 'include/header-nav.php';?>
    <div id="pin-btn">
    	<p class="p-wr">Pin</p>
    	<img src="Pini-img/Icons/pin-icon.png">
    </div>
    <div id="wrte-pin-container">
    	<a class="cls-pst">&times;</a>
    	<div class="wrte-pin">
    		<div class="stat-usr-container">
					<p></p>
			</div>
			<?php 
				echo "  <form method='POST' action='".submitPost($conn)."'>
							<input type='hidden' name='user_fname' value='".$user['fname']."'>
							<input type='hidden' name='user_lname' value='".$user['lname']."'>
							<input type='hidden' name='user_username' value='".$user['username']."'>
							<textarea class='text' name='user_post' maxlength='200' placeholder='Whats new, ".$user['fname']."?'></textarea>
							<button class='txt-submit' name='submitPost' type='submit'>Pin</button>
						</form>"
				;
			?>
    	</div>
    
    </div>
		<div id="sect-container">
			<div class="usr-cover">
				<img alt="Cover photo" src="Pini-img/joker.jpg">
			</div>
			<div class="usr-pf-pic">
				<?php 
					if($user['img'] == ""){
						echo "<img class='usr-pf-img' src='../img/Profile-Pictures/Person-1.png' alt='Default Profile Pic'>";
					} else {
						echo "<img class='usr-pf-img' src='../img/".$user['img']."' alt='Profile Pic'>";
					}
				?>
			</div>
			<div class="usr-nme">
				<span class="usr-nme-1" onclick="location.href='profile.php'"><?= $user['fname']; ?> <?= $user['lname']; ?></span>
				<span class="usr-tg">@<?= $user['username']; ?></span>
			</div>
			<div class="main-follow">
				<ul class="follow">
					<li>Following
						<br><p>5.5k</p>
					</li>
					<li>Followers
						<br><p>300k</p>
					</li>
					<li>Likes
						<br><p>100.5k</p>
					</li>
					<li>Shared
						<br><p>12.9k</p>
					</li>
				</ul>
			</div>
		</div>
		<div id="contect-sect-main">
		<div class="conect-hr-main">
			<p>Connections</p>
			<span>Refesh</span>
			<span>View all</span>
		</div>
		<div class="connect-main">
		</div>
		<div class="footer-container">
			<ul class="u-ftr">
				<li class="footer-copyright">&copy; Pinim 2017</li>
				<li class="footer-link"><a href="#">about</a></li>
				<li class="footer-link"><a href="#">Help Centre</a></li>
				<li class="footer-link"><a href="#">Terms</a></li>
				<li class="footer-link"><a href="#">Privacy</a></li>
				<li class="footer-link"><a href="#">Advertising</a></li>
				<li class="footer-link"><a href="#">Jobs</a></li>
				<li class="footer-link"><a href="#">Apps</a></li>
				<li class="footer-link"><a href="#">Devlopers</a></li>
				<li class="footer-link"><a href="#">Cookies</a></li>
				<li class="footer-link"><a href="#">Movies</a></li>
				<li class="footer-link"><a href="#">Tv Shows</a></li>
				<li class="footer-link"><a href="#">Contact</a></li>
			</ul>
		</div>
	</div>
    <div id="main-container">
    	<?php getAllPost(); ?>
    </div>
    <div id="post-container">
    	<a class="cls-pst" onclick="closePost()" >&times;</a>
    	<div class="post">
    	<?php getIndivdiualPosts($user['fname'], $user['lname'], $user['username']) ?>
    	</div>
    </div>
    <div id="trending-container">
    	<div class="live-banner">
    		<p>Discovery</p>
    	</div>
    </div>
    <div id="live-container">
    	<button>live</button>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(window).load(function() {
			$(".loader").fadeOut(200);
		});
		$(".Test-1").click(function (e) {
		      e.stopPropagation();
		      $('#post-container').toggle();
		  });
		  $('#post-conatiner').click(function () {
		      $('#post-conatiner').toggle();
		  });
		function closePost(){
			document.getElementById("post-container").style.display = "none";
		}
		// Post settings nav
		$(".Post-settings").click(function (e) {
		      e.stopPropagation();
		      $('.post-settings-nav').show();
		  });
		  $('body').click(function () {
		      $('.post-settings-nav').hide();
		  });
		// load to write a pin
		$("#pin-btn").click(function (e) {
		      e.stopPropagation();
		      $('#wrte-pin-container').show();
		  });
		  $('.cls-pst').click(function () {
		      $('#wrte-pin-container').hide();
		  });
	</script>
</body>
</html>