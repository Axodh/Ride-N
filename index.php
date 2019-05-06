<?php $pageTitle =  "Index";
require_once "navbar.php" ?>
<main>
    <div class="container">
        <div class="row">
            <div class="col s12 m6 offset-m3 center">
                <br><h2 class="center white-text"><?php echo $GLOBALS['INDEX_TITLE'] ?></h2>
                <h3 class="center white-text hide-on-med-and-down"><?php echo $GLOBALS['INDEX_SUBTITLE'] ?></h3>
                <a href="autocomplete.php" class="btn-flat center white-text"><?php echo $GLOBALS['INDEX_COMMAND_BUTTON'] ?></a>
            </div>
        </div>
    </div>
</main>
<?php require_once "footer.php"; ?>