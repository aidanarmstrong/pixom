<?php

session_start();

include 'api/master.php';
include 'Api/check-select.php';

?>

<!DOCTYPE html>
<html>
	<head>
		<?php echo renderHead('Pixom | Main')?>
		<style>
			body{
				background-image: url("img/Backgrounds/forest2.jpg");
				background-repeat: no-repeat;
				background-attachment: fixed;
			}
		</style>
	</head>
	<body>
	
		<?php include 'include/Overall/MainHeader.php'; ?>
      	<div id="New-Movie_container">
      		<div class="movie-container">
      			<?php echo renderPlayer('655', '500', 'Video/Alien- Covenant _ Official Trailer [HD] _ 20th Century FOX.mp4')?>
      		</div>
      		<div id="play-trailer" onclick="toggleFullScreen()">
      			<a>&#9658</a>
      		</div>
	      		
      		<div class="reviews-container">
      			<span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9734;</span><span>&#9734;</span>
      			-<a href="https://www.imdb.com" target="_blank"><i>IMDB</i></a>
      		</div>
      		<div class="movie-discription-container">
      			<h3>Alien Covenant 2017 - #Trailer</h3>
      			<h3><strong>Description</strong></h3>
      			<p>The crew of the colony ship Covenant, bound for a remote planet on the far side of the galaxy, discovers what they think is an uncharted paradise, 
      			but is actually a dark, dangerous world. When they uncover a threat beyond their imagination, they must attempt a harrowing escape.</p>
      		</div>
      		<div id="watch-now_container">
			<img type="img/png" src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-play-128.png" >
      			<a class="watch-nowbtn" href="videoPg.php">watch now</a>
      		</div>
      		<div id="atf_container">
				<img type="img/png" src="http://findicons.com/files/icons/2315/default_icon/256/add_favourite.png" >
      			<a href="#">Add To Favourites</a>
      		</div>
      		<div id="daily-thriller-container">
      			Daily Trailer
      		</div>
   		
      	</div>
		
		<h1 class="display-title" style="margin-top: 250px;">Recommended</h1>
		<div class="display-container" style="margin-top: 300px;">
	  		<div class="img-container"><img class="display-item" src="img/Tv shows/Billions.jpg" alt=""/></div>
      		<div class="img-container"><img class="display-item" src="img/Tv shows/Homeland.jpg" alt=""/></div>
      		<div class="img-container" ><a href="test.php?movie=Boyhood"><img class="display-item" src="img/Movies/Boyhood.jpg" alt=""/></a></div>
      		<div class="img-container"><img class="display-item" src="img/Movies/pele.jpg" alt=""/></div>
      		<div class="img-container"><img class="display-item" src="img/Movies/rush.jpg" alt=""/></div>
      		<div class="img-container"><img class="display-item" src="img/Movies/spotlight.jpg" alt=""/></div>
      		<div class="img-container"><img class="display-item" src="img/Movies/agent-47.jpg" alt=""/></div>
      		<div class="img-container"><img class="display-item" src="img/Movies/ex-machina.jpg" alt=""/></div>
      		<div class="img-container"><img class="display-item" src="img/Movies/xxl.jpg" alt=""/></div>
      		<div class="img-container"><img class="display-item" src="img/Movies/silence.jpg" alt=""/></div>
      		<div class="img-container"><img class="display-item" src="img/Movies/gladiator.jpg" alt=""/></div>
      		<div class="img-container"><img class="display-item" src="img/Movies/focus.jpg" alt=""/></div>
		</div>
		
		<h1 class="display-title">Recently Viewed</h1>
		<div class="display-container">
	  		<div class="img-container"><img class="display-item" src="img/Tv shows/Arrow.jpg" alt=""/></div>
      		<div class="img-container"><img class="display-item" src="img/Tv shows/game-of-thrones.jpg" alt=""/></div>
      		<div class="img-container"><img class="display-item" src="img/Movies/ex-machina.jpg" alt=""/></div>
      		<div class="img-container"><img class="display-item" src="img/Movies/fight-club.jpg" alt=""/></div>
      		<div class="img-container"><img class="display-item" src="img/Tv shows/Supernatural.jpg" alt=""/></div>
      		<div class="img-container"><img class="display-item" src="img/Movies/insurgent.jpg" alt=""/></div>
      		<div class="img-container"><img class="display-item" src="img/Movies/sorched-trials.jpg" alt=""/></div>
      		<div class="img-container"><img class="display-item" src="img/Tv shows/suits.jpg" alt=""/></div>
      		<div class="img-container"><img class="display-item" src="img/Tv shows/The-100.jpg" alt=""/></div>
      		<div class="img-container"><img class="display-item" src="img/Movies/The_Maze_Runner.jpg" alt=""/></div>
      		<div class="img-container"><img class="display-item" src="img/Tv shows/Black-mirror.jpg" alt=""/></div>
      		<div class="img-container"><img class="display-item" src="img/Tv shows/The-vampire-diaries.jpg" alt=""/></div>
		</div>
		
		<h1 class="display-title">Favourites</h1>
		<div class="display-container">
	  		<div class="img-container"><img class="display-item" src="img/Tv shows/Taken.jpg" alt=""/></div>
      		<div class="img-container"><img class="display-item" src="img/Tv shows/Homeland.jpg" alt=""/></div>
      		<div class="img-container"><img class="display-item" src="img/Tv shows/Billions.jpg" alt=""/></div>
      		<div class="img-container"><img class="display-item" src="img/Tv shows/Vikings.jpg" alt=""/></div>
      		<div class="img-container"><img class="display-item" src="img/Movies/the-dark-knight.jpg" alt=""/></div>
      		<div class="img-container"><img class="display-item" src="img/Movies/tomorrowland.jpg" alt=""/></div>
      		<div class="img-container"><img class="display-item" src="img/Movies/wolf-of-wallstreet.jpg" alt=""/></div>
      		<div class="img-container"><img class="display-item" src="img/Movies/the-krays.jpg" alt=""/></div>
      		<div class="img-container"><img class="display-item" src="img/Tv shows/Westworld.jpg" alt=""/></div>
      		<div class="img-container"><img class="display-item" src="img/Tv shows/walking-dead.jpg" alt=""/></div>
      		<div class="img-container"><img class="display-item" src="img/Movies/the-shallows.jpg" alt=""/></div>
      		<div class="img-container"><img class="display-item" src="img/Movies/straight-outta-compton.jpg" alt=""/></div>
		</div>
		
		<div id="msg-box">
      		
      	</div>
		<?php echo renderFooter(); ?>
		
		<?php echo renderScripts(); ?>
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="plugins/slick/slick.min.js"></script>
		<script type="text/javascript">
			function toggleFullScreen(){
			if(vid.requestFullScreen){
					vid.requestFullScreen();
			} else if(vid.webkitRequestFullScreen) {
					vid.webkitRequestFullScreen();
			}else if(vid.mozRequestFullScreen) {
					vid.mozRequestFullScreen();
			}
		</script>
		<script>
			$('#play-trailer').on('click', function () { document.getElementById("video_controls_bar").style.display = "block"; });
			$('#fullscreenbtn').on('click', function () { document.getElementById("video_controls_bar").style.display = "none"; });

			function fullscreen() {
			    var isInFullScreen = (document.fullscreenElement && document.fullscreenElement !== null) ||
			        (document.webkitFullscreenElement && document.webkitFullscreenElement !== null) ||
			        (document.mozFullScreenElement && document.mozFullScreenElement !== null) ||
			        (document.msFullscreenElement && document.msFullscreenElement !== null);
	
			    var docElm = document.documentElement;
			    if (!isInFullScreen) {
			        if (docElm.requestFullscreen) {
			            docElm.requestFullscreen();
			        } else if (docElm.mozRequestFullScreen) {
			            docElm.mozRequestFullScreen();
			        } else if (docElm.webkitRequestFullScreen) {
			            docElm.webkitRequestFullScreen();
			        } else if (docElm.msRequestFullscreen) {
			            docElm.msRequestFullscreen();
			        }
			    } else {
			        if (document.exitFullscreen) {
			            document.exitFullscreen();
			        } else if (document.webkitExitFullscreen) {
			            document.webkitExitFullscreen();
			        } else if (document.mozCancelFullScreen) {
			            document.mozCancelFullScreen();
			        } else if (document.msExitFullscreen) {
			            document.msExitFullscreen();
			        }
			    }
			}


					
			/*var timeout = null;
			$(document).on('mousemove', function() {
			    if (timeout !== null) {
			        $('#video_controls_bar').fadeIn(500);
			        clearTimeout(timeout);
			    }

			    timeout = setTimeout(function() {
			        $('#video_controls_bar').fadeOut(200);
			    }, 3000);
			});*/
		</script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.display-container').slick({
					  infinite: true,
					  slidesToShow: 6,
					  slidesToScroll: 2
				});
			});
		</script>
	</body>
</html>