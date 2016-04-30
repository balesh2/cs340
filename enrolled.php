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
$course = mysqli_real_escape_string($connection, $_POST['course']);

//parse string
$course = explode('-', $course, 3);

//seperate parsed string into useful variables
$department = $course[0];
$course_num = $course[1];
$term = $course[2];

$sql = "INSERT INTO Enrollment (sid, term, department, course_num)
   VALUES('$sid', '$term', '$department', '$course_num')";

if ($connection->query($sql) == TRUE) {
   echo "New record created successfully";
} else {
   echo "ERROR: " . $sql . "<br>" . $connection->error;
}

$connection->close();
?>

<html>
	<body>
		<br>
		<a href="./enroll.php">Return to Form</a>
	</body>
</html>
