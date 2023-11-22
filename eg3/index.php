<meta charset="UTF-8">
<title>Hurtownia szkolna</title>
<link rel="stylesheet" href="styl.css">
<div class="baner">
    <h1>Hurtownia z najlepszymi cenami</h1>
</div>
<div class="lewy">
    <h2>Nasze ceny</h2>
    <?php
     $server = "localhost";
     $user = "root";
     $password = "";
     $db = "sklep";
     $conn = mysqli_connect($server, $user, $password,$db);
     
     if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
     }
     $sql="select nazwa, cena from towary limit 4;";
     $wynik=mysqli_query($conn,$sql);
     echo "<table>";
     if(mysqli_num_rows($wynik)>0){
         while($row=mysqli_fetch_assoc($wynik)){
             echo "<tr><td>$row[nazwa]</td><td>$row[cena]</td><tr>";
         };
     };
     echo "</table>";
     mysqli_close($conn);
    ?>
</div>
<div class="srodkowy">
    <h2>Koszt zakupów</h2>
    <form action="index.php" method="POST">
    wybierz artykuł: <select name="produkt" value="produkt"id="produkt">
        <option value="Zeszyt 60 kartek">Zeszyt 60 kartek</option>
        <option value="Zeszyt 32 kartki">Zeszyt 32 kartki</option>
        <option value="Cyrkiel">Cyrkiel</option>
        <option value="Linijka 30 cm">Linijka 30 cm</option>
    </select><br>
    liczba sztuk: <input type="number" name="numer" id="numer"><br>
    <input type="submit" value="OBLICZ">
    </form>
    <?php
    $server="localhost";
    $user="root";
    $db="sklep";
    $conn=mysqli_connect($server,$user,$password,$db);
    if(isset($_POST["produkt"])&&isset($_POST["numer"])){
        $sql="SELECT cena FROM towary WHERE nazwa = '$_POST[produkt]';";
        $cena=mysqli_query($conn,$sql);
        if(mysqli_num_rows($cena)>0){
            $wynik=mysqli_fetch_assoc($cena);
            echo $wynik["cena"]*$_POST["numer"];
        }
    }
    ?>
</div>
<div class="prawy">
    <h2>Kontakt</h2>
    <img src="zakupy.png" alt="hurtownia">
    <p>email: <a href="mailto:hurt@poczta2.pl">hurt@poczta2.pl</a></p>
</div>
<div class="stopka">
    <h4>Witrynę wykonał: Szymon N</h4>
</div>

