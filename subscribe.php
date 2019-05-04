<?php $pageTitle = "Abonnement";
require_once "navbar.php" ?>
<main>
    <div class="container">
        <div class="row">

            <h1 class="center white-text" style="font-variant: small-caps"><?php echo $GLOBALS['SUBSCRIBE_TITLE'] ?></h1>

            <div class="col s12 m4">
                <div class="card large sticky-action hoverable">
                    <div class="card-image waves-effect waves-block waves-light"><img class="activator" src="images/no-tree.jpg" alt="no-tree"></div>
                    <div class="card-content"><span class="card-title activator smol center show-hov"><?php echo $GLOBALS['SUBSCRIBE_NO_SUB_TITLE'] ?></span></div>
                    <div class="card-reveal">
                        <span class="smol"><?php echo $GLOBALS['SUBSCRIBE_NO_SUB_TITLE'] ?></span>
                        <div class="divider"></div>
                        <?php echo $GLOBALS['SUBSCRIBE_CARD_1_CONTENT'] ?>
                    </div>
                    <div class="card-action center">
                        <a href="#" onclick="<?php if(!isConnected()) echo $GLOBALS['SUBSCRIBE_ALERT'] ?>">Commander</a>
                    </div>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="card large sticky-action hoverable">
                    <div class="card-image waves-effect waves-block waves-light"><img class="activator" src="images/tree.jpg" alt="tree"></div>
                    <div class="card-content"><span class="card-title activator smol center show-hov"><?php echo $GLOBALS['SUBSCRIBE_SIMPLE_SUB_TITLE'] ?></span></div>
                    <div class="card-reveal">
                        <span class="smol"><?php echo $GLOBALS['SUBSCRIBE_SIMPLE_SUB_TITLE'] ?></span>
                        <div class="divider"></div>
                        <?php echo $GLOBALS['SUBSCRIBE_CARD_2_CONTENT'] ?>
                    </div>
                    <div class="card-action center">
                        <a href="#" onclick="<?php if(!isConnected()) echo $GLOBALS['SUBSCRIBE_ALERT'] ?>">Commander</a>
                    </div>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="card large sticky-action hoverable">
                    <div class="card-image waves-effect waves-block waves-light"><img class="activator" src="images/trees.jpg" alt="trees"></div>
                    <div class="card-content"><span class="card-title activator smol center show-hov"><?php echo $GLOBALS['SUBSCRIBE_TEAM_SUB_TITLE'] ?></span></div>
                    <div class="card-reveal">
                        <span class="smol center"><?php echo $GLOBALS['SUBSCRIBE_TEAM_SUB_TITLE'] ?></span>
                        <div class="divider"></div>
                        <?php echo $GLOBALS['SUBSCRIBE_CARD_3_CONTENT'] ?>
                    </div>
                    <div class="card-action center">
                        <a href="#" onclick="<?php if(!isConnected()) echo $GLOBALS['SUBSCRIBE_ALERT'] ?>">Commander</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 offset-m4 center"><a href="#" class="white-text"><?php echo $GLOBALS['SUBSCRIBE_PRICES'] ?></a></div>
        </div>
    </div>
</main>
<?php require_once "footer.php" ?>
