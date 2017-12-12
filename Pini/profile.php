<?php
session_start();
include './P-Api/check.php';
include './P-Api/Conn.php';
include 'post.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="Pini-img/Icons/Pini-icon.png"/>
	<link rel="stylesheet" type="text/css" href="PiniStyle/main.css?v=2.4">
	<link rel="stylesheet" type="text/css" href="PiniStyle/profile.css?v=1.8">
	<title><?= $user['fname']; ?> <?= $user['lname']; ?></title>
</head>
<body>
	<?php include 'include/header-nav.php';?>
	<div id="pf-cover">
		<img class="cover-img" alt="" src="Pini-img/joker.jpg">
	</div>
	<div id="usr-pf-img-container">
		<?php 
			if($user['img'] == ""){
				echo "<img class='usr-pf-img' src='../img/Profile-Pictures/Person-1.png' alt='Default Profile Pic'>";
			} else {
				echo "<img class='usr-pf-img' src='../img/".$user['img']."' alt='Profile Pic'>";
			}
		?>
	</div>
	<div id="usr-nme">
		<ul>
			<li><?= $user['fname']; ?> <?= $user['lname']; ?>  <img class="vertified-pf" src="../img/icons/verified-icon.png"></li>
			<li class="usr-tg">@<?= $user['username']; ?></li>
		</ul>
	</div>
	<div id="info-container">
		<button class="edit-btn">Edit profile</button>
		<div class="follow-sect">
			<ul class="sect-1">
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
		<div class="bio-sect">
			<!-- <p class="bio">Hi i'm james and i think i'm a funny guy, i vlog and do other things to make you guys smile! Snapchat: Jsmit25
			</p>-->
		</div>
	</div>
	<div id="wrte-pin-pf">
		<p>Write a pin</p>
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
	<div id="pst-brd">
		<?php getUserPost($user['fname'], $user['lname']) ?>
	</div>
	<div id="contect-sect">
		<div class="conect-hr">
			<p>Connections</p>
			<span>Refesh</span>
			<span>View all</span>
		</div>
		<div class="connect">
		</div>
	</div>
	<script type="text/javascript">
		$("#wrte-pin-pf").click(function (e) {
		      e.stopPropagation();
		      $('#wrte-pin-container').show();
		  });
		  $('.cls-pst').click(function () {
		      $('#wrte-pin-container').hide();
		  });
	</script>
</body>
</html>