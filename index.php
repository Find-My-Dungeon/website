<?php
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Home-FMD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <div class="logo">
        <img src="img/logo.png" alt="logo">
    </div>
    <div>
        <div class="header-menu">
            <h2 class="menu-dropdown">Mes fiches</h2>
            <div class="fiches-dropdown-content">
                <a href="#">Personnages</a>
                <a href="#">Aventure</a>
            </div>
            <h2 class="menu-link"><a href="#">Rechercher</a></h2>
        </div>
    </div>
    <div class="menu-icone">
        <img src="img/user.png" alt="user">
        <div class="user-dropdown-content">
            <a href="#">Mon profil</a>
            <a href="#">Déconnexion</a>
        </div>
        <img src="img/cloche.png" alt="cloche">
        <div class="notifications"></div>
    </div>
</header>
<main>
    <div class="home-welcome">
        <h1>Bienvenue sur FMD</h1>
        <p>Le site qui vous permet de créer et gérer vos fiches de personnages et vos aventures !</p>
    </div>
    <div class="home-players">
        <h3>Nos nouveaux.elles aventuriers.ières :</h3>
        <div class="home-players-list">
            <div class="home-players-list-item-1"></div>
            <div class="home-players-list-item-2"></div>
            <div class="home-players-list-item-3"></div>
        </div>
    </div>
    <div class="home-scenarios">
        <h3>Nos nouvelles aventures :</h3>
        <div class="home-scenarios-list">
            <div class="home-scenarios-list-item-1"></div>
            <div class="home-scenarios-list-item-2"></div>
            <div class="home-scenarios-list-item-3"></div>
        </div>
    </div>
    <div class ="home-news">
        <h3>Les dernières news :</h3>
        <div class="home-news-list">
            <div class="home-news-list-item-1"></div>
            <div class="home-news-list-item-2"></div>
            <div class="home-news-list-item-3"></div>
        </div>
    </div>
</main>
<footer>
    <p>FindMyDungeon a été créé dans le cadre de nos études avec le CESI</p>
    <div class="footer-dev">
        <p>Rémi Chartier</p>
        <p>Thomas Giresse</p>
        <p>Alexis Loison</p>
    </div>
</footer>
</body>
</html>
