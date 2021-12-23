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
	$foodname = $_POST['foodname'];
	
	$sql = "DELETE FROM enrolled_data WHERE username = '$username' AND foodname = '$foodname' AND roomspace = '5'";

	$result = mysqli_query($conn, $sql);

	if($result){
		echo "Delete Success";
	}
	else{
		echo "Insert Failure";
	}	


	mysqli_close($conn);
	
?>