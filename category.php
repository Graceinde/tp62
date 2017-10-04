
<?php

define ('BOOK_NAME', 'book_name');
define ('BOOK_IMG', 'book_img');
define ('BOOK_DESC', 'book_desc');
define ('BOOK_PRIX', 'book_prix');

define ('BOOK_CATEGORY_NAME', 'book_category_name');
define ('BOOK_CATEGORY_ALT', 'book_category_alt');
define ('BOOK_CATEGORY_URL', 'book_category_url');

$category = array(
    10 => array(
        BOOK_CATEGORY_NAME=> 'livre pour enfants entre 6-8 ans',
        BOOK_IMG => 'images/livres-6-8ans/brune_du_lac_une_mysterieuse_disparition.jpg',
        BOOK_CATEGORY_URL => 'livres_6_8ans.php',
        BOOK_CATEGORY_ALT => 'Photo livre',
    ),

    20 => array(
        BOOK_CATEGORY_NAME=> 'livre 12 ans et plus',
        BOOK_IMG => 'images/livres-12ans-et-plus/judith.jpg',
        BOOK_CATEGORY_URL => 'livres_12ans_et_plus.php',
        BOOK_CATEGORY_ALT => 'Photo livre',
    ),

    30 => array(
        BOOK_CATEGORY_NAME=> 'livre 18 ans et plus',
        BOOK_IMG => 'images/livres-18ans-et-plus/I\'m_your_man.jpg',
        BOOK_CATEGORY_URL => 'livres_18ans_et_plus.php',
        BOOK_CATEGORY_ALT => 'Photo livre',
    ),

);
?>
<?php

