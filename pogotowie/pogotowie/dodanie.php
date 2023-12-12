<?php
$server="localhost";
$user="root";
$password="";
$db="ee09";

$conn=mysqli_connect($server,$user,$password,$db);
$sql="INSERT INTO ratownicy VALUES (NULL, $_POST[numerk], '$_POST[imie1]', '$_POST[imie2]', '$_POST[imie3]');";

if (mysqli_query($conn,$sql)){
    echo "Do bazy zostało wysłane zapytanie: INSERT INTO ratownicy VALUES (NULL, $_POST[numerk], '$_POST[imie1]', '$_POST[imie2]', '$_POST[imie3]');";
}
?>