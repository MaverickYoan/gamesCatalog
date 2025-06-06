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


<!DOCTYPE html>
<html lang="fr">

<!-- HEAD -->

<head>
    <!-- // - 2 - META -->
    <meta charset=utf-8>
    <meta content="width=device-width,initial-scale=1" name=viewport>
    <link rel="icon" href="favicon.ico" type="image/x-svg">
    <link rel="stylesheet" href="styles/styles.css">
    <!-- TITRE -->
    <title>GamesCatalog_Index</title>
</head>

<!-- BODY -->

<body id="content">

    <h1>Index</h1>
    <p>créer table sql utilisateurs</p>

    <h1 style="color:green; font-size:14px;">TABLE SQL utilisateurs</h1>
    <pre><?php
            // print_r($utilisateurs)
            ?></pre>
    <!-- // * Table utilisateurs -->
    <table style="border:1px solid black;">
        <thead style="border:1px solid black;">
            <th style="border:1px solid black;">id</th>
            <th style="border:1px solid black;">first_name</th>
            <th style="border:1px solid black;">last_name</th>
            <th style="border:1px solid black;">actions</th>
        </thead>
        <tbody style="border:1px solid black;">
            <tr>
                <td style="border:1px solid black;">123</td>
                <td style="border:1px solid black;">yoan</td>
                <td style="border:1px solid black;">dym</td>
                <td style="border:1px solid black;">noAction</td>
            </tr>

            <?php
            foreach ($utilisateurs as $utilisateur): ?>
                <tr>
                    <td><?= $utilisateur['id'] ?></td>
                    <td><?= $utilisateur['first_name'] ?></td>
                    <td><?= $utilisateur['last_name'] ?></td>
                    <td><a href="jeux.php?id=<?= $utilisateur['id'] ?>">Infos</a></td>

                </tr>
            <?php endforeach ?>

        </tbody>
    </table>

    <br>
    <img width="10%" src="11919432.gif" alt="gif d'ajout d'utilisateurs">
    <br>
    <a href="./jeux.php"><button>Ajouter un jeux</button></a>

    <br>

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

    <?php

    // Affiche toutes les utilisateurs, comme le ferait INFO_ALL
    // phpinfo();

    // Affiche uniquement le module d'utilisateurs.
    // phpinfo(8) fournirait les mêmes utilisateurs.
    // phpinfo(INFO_MODULES);

    ?>

    <!-- back-to-top section -------------->
    <a href="#content" class="back-to-top">
        <span>Retour en haut</span>
        <!-- aria-hidden="true" opur masquer l'icon de l'écran -->
        <svg width="18" height="18" viewbox=" 0 0 24 24" aria-hidden="true">
            <path d="M5 12h14" />
            <path d="m12 5 7 7-7 7" />
        </svg>

        <!-- Script Section : Script pour activer le menu mobile -->
        <script src="script.js"></script>

</body>

</html>