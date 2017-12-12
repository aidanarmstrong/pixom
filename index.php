<?php
?>
<DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="Style/index.css?v=3.4">
    <link rel="stylesheet" type="text/css" href="Style/cookies.css?v=1.4">
    <link rel="icon" type="image/jpg" href="img/Nixo-icon.jpg"/>
    <link rel="stylesheet" type="text/css" href="Style/Scrollbar.css?v=1.0">
    <title>Pixom - Movie Online Entertainment </title>
    </head>
    <meta name="google-site-verification" content="w4uewQjJO-bLJ2HSSLzV02V5QOswDH24j1ZeSNZq3BE" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <body>
     	<div id="main-conatiner">
     		<div class="sect-1">
     			<img class="sect-img" src="https://cdn.shutterstock.com/shutterstock/videos/13806542/thumb/1.jpg?i10c=img.resize(height:160)">
     			<div class="sect-hover">
     				<span>Watch with friends.</span>
     			</div>
     		</div>
     		<div class="sect-lrge-container-1">
     			<a class="cls-cntr-btn" onclick="clsConatiner">&times;</a>
     			<div class="cntr">
     				<div class="cntr-img-cntr">
     					<img class="sect-img" src="https://cdn.shutterstock.com/shutterstock/videos/13806542/thumb/1.jpg?i10c=img.resize(height:160)">
     				</div>
     				<div class="cntr-hdr">
     					<span>Watch with friends.</span>
     				</div>
     				<div class="about-cntr">
     					<p>Our platform allows you to watch your movies and TV Shows with the people that you want. Its a movie cinema right in your home.<br>
     					 <br>Take full advantage of our VR (Virtural Reality) cinema with our premium account.
     					</p>
     				</div>
     			</div>
     		</div>
     		<div class="sect-2">
     			<img class="sect-img" src="https://il2.picdn.net/shutterstock/videos/6994198/thumb/10.jpg">
     			<div class="sect-hover">
     				<span style="margin-left: -145px;">Build the account you want.</span>
     			</div>
     		</div>
     		<div class="sect-lrge-container-2">
     			<a class="cls-cntr-btn" onclick="clsConatiner">&times;</a>
     			<div class="cntr">
     				<div class="cntr-img-cntr">
     					<img class="sect-img" src="https://il2.picdn.net/shutterstock/videos/6994198/thumb/10.jpg">
     				</div>
     				<div class="cntr-hdr">
     					<span>Build the account you want.</span>
     				</div>
     				<div class="about-cntr">
     					<p>Customize your account,the way you want. Our platform allows you to make your account unique by allowing you to customize it to your liking.<br>
     					 <br>Change backgrounds, colors and much more.
     					</p>
     				</div>
     			</div>
     		</div>
     		<div class="sect-3">
     			<img class="sect-img" src="http://www.wallpaperhdc.com/wp-content/uploads/2017/04/outdoor-photography-wallpaper-images-background.jpg">
     			<div class="sect-hover">
     				<span>Sit back and enjoy.</span>
     			</div>
     		</div>
     		<div class="sect-lrge-container-3">
     			<a class="cls-cntr-btn" onclick="clsConatiner">&times;</a>
     			<div class="cntr">
     				<div class="cntr-img-cntr">
     					<img class="sect-img" src="http://www.wallpaperhdc.com/wp-content/uploads/2017/04/outdoor-photography-wallpaper-images-background.jpg">
     				</div>
     				<div class="cntr-hdr">
     					<span>Sit back and enjoy.</span>
     				</div>
     				<div class="about-cntr">
     					<p>We do all the work you just sit back and watch. Our platform is growing fast with new features being added every month.<br>
     					 <br>The best place to watch anthing is right in your home, so sit back, relax and enjoy the content.
     					</p>
     				</div>
     			</div>
     		</div>
     		<div class="sect-4">
     			<img class="sect-img" src="https://oilersnation.com/wp-content/uploads/2017/04/popcorn.jpg">
     			<div class="sect-hover">
     				<span style="margin-left: -115px;">Rewards you can spend.</span>
     			</div>
     		</div>
     		<div class="sect-lrge-container-4">
     			<a class="cls-cntr-btn" onclick="clsConatiner">&times;</a>
     			<div class="cntr">
     				<div class="cntr-img-cntr">
     					<img class="sect-img" src="https://oilersnation.com/wp-content/uploads/2017/04/popcorn.jpg">
     				</div>
     				<div class="cntr-hdr">
     					<span>Rewards you can spend.</span>
     				</div>
     				<div class="about-cntr">
     					<p>We feel since you watch our content you should earn a little somthing.  Welcome to rewards the best popping curency in the world.<br>
     					 <br> By watching content you earn rewards that you can spend in our store to give you account more customization.
     					</p>
     				</div>
     			</div>
     		</div>
     		<div class="logo-container">
  				<div class="logo-img">
  					<img class="sect-img" src="img/pixom.png">
  				</div>
  				<div class="beta-btn-container">
  					<button class="beta-btn" onclick="openSignUp()">Join our closed beta test</button>
  				</div>
     		</div>
     		<div id="sign-up-container">
     			<a class="cls-sign-up-btn" onclick="clsSignUp()">&times;</a>
     			<div class="sign-up">
     				<div class="para-grph">
     					<p>Join to find out what makes the best of online streaming and social media on our closed beta. </p>
     				</div>
     				<form class="sgn-up-form" method="POST" href="mailto:aidanarmstrong4@gmail.com">
     					<input type="email" name="email" id="email" placeholder="Enter you email to get informed" required title="Please enter a vaild email address">
     					<input type="submit" name="submit" id="submit-btn" value="Send">
     				</form>
     			</div>
     		</div>
     	<script type="text/javascript" src="Scripts/jQuery/jquery-3.2.1.js"></script>
     	<script type="text/javascript">
     
     	$(function(){
     	    $(".sect-1").hover(function(){
     	      $(this).find(".sect-hover").fadeIn();
     	    }
     	                    ,function(){
     	                        $(this).find(".sect-hover").fadeOut();
     	                    }
     	                   );        
     	});
     	
     	$(function(){
     	    $(".sect-2").hover(function(){
     	      $(this).find(".sect-hover").fadeIn();
     	    }
     	                    ,function(){
     	                        $(this).find(".sect-hover").fadeOut();
     	                    }
     	                   );        
     	});

     	$(function(){
     	    $(".sect-3").hover(function(){
     	      $(this).find(".sect-hover").fadeIn();
     	    }
     	                    ,function(){
     	                        $(this).find(".sect-hover").fadeOut();
     	                    }
     	                   );        
     	});

     	$(function(){
     	    $(".sect-4").hover(function(){
     	      $(this).find(".sect-hover").fadeIn();
     	    }
     	                    ,function(){
     	                        $(this).find(".sect-hover").fadeOut();
     	                    }
     	                   );        
     	});

     	function clsSignUp(){
     		document.getElementById("sign-up-container").style.display = "none";
        }
     	function openSignUp(){
     		document.getElementById("sign-up-container").style.display = "block";
        }

     	$(".sect-1").click(function (e) {
		      e.stopPropagation();
		      $('.sect-lrge-container-1').show();
		  });
		  $('.cls-cntr-btn').click(function () {
		      $('.sect-lrge-container-1').hide();
		  });

		  $(".sect-2").click(function (e) {
		      e.stopPropagation();
		      $('.sect-lrge-container-2').show();
		  });
		  $('.cls-cntr-btn').click(function () {
		      $('.sect-lrge-container-2').hide();
		  });

		  $(".sect-3").click(function (e) {
		      e.stopPropagation();
		      $('.sect-lrge-container-3').show();
		  });
		  $('.cls-cntr-btn').click(function () {
		      $('.sect-lrge-container-3').hide();
		  });

		  $(".sect-4").click(function (e) {
		      e.stopPropagation();
		      $('.sect-lrge-container-4').show();
		  });
		  $('.cls-cntr-btn').click(function () {
		      $('.sect-lrge-container-4').hide();
		  });
     	</script>
    </body>
    
</html>


