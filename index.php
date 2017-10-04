
<?php
require_once ('category.php');
require_once ('views/header.php');

?>
<ul>
<?php

    foreach($category as $cat => $book){ ?>
        <li><a href="<?=$book[BOOK_CATEGORY_URL]?>?id=<?= $cat?>">
             <img src="<?=$book[BOOK_IMG]?>" alt="<?=$book[BOOK_CATEGORY_ALT]?>">
             <h2><?=$book[BOOK_CATEGORY_NAME]?></h2>
        </a></li>

    <?php } ?>
</ul>

<?php
require_once 'views/footer.php';
?>