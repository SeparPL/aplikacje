<?php
$file=fopen("nowytext.txt","w")
or die("Unable to open file");
$txt="Zawartosc nowego pliku \n";
fwrite($file,$txt);
fclose($file);
?>