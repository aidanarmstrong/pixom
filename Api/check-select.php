<?php
require 'Connect.php'; // connects to database

if(!isset($_SESSION['user_id'])){ //if login in session is not set
	$_SESSION['redirectURL'] = $_SERVER['$REQUEST_URI'];
	header("Location: ./login.php");
}
$records = $conn->prepare('SELECT * FROM users WHERE id = :id');
$records->bindParam(':id', $_SESSION['user_id']);
$records->execute();
$results = $records->fetch(PDO::FETCH_ASSOC);
$message = "";

$user = NULL;

if(count($results) > 0){
	$user = $results;
}