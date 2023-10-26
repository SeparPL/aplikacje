<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "szkolasn";


$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "ALTER TABLE myguests ADD vehicle VARCHAR(25)";
$sql1 = "ALTER TABLE myguests ADD vehicle1 VARCHAR(25)";


if (mysqli_query($conn,$sql)){
    echo "Column succesfully added";
}
else{
    echo"Error adding column".mysqli_error($conn);
}
if (mysqli_query($conn,$sql1)){
    echo "Column succesfully added";
}
else{
    echo"Error adding column".mysqli_error($conn);
}


mysqli_close($conn);
?>
