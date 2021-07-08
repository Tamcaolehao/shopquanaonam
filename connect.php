<?php
	$connect= mysqli_connect("us-cdbr-east-04.cleardb.com","b97c99c06a6131","d35f7ee4");
	mysqli_select_db($connect, "heroku_6ac4263a8aebd63");
	mysqli_query($connect, "SET names 'utf8'");
	if(!$connect){
		echo "Không thể kết nối đến Database!".mysqli_connect_error($connect);
	}
?>