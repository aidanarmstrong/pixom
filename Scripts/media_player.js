var vid, playbtn, seekslider, curtimetext, durtimetext, mutebtn, fullscreenbtn;

window.onload = intializePlayer;
		
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

function playPause(btn,vid){
	var vid = document.getElementById(vid);
	if(vid.paused){
		vid.play();
		btn.innerHTML = "<a style='color: orange;'>&#10074&#10074</a>";
	} else {
		vid.pause();
		btn.innerHTML = "<a style='color: orange;'>&#9658</a>";
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