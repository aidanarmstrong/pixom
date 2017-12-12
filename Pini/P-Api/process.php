<?php
session_start();
require 'Conn.php'; // connects to database
if(!empty($_POST['e-u']) && !empty($_POST['password'])):

$records = $conn->prepare('SELECT id,email,username,password FROM users WHERE email = :email OR username = :username');
$records->bindParam(':email', $_POST['e-u']);
$records->bindParam(':username', $_POST['e-u']);
$records->execute();
$results = $records->fetch(PDO::FETCH_ASSOC);
$message = "";

if(count($results) > 0 && password_verify($_POST['password'], $results['password'] )){
	$_SESSION['user_id'] = $results['id']; //start session() and redirect to homepage.
	header("Location: ../main.php");
}else {
	header("Location: ../login.php");
	$message = "Email address or Password is incorrect!";
	
}

endif;

?>