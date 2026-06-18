<?php

session_start();

if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit;
} 
$username = $_SESSION["username"];
    

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <strong><?= " Bienvenue, $username  "?></strong>
    <a href="logout.php">Deconnexion</a>;
</body>
</html>
