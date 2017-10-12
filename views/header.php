<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/main.css" />
    <link rel="icon" href="images/favicon-teetime.png"/>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="script/cart.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
                                <li><a href="index.php">Accueil</a></li>
                                <li><a href="category.php">Catalogue</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="login.php" id="login">Login</a></li>
                                <li><a href="logout.php" id="logout">Logout</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

                    <!-- MENU SEARCH BAR -->
                    <form class="col-3" action="process.php" method="post">
                        <div id="loupe">

                        <label for="search"></label>
                        <input type="search" id="search" name="search" placeholder="   Recherche">
                        <input class="search-loupe" type="image" src="images/icons/icon-loupe.png" alt="Icon de la loupe pour effectuer une recherche">
                        </div>

                    </form>

                    <!-- PANIER -->
    <div>
        <a href="../panier/panier.php"> <img src="images/panier_img.png" alt="" id="panier"></a>
    </div>



</form>
        <img src="images/livres.jpg" alt="Les livres" id="banner">
    </header>
</div>
</body>