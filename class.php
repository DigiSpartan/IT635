<html>

<head>
   <link rel="stylesheet" type="text/css" href="style.css">
   <title>Classification Help</title>
</head>

<ul>
  <li><a href="index.html">Home</a></li>
  <li><a href="class.php">Classification Help</a></li>
  <li><a href="report.php">Report Incident</a></li>
  <li><a href="search.php">Search Incident</a></li>
  <li><a href="list.php">Show Incidents</a></li>
</ul>
<h1>Classification Help</h1>

<body>
<p>If you had seen the main table of the database, then you'd know that it is organized with the Case and Recommendation entries have been given entry numbers. This web page is designed to hand out a cheat sheet to understanding these numbers. Feel free to use this page whenever you need help.</p>
<h2>For Case/Classification Entries</h2>
<?php
$servername = "localhost";
$username = "user";
$password = "password";
$dbname = "project";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID, Name, Description FROM Classification";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
   echo "<table><tr><th>ID No.</th><th>Name</th><th>Description</th></tr>";
   while ($row = $result->fetch_assoc()) {
     echo "<tr><td>".$row["ID"]."</td><td>".$row["Name"]."</td><td>".$row["Description"]."</td></tr>";
   }
   echo "</table>";
}

mysqli_close($conn);
?>
<h2>For Recommendation/Prevention Entries</h2>
<?php
$servername = "localhost";
$username = "user";
$password = "password";
$dbname = "project";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID, Name, Description FROM Prevention";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
   echo "<table><tr><th>ID No.</th><th>Name</th><th>Description</th></tr>";
   while ($row = $result->fetch_assoc()) {
     echo "<tr><td>".$row["ID"]."</td><td>".$row["Name"]."</td><td>".$row["Description"]."</td></tr>";
   }
   echo "</table>";
}

mysqli_close($conn);
?>
</body>


</html>
