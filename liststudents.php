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

$sql = "SELECT * FROM Students";

$result = $connection->query($sql);

?>

<html>
<body>
<h1>List All Students</h1>
<p>
<table>
<thead>
<tr>
<th>Student ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Address</th>
<th>City</th>
<th>State</th>
<th>Gender</th>
<th>Age</th>
<th>Major</th>
</tr>
</thead>
<tbody>
<?php
while($row = $result->fetch_assoc()) {
   echo "<tr><td>" . $row["sid"] . "</td><td>" . $row["first_name"] . "</td><td>" . $row["last_name"] . "</td><td>" . $row["address"] . "</td><td>" . $row["city"] . "</td><td>" . $row["state"] . "</td><td>" . $row["gender"] . "</td><td>" . $row["age"] . "</td><td>" . $row["major"] . "</td></tr>";
}
$connection->close();
?>
</tbody>
</table>
</p>
</body>
</html>
