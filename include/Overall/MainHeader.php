
<script src="Scripts/JQuery/jquery-3.2.1.js"></script>
<script src="Scripts/master.js"></script>
<div id="header-container">
				<?php include 'include/Overall/Logo-Main.php';?>
		        <div id="search-bar_container">
		        	<form action="Results-page.php" method="POST">
		            	<input class="search-bar" type="text" name="search-bar" placeholder=" Search..">
		            	<input class="search-btn" type="submit" value="" >
		            </form>
		        </div>
		        <div class="Account-container">
            		<a id="my-accountbtn"><?php 
                        if($user['img'] == ""){
                        	echo "<img  src='img/Profile-Pictures/person-1.png' alt='Default Profile Pic'>";
                        } else {
                           	echo "<img  src='img/".$user['img']."' alt='Profile Pic'>";
                        }
                   		?>
                   </a></p>
    			</div>
    			<div class="SocialHub-container" onclick="location.href='Pini/main.php'">
            		<p style='font-weight: 800;' class='SocialHub'> <a>Pinim</a> </p>
    			</div>
    			<div id="home-btn" onclick="location='./welcome.php'">
    				<img src="./img/Home-icon.png">
    			</div>
    		</div>
    		<div id="account-nav">
    			<div class="drp-dwn-caret">
					<span class="caret-in"></span>
					<span class="caret-out"></span>
				</div>
				<ul>
						<li onclick="location.href='premium-account.php'">Premium</li>
						<li onclick="openFriends()">Friends</li>
						<li onclick="openStore()">Store</li>
						<li>Settings</li>
						<li>Customize</li>
						<li onclick="location.href='Logout.php'">Logout</li>
				</ul>
    		</div>
			
			<div id="store-container">
				<div class="store">
					<div class="str-hr">
						<p>Store</p>
					</div>
					<ul class="u-str">
						<li><img alt="" src="img/Store/img-1.jpg"></li>
						<li><img alt="" src="img/Store/img-2.jpg"></li>
						<li><img alt="" src="img/Store/img-3.jpg"></li>
						<li><img alt="" src="img/Store/img-4.jpg"></li>
						<li><img alt="" src="img/Store/img-5.jpg"></li>
						<li><img alt="" src="img/Store/img-6.jpg"></li>
						<li><img alt="" src="img/Store/img-7.jpg"></li>
						<li><img alt="" src="img/Store/img-8.jpg"></li>
						<li><img alt="" src="img/Store/img-9.jpg"></li>
						<li><img alt="" src="img/Store/img-10.jpg"></li>
						<li><img alt="" src="img/Store/img-11.jpg"></li>
						<li><img alt="" src="img/Store/img-12.jpg"></li>
					</ul>
					<ul class="u-str-nav">
						<li>Free</li>
						<li>Pops</li>
						<li>Buy</li>
						<li>Unlocked</li>
					</ul>
					<button class="nxt-pg-btn">&rarr;</button>
				</div>
				<a class="cls-str-btn" onclick="closeStore()">&times;</a>
			</div>
			
			<div id="friends-container">
				<div class="friends">
					
				</div>
				<a class="cls-frnds-btn" onclick="closeFriends()">&times;</a>
			</div>
		<div class="msg-bx-head-tmp">
      				<div class="msg-hlp-icon" onclick="showMsgBox()">
      					<img src="img/icons/help-icon.png">
      				</div>
	      	</div>
			<div id="msg-box">
	      			<div class="msg-bx-head" onclick="hideMsgBox()">
	      				<div class="msg-hlp-icon">
	      					<img src="img/icons/help-icon.png">
	      				</div>
	      				<p class="msg-bx-hd-p">Help Chat (<i>Beta</i>)</p>
	      			</div>
	      			<div class="msg-bx-text-cntr">
	      			</div>
	      			<div class="msg-bx-frm">
	      				<form>
	      					<textarea class="msg-txt"  placeholder="Type a message.." onkeydown="sendHelpMessage();"></textarea>
	      				</form>
	      			</div>
	      	</div>
	      	<script>
	      	$(".Account-container").click(function (e) {
			      e.stopPropagation();
			      $('#account-nav').toggle();
			  });
			  $('body').click(function () {
			      $('#account-nav').hide();
			  });

			  function openStore() {
			 		document.getElementById("store-container").style.display = "block";
			 	}
			  function closeStore() {
			 		document.getElementById("store-container").style.display = "none";
			 	}
			  function openFriends() {
			 		document.getElementById("friends-container").style.display = "block";
			 	}
			  function closeFriends() {
			 		document.getElementById("friends-container").style.display = "none";
			 	}
			</script>
		    
	      