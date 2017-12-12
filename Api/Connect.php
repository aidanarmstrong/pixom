<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = "pixom";

try {
	$conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);
} catch(PDOExecption $e){
	die("Connection failed: ". $e->getMessage());
}

?>