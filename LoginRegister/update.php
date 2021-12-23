<?php
	$host='localhost';
	$uname='root';
	$pwd='';
	$db='loginregister';

	$conn = new mysqli($host,$uname,$pwd,$db) or die("connection failed");
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$username = $_POST['username'];
	$num = $_POST['num'];

	$sql = "UPDATE users SET icebox_type = '$num' WHERE username= '$username'";

	$result = mysqli_query($conn, $sql);

	if($result){
		echo "Update Success";
	}
	else{
		echo "Update Failure";
	}	


	mysqli_close($conn);
	
?>