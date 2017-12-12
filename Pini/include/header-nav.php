<?php 
//https://www.youtube.com/watch?v=sWx01r2nIS8 <--- important for our searching ajax!
?>
<div id="main-nav-container"> 
    	
    	<div class="friends-search-bar-container">
    		<form action="Friends-search()" method="POST">
			     <input class="friends-search-bar" id="fds-srch" type="text" name="friends-search-bar" placeholder="Search Pixom">
			     <input class="friends-search-btn" type="submit" value="">
			</form>
			<div id="srch-results-cntr">
				<div class="drp-dwn-caret-srch">
					<span class="caret-in-srch"></span>
					<span class="caret-out-srch"></span>
				</div>
				<div id="srch-results"></div>
			</div>
    	</div>
    	<div class="nav-container">
    		<ul>
    			<li style="border-bottom: 2px solid #fff;" onclick="location.href='./main.php'">Home</li>
    			<li id="nte-cton">Notifications</li>
    			<li onclick="location.href='../premium-account.php'"> Pinim VR</li>
    		</ul>
    	</div>
    	<div id="pf-container">
    		<div class="profile-img" >
    			<?php if($user['img'] == ""){
		                    echo "<img  class='pf-img' src='../img/Profile-Pictures/person-1.png' alt='Default Profile Pic'>";
		               } else {
		                 	echo "<img class='pf-img' src='../img/".$user['img']."' alt='Profile Pic'>";
		               }
	             ?>
    		</div>
    	</div>
    	<div id="note-if">
			<div class="drp-dwn-caret-nte">
				<span class="caret-in-nte"></span>
				<span class="caret-out-nte"></span>
			</div>
		</div>
    	<div id="pf-section">
			<div class="drp-dwn-caret">
				<span class="caret-in"></span>
				<span class="caret-out"></span>
			</div>
			<ul>
	    		<li onclick="location.href='profile.php'">Profile</li>
	    		<li>Account</li>
	    		<li onclick="location.href='Pinim-ads.php'">Pinim Ads</li>
	    		<li onclick="openSettings()">Settings</li>
	    		<li onclick="openPrivacy()">Privacy</li>
	    		<li onclick="location.href='P-Api/lgout.php'">Logout</li>
	    	</ul>
    	</div>
 </div>
 <div id="sb-cntr">
 	<div class="st-ings">
 		<div class="st-ings-hdr">
 			<p class="st-ings-hdr-nme">Settings</p>
 			<a class="st-ings-hdr-cls-btn" onclick="closeSettings()">&times;</a>
 		</div>
 	</div>
 </div>
 <div id="privacy-cntr">
 	<div class="privacy">
 		<div class="privacy-hdr">
 			<p class="privacy-hdr-nme">Privacy</p>
 			<a class="privacy-hdr-cls-btn" onclick="closePrivacy()">&times;</a>
 		</div>
 	</div>
 </div>
 	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
 	<script type="text/javascript">
 	function openSettings() {
 		document.getElementById("sb-cntr").style.display = "block";
 	}
 	function closeSettings() {
 		document.getElementById("sb-cntr").style.display = "none";
 	}
 	function openPrivacy() {
 		document.getElementById("privacy-cntr").style.display = "block";
 	}
 	function closePrivacy() {
 		document.getElementById("privacy-cntr").style.display = "none";
 	}
 	</script>
	<script type="text/javascript">
		$("#nte-cton").click(function (e) {
		      e.stopPropagation();
		      $('#note-if').toggle();
		  });
		  $('body').click(function () {
		      $('#note-if').hide();
		  });
		  
		$(".profile-img").click(function (e) {
		      e.stopPropagation();
		      $('#pf-section').toggle();
		  });
		  $('body').click(function () {
		      $('#pf-section').hide();
		  });

		  $(document).ready(function(){
				$('#fds-srch').keyup(function(){

					var name = $(this).val();

					$.post('get_users.php', {name:name}, function(data){

					$('div#srch-results-cntr').css({'display':'block'});
					$('div#srch-results').html(data);

					});
					 $('body').click(function () {
					      $('div#srch-results-cntr').hide();
					  });
					
				});





		  });
	</script>