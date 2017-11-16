<html>
<head>
    <title> MOvies </title>
    <link rel="stylesheet" href="style.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Movies</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li>
	    	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Genre
	        <span class="caret"></span></a>
	        <ul class="dropdown-menu">
	          <li><a href="#">Action</a></li>
	          <li><a href="#">Adventure</a></li>
	          <li><a href="#">Documentary</a></li>
	        </ul>
      	</li>
      	<li>
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Language
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">English</a></li>
          <li><a href="#">Hindi</a></li>
        </ul>
      	</li>
      	<li>
      	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Countries
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">USA</a></li>
          <li><a href="#">UK</a></li>
        </ul>
      </li>
      </ul>
      <form class="navbar-form navbar-left">
  		<div class="input-group">
    		<input type="text" class="form-control" placeholder="Search">
    		<div class="input-group-btn">
      			<button class="btn btn-default" >
        		<i class="glyphicon glyphicon-search"></i>
      			</button>
    		</div>
  		</div>
	   </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signup/index.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="signup/index.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<div id="container-fluid">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aiwuser";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM login";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  echo "<table class='tab table-responsive table-hover'><tr><th> Name</th> <th>email</th>	<th>FB-ID</th>	<th>Friends-List</th></tr>";

    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "<tr><td>".$row["Color"]."</td><td>".$row["director_name"]."</td><td>"."</td></tr>";
        echo "<tr><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["fbid"]."</td><td>".$row["friendlist"]."</td></tr>";

    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
</div>
</body>
</html>