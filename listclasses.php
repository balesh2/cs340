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

$sql = "SELECT Enrollment.term, Enrollment.department, Enrollment.course_num, COUNT(Enrollment.sid) FROM Enrollment GROUP BY Enrollment.term, Enrollment.department, Enrollment.course_num";

$result = $connection->query($sql);

?>

<html>
<body>
<h1>List All Classes</h1>
<p>
<table>
<thead>
<tr>
<th>Term</th>
<th>Department</th>
<th>Course Number</th>
<th>Enrollment</th>
</tr>
</thead>
<tbody>
<?php
while($row = $result->fetch_assoc()) {
   echo "<tr><td>" . $row["term"] . "</td><td>" . $row["department"] . "</td><td>" . $row["course_num"] . "</td><td>" . $row["COUNT(Enrollment.sid)"] . "</td></tr>";
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
