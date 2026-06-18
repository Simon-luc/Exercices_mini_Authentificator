<?php
session_start();

if(isset($_SESSION["username"])){
    header("Location: dashboard.php");
    };

if($_SERVER['REQUEST_METHOD']=== "POST"){
    $username = $_POST["username"] ?? "";
    $password =$_POST["password"] ?? "";

    if($username === "admin" && $password === "azerty"){
        $_SESSION["username"] = $username;
        header("Location: dashboard.php");
        exit;
    }
    else{
        echo "Mot de passe ou pseudo invalide " ;
    }
};
?>

<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>

<body>
    <h1>Formulaire</h1>
        <form action="login.php" method="POST">

        <label for="username">username</label>
        <input type="text" name="username" id="username" placeholder="pseudo">

        <label for="password">Mots de passe</label>
        <input type="password" name="password" id="password" placeholder="mots de passe">

        <button type="submit">Valider</button>

    </form>

</body>
</html>