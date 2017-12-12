<?php

$newCommentCount = $_POST['newCommentCount'];
$selectedshow = $_POST['selectedShow'];

$conn = mysqli_connect('localhost', 'root', '', 'pixom');
$sql = "SELECT * FROM comments LIMIT $newCommentCount";
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
						<button type='submit' name='commentDelete'>Delete</button>
					</form>";
			}
			echo "</div>";
		}
	}
}