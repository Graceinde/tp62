

<?php

require_once 'views/header.php';
?>

<?php
function vider_panier()
{
    $vide = false;
    unset($_SESSION['panier']);
    if(!isset($_SESSION['panier']))
    {
        $vide = true;
    }
    return $vide;
}
?>

<?php
$vider = vider_panier();
?>
<p>Panier <?php echo($vider?"vidé":"encore plein"); ?>.</p>
Supprimer un article du pannier :
<?php
/**
 * Vider le panier
 *
 * @return Mixed    Retourne VRAI si l'exécution s'est correctement déroulée, Faux sinon et "inexistant" si
 *                  le panier avait déjà été détruit ou n'avait jamais été créé.
 */
function vide_panier()
{
    $vide = false;
    if(isset($_SESSION['panier']))
    {
        unset($_SESSION['panier']);
        if(!isset($_SESSION['panier']))
        {
            $vide = true;
        }
    }
    else
    {
        /* Le panier était déjà détruit, on renvoie une autre valeur exploitable au retour */
        $vide = "inexistant";
    }
    return $vide;
}
?>

<?php

require_once 'views/footer.php';
?>
