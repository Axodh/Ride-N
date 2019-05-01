<?php $pageTitle =  "Accueil"; require_once "navbar.php" ?>
<main>
    <div class="container">
        <div class="row">
            <div class="col s12 m6 offset-m3 center">
                <br><h3 class="center white-text"><?php echo $_GLOBALS['lang'] ?></h3>
                <h3 class="center white-text hide-on-med-and-down">Ça passe crème.</h3>
                <a href="autocomplete.php" class="btn-flat center white-text">COMMANDER</a>
            </div>
        </div>
    </div>
</main>
<?php require_once "footer.php"; ?>