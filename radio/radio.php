<!-- <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "szkolasn";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql="INSERT INTO MyGuests (firstname, lastname, email,favlanguage)
VALUES('$_POST[name]','$_POST[surname]','$_POST[email]','$_POST[fav_language]')";


if (mysqli_query($conn, $sql)) {
    echo "Dodano";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
  ?> -->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "szkolasn";

$conn = mysqli_connect($servername, $username, $password, $dbname);
$name=$_POST["name"];
$surname=$_POST["surname"];
$email=$_POST["email"];
$favlanguage=$_POST["fav_language"];
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql="INSERT INTO MyGuests (firstname, lastname, email,favlanguage)
VALUES('$name','$surname','$email','$favlanguage')";


if (mysqli_query($conn, $sql)) {
    echo "Dodano";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
  ?>