<?php 
function redirect() {
    header('location:welcome.php');
    die();
}
session_start();
if(isset($_SESSION['user_id'])) {
	redirect();
}
?>
<!DOCTYPE HTML>
<html>
<?php include 'include/Overall/head.php';?>
<body>
 <?php if(isset($_SESSION['user_id'])){
   redirect();
  } ?>
		<script src="Core/Script/jquery-3.1.1.js"></script>
     	<script src="Scripts/master.js"></script>
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" >
    	  <div class="modal-dialog">
    	  <?php include 'include/Overall/Logo.php';?>
				<div class="loginmodal-container">
					<h1>Sign<span> In</span></h1><br>
				  <form action="Api/process.php" method="POST">
					Email<input type="email" name="email" placeholder="Email Address" required>
					Password<input type="password" name="password" placeholder="Password" required>
					<div class="form-errors">
				    	<?php if(!empty($message)):?>
			            <p><?= $message ?></p>
			            <?php endif; ?>
        		
				    </div>
					
					<label> <input type="checkbox" checked="checked"> Keep me signed in</label>
					<input type="submit" name="login" class="login loginmodal-submit" value="Sign In">
				  </form>
					
				  <div class="login-help">
					<a href="register.php">Register</a> - <a href="ResetPwd.php">Forgotten Password</a>
				  </div>
				</div>
			</div>
			<div id="cookies-container">
	        	<p class="cookies-info">To help nixo we use cookies to personalise customer accounts, to customise its online advertisements, and for other purposes. By continuing to use our service, you agree to our use of cookies.<br>
	        	<span>For more information about our use of cookies see: <a href="Privacy.php">Privacy & Cookies</a>.</span> </p>
		        	<div class="cookies-exit">	
		       		</div>
        	</div>	
</div>
<?php include 'Api/master.php';
		echo renderFooter();
	?>
</body>
</html>