
<?php
require_once 'defines.php';
require_once 'db01/_data_categories.php';
require_once 'db01/_data_products.php';
$page_title = 'Category';
require_once 'views/header.php';
?>

<?php
    foreach ($categories as $cat_id => $cat) {?>
        <div id="livres-12-ans-et-plus">
        <a href="livres.php?cat_id=<?=$cat_id?>">

                <img src="images/categ/<?=$cat[CAT_IMG]?>">
                <p><?=$cat[CAT_DESC]?></p>
                <h2><?=$cat[CAT_NAME]?></h2>

            </a>
        </div>
    <?php  }?>
<?php
require_once 'views/footer.php';
