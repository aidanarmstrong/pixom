<?php

$conn = mysqli_connect('localhost', 'root', '', 'pixom');

$query = "SELECT * FROM users WHERE username like '%".$_POST['username']."%'";
$array = $conn->query($query);

foreach($array as $key){
?>
<div id="user"> <img src="<?php echo $key['image']?>" id="flr-pf-pic">
	<span class="users-name"><b><?php echo $key['fname']?> <?php echo $key['lname']?></b> 
		<span class="user-tag">@<?php echo $key['username']?></span>
	</span>
</div>
<?php 
}
?>