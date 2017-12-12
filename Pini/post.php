<?php

function submitPost($conn) {
	
	if(isset($_POST['submitPost'])){
		$fname = $_POST['user_fname'];
		$lname = $_POST['user_lname'];
		$username = $_POST['user_username'];
		$user_post = $_POST['user_post'];
		
		$sql_code = "INSERT INTO pinim_post (p_user, p_lname, username, p_post) VALUES ('$fname', '$lname', '$username','$user_post')";
		
		$insert_comment = $conn->query($sql_code);
		
	}
	
}

function getAllPost() {
	
	$conn = mysqli_connect('localhost', 'root', '', 'pixom');
	$sql_code = "SELECT * FROM pinim_post ORDER BY id DESC";
	$get_comment = $conn->query($sql_code);
	
	while($row = $get_comment->fetch_assoc()){
		
		echo 
			"<div class='Test-1'>
    			<div class='followers-pf-pic'>
    				<a href='profile.php'><img src='../img/Profile-Pictures/person-1.png'></a>
    			</div>
    			<div class='follower-name'>
    				<ul style='list-style: none;'>
						<li style='margin: 10px; margin-left: 0px; font-weight: bold;'><a href='profile.php'>".$row['p_user']." ".$row['p_lname']."</a>
							<span class='t-1-usrnme'>@".$row['username']."</span>
						</li>
					</ul>
				</div>
				<div class='user-post'>
					<p style='margin-top: 10px;'>".$row['p_post']."</p>
				</div>
    			<div class='hrts-stickies-container'>
	    			<ul>
	    				<li id='hearts'>135<img src='Pini-img/Icons/hearts-icon.png'></li>
	    				<li id='stickies'>15<img src='Pini-img/Icons/stickies-icon.png'></li>
	    			</ul>	
    			</div>
    		</div><br><br>";
		
	}
	
}

function getUserPost($user_fname, $user_lname) {
	
	$fname = $user_fname;
	$lname = $user_lname;
	
	$conn = mysqli_connect('localhost', 'root', '', 'pixom');
	$sql_code = "SELECT * FROM pinim_post ORDER BY id DESC";
	$get_comment = $conn->query($sql_code);
	
	if(mysqli_num_rows($get_comment) > 0) {
		
		while($row = $get_comment->fetch_assoc()) {
			
			if($row['p_user'] == $fname && $row['p_lname'] == $lname) {
				
				echo
					"<div class='Test-1'>
	    			<div class='followers-pf-pic'>
	    				<a href='profile.php'><img src='../img/Profile-Pictures/person-1.png'></a>
	    			</div>
	    			<div class='follower-name'>
	    				<ul style='list-style: none;'>
							<li style='margin: 10px; margin-left: 0px; font-weight: bold;'><a href='profile.php'>".$row['p_user']." ".$row['p_lname']."</a>
								<span class='t-1-usrnme'>@".$row['username']."</span>
							</li>
						</ul>
					</div>
					<div class='user-post'>
						<p style='margin-top: 10px;'>".$row['p_post']."</p>
					</div>
	    			<div class='hrts-stickies-container'>
		    			<ul>
		    				<li id='hearts'>135<img src='Pini-img/Icons/hearts-icon.png'></li>
		    				<li id='stickies'>15<img src='Pini-img/Icons/stickies-icon.png'></li>
		    			</ul>
	    			</div>
	    		</div><br><br>";
				
			}
			
		}
	}
}

function getIndivdiualPosts($user_fname, $user_lname, $user_name) {
	$fname = $user_fname;
	$lname = $user_lname;
	$username = $user_name;
	
	$conn = mysqli_connect('localhost', 'root', '', 'pixom');
	$sql_code = "SELECT * FROM pinim_post ORDER BY id DESC LIMIT 1";
	$get_comment = $conn->query($sql_code);
	
	if(mysqli_num_rows($get_comment) > 0) {
		
		while($row = $get_comment->fetch_assoc()) {
			
			if($row['p_user'] == $fname && $row['p_lname'] == $lname) {
				
				echo
				"<div class='clk-post'>
					<a class='Post-settings'><img src='Pini-img/Icons/Post-Settings-icon.png'></a>
					<div class='post-settings-nav'>
						<div class='drp-dwn-caret-srch' style='margin-left: 75px;'>
							<span class='caret-in-srch'></span>
							<span class='caret-out-srch'></span>
						</div>
						<ul class='u-pst-stings'>
							".(($row['username']== $username)?
							"<li onclick='deletePin()'>Delete</li>
							<li>Report</li>
							<li>Hide</li>
						</ul>
					</div>
	    			<div class='followers-pf-pic'>
	    				<a href='profile.php'><img src='../img/Profile-Pictures/person-1.png'></a>
	    			</div>
	    			<div class='follower-name'>
	    				<ul style='list-style: none;'>
							<li style='margin: 10px; margin-left: 0px; font-weight: bold;'><a href='profile.php'>".$row['p_user']." ".$row['p_lname']."</a>
								<span class='t-1-usrnme'>@".$row['username']."</span>
							</li>
						</ul>
					</div>
					<div class='user-post'>
						<p style='margin-top: 10px; font-size: 22px;'>".$row['p_post']."</p>
					</div>
	    			<div class='hrts-stickies-container' style='top: 85%;'>
		    			<ul>
		    				<li id='hearts'>135<img src='Pini-img/Icons/hearts-icon.png'></li>
		    				<li id='stickies'>15<img src='Pini-img/Icons/stickies-icon.png'></li>
		    			</ul>
	    			</div>
	    		</div><br><br>":"
							<li>Share</li>
							<li>Report</li>
							<li>Hide</li>
						</ul>
					</div>
	    			<div class='followers-pf-pic'>
	    				<a href='profile.php'><img src='../img/Profile-Pictures/person-1.png'></a>
	    			</div>
	    			<div class='follower-name'>
	    				<ul style='list-style: none;'>
							<li style='margin: 10px; margin-left: 0px; font-weight: bold;'><a href='profile.php'>".$row['p_user']." ".$row['p_lname']."</a>
								<span class='t-1-usrnme'>@".$row['username']."</span>
							</li>
						</ul>
					</div>
					<div class='user-post'>
						<p style='margin-top: 10px; font-size: 22px;'>".$row['p_post']."</p>
					</div>
	    			<div class='hrts-stickies-container' style='top: 85%;'>
		    			<ul>
		    				<li id='hearts'>135<img src='Pini-img/Icons/hearts-icon.png'></li>
		    				<li id='stickies'>15<img src='Pini-img/Icons/stickies-icon.png'></li>
		    			</ul>
	    			</div>
	    		</div><br><br>");;
				
			}
			
		}
	}
}