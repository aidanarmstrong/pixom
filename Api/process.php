<?php
session_start();
require 'Connect.php'; // connects to database
if(!empty($_POST['email']) && !empty($_POST['password'])):

$records = $conn->prepare('SELECT id,email,password FROM users WHERE email = :email');
$records->bindParam(':email', $_POST['email']);
$records->execute();
$results = $records->fetch(PDO::FETCH_ASSOC);
$message = "";

if(count($results) > 0 && password_verify($_POST['password'], $results['password'] )){
	$_SESSION['user_id'] = $results['id']; //start session() and redirect to homepage.
	header("Location: ../welcome.php");
}else {
	//header("Location: ../Login.php");
	$message = "Email address or Password is incorrect!";
	
}

endif;

?>