
<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/main.css" />
</head>
<body>
<div id="wrapper">
    <header>

<form>
        <div class="menu-all">
            <img src="images/logo.jpg" alt="Logo" id="logo">
            <div class="mobile-nav">
                <div class="nav-deroulante">
                    <div>
                        <nav>
                            <ul class="nav-ul-1">
                                <li><a href="accueil.html">Accueil</a></li>
                                <li><a href="catalogue.php">Catalogue</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- MENU SEARCH BAR -->
                    <form class="col-3" action="process.php" method="post">
                        <div id="loupe">
                        <label for="search"></label>
                        <input type="search" id="search" name="search" placeholder="   Recherche">
                        <input class="search-loupe" type="image" src="images/icons/icon-loupe.png" alt="Icon de la loupe pour effectuer une recherche">
                        </div>
                    </form>
                </div>
        </div>
        </div>
</form>
        <img src="images/banner.jpg" alt="Les livres" id="banner">
    </header>
</div>
