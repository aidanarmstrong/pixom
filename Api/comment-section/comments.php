<?php

function setComment($conn) {
	
	if(isset($_POST['commentSubmit'])){
		
		$movie_name = $_POST['movie_name'];
		$user_name = $_POST['user_name'];
		$date = $_POST['date'];
		$user_comment = $_POST['user_comment'];
		
		$sql = "INSERT INTO comments (movie_name, user_name, date, user_comment) VALUES ('$movie_name', '$user_name', '$date', '$user_comment')";
		
		$insert_comment = $conn->query($sql);
		
	}	
	
}

function getComments($selectedshow, $name) {
	
	$user_name = $name;
	
	$conn = mysqli_connect('localhost', 'root', '', 'pixom');
	$sql = "SELECT * FROM comments LIMIT 4";
	$get_comment = $conn->query($sql);
	
	if(mysqli_num_rows($get_comment) > 0){
		
		while($row = $get_comment->fetch_assoc()){
			
			if($selectedshow == $row['movie_name']){
				
				echo "<div class='comment-box' style='font-family: Helvetica, Arial, sans-serif;'>";
				echo "<p style='width: 100%;'>";
				echo $row['user_name']." - ";
				echo $row['date']."<br><br>";
				echo $row['user_comment'];
				echo "</p>";
				
				if($row['user_name'] == $user_name) {
					
					echo
					"<form class='delete-form' method='POST' action='".deleteComments()."'>
						<input type='hidden' name='cid' value='".$row['id']."'>
						<button type='submit' name='commentDelete' style='cursor:pointer;'>Delete</button>
					</form>";
				}
				echo "</div>";
			}
		}
	} else {
		echo "<div class'no-comment'>";
			echo "<p class='no-comment-p'>There is no comments to display</p>";
		echo "</div>";
	}
	
}

function deleteComments() {
	
	$conn = mysqli_connect('localhost', 'root', '', 'pixom');
	
	if(isset($_POST['commentDelete'])) {
		
		$id = $_POST['cid'];
		$sql = "DELETE FROM comments WHERE id='$id'";
		$delete_comment = $conn->query($sql);
		$current_url = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		header("Location: $current_url");
		
	}
}