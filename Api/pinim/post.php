<?php

function submitPost() {
	
	$conn = mysqli_connect('localhost', 'root', '', 'pixom');
	
	if(isset($_POST['submitPost'])){
		
		$user = $_POST['user_fname'];
		$user_post = $_POST['user_post'];
		
		$sql_code = "INSERT INTO pinim_post (user, user_post) VALUES ('$user', '$user_post')";
		
		$insert_comment = $conn->query($sql_code);
		
	}
	
}