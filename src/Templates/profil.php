<?php print_r($users) ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>PiloteToday - Mon compte</title>
</head>

<body>
    <header>
        <a href="accueil">
            <h1>PiloteToday</h1>
        </a>
        <a href="connexion">
            <button type="button" id="signInButton">Connexion</button>
        </a>
    </header>
    <section id="topInfo">
        <div id="banner">
        </div>
        <div id="contact">
            <h3>Nous contacter : pilotetoday@gmail.com</h3>
        </div>
    </section>
    <section id="homeContent">
        <h2>Mon compte</h2>
        <div id="personalInfos">
            <p>Prénom :</p>
            <p>Nom :</p>
            <p>Email :</p>
        </div>
        <div id="myReservation">
            <p>Mes réservations :</p>
        </div>
    </section>
    <footer>
        <p>PiloteToday - Tous droits réservés</p>
    </footer>
</body>
</html>