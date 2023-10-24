
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "szkolasn";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "DElETE FROM MyGuests WHERE id=3";

if (mysqli_query($conn,$sql)){
    echo "Record succesfully deleted";
}
else{
    echo"Error deleting the record".mysqli_error($conn);
}

mysqli_close($conn);
?>