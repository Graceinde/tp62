<?php

require_once('defines.php');
require_once('views/header.php');

?>


<?php

// Les noms des champs du formulaire
define('FN_TITRE', 'fn_titre');
define('FN_NOM', 'fn_nom');
define('FN_PRENOM', 'fn_prenom');
define('FN_LANGUE', 'fn_langue');
define('FN_COURRIEL', 'fn_courriel');
define('FN_TELEPHONE', 'fn_telephone');
define('FN_ADRESSE', 'fn_adresse');
define('FN_VILLE', 'fn_ville');
define('FN_PROVINCE', 'fn_province');
define('FN_CODE_POSTAL','fn_code_postal');
define('FN_CATEGORY','fn_category');
define('FN_COMMENTAIRE', 'fn_commentaire');

// Des classes et attributs qui servent souvent

define('ATTR_SELECTED', ' selected="selected"');
define('ATTR_CHECKED', ' checked="cheched"');

// Les "variables" de validation pour chaque champ
$nom_val = null;
$nom_est_valide = false;
$nom_err_msg = 'Le nom doit contenir au moins 2 caractères.';

$prenom_val = null;
$prenom_est_valide = false;
$prenom_err_msg = 'Le prenom doit contenir au moins 2 caractères.';

$courriel_val = null;
$courriel_est_valide = false;
$courriel_err_msg = 'Le courriel est absent ou n\'est pas valide.';

$telephone_val = null;
$telephone_est_valide = false;
$telephone_err_msg = 'Le telephone doit etre des numeros.';

$adresse_val = null;
$adresse_est_valide = false;
$adresse_err_msg = 'L\'adresse doit comporter des numeros et une rue.';

$ville_val = null;
$ville_est_valide = false;
$ville_err_msg = 'La ville doit contenir au moins 30 caractères.';

$province_val = null;
$province_est_valide = false;
$province_err_msg = 'La province doit etre selecte.';

$code_potal__val = null;
$code_potal_est_valide = false;
$code_postal_err_msg = 'Le code postal  doit contenir au moins des numeros et des lettres.';

$categorie_livre_val = null;
$categorie_livre_est_valide = false;
$categorie_livre_err_msg = 'La categorie du livre  doit etre selecte.';

$commentaire_val = null;
$commentaire_est_valide = false;
$commentaire_err_msg = 'Le commentaire doit contenir au moins 250 caractères.';

//var_dump($_POST);

//Réception des données POST
$en_reception = 'POST' === $_SERVER['REQUEST_METHOD'] && array_key_exists(FN_NOM, $_POST) && array_key_exists(FN_PRENOM, $_POST) && array_key_exists(FN_COURRIEL, $_POST) && array_key_exists(FN_TELEPHONE, $_POST) && array_key_exists(FN_ADRESSE, $_POST) && array_key_exists(FN_VILLE, $_POST) && array_key_exists(FN_PROVINCE, $_POST) && array_key_exists(FN_CODE_POSTAL, $_POST) && array_key_exists(FN_COMMENTAIRE, $_POST);

//var_dump('$en_reception:', $en_reception);

//Test de validation
if ($en_reception) {
    //Validation du Champ FN_NOM
    $nom_val = filter_input(INPUT_POST, FN_NOM, FILTER_SANITIZE_STRING);
    $nom_val = trim($nom_val);
    $nom_est_valide = (strlen($nom_val) >= 2);

    //Validation du Champ FN_PRENOM
    $prenom_val = filter_input(INPUT_POST, FN_PRENOM, FILTER_SANITIZE_STRING);
    $prenom_val = trim($prenom_val);
    $prenom_est_valide = (strlen($prenom_val) >= 2);


    //Validation du Champ FN_COURRIEL
    $courriel_val = filter_input(INPUT_POST, FN_COURRIEL, FILTER_VALIDATE_EMAIL);
    $courriel_est_valide = (false !== $courriel_val);

    //Validation du Champ FN_TELEPHONE
    $telephone_val = filter_input(INPUT_POST, FN_TELEPHONE,FILTER_SANITIZE_STRING);
    $telephone_est_valide = (false !== $telephone_val);

    //Validation du Champ FN_ADRESSE
    $adresse_val = filter_input(INPUT_POST, FN_ADRESSE,FILTER_SANITIZE_STRING);
    $adresse_est_valide = (false !== $adresse_val);

    //Validation du Champ FN_VILLE
    $ville_val = filter_input(INPUT_POST, FN_VILLE, FILTER_SANITIZE_STRING);
    $ville_val = trim($ville_val);
    $ville_est_valide = (strlen($ville_val) >= 100);

    //Validation du Champ FN_PROVINCE
    $province_val = filter_input(INPUT_POST, FN_PROVINCE, FILTER_SANITIZE_STRING);
    $province_val = trim($province_val);
    $prenom_est_valide = (false !== $province_val);

    //Validation du Champ FN_CODE_POSTAL
    $code_potal__val = filter_input(INPUT_POST, FN_CODE_POSTAL, FILTER_SANITIZE_STRING);
    $code_potal__val = trim($code_potal__val);

    //Validation du Champ FN_CATEGORY
    $categorie_livre_val = filter_input(INPUT_POST, FN_CATEGORY, FILTER_SANITIZE_STRING);
    $categorie_livre_val = trim($categorie_livre_val);
    $categorie_livre_est_valide = (false !== $categorie_livre_val);

    //Validation du Champ FN_COMMENTAIRE
    $commentaire_val = filter_input(INPUT_POST, FN_COMMENTAIRE, FILTER_SANITIZE_STRING);
    $commentaire_est_valide = (strlen($commentaire_val) >= 250);


    // Validation des 10 champs
    if (($nom_est_valide) && ($prenom_est_valide) && ($courriel_est_valide) && ($telephone_est_valide) && ($adresse_est_valide) && ($ville_est_valide) && ($province_est_valide) && ($categorie_livre_est_valide) && ($commentaire_est_valide)) {
        header('Location: index.php');
    }
}

