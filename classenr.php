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
<html>
<body>
<h1>View Class Enrollment</h1>
<br>
<h2>Select a Class</h2>
<p>
<form action="listclassenr.php" method="post">
<select name="course">
<?php
while($row = $result->fetch_assoc()) {
   echo "<option value=" . $row['department'] . "-" . $row['course_num'] . "-" . $row['term'] . ">" . $row['term'] . " " . $row['department'] . $row['course_num'] . "</option>";
}
?>
</select>
<input type="submit" value="Submit">
</form>
</p>
<p>
<a href="./index.html">back</a>
</p>
</body>
</html>
