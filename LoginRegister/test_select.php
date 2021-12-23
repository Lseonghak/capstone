<?php
	$host='localhost';
	$uname='root';
	$pwd='';
	$db='loginregister';

	$conn = new mysqli($host,$uname,$pwd,$db) or die("connection failed");
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	//$username = $_POST['username'];
	$utongtype = 'cold';

	$sql = "SELECT * FROM enrolled_data, life WHERE 
		roomspace = '5' AND life.name = enrolled_data.foodtype";

	$result = mysqli_query($conn, $sql);

	

	if($result){
		while($row = mysqli_fetch_array($result)) {
		echo "<div>";
		echo $row["foodname"] . " ";
		echo $row["cold"] . " ";
		echo "</div>";
		}
		echo 'Success';
	}
	else{
		echo 'Failure';
	}	


	mysqli_close($conn);
	
?>