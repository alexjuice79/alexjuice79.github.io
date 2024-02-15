<?php
$dbSetup="mysql:host=localhost;dbname=alexjuice79;charset=utf8";
$dbUser="root";
$dbPassword="root";
$dbErrMode=[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
$conn = new PDO($dbSetup, $dbUser, $dbPassword, $dbErrMode);
?>