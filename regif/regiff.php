<!-- <?php
$wzorzec='/\S*\.gif/i';
$tekst="w pliku obrazek.gif jest ikona";
if(preg_match($wzorzec,$tekst))
    echo "znaleziono obrazek";
else
    echo "nie znaleziono obrazka";
?> -->


<?php
$wzorzec='/\d{2}-\d{3}/';
$tekst="poczta 34-200 Sucha Beskidzka";
if(preg_match($wzorzec,$tekst,$matches))
    echo "znaleziono kod pocztowy ".$matches[0];
else
    echo "nie znaleziono kodu pocztowego";
?>
