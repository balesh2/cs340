<?php
$servername = "mysql.cs.orst.edu";
$username = "cs340_balesh";
$password = "5695";
$dbname = "cs340_balesh";

//create connection
$connection = new mysqli($servername, $username, $password, $dbname);
//chech connection
if ($connection->connect_error) {
   die("Connection failed: " . $connection->connect_error);
}

//escape user inputs for security
$sid = mysqli_real_escape_string($connection, $_POST['sid']);
$first_name = mysqli_real_escape_string($connection, $_POST['first_name']);
$last_name = mysqli_real_escape_string($connection, $_POST['last_name']);
$address = mysqli_real_escape_string($connection, $_POST['address']);
$city = mysqli_real_escape_string($connection, $_POST['city']);
$state = mysqli_real_escape_string($connection, $_POST['state']);
$gender = mysqli_real_escape_string($connection, $_POST['gender']);
$age = mysqli_real_escape_string($connection, $_POST['age']);
$major = mysqli_real_escape_string($connection, $_POST['major']);

$sql = "INSERT INTO Students (sid, first_name, last_name, address, city, state, gender, age, major)
   VALUES('$sid', '$first_name', '$last_name', '$address', '$city', '$state', '$gender', '$age', '$major')";

if ($connection->query($sql) == TRUE) {
   echo "New record created successfully";
} else {
   echo "ERROR: " . $sql . "<br>" . $connection->error;
}

$connection->close();
?>

<html>
	<body>
		<a href="./index.html">Return to Form</a>
	</body>
</html>
