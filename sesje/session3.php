<?php
    session_start();
    echo 'Welcome to page #3<br>';
    echo 'Ulubione zwierze: '.$_SESSION['animal']."<br>";
    unset($_SESSION['animal']);
    echo 'Ulubione zwierze: '.$_SESSION['animal']."<br>";
    echo'<br> <a href="session2.php">Page 2</a>';
?>