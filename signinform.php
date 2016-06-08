<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

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
        <li class="active"><a href="signinform.html">Sign In</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="help.html">Help</a></li>
        <li><a href="todo.php">My TODO List</a></li>
        <li><a href="addclass.php">Add New Class</a></li>
        <li><a href="addassignment.php">Add New Assignment</a></li>
	<li><a href="viewcomplete.php">View Completed Items</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
   <div class="row">
      <div class="col-xs-1"></div>
      <div class="col-xs-10">
	 <h1>Sign In</h1>

	 <form action="signin.php" method="post">
	    Student ID Number: <input type="text" name="sid"><br>
	    First Name: <input type="text" name="first_name"><br>
	    Last Name: <input type="text" name="last_name"><br>
	    <input type="submit">
	 </form>
      </div>
      <div class="col-xs-1"></div>
   </div>

   <div class="row">
      <div class="col-xs-1"></div>
      <div class="col-xs-10">
	 <a href="index.html">Sign Up</a>
      </div>
      <div class="col-xs-1"></div>
   </div>

</div>
      
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
