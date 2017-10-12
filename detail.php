
<?php
    require_once 'defines.php';
    $page_title = 'Detail';
    require_once 'data/_data_categories.php';
    require_once 'data/_data_products.php';

    $prod_id = '';

    if(array_key_exists("prod_id",$_GET) && array_key_exists($_GET["prod_id"],$products) ) {

        $prod_id = $_GET["prod_id"];

    }else {
        header('Location:index.php');
        exit('VALEUR DES CAT_ID REJETE -> EXIT');

    }
    $prod = $products[$prod_id];

    require_once 'views/header.php';
?>

    <div id="content">
             <ul>
                 <h2 id="livre_nom"><?= $prod[PROD_NAME] ?></h2>
                 <img src="images/categ/<?= $prod[PROD_IMG] ?>" alt="images img" id="images">
                 <p><?= $prod[PROD_DESC] ?></p>
             </ul>
    </div>

<?php

require_once 'views/footer.php';

?>