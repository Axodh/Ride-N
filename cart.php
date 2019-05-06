<?php $pageTitle = "Cart";
require_once "navbar.php" ?>
<main>
    <div class="container">
        <div class="row">

            <h1 class="center white-text" style="font-variant: small-caps"><?php echo $GLOBALS['CART_TITLE'] ?></h1><br>

            <div class="col s8 offset-s2">
                <div class="card hoverable">
                    <div class="card-content center">
                        <span class="card-title">Card Title</span><br>
                        <p class="center" style="min-height: 200px">
                            <?php echo empty($_SESSION['cart'])? $GLOBALS['CART_EMPTY'] : ""?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require_once "footer.php" ?>
