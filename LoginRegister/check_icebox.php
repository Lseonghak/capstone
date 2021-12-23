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

	$sql = "SELECT icebox_type FROM users WHERE username= '$username'";

	$result = mysqli_query($conn, $sql);

	while($row = mysqli_fetch_array($result)) {
		echo $row["icebox_type"]."";
	}

	mysqli_close($conn);

?>