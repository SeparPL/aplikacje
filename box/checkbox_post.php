<?php
    if (isset($_POST["vehicle1"])){
        echo "Pierwszy checkbox:" .$_POST["vehicle1"]."<br>";}
    else {
        echo "dodaj 1 bo nie ma ";
    }
    if (isset($_POST["vehicle2"])){
    echo "Drugi checkbox:" .$_POST["vehicle2"]."<br>";}
    else{
        echo "dodaj 2 bo nie ma";
    }
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "szkolasn";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["vehicle1"])){
$sql="INSERT INTO MyGuests (firstname, lastname, email,vehicle,vehicle1)
VALUES('$_POST[name]','$_POST[surname]','$_POST[email]','$_POST[vehicle1]',null)";
;}
if (isset($_POST["vehicle2"])){
$sql="INSERT INTO MyGuests (firstname, lastname, email,vehicle,vehicle1)
VALUES('$_POST[name]','$_POST[surname]','$_POST[email]',null,'$_POST[vehicle2]')";
;}
if (isset($_POST["vehicle2"]) && (isset($_POST["vehicle1"]))){
$sql="INSERT INTO MyGuests (firstname, lastname, email,vehicle,vehicle1)
VALUES('$_POST[name]','$_POST[surname]','$_POST[email]','$_POST[vehicle1]','$_POST[vehicle2]')"
;}

if (mysqli_query($conn, $sql)) {
    echo "Dodano";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
  ?>