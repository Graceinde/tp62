<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/main.css" />
    <title><?=SITE_NAME?></title>
</head>
<body>
<dv id="wrapper">
    <header>
        <h1><?=$title?></h1>
        </div>

        <nav>
            <ul>
                <li><a href="reservation.html">Accueil</a></li>
                <li><a href="menu.html">Catalogue</a></li>
                <li><a href="contact.html">Contacter</a></li>
            </ul>
        </nav>
        <!-- HEADER LANG -->
        <nav>
            <ul>
                <li><a href="en.html">EN</a></li>
                <li><a href="index.html">FR</a></li>
            </ul>
        </nav>
        <!-- HEADER SEARCH BAR -->
        <form action="process.php" method="post">
        <div class="search">
            <label for="search"></label>
            <input type="search" id="search" name="search" placeholder="Recherche" />
            <input type="image" id= "loupe" src="images/icons/icon-loupe.png" alt="Icon d'une loupe pour effectuer une recherche" />
        </div>
        </form>
        <img src="images/banner.jpg" alt="Les livres" id="banner">
    </header>
</body>
</html>