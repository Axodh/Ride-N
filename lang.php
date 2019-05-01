<?php $pageTitle = "Langue";
require_once "navbar.php"; ?>
<main>
    <div class="container">
        <div class="row">

            <h1 class="center white-text" style="font-variant: small-caps">langue du site</h1>

            <div class="col s12 m6 offset-m3">
                <div class="card light hoverable">
                    <div class="card-image"><img src="images/world.jpeg" alt="world"></div>
                    <div class="card-action center">
                        <a href="langChange.php?lang=fr">Français</a>
                        <a href="langChange.php?lang=en">Anglais</a>
                        <a href="langChange.php?lang=es">Espagnol</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    function submit_form() {
        document.getElementById("form1").submit();
    }
</script>
<?php require_once "footer.php"; ?>
