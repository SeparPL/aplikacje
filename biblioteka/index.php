
<meta charset="UTF-8">
<title>Biblioteka Publiczna</title>
<link rel="stylesheet" href="style.css">
<head>
    <div class="baner">
        <h1 class="baner">Biblioteka W Książkownicach Wielkich</h1>
    </div>
</head>
<body>
    <div class="lewy">
        <h3 >Polecamy dzieła autorów</h3><br>
        <?php
            $server = "localhost";
            $user = "root";
            $password = "";
            $db = "biblioteka";
            $conn = mysqli_connect($server, $user, $password,$db);
            
            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }
            $sql="SELECT imie, nazwisko FROM autorzy ORDER BY nazwisko;";
            $wynik=mysqli_query($conn,$sql);
            echo "<ol>";
            if(mysqli_num_rows($wynik)>0){
                while($row=mysqli_fetch_assoc($wynik)){
                    echo "<li>$row[imie] $row[nazwisko]</li>";
                };
            };
            echo "</ol>";
            mysqli_close($conn);
            ?>
    </div>
        
    <div class="srodek">
        <h3>ul. Czytelnicza 25, <br>Książkowice Wielkie<h3><br>
        
        <p><a href="mailto:bok@sklep.pl">Napisz do nas</a></p>
        <img  src="biblioteka1.png" alt="książki">
        
    </div>
        
    <div class="prawy1">
        <h3>Dodaj czytelnika</h3>
        <form action="index.php" method="post">
            Imię: <input type="text" name="imie"><br><br>
            nazwisko: <input type="nazwisko" name="nazwisko"><br><br>
            symbol: <input type="text" name="symbol"><br>
            <input type="submit" value="DODAJ">
        </form>
    </div>
    <div class="prawy2">
        <p id=wynik></p>
        <?php
        $server = "localhost";
            $user = "root";
            $password = "";
            $db = "biblioteka";
            $conn = mysqli_connect($server, $user, $password,$db);
            $imie=$_POST["imie"];
            $nazwisko=$_POST["nazwisko"];
            $kod=$_POST["symbol"];
            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }
            $sql="INSERT INTO czytelnicy values('','$imie','$nazwisko','$kod');";
            if (mysqli_query($conn,$sql)){
                echo "Czytelnik $_POST[imie] $_POST[nazwisko] został(a) dodany do bazy danych";
            }   
            mysqli_close($conn);
            ?>
    </div>
</body>

<footer>  
    <div class="stopka">
        <h4 >Autor strony: Szymon N</h4>
    </div>
</footer>