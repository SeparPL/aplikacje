
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
$tekst="szymon.pniaczek@wp.com email";
if(preg_match($wzorzec,$tekst,$matches))
    echo "tak ".$matches[0];
else
    echo "nie";
?> -->


<!-- <?php
$wzorzec='/[-\w.]+@([-A-z0-9]+\.)[A-z]+/';
$tekst="szymon.pniaczek@wp.com email";
if(preg_match($wzorzec,$tekst,$matches))
    echo "tak ".$matches[0];
else
    echo "nie";
?> -->

<?php
$wzorzec='/((\bhttps?:\/\/)|(\bwww\.))\S*/';
$tekst="https://wp.com ";
if(preg_match($wzorzec,$tekst,$matches))
    echo "tak ".$matches[0];
else
    echo "nie";
?>
