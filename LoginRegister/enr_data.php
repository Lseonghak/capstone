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
	$roomspace = $_POST['roomspace'];
	$foodname = $_POST['foodname'];
	
	$sql = "UPDATE enrolled_data SET roomspace = '$roomspace' WHERE username = '$username' AND foodname = '$foodname'";

	$result = mysqli_query($conn, $sql);

	if($result){
		echo "Insert Success2";
	}
	else{
		echo "Insert Failure2";
	}	


	mysqli_close($conn);
	
?>