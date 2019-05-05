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

if(isset($_POST['submit'])) {
  $contributer = $_POST['contributer'];
  $dilemma = $_POST['dilemma'];
  $sql = "SELECT Contributer, Dilemma FROM Queue;"
  $result = mysqli_query($conn, $sql);
  if ($result->num_rows == 0) {
     $sql2 = "INSERT INTO Queue (ContributerName, Dilemma) VALUES('$contributer', '$dilemma')";
     $result2 = mysqli_query($conn, $sql2);
     echo "Success!"
  } else {
    echo "Error!"
  }
}
/*
$sql = "SELECT FROM Classification";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
   echo "<table><tr><th>ID No.</th><th>Name</th><th>Description</th></tr>";
   while ($row = $result->fetch_assoc()) {
     echo "<tr><td>".$row["ID"]."</td><td>".$row["Name"]."</td><td>".$row["Description"]."</td></tr>";
   }
   echo "</table>";
}
*/

mysqli_close($conn);
?>
