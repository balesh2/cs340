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

$sql = "SELECT DISTINCT Enrollment.department, Enrollment.course_num, Enrollment.term FROM Enrollment";

$result = $connection->query($sql);

?>

<html>
   <body>
      <h1>Enroll In A Course</h1>

      <form action="enrolled.php" method="post">

	 Student ID: <input type="text" name="sid" required><br>
	 Course:
	<select name="course">
<?php
while($row = $result->fetch_assoc()) {
   echo "<option value=" . $row['department'] . "-" . $row['course_num'] . "-" . $row['term'] . ">" . $row['term'] . " " . $row['department'] . $row['course_num'] . "</option>";
}
?>
	</select><br>
	<input type="submit" value="Submit">
	</form>

<br>
<a href="index.html">back</a>
   </body>
</html>
