<?php ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Test</title>
		<style>
			.movie-container {
				position: relative;
				top: 15px;
				left: 15px;
				width: 1280px;
				height: 720px;
				background-color: black;
			}
			
			#video_controls_bar {
				position: absolute;
				margin-top: -50px;
				height: 45px;
				width: 1280px;
				color: rgb(255, 211, 5);
				background: black;
			}
			
			#playpausebtn, #mutebtn,#fullscreenbtn {
				position:relative;
				background-color: rgba(0,0,0,0.2);
				height: 40px;
				width: 40px;
				border: 1px solid transparent;
				cursor: pointer;
				font-size: 22px;
				color: rgb(252,211,5);
			}
			
			#playpausebtn:hover, #mutebtn:hover,#fullscreenbtn:hover {
				background-color: rgba(255,255,255,0.4);
			}
			
			.play-btn,.mute-btn,.mute1-btn,.fscrn-btn {
				width: 30px;
				height: 30px;
				left: 5px;
			}
			
			#seekslider {
				podition: absolute;
				width: 1046px;
				margin-bottom: 10px !important;
			}
			
			#curtimetext, #durtimetext {
				margin-top: -5px;
				font-family: 'arial';
				color: rgb(252,211,5);
			}
			
		</style>
	</head>
	<body>
		<div id="media-player-container">
			<div class="movie-container">
      			<video id="VideoPlayer" width="1280" height="720" style="border: 1px solid transparent; "src="Video/Alien- Covenant _ Official Trailer [HD] _ 20th Century FOX.mp4"  poster="img/Movies/Ailen-covenant.jpg" >
				</video>
				<div id="video_controls_bar">
				    <button id="playpausebtn" onclick="playPause(this,'VideoPlayer')" style="margin-top: 5px; postion: absolute;"><img class="play-btn"src="img/Media_player/play1.png"></button>
				    <input id="seekslider" type="range" min="0" max="100" value="0" step="1">
				    <span id="curtimetext" style="margin-bottom: 5px;">00:00</span> / <span id="durtimetext">00:00</span>
				    <button id="mutebtn" onclick="mute(this,'VideoPlayer')"><img class='mute1-btn'src='img/Media_player/sound-orange.png'></button>
				    <button id="fullscreenbtn" onclick="mute(this,'VideoPlayer')"><img class='fscrn-btn'src='img/Media_player/fullscreen-orange.png'></button>
				</div>
      		</div>
		</div>
		<script>
			
		var vid, playbtn, seekslider, curtimetext, durtimetext, mutebtn, fullscreenbtn;
		
		function intializePlayer(){

			vid = document.getElementById("VideoPlayer");
			playbtn = document.getElementById("playpausebtn");
			seekslider = document.getElementById("seekslider");
			curtimetext = document.getElementById("curtimetext");
			durtimetext = document.getElementById("durtimetext");
			mutebtn = document.getElementById("mutebtn");
			fullscreenbtn = document.getElementById("fullscreenbtn");

			playbtn.addEventListener("click",playPause,false);
			seekslider.addEventListener("change",vidSeek,false);
			vid.addEventListener("timeupdate",seektimeupdate,false);
			mutebtn.addEventListener("click",vidmute,false);
			fullscreenbtn.addEventListener("click",toggleFullScreen,false);
			
		}
		
		window.onload = intializePlayer;
		
	    function playPause(btn,vid){
	    	var vid = document.getElementById(vid);
	    	if(vid.paused){
	    		vid.play();
	    		btn.innerHTML = "&#10074&#10074";
	    	} else {
	    		vid.pause();
	    		btn.innerHTML = "&#9658";
	    	}
	    }
	    function vidSeek(){
			var seekto = vid.duration * (seekslider.value / 100);
			vid.currentTime = seekto;
		}
	    function seektimeupdate(){
			var nt = vid.currentTime * (100 / vid.duration);
			seekslider.value = nt;
			var curmins = Math.floor(vid.currentTime / 60);
			var cursecs = Math.floor(vid.currentTime - curmins * 60);
			var durmins = Math.floor(vid.duration / 60);
			var dursecs = Math.floor(vid.duration - durmins * 60);
			if(cursecs < 10){ cursecs = "0"+cursecs; }
			if(dursecs < 10){ dursecs = "0"+dursecs; }
			if(curmins < 10){ curmins = "0"+curmins; }
			if(durmins < 10){ durmins = "0"+durmins; }
			curtimetext.innerHTML = curmins+":"+cursecs;
			durtimetext.innerHTML = durmins+":"+dursecs;
		}
		function vidmute(){
	    	if(vid.muted){
	    		vid.muted = false;
	    		mutebtn.innerHTML = "<img class='mute-btn'src='img/Media_player/sound-orange.png'>";
	    	} else {
	    		vid.muted = true;
	    		mutebtn.innerHTML = "<img class='mute1-btn'src='img/Media_player/mute-orange.png'>";
	    	}
		}
		function toggleFullScreen(){
			if(vid.requestFullScreen){
				vid.requestFullScreen();
		} else if(vid.webkitRequestFullScreen) {
				vid.webkitRequestFullScreen();
		}else if(vid.mozRequestFullScreen) {
				vid.mozRequestFullScreen();
		}
		}
		
			
		</script>
	</body>
</html>