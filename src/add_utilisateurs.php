<?php
// * Afficher les données rentrées dans le formualire de $_POST
if ($_POST) {
    // print_r($_POST);

    // * Est-ce que les champs de formulaire sont définis
    if (
        isset($_POST["first_name"])
        && isset($_POST["last_name"])
        && !empty($_POST["first_name"])
        && !empty($_POST["last_name"])
    ) {

        // * Enlève les balises HTML et PHP des STRING
        $first_name = strip_tags($_POST["first_name"]);
        $first_name = strip_tags($_POST["last_name"]);

        // * Définition de la variable id
        $id = $_POST["id"];

        // * Définition de la variable first_name
        $first_name = $_POST["first_name"];

        // * Définition de la variable last_name
        $last_name = $_POST["last_name"];

        // * Check si connexion réussie
        require_once "connect.php";

        // * Requête SQL pour ajouter des données (finir le commentaire)
        $sql = "INSERT INTO utilisateurs (first_name, last_name) VALUES (:first_name, :last_name)";

        // * préparation de la base de données SQL
        $query = $db->prepare($sql);

        // * Rattacher les valeurs de bindValue id à la requête SQL
        // $query->bindValue(":id", $id, PDO::PARAM_INT);

        // * Rattacher les valeurs de bindValue first_name à la requête SQL
        $query->bindValue(":first_name", $first_name, PDO::PARAM_STR_CHAR);

        // * Rattacher les valeurs de bindValue last_name à la requête SQL
        $query->bindValue(":last_name", $last_name, PDO::PARAM_STR_CHAR);

        // * Exécution de la requête SQL
        // $query->execute();

        // * récupération des données de la requête sql
        // $utilisateurs = $query->fetchAll(PDO::FETCH_ASSOC);

        // * close de la fonction connexion réussie
        require "disconnect.php";

        // * Renvoyer le nouvel utilisateurs à la page d'accueil après ajout
        header("Location: index.php");

        // * Pour terminer toutes exécution de scripts
        exit;
    }
}
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