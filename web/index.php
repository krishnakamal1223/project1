<?php
$servername = "localhost";
$username = "root";
$password = "kamal";
$dbname = "kamal";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM kamal1";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "- Name:" .$row["name"]. " - id: " .$row["id"]. "<br>";
}
} else {
echo "0 results";
}
$conn->close();
?>

