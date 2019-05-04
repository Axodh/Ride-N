<?php $pageTitle = "Lang";
require_once "navbar.php" ?>
<main>
    <div class="container">
        <div class="row">

            <h1 class="center white-text" style="font-variant: small-caps"><?php echo $GLOBALS['LANG_TITLE'] ?></h1>

            <div class="col s12 m6 offset-m3">
                <div class="card light hoverable">
                    <div class="card-image"><img src="images/world.jpeg" alt="world"></div>
                    <div class="card-action center">
                        <a href="langChange.php?lang=fr"><?php echo $GLOBALS['LANG_FR'] ?></a>
                        <a href="langChange.php?lang=en"><?php echo $GLOBALS['LANG_EN'] ?></a>
                        <a href="langChange.php?lang=es"><?php echo $GLOBALS['LANG_ES'] ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require_once "footer.php"; ?>
