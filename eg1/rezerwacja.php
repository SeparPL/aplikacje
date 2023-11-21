<?php
$server="localhost";
$user="root";
$password="";
$database="baza1";

$data=$_POST["data"];
$osoby=$_POST["osoby"];
$tel=$_POST["tel"];

$conn=mysqli_connect($server,$user,$password,$database);
if (!$conn) {
    die("Błąd: " . mysqli_connect_error());
  }
$sql="INSERT INTO rezerwacje(data_rez,liczba_osob,telefon) VALUES('$data','$osoby','$tel')";
if (mysqli_query($conn,$sql)){
    echo"Dodano rezerwację do bazy";
}
else{
    echo mysqli_connect_error();
}
mysqli_close($conn)
?>

