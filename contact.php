<?php

require_once 'defines.php';
require_once 'views/header.php';

?>

<?php

define('K_IS_VALID', 'k_is_valid');
define('K_VALUE', 'k_value');
define('K_FORMAT', 'k_format');
define('K_ERR_MSG','k_err_msg');

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
define('ATTR_CHECKED', ' checked="cheched"');
define('ATTR_SELECTED', ' selected="selected"');
define('CLASS_INVALID', ' invalid');


$vld = array(

    FN_TITRE => array(
        K_IS_VALID => false,
        K_VALUE => null,
        K_FORMAT => '/\w{2,}/',
    ),

    FN_NOM => array(
        K_IS_VALID => false,
        K_VALUE => null,
        K_FORMAT => '/\w{2,}/',
        K_ERR_MSG => 'Le nom doit comporter au moins deux lettres.',
    ),

    FN_PRENOM => array(
        K_IS_VALID => false,
        K_VALUE => null,
        K_FORMAT => '/\w{2,}/',
        K_ERR_MSG => 'Le prenom doit comporter au moins deux lettres.',
    ),

    FN_LANGUE => array(
        K_IS_VALID => false,
        K_VALUE => null,
        K_FORMAT => null,
        K_ERR_MSG => 'Une langue doit être cochée.',
    ),

    FN_COURRIEL => array(
        K_IS_VALID => false,
        K_VALUE => null,
        K_FORMAT => null,
    ),

    FN_TELEPHONE => array(
        K_IS_VALID => false,
        K_VALUE => null,
        K_FORMAT => null,
    ),

    FN_ADRESSE => array(
        K_IS_VALID => false,
        K_VALUE => null,
        K_FORMAT => null,
    ),

    FN_VILLE => array(
        K_IS_VALID => false,
        K_VALUE => null,
        K_FORMAT => null,
        K_ERR_MSG => 'Une ville doit être choisi.',
    ),

    FN_PROVINCE => array(
        K_IS_VALID => false,
        K_VALUE => null,
        K_FORMAT => null,
        K_ERR_MSG => 'Une province doit être cochée.'
    ),

    FN_CODE_POSTAL => array(
        K_IS_VALID => false,
        K_VALUE => null,
        K_FORMAT => null,
    ),

    FN_CATEGORY => array(
        K_IS_VALID => false,
        K_VALUE => null,
        K_FORMAT => null,
        K_ERR_MSG => 'Une category doit être choisi.',
    ),

    FN_COMMENTAIRE => array(
        K_IS_VALID => false,
        K_VALUE => null,
        K_FORMAT => '/\w{10,}/',
        K_ERR_MSG => 'Le commentaire doit contenir au moins 100 caractères.',
    ),
);

?>
<!DOCTYPE html>
<html>
<head lang="fr">
    <meta charset="UTF-8">
    <title>Formulaire de contact</title>
    <link rel="stylesheet" href="style/main.css" />
</head>
<body>

<div id="formulaire-contact">

