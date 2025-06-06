<?php
require_once "connect.php";

// $id = "public.utilisateurs.id";


// * Définitions de variables
$id = $_GET["id"];
print_r($id);

// * sql SELECT
$sql = "SELECT * FROM utilisateurs WHERE id = :id";

// * préparation de la requête sql
$query = $db->prepare($sql);
$query->bindValue(":id", $id, PDO::PARAM_INT);

// * exécution de la requête sql
$query->execute();

$intern = $query->fetch();
print_r($utilisateur);

require "disconnect.php";

?>

<!-- http://localhost:8000/jeux.php?id=3 -->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico" type="image/x-svg">
    <link rel="stylesheet" href="styles/styles.css">
    <!-- TITRE -->
    <title>GamesCatalog_jeux</title>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar">
        <ul class="nav-links" id="navLinks">
            <li><a class="links" href="http://localhost:8000/jeux.php?=0">jeux</a></li>
            <li><a class="links" href="http://localhost:8000/index.php">index</a></li>
            <li><a class="links" href="http://localhost:8000/add_utilisateurs.php">add_utilisateurs</a></li>
            <li><a class="links" href="http://localhost:8000/add_jeux.php">add jeu</a></li>
            <li><a class="links" href="http://localhost:8000/contact.php">Contact</a></li>
            <a href="/">Back to menu</a>
        </ul>
    </nav>

    <hr />
    <img width="10%" src="w6a6775zvp661.gif" alt="gif d'ajout d'utilisateurs">
    <br>
    <h1>jeux</h1>
    <p>Prénom : Yo</p>
    <p>Nom : YDM</p>
</body>

</html>