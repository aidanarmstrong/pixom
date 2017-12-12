<?php
?>
<!DOCTYPE THML>
<html>
<head>
<link rel="icon" type="image/png" href="img/Pixom-icon.png"/>
<link rel="stylesheet" type="text/css" href="Style/ResetPwd.css?=1.6">
<link rel="stylesheet" type="text/css" href="Style/Scrollbar.css?v=1.0">
<title>Veeno | Forgotten Password</title>
</head>
<body>
<div id="M-head-1">
        	<?php include 'include/Overall/Logo.php';?>
</div>
<div id="container" action="">
	<h1>Reset <span>Password</span></h1>
	<form id="reset-form">
		Please enter your email address and 4 digit security pin!<br><br>
		Email Address: <input type="email" name="email" placeholder="Email Address" required title="Need this to reset password"><br>
		Security Pin: <br><input type="password" name="pin" pattern="[0-9]{4}" maxlength="4" placeholder="Pin" required title="4 digit pin"> <br>  
		<input type="submit" name="sumbit-btn" value="Submit"><br>
	</form>

</div>
<?php include 'Api/master.php';
		echo renderFooter();
	?>
</body>
</html>   