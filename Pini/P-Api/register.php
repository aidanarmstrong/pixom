<?php
//connect to database
require 'Conn.php';


if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password']) && !empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['phone']) && !empty($_POST['sex']) && !empty($_POST['pin'])):
if ($_POST['password']  == $_POST['password2']):
//enter the new user in database
$sql = "INSERT INTO users (username, email, password, fname,  lname, phone, sex, pin) VALUES (:username,:email, :password, :fname, :lname,:phone, :sex, :pin)";
$stmt = $conn->prepare($sql);

$stmt->bindParam(':username', $_POST['username']);
$stmt->bindParam(':email', $_POST['email']);
$stmt->bindParam(':phone', $_POST['phone']);
$stmt->bindParam(':fname', $_POST['fname']);
$stmt->bindParam(':lname', $_POST['lname']);
$stmt->bindParam(':sex', $_POST['sex']);
$stmt->bindParam(':password', password_hash($_POST['password'], PASSWORD_BCRYPT));
$stmt->bindParam(':pin', password_hash($_POST['pin'], PASSWORD_BCRYPT));

if($stmt->execute()){
	header('Location: ../login.php');
}
else{
	$message = "Password does not match!";
}
endif;
endif;


?>