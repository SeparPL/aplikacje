Welcome <?php echo $_GET["name"].$_GET["surname"];?><br>
Your email adress is: <?php echo $_GET["email"];?><br>

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

$sql="INSERT INTO MyGuests (firstname, lastname, email)
VALUES('$_GET[name]','$_GET[surname]','$_GET[email]')";

if (mysqli_query($conn, $sql)) {
    echo "Dodano rekord : $_GET[name] $_GET[surname] $_GET[email]";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
  ?>