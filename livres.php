
<?php

require_once 'defines.php';
require_once 'db01/_data_categories.php';
require_once 'db01/_data_products.php';
$page_title = 'Livres';
require_once 'livres.php';
$cat_id = '';
var_dump($_GET);
if(array_key_exists('cat_id',$_GET) && array_key_exists($_GET['cat_id'],$categories)){

    $cat_id =$_GET['cat_id'];
}else {
    header('Location:index.php');
    exit('VALEUR DES CAT_ID REJETE -> EXIT');
}
require_once 'views/header.php';

?>
           <div id="content">
            <?php foreach ($products as $prod_id => $prod){
                if($prod[PROD_CAT]=== $cat_id) {?>

                    <div id="livres 12 ans et plus">
                        <a href="detail.php?prod_id=<?=$prod_id?>">

                            <img src="images/categ/<?= $prod[PROD_IMG] ?>" alt="image du livres">
                            <p><?= $prod[PROD_DESC] ?></p>

                        </a>
                    </div>
                <?php }
            } ?>
        </div>
<?php

require_once 'views/footer.php';
