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

$sql = "SELECT Enrollment.term, Enrollment.department, Enrollment.course_num FROM Enrollment WHERE Enrollment.sid = '" . $sid . "'";

$result = $connection->query($sql);

?>

<html>
<body>
<h1>List Student's Classes</h1>
<br>
<h3>SID: <?php echo $sid; ?></h3>
<p>
<table>
<thead>
<tr>
<th>Term</th>
<th>Department</th>
<th>Course Number</th>
</tr>
</thead>
<tbody>
<?php
while($row = $result->fetch_assoc()) {
   echo "<tr><td>" . $row["term"] . "</td><td>" . $row["department"] . "</td><td>" . $row["course_num"] . "</td></tr>";
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