$livres = array(
    1 => array(
        BOOK_NAME => 'Brune du lac une mysterieuse disparition',
        BOOK_IMG  => 'images/livres-6-8ans/brune_du_lac_une_mysterieuse_disparition.jpg',
        BOOK_DESC => 'Nom :Brune du lac une mysterieuse disparition<br/>
                      Description :C\'est une mysterieuse disparition dans une vie d\'une personne<br/>
                      Categorie : livre pour enfants entre 6-8 ans<br/>',
        BOOK_PRIX => '20$',
    ),

    2 => array(
        BOOK_NAME => 'Clifford joue au baseball',
        BOOK_IMG  => 'images/livres-6-8ans/clifford_joue_au_baseball.jpg',
        BOOK_DESC => 'Nom :Clifford joue au baseball<br/>
                      Description :L\'histoire d\'un grand chien rouge<br/>qui joue au baseball avec des enfants<br/>
                      Categorie : livre pour enfants entre 6-8 ans<br/>',
        BOOK_PRIX => '15$',
    ),

    3=> array(
        BOOK_NAME => 'Le journal secret d\'Alice Aubry',
        BOOK_IMG  => 'images/livres-6-8ans/le_journal_secret_d\'alice_aubry.jpg',
        BOOK_DESC => ' Nom :Le journal secret d\'Alice Aubry<br/>
                       Description : Alice Aubry ecrit son journal<br/>intime car elle aime ecrire<br/>
                       Categorie : livre pour enfants entre 6-8 ans<br/>',
        BOOK_PRIX => '5$',
    ),

    4=> array(
        BOOK_NAME => 'Un piano pour Pavel',
        BOOK_IMG  =>'images/livres-6-8ans/un_piano_pour_pavel.jpg',
        BOOK_DESC => 'Nom :Un piano pour Pavel<br/>
                      Description :Pavel souhaite avoir un piano,<br/>la musique est sa vie<br/>
                      Categorie : livre pour enfants entre 6-8 ans<br/>',
        BOOK_PRIX => '10$',
    ),

    5=> array(
        BOOK_NAME => 'Une affaire obscure',
        BOOK_IMG  => 'images/livres-6-8ans/une_affaire_obscure.jpg',
        BOOK_DESC => '  Nom : Une affaire obscure<br/>
                        Description : Une affaire secret entre des<br/>amis dans l\'obscurite<br/>
                        Categorie : livre pour enfants entre 6-8 ans<br/>',
        BOOK_PRIX => '25$',
    ),

    6=> array(
        BOOK_NAME => 'Judith',
        BOOK_IMG  => 'images/livres-12ans-et-plus/judith.jpg',
        BOOK_DESC => ' Nom : Judith<br/>
                       Description : Histoire de manga sur Judith<br/>
                       Categorie : livre pour enfants 12 ans et plus<br/>',
        BOOK_PRIX => '30$',
    ),

    7=> array(
        BOOK_NAME => 'Naruto',
        BOOK_IMG  =>'images/livres-12ans-et-plus/naruto.jpg',
        BOOK_DESC => 'Nom : Naturo<br/>
                      Description : Naturo est un livre de manga<br/>
                      Categorie : livre pour enfants 12 ans et plus<br/>',
        BOOK_PRIX => '35$',
    ),

    8=> array(
        BOOK_NAME => 'One Punch Man',
        BOOK_IMG  => 'images/livres-12ans-et-plus/one_punch_man.jpg',
        BOOK_DESC => 'Nom : One Punch Man<br/>
                      Description : livre sur la violence<br/>
                      Categorie : livre pour enfants 12 ans et plus<br/>',
        BOOK_PRIX => '25$',
    ),

    9=> array(
        BOOK_NAME => 'Strawberry Panic',
        BOOK_IMG  => 'images/livres-12ans-et-plus/strawberry_panic.jpg',
        BOOK_DESC => ' Nom : Strawberry Panic<br/>
                       Description : Groupe d\'amis de filles <br/>
                       Categorie : livre pour enfants 12 ans et plus<br/>',
        BOOK_PRIX => '13.99$',
    ),

    10=> array(
        BOOK_NAME => 'Tokyo Ghoul',
        BOOK_IMG  => 'images/livres-12ans-et-plus/tokyo_ghoul.jpg',
        BOOK_DESC => ' Nom : Tokyo Ghoul<br/>
                       Description : Livres de manga a Tokyo<br/>
                       Categorie : livre pour enfants 12 ans et plus<br/>',
        BOOK_PRIX => '5$',
    ),

    11=> array(
        BOOK_NAME => 'I\'m your man',
        BOOK_IMG  => 'images/livres-18ans-et-plus/I\'m_your_man.jpg',
        BOOK_DESC => ' Nom : I\'m your man<br/>
                       Description : La vie de Leonard Cohen<br/>
                       Categorie : livre pour Adulte <br/>',
        BOOK_PRIX => '45$',
    ),

    12=> array(
        BOOK_NAME => 'Le voyage',
        BOOK_IMG  => 'images/livres-18ans-et-plus/le_voyage.jpg',
        BOOK_DESC => ' Nom : Le voyage<br/>
                       Description : voyage de deux etre vivant dans le Monde <br/>
                       Categorie : livre pour Addulte <br/>',
        BOOK_PRIX => '20$',
    ),

    13=> array(
        BOOK_NAME => 'Un secret',
        BOOK_IMG  => 'images/livres-18ans-et-plus/un_secret.jpg',
        BOOK_DESC => ' Nom : Un secret<br/>
                       Description : Un secret entre une femme et un homme<br/>
                       Categorie : livre pour Adulte <br/>',
        BOOK_PRIX => '40$',
    ),

    14=> array(
        BOOK_NAME => 'Une colonne de feu',
        BOOK_IMG  => 'images/livres-18ans-et-plus/une_colonne_de_feu.jpg',
        BOOK_DESC => 'Nom : Une colonne de feu<br/>
                      Description : La ville est en feu precisement une colonne<br/>
                      Categorie : livre pour Adulte <br/>',
        BOOK_PRIX => '30$',
    ),

    15=>array(
        BOOK_NAME => 'Vipere au poing',
        BOOK_IMG  => 'images/livres-18ans-et-plus/vipere_au_poing.jpg',
        BOOK_DESC => ' Nom : Vipere au poing<br/>
                       Description :Une femme est une vipere<br/>
                       Categorie : livre pour Adulte <br/>',
        BOOK_PRIX => '50$',
    ),
);
?>