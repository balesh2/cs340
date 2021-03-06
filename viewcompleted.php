<?php session_start(); ?>

<?php
$servername = "mysql.cs.orst.edu";
$username = "cs340_balesh";
$password = "5695";
$dbname = "cs340_balesh";

//create connection
$connection = new mysqli($servername, $username, $password, $dbname);
//check connection
if ($connection->connect_error) {
   die("Connection failed: " . $connection->connect_error);
}

$sql = "SELECT Assignment.id, Assignment.due_date, Assignment.class, Assignment.title, Assignment.description, Assignment.est_time, Assignment.act_time FROM Assignment WHERE Assignment.completed = TRUE AND Assignment.SID =" . $_SESSION["sessid"];

if ($connection->query($sql) == TRUE) {
   $result = $connection->query($sql);
} else {
   echo "ERROR: " . $sql . "<br>" . $connection->error;
}

$connection->close();
?>

<html>
<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>

<body>
<nav class="navbar navbar-default">
<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">TODO List</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.html">Sign Up</a></li>
        <li><a href="signinform.html">Sign In</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="help.html">Help</a></li>
        <li><a href="todo.php">My TODO List</a></li>
        <li><a href="addclass.php">Add New Class</a></li>
        <li><a href="addassignment.php">Add New Assignment</a></li>
	<li class="active"><a href="viewcompleted.php">View Completed Items</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container-fluid">
<div class="row">
<div class="col-xs-1"></div>
<div class="col-xs-10">
<h1> My Completed Assignments</h1>
</div>
<div class="col-xs-1"></div>
</div>

<div class="row">
<div class="col-xs-1"></div>
<div class="col-xs-10">
<table class="table">
<thead>
<tr>
<th>Due Date</th>
<th>Class</th>
<th>Title</th>
<th>Description</th>
<th>Estimated Time</th>
<th>Actual Time</th>
<th>Mark As TODO</th>
</tr>
</thead>
<tbody>
</div>
<div class="col-xs-1"></div>
</div>

</div>

<?php
while($row = $result->fetch_assoc()) {
   echo "<tr><td>" . $row["due_date"] . "</td><td>" . $row["class"] . "</td><td>" . $row["title"] . "</td><td>" . $row["description"] . "</td><td>" . $row["est_time"] . "</td><td>" . $row["act_time"] . "</td><td>" . "<form action='marktodo.php' method='post'><input type='hidden' name='pid' value=" . $row["id"] . "><input type='submit' value='Mark as TODO'></form>" . "</td></tr>";
}
$connection->close();
?>
</tbody>
</table>
