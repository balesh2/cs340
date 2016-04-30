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
$course = mysqli_real_escape_string($connection, $_POST['course']);

//parse string
$course = explode('-', $course, 3);

//seperate parsed string into useful variables
$department = $course[0];
$course_num = $course[1];
$term = $course[2];

$sql = "SELECT Students.sid, Students.first_name, Students.last_name FROM Students WHERE Students.sid IN (SELECT Enrollment.sid FROM Enrollment WHERE Enrollment.term = '" . $term . "' AND Enrollment.course_num = " . $course_num . " AND Enrollment.department = '" . $department ."')";

$result = $connection->query($sql);

?>

<html>
<body>
<h1>List Class Enrollment</h1>
<h2><?php echo $term . " " . $department . " " . $course_num?></h2>
<p>
<table>
<thead>
<tr>
<th>Student ID</th>
<th>First Name</th>
<th>Last Name</th>
</tr>
</thead>
<tbody>
<?php
while($row = $result->fetch_assoc()) {
   echo "<tr><td>" . $row["sid"] . "</td><td>" . $row["first_name"] . "</td><td>" . $row["last_name"] . "</td></tr>";
}
$connection->close();
?>
</tbody>
</table>
</p>
<p>
<a href="./index.html">back</a>
</p>
</body>
</html>
