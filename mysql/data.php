<!-- <?php
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

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?> -->
<!-- 
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

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_row($result)) {
    echo "id: " . $row[0]. " - Name: " . $row[1]. " " . $row[2]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?> -->
<!-- 
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
echo"<style>
table,td,th{
    border: 1px dotted;
    border-collapse:collapse;
}
</style>\n";
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);
echo"<table>";
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_row($result)) {
    echo "<tr><td>" . $row[0]. "</td><td>" . $row[1]. "</td><td> " . $row[2]. "</td></tr>";
  }
echo"</table>";
} else {
  echo "0 results";
}

mysqli_close($conn);
?> -->


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

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);
echo"<ul>";
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_row($result)) {
    echo "<li>" . $row[0]. " " . $row[1]. " " . $row[2]. "</li>";
  }
echo"</ul>";
} else {
  echo "0 results";
}

mysqli_close($conn);
?>