
<!-- 
<?php
$wzorzec='/([0123]?\d)+[-\.\/]+([01]?\d)+[-\.\/]+(\d{4})/';
$tekst="11.09.2001";
if(preg_match($wzorzec,$tekst,$matches))
    echo "tak ".$matches[0];
else
    echo "nie";
?> -->


<!-- <?php
$wzorzec='/[-\w.]+@([-A-z0-9]+\.)[A-z]+/';
$tekst="szymon.nieciag@wp.com email";
if(preg_match($wzorzec,$tekst,$matches))
    echo "tak ".$matches[0];
else
    echo "nie";
?> -->


<!-- <?php
$wzorzec='/[-\w.]+@([-A-z0-9]+\.)[A-z]+/';
$tekst="szymon@wp.com email";
if(preg_match($wzorzec,$tekst,$matches))
    echo "tak ".$matches[0];
else
    echo "nie";
?> -->

<!-- <?php
$wzorzec='/((\bhttps?:\/\/)|(\bwww\.))\S*/';
$tekst="https://wp.com ";
if(preg_match($wzorzec,$tekst,$matches))
    echo "tak ".$matches[0];
else
    echo "nie";
?> -->


<!-- <?php
$wzorzec='/[0-9]{11}/';
$tekst="12345678901 ";
if(preg_match($wzorzec,$tekst,$matches))
    echo "tak ".$matches[0];
else
    echo "nie";
?> -->

<!-- <?php
$wzorzec='/((\bul.)|(\bos.))\S* (\d{3})/';
$tekst="ul.janakochanowskiego 222a ";
if(preg_match($wzorzec,$tekst,$matches))
    echo "tak ".$matches[0];
else
    echo "nie";
?> -->

<?php
$wzorzec='/((\bul.)|(\bos.))\S* (\d{3})+[A-z]/';
$tekst="ul.janakochanowskiego 222a wojanowice";
if(preg_match($wzorzec,$tekst,$matches))
    echo "tak ".$matches[0];
else
    echo "nie";
?>