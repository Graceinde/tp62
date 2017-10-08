
<?php

    require_once 'panier.php';
    require_once 'views/header.php';
?>

<?php
$_SESSION['panier'] = array();

/* Subdivision du panier */
$_SESSION['panier']['id_article'] = array();
$_SESSION['panier']['qte'] = array();
$_SESSION['panier']['categorie'] = array();
$_SESSION['panier']['prix'] = array();
?>

<?php

/**
 * Modifie la quantité d'un article dans le panier
 *
 * @param String $ref_article   Identifiant de l'article à modifier
 * @param Int $qte              Nouvelle quantité à enregistrer
 * @return Boolean              Retourne VRAI si la modification a bien eu lieu, FAUX sinon.
 */


function modif_qte($ref_article, $qte)
{
    /* On compte le nombre d'articles différents dans le panier */
    $nb_articles = count($_SESSION['panier']['id_article']);
    /* On initialise la variable de retour */
    $ajoute = false;
    /* On parcoure le tableau de session pour modifier l'article précis. */

    for($i = 0; $i < $nb_articles; $i++)
    {
        if($ref_article == $_SESSION['panier']['id_article'][$i])
        {
            $_SESSION['panier']['qte'][$i] = $qte;
            $ajoute = true;
        }
    }
    return $ajoute;
}
?>

<!--Procédons à l'ajout-->

<?php
$id_art = "Brune du lac une mystirieuse disparition";
$nouvelle_qte = 2;
$modifier = modif_qte($id_art,$nouvelle_qte);
?>

<?php

    require_once 'views/footer.php';
?>
