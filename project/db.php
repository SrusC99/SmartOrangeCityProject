<?php

$servername = "localhost";
$username = "adi";
$password = "";
$dbname = "city";

$con = mysqli_connect($servername, $username, $password, $dbname);

if (mysqli_connect_errno()) {
	echo "Failed to connect!";
	exit();
}
echo "Connection success!";
