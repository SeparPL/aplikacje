<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "szkolasn";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Jan', 'Nowak', 'jann@example.com'),('Kuba', 'Pniaczek', 'kubap@example.com'),
('Grzegorz', 'Nowak', 'Grzyp31@example.com')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>