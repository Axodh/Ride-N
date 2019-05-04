<?php $pageTitle = "Log Choice";
require_once "navbar.php";
if(!isset($_GET['type']) || ($_GET['type'] != "reg" && $_GET['type'] != "log")) $_GET['type'] = "reg";
if($_GET['type'] == "log") $type = 1;
else $type = 0 ?>
<main>
    <div class="container">
        <div class="row">

            <h1 class="center white-text" style="font-variant: small-caps"><?php echo ($type)? $GLOBALS['LOG_IN_TITLE'] : $GLOBALS['REGISTER_TITLE'] ?></h1><br>

            <div class="col s6">
                <div class="card hoverable">
                    <div class="card-image"><img src="images/driver.jpg" alt="driver"></div>
                    <div class="card-action center"><a href="<?php echo ($type)? "logInDriver.php" : "registerDriver.php" ?>"><?php echo $GLOBALS['LOG_CHOICE_DRIVER'] ?></a></div>
                </div>
            </div>

            <div class="col s6">
                <div class="card hoverable">
                    <div class="card-image"><img src="images/passenger.jpg" alt="passenger"></div>
                    <div class="card-action center"><a href="<?php echo ($type)? "logIn.php" : "register.php" ?>"><?php echo $GLOBALS['LOG_CHOICE_USER'] ?></a></div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require_once "footer.php"; ?>