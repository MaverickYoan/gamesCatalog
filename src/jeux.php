<?php
require_once "connect.php";

// * sql SELECT
$sql = "SELECT * FROM add_utilisateurs";

// * préparation de la requête sql
// $query = $db->prepare($sql);

// * exécution de la requête sql
// $query->execute();

// * récupération des données de la requête sql
// $add_utilisateurs = $query->fetchAll(PDO::FETCH_ASSOC);

// * afficher la table utilisateurs
print_r($utilisateurs);

require "disconnect.php";
?>


<!DOCTYPE html>
<html lang="fr">

<!-- HEAD -->

<head>
    <!-- // - 2 - META -->
    <meta charset=utf-8>
    <meta content="width=device-width,initial-scale=1" name=viewport>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="icon" href="favicon.ico" type="image/x-svg">
    <!-- TITRE -->
    <title>GamesCatalog-add_utilisateurs</title>
</head>

<!-- BODY -->

<body id="content">

    <h1>add_utilisateurs</h1>
    <p>créer table sql utilisateurs</p>

    <h1 style="color:green; font-size:14px;">TABLE SQL utilisateurs</h1>

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

        </tbody>
    </table>

    <!-- NAVBAR -->
    <nav class="navbar">
        <ul class="nav-links" id="navLinks">
            <li><a class="links" href="http://localhost:8000/jeux.php?=0">jeux</a></li>
            <li><a class="links" href="http://localhost:8000/index.php">index</a></li>
            <li><a class="links" href="http://localhost:8000/add_utilisateurs.php">add_utilisateurs</a></li>
            <li><a class="links" href="http://localhost:8000/add_jeux.php">add jeux</a></li>
            <li><a class="links" href="http://localhost:8000/contact.php">Contact</a></li>
            <a href="/">Back to menu</a>
        </ul>
    </nav>

    <hr />

    <img width="10%" src="comparaison-animation-gif-transparent.gif" alt="Terre qui tourne sur elle-même">

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