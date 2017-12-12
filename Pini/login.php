<?php 

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="Pini-img/Icons/Pini-icon.png"/>
	<link rel="stylesheet" type="text/css" href="PiniStyle/login.css?v=1.2">
	<link rel="stylesheet" type="text/css" href="../Style/scrollbar.css?v=1.0">
	<title>Pinim - Pin what matters!</title>
</head>
<body>
	<div id="header">
		<div class="logo">
			<div class="l-g">
				<img src="Pini-img/Icons/Pini-icon.png">
	    		<p> Pinim</p>
			</div>
			<div class="slogan">
				<p>Pin What Matters!</p>
			</div>	
		</div>
	</div>
	<div id="login-container">
		<form class="lg-in-form" action="P-Api/process.php" method="POST">
			<label class="lgin">Log in to Pinim</label>
			<input type="text" class="lg-user" name="e-u" placeholder="Email or Username" title="Email or username"required><br>
			<input type="password" class="lg-pass" name="password"  placeholder="Password" title="Please enter your password" required><br>
			<input type="submit" class="lg-btn" name="lgin" value="Log in">
			<label class="lne">__________________________________</label><br>
			<label class="sign-up-hdr">Dont have an account? <a id="sgn-up">Sign up</a></label>
			
		</form>
	</div>
	<div id="signup-container">
		<div class="signup">
			<form class="sign-up-form" action="P-Api/register.php" method="POST">
				<input type="username" name="username" id="username" placeholder="Username" required title="Pick a username"><br>
				<input type="text" name="fname" id="fname" placeholder="Firstname"title="Firstname"><br>
				<input type="text" name="lname" id="lname" placeholder="Lastname" required title="Lastname"><br>
				<input type="radio" name="sex" value="Male" required> Male 
        		<input type="radio" name="sex" value="Female" required> Female 
        		<input type="radio" name="sex" value="Other" required> Other <br>
        		<br><select id="DOBMonth" name="Month" required>
						<option> Month </option>
						<option value="January">January</option>
						<option value="Febuary">Febuary</option>
						<option value="March">March</option>
						<option value="April">April</option>
						<option value="May">May</option>
						<option value="June">June</option>
						<option value="July">July</option>
						<option value="August">August</option>
						<option value="September">September</option>
						<option value="October">October</option>
						<option value="November">November</option>
						<option value="December">December</option>
					</select>
					
					<select id="DOBDay" name="Day" required>
						<option> Day </option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
					</select>
					
					<select id="DOBYear" name="Year" required>
						<option> Year  </option>
						<?php
			                for($i=date('Y'); $i>1899; $i--) {
			                    $birthdayYear = '';
			                    $selected = '';
			                    if ($birthdayYear == $i) $selected = ' selected="selected"';
			                    print('<option value="'.$i.'"'.$selected.'>'.$i.'</option>'."\n");
			                }
			            ?>  
					</select><br>
            		<input type="email" name="email" id="email" placeholder="Valid Email Address" required title="Valid email address">
            		<input type="text" name="phone" id="phone" placeholder="Phone number"  required title="Phone number">
            		<br><input name="pin" id="pin" type="password" name="pin" pattern="[0-9]{4}" maxlength="4" placeholder="Pin" required title="4 digit pin">
            			Need this to reset password!<br>
            		<input type="password" minlength="8" name="password"  id="password" placeholder="Password (8-16 Characters)" required title="password"><br>
            		<input type="password" name="password2"  id="password2" placeholder="Re-enter Password" required title="Re-enter password"><br>
            		<input type="submit" name="signup-btn" value="Create account" class="signup-btn">
			</form>
		</div>
	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
				
				$("#signup-container").hide();
					
				$('#sgn-up').click(function(){
				$("#signup-container").slideToggle();
			});
		});
	</script>
</body>
</html>