Welcome <?php echo $_POST["name"].$_POST["surname"];?><br>
Your email adress is: <?php echo $_POST["email"];?><br>

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
VALUES('$_POST[name]','$_POST[surname]','$_POST[email]')";

if (mysqli_query($conn, $sql)) {
    echo "Dodano rekord : ";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
  ?>