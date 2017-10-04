
<?php
require_once ('category.php');
require_once ('views/header.php');
?>


<?php
foreach ($livres as $liv => $livre) ?>
<div id="livres-de6-8ans">
    <img src="<?=$livres[BOOK_IMG]?>">
    <p><?=BOOK_DESC?></p>

<div>
?>
<?php
require_once 'views/footer.php';