
<?php

    require_once 'autres_articles.php';
    require_once 'modifier_qte_article.php';
    require_once 'vider_panier.php';

    require_once 'views/header.php'

?>

<?php

session_start();
/* Initialisation du panier */
$_SESSION['panier'] = array();

/* Subdivision du panier */
$_SESSION['panier']['id_article'] = array();
$_SESSION['panier']['qte'] = array();
$_SESSION['panier']['categorie'] = array();
$_SESSION['panier']['prix'] = array();

?>

<!--/*Voir si le panier existe*/
-->

<?php

/* Démarrage ou prolongation de la session */
/* Article exemple */
$select = array();
$select['id'] = "Brune du lac une mysterieuse disparition";
$select['qte'] = 1;
$select['categorie'] = "10";
$select['prix'] = 20;

/* On vérifie l'existence du panier, sinon, on le crée */
if(!isset($_SESSION['panier']))
{
    /* Initialisation du panier */
    $_SESSION['panier'] = array();
    /* Subdivision du panier */
    $_SESSION['panier']['qte'] = array();
    $_SESSION['panier']['categorie'] = array();
    $_SESSION['panier']['prix'] = array();
}

/* Ici, on sait que le panier existe, donc on ajoute l'article dedans. */
array_push($_SESSION['panier']['id_article'],$select['id']);
array_push($_SESSION['panier']['qte'],$select['qte']);
array_push($_SESSION['panier']['categorie'],$select['categorie']);
array_push($_SESSION['panier']['prix'],$select['prix']);

?>
<pre>
<?php
var_dump($_SESSION['panier']);
?>
</pre>

<?php

require_once 'views/footer.php';

?>

