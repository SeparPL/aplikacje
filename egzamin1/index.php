
<meta charset="UTF-8">
<title>Sklep dla uczniów”</title>
<link rel="stylesheet" href="styl.css">
<head>
    <div class="baner">
        <h1 class="baner">Dzisiejsze promocje naszego sklepu</h1>
    </div>
</head>
<body>
    <div class="lewy">
        <h2 >Taniej o 30%</h2><br>
        <?php
            $server = "localhost";
            $user = "root";
            $password = "";
            $db = "sklep";
            $conn = mysqli_connect($server, $user, $password,$db);
            
            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }
            $sql="select nazwa, cena from towary where promocja=1;";
            $wynik=mysqli_query($conn,$sql);
            echo "<ol>";
            if(mysqli_num_rows($wynik)>0){
                while($row=mysqli_fetch_assoc($wynik)){
                    echo "<li>$row[nazwa]</li>";
                };
            };
            echo "</ol>";
            mysqli_close($conn);
            ?>
    </div>
        
    <div class="srodek">
        <h2 >Sprawdź cenę</h2><br>
                <form action="index.php" method="POST">
                <select name="produkt" value="produkt"id="produkt">
                <option value="Gumka do mazania">Gumka do mazania</option>
                <option value="Cienkopis">Cienkopis</option>
                <option value="Pisaki 60 szt.">Pisaki 60 szt.</option>
                <option value="Markery 4 szt.">Markery 4 szt.</option>
            </select>
            <input type="submit" value="SPRAWDŹ">
            <div id="wynik">
            <?php
            $server="localhost";
            $user="root";
            $db="sklep";
            $conn=mysqli_connect($server,$user,$password,$db);
            if(isset($_POST["produkt"])){
                $sql="SELECT cena FROM towary WHERE nazwa = '$_POST[produkt]';";
                $cena=mysqli_query($conn,$sql);
                if(mysqli_num_rows($cena)>0){
                    $wynik=mysqli_fetch_assoc($cena);
                    echo "cena regularna: ".$wynik["cena"]."<br>";
                    echo "cena regularna w promocji 30%: ".$wynik["cena"]*70/100;
                }
            }
            ?>
            </div>
            </form>
        
    </div>
        
    <div class="prawy">
        <h2>Kontakt</h2>
        <img  src="promocja.png" alt="promocja">
        <p>email: <a href="mailto:bok@sklep.pl">bok@sklep.pl</a></p>
    </div>
</body>

<footer>  
    <div class="stopka">
        <h4 >Autor strony: Szymon N</h4>
    </div>
</footer>