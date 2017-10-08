

<?php

    require_once 'views/header.php';
?>

<?php
/**
 * Supprimer un article du panier
 *
 * @param String    $ref_article numéro de référence de l'article à supprimer
 * @return Boolean  Retourn TRUE si la suppression a bien été effectuée, FALSE sinon
 */
function supprim_article($ref_article)
{
    $suppression = false;
    /* création d'un tableau temporaire de stockage des articles */
    $panier_tmp = array("id_article"=>array(),"qte"=>array(),"categorie"=>array(),"prix"=>array());
    /* Comptage des articles du panier */
    $nb_articles = count($_SESSION['panier']['id_article']);
    /* Transfert du panier dans le panier temporaire */
    for($i = 0; $i < $nb_articles; $i++)
    {
        /* On transfère tout sauf l'article à supprimer */
        if($_SESSION['panier']['id_article'][$i] != $ref_article)
        {
            array_push($panier_tmp['id_article'],$_SESSION['panier']['id_article'][$i]);
            array_push($panier_tmp['qte'],$_SESSION['panier']['qte'][$i]);
            array_push($panier_tmp['categorie'],$_SESSION['panier']['categorie'][$i]);
            array_push($panier_tmp['prix'],$_SESSION['panier']['prix'][$i]);
        }
    }

    /* Le transfert est terminé, on ré-initialise le panier */
    $_SESSION['panier'] = $panier_tmp;
    /* Option : on peut maintenant supprimer notre panier temporaire: */
    unset($panier_tmp);
    $suppression = true;
    return $suppression;
}
?>

<!--supprimer notre livre
-->
<?php
$reference = "liv1552";
$retrait = supprim_article($reference);
?>


<?php

    require_once 'views/footer.php';

?>

