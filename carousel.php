<?php

include 'api/master.php';

?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="plugins/slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="plugins/slick/slick-theme.css"/>
		
		<style>
			
			body{
				background-image: url("img/Backgrounds/forest2.jpg");
				background-repeat: no-repeat;
				background-attachment: fixed;
			}
			
			.test-container {
				opacity: 0.85;
				margin: 0 auto;
				margin-top: 300px;
				width: 95%;
				height: 450px;
				background: #353535;
			}
			
			
			.display-item {
				align: center;
				position: relative;
				width: 250px;
				height: 390px;
			}
			
			.img-container {
				width: 250px !important;
				margin: 35px 24.6px;
			}
			
		</style>
	</head>
	<body>
		<div class="test-container">
	  		<div class="img-container"><img class="display-item" src="img/Tv shows/Billions.jpg" alt=""/></div>
      		<div class="img-container"><img class="display-item" src="img/Tv shows/Homeland.jpg" alt=""/></div>
      		<div class="img-container"><img class="display-item" src="img/Movies/Boyhood.jpg" alt=""/></div>
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
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="plugins/slick/slick.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.test-container').slick({
					  infinite: true,
					  slidesToShow: 6,
					  slidesToScroll: 2
				});
			});
		</script>
	</body>
</html>