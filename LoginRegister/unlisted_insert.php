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
	$foodtype = $_POST['foodtype'];
	$start_date = $_POST['start_date'];
	
	$sql = "INSERT INTO enrolled_data(username, roomspace, foodname, foodtype, start_date) VALUES('$username', '$roomspace', '$foodname', '$foodtype', '$start_date')";

	$result = mysqli_query($conn, $sql);

	if($result){
		echo "Insert Success";
	}
	else{
		echo "Insert Failure";
	}	


	mysqli_close($conn);
	
?>