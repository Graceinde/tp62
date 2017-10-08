
<?php

    require_once 'modifier_qte_article.php';
    require_once 'supprimer_article.php';

    require_once 'views/header.php';

?>

<?php
/**
 * Ajout d'un article dans le panier
 *
 * @param array $select variable tableau associatif contenant les valeurs de l'article
 */

function ajout($select)
{
    array_push($_SESSION['panier']['id_article'],$select['id']);
    array_push($_SESSION['panier']['qte'],$select['qte']);
    array_push($_SESSION['panier']['categorie'],$select['categorie']);
    array_push($_SESSION['panier']['prix'],$select['prix']);
}
?>

<!--Vérifier qu'un article est (ou n'est pas) dans le panier :
-->

<?php
/**
 * Vérifie la présence d'un article dans le panier
 *
 * @param String $ref_article référence de l'article à vérifier
 * @return Boolean Renvoie Vrai si l'article est trouvé dans le panier, Faux sinon
 */
function verif_panier($ref_article)
{
    /* On initialise la variable de retour */
    $present = false;
    /* On vérifie les numéros de références des articles et on compare avec l'article à vérifier */
    if( count($_SESSION['panier']['id_article']) > 0 && array_search($ref_article,$_SESSION['panier']['id_article']) !== false)
    {
        $present = true;
    }
    return $present;
}
?>

<?php

require_once 'views/footer.php';

?>