<h1 id="formulaire">Formulaire de contact</h1>
<div class="form-container">
    <form class="formulaire_employe" method="post">


        <!-- Champ du titre (input text) -->
        <div class="titre">
            <label for="<?= FN_TITRE ?>">*Titre :</label>
            <select name="<?= FN_TITRE ?>" id="<?= FN_TITRE ?>">

                <option value="">-</option>
                <option value="Monsieur">Monsieur</option>
                <option value="Madame">Madame</option>
                <option value="Mademoiselle">Mademoiselle</option>

            </select>
        </div>
        <br/>

            <!-- Champ du nom (input text) -->
        <div class="form-group ">
            <div class="nom">
                <label for="<?= FN_NOM ?>" >*Nom :</label>
                <input type="text" name="<?= FN_NOM ?>" id="<?= FN_NOM ?>" value=""/>
            <div>
        </div>
        <br/>

        <!-- Champ du prenom (input text) -->
        <div class="prenom">

            <label for="<?= FN_PRENOM ?>" >*Prenom :</label>
            <input type="text" name="<?= FN_PRENOM ?>" id="<?= FN_PRENOM ?>" value=""/>

        </div>
        <br/>

        <!-- Champ de la langue (groupe de radios) -->
        <div class="language ">

            <label for="lang_fr">*Langue :</label>

            <label for="lang_fr">Fr</label>
            <input type="radio" name="<?=FN_LANGUE?>" value="lang_fr" id="lang_fr"/>

            <label for="lang_en">En</label>
            <input type="radio" name="<?= FN_LANGUE ?>" value="lang_en" id="lang_en"/>

            <label for="lang_es">Es</label>
            <input type="radio" name="<?= FN_LANGUE ?>" value="lang_es" id="lang_es"/>

        </div>
        <br/>

        <!-- Champ du courriel  -->
        <div class="courriel ">

            <label for="<?= FN_COURRIEL ?>">*Courriel :</label>
            <span class="ip_left"></span>
            <input type="text" name="<?= FN_COURRIEL ?>" size="50" maxlength="250" value="" id="<?= FN_COURRIEL ?>" class="ip_text"/>
            <span class="ip_right"></span>
        </div>
        <br/>

        <!-- Champ du telephone  -->
        <div class="telephone">
            <div class="container">
                <label for="<?= FN_TELEPHONE?>">*Téléphone :</label>
                <span class="ip_left"></span>
                <input type="text" name="<?= FN_TELEPHONE?>" size="20" maxlength="12" value="" id="<?= FN_TELEPHONE?>" class="ip_text"/>
                <span class="ip_right"></span>
            </div>
        </div>
        <br/>

        <!-- Champ adresse  -->
        <div class="adresse ">

            <label for="<?= FN_ADRESSE ?>" id="adr">*Adresse :</label>
            <input type="text" name="<?= FN_ADRESSE ?>" id="<?= FN_ADRESSE?>" value=""/>

        </div>
        <br/>

        <!-- Champ ville  -->
        <div class="ville ">

            <label for="<?= FN_VILLE ?>" >*Ville :</label>
            <input type="text" name="<?= FN_VILLE ?>" id="<?= FN_VILLE ?>" value=""/>

        </div>
        <br/>

        <!-- Champ province  -->
        <div class="province">
            <div class="contain">
                <label for="<?= FN_PROVINCE ?>">*Province :</label>
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

        <!-- Champ du code postal  -->
        <div class="postal ">

            <label for="<?= FN_CODE_POSTAL ?>" >*Code potal :</label>
            <input type="text" name="<?= FN_CODE_POSTAL ?>" id="<?= FN_CODE_POSTAL ?>" value=""/>

        </div>
        <br/>

        <!-- Champ category (select) -->
        <div class="categorie ">
            <label for="<?=FN_CATEGORY?>">*Categorie de livre :</label>
            <select name="<?=FN_CATEGORY?>" id="<?=FN_CATEGORY?>" >
                <option value="-1">Choisir ...</option>

                <option value="cat_livre_6_8_ans">livres de 6 a 8 ans</option>

                <option value="cat_livre_12_ans_et_plus">Livres 12 ans et plus</option>

                <option value="cat_livre_18_ans_et_plus">Livres 18 ans et plus</option>

            </select>
        </div>
        <br/>

        <!-- Champ comentaire (textarea) -->
        <div class="form-group ">
            <label for="<?=FN_COMMENTAIRE?>">*Commentaire :</label>
            <textarea id="<?=FN_COMMENTAIRE?>" name="<?=FN_COMMENTAIRE?>"></textarea>
        </div>

        <!-- Champ submit (boutton) -->
        <div class="form-group envoyer">
            <input type="submit" value="Envoyer">
        </div>
    </form>
</div>
</div>
</body>
</html>

<?php

require_once 'views/footer.php'

?>

