<?php
    session_start();
    $name = $_SESSION['user'];
    echo "Hello $name !";
?>