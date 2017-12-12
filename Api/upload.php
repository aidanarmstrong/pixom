<?php

include_once 'check-select.php';

if(isset($_POST['upload-btn'])){
	
	$uploaded_img = $_FILES['file'];
	
	$file_name = $uploaded_img['name'];
	$file_tmpname = $uploaded_img['tmp_name'];
	$file_size = $uploaded_img['size'];
	$file_error = $uploaded_img['error'];
	$file_type = $uploaded_img['type'];
	
	$get_FileExt = explode('.', $file_name);
	$fileExt = strtolower(end($get_FileExt));
	$allowed = array('jpg', 'jpeg', 'png');
	
	if(in_array($fileExt, $allowed)){
		
		if($file_error === 0){
			
			if($file_size < 2000000){

				$file_destination = '../img/user_profile_pic/'.$file_name;
				
				$db_connection = mysqli_connect('localhost', 'root', '', 'pixom');
				$user_id = $user['id'];
				$file_path = 'img/user_profile_pic/'.$file_name;
				$sql_code = "INSERT INTO user_profile_pic (user_id, profile_pic_path) VALUES ('$user_id', '$file_path')";
				$upload = $db_connection->query($sql_code);
				
				move_uploaded_file($file_tmpname, $file_destination);
				header("Location: ../welcome.php?uploadsuccess");
				
			} else {
				
				echo "The file size you have uploaded is too big";
			}
		} else {
			
			echo "There was an error uploading your file.";
		}
	} else {
		
		echo "Files of this type is not allowed.";
	}
}