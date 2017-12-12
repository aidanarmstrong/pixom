<?php

$conn = mysqli_connect('localhost', 'root', '', 'pixom');
$sql_code = "SELECT * FROM users";
$get_users = $conn->query($sql_code);

$row = $get_users->fetch_assoc();

if($row['username'] = "") {
	
}

function (){
	
};