?>


    <main class="roundedbox">
        <form name="contact_form" method="post">
            <div class="form-line">
                <label for="nom">Nom :</label><!--
        --><input type="text" name="<?= FN_NOM ?>" id="<?= FN_NOM ?>" value="<?= $nom_val ?>"/>
                <?php if ($en_reception && !$nom_est_valide) { ?>
                    <span class="error_case"><?= $nom_err_msg ?></span>
                    <?php
                } ?>
            </div>
            <br/>

            <div class="form-line">
                <label for="prenom">Prenom :</label><!--
        --><input type="text" name="<?= FN_PRENOM ?>" id="<?= FN_PRENOM ?>" value="<?= $prenom_val ?>"/>
                <?php if ($en_reception && !$prenom_est_valide) { ?>
                    <span class="error_case"><?= $prenom_err_msg ?></span>
                    <?php
                } ?>
            </div>
            <br/>

            <div class="form-line">
                <label for="courriel">Courriel :</label><!--
        --><input type="text" name="<?= FN_COURRIEL ?>" id="<?= FN_COURRIEL ?>" value="<?= $courriel_val ?>"/>
                <?php if ($en_reception && !$courriel_est_valide) { ?>
                    <span class="error_case"><?= $courriel_err_msg ?></span>
                    <?php
                } ?>
            </div>
            <br/>

            <div class="form-line">
                <label for="telephone">Telephone :</label><!--
        --><input type="text" name="<?= FN_TELEPHONE ?>" id="<?= FN_TELEPHONE ?>" value="<?= $telephone_val ?>"/>
                <?php if ($en_reception && !$telephone_est_valide) { ?>
                    <span class="error_case"><?= $telephone_err_msg ?></span>
                    <?php
                } ?>
            </div>
            <br/>

            <div class="form-line">
                <label for="adresse">Adresse :</label><!--
        --><input type="text" name="<?= FN_ADRESSE ?>" id="<?= FN_ADRESSE ?>" value="<?= $adresse_val ?>"/>
                <?php if ($en_reception && !$adresse_est_valide) { ?>
                    <span class="error_case"><?= $adresse_err_msg ?></span>
                    <?php
                } ?>
            </div>
            <br/>

            <div class="form-line">
                <label for="ville">Ville:</label><!--
        --><input type="text" name="<?= FN_VILLE ?>" id="<?= FN_VILLE ?>" value="<?= $ville_val ?>"/>
                <?php if ($en_reception && !$ville_est_valide) { ?>
                    <span class="error_case"><?= $ville_err_msg ?></span>
                    <?php
                } ?>
            </div>
            <br/>

            <!-- Champ province  -->
            <div class="form-line">
                <div class="contain">
                    <label for="<?= FN_PROVINCE ?>">Province :</label>
                    <select name="<?= FN_PROVINCE ?>" id="<?= FN_PROVINCE ?>">
                        <option value="Alberta">Alberta</option>
                        <option value="Colombie-Britannique">Colombie-Britannique</option>
                        <option value="Île-du-Prince-Édouard">Île-du-Prince-Édouard</option>
                        <option value="Manitoba">Manitoba</option>
                        <option value="Nouveau-Brunswick">Nouveau-Brunswick</option>
                        <option value="Nouvelle-Écosse">Nouvelle-Écosse</option>
                        <option value="Nunavut">Nunavut</option>
                        <option value="Ontario">Ontario</option>
                        <option value="Québec" selected="selected">Québec</option>
                        <option value="Saskatchewan">Saskatchewan</option>
                        <option value="Terre-Neuve-et-Labrador">Terre-Neuve-et-Labrador</option>
                        <option value="Territoires du Nord-Ouest">Territoires du Nord-Ouest</option>
                        <option value="Yukon">Yukon</option>

                    </select>
                </div>
            </div>
            <br/>

            <div class="form-line">
                <label for="code postal">Code Postal :</label><!--
        --><input type="text" name="<?= FN_CODE_POSTAL ?>" id="<?= FN_CODE_POSTAL ?>" value="<?= $code_potal__val ?>"/>
                <?php if ($en_reception && !$code_potal_est_valide) { ?>
                    <span class="error_case"><?= $code_postal_err_msg ?></span>
                    <?php
                } ?>
            </div>
            <br/>

            <!-- Champ category (select) -->
            <div class="form-line">
                <label for="<?=FN_CATEGORY?>">Categorie de livre :</label>
                <select name="<?=FN_CATEGORY?>" id="<?=FN_CATEGORY?>" >
                    <option value="-1">Choisir ...</option>

                    <option value="cat_livre_6_8_ans">livres de 6 a 8 ans</option>

                    <option value="cat_livre_12_ans_et_plus">Livres 12 ans et plus</option>

                    <option value="cat_livre_18_ans_et_plus">Livres 18 ans et plus</option>

                </select>
            </div>
            <br/>

            <div class="form-line">
                <label for="message">Commentaire :</label><!--
        --><input type="text" name="<?= FN_COMMENTAIRE ?>" id="<?= FN_COMMENTAIRE ?>" value="<?= $commentaire_val ?>"/>
                <?php if ($en_reception && !$commentaire_est_valide) { ?>
                    <span class="error_case"><?= $commentaire_err_msg ?></span>
                    <?php
                } ?>
            </div>
            <br/>

            <!-- Champ submit (button) -->
            <div class="form-line">
                <input type="submit" value="Soumettre" name="soumettre">
            </div>
        </form>
    </main>
<?php
require_once('views/footer.php');
