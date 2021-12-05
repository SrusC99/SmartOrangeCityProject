<?php
$username = filter_input(INPUT_POST, 'username');
$username = filter_input(INPUT_POST, 'password');
if (!empty($username)) {
	if (!empty($password)) {
		$host = "localhost";
		$username = "adi";
		$password = "";
		$dbname = "city";
		// Create connection
		$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
		if (mysqli_connect_error()) {
			die('Connect Error (' . mysqli_connect_errno() . ')'
				. mysqli_connect_error());
		} else {
			$sql = "INSERT INTO login (username,password)
	values ('$username','$password')";
			if ($conn->query($sql)) {
				echo "New record found";
			} else {
				echo "Error:" . $sql . "<br>" . $conn->error;
			}
			$conn->close();
		}
	} else {
		echo "Password Should not be empty";
		die();
	}
} else {
	echo "Username Should not be empty";
	die();
}
