<?php require_once "functions.php" ?>
<head>
    <title><?php echo $pageTitle . ' - ' . $_SESSION['lang'] ?></title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style><?php require_once "css/ridenCss.php" ?></style>
</head>
<body>
<header>
    <nav class="transparent z-depth-0">
        <div class="nav-wrapper">
            <div class="row">
                <div class="col s2 l2 center smol"><a href="index.php">RIDE'N</a></div>

                <!-- Will disappear when the screen is too small -->
                <div class="col l6 offset-l1 center smol hide-on-med-and-down">
                    <a href="subscribe.php" class="pad"><?php echo $GLOBALS['NAV_SUBSCRIBE'] ?></a>
                    <a href="services.php" class="pad"><?php echo $GLOBALS['NAV_SERVICES'] ?></a>
                    <a href="Ridegl/index.php" class="pad"><?php echo $GLOBALS['NAV_DEMO'] ?></a>
                </div>
                <div class="col l1 right-align hide-on-med-and-down">
                    <a href="cart.php"><i class="material-icons">shopping_cart</i></a>
                </div>
                <div class="col l2 center smol hide-on-med-and-down">
                    <?php if(!isConnected()){
                        echo '<a href="logChoice.php?type=reg" class="pad">' .$GLOBALS['REGISTER_TITLE']. '</a>';
                        echo '<a href="logChoice.php?type=log" class="pad">' .$GLOBALS['LOG_IN_TITLE']. '</a>';
                    } else {
                        echo '<span class="pad">' .$GLOBALS['NAV_HELLO']. ', ' .$_SESSION["surnameConnected"]. ' !</span>';
                        echo '<a href="deconnexion.php" class="pad">' .$GLOBALS['LOG_OUT_TITLE']. '</a>';
                    } ?>
                </div>

                <!-- Replace the navbar when too small -->
                <div class="col s2 offset-s8 center hide-on-large-only">
                    <!-- Dropdown Trigger -->
                    <a class="dropdown-trigger" href="#" data-target="dropdown1">
                        <i class="material-icons" id="changing-arrow">arrow_drop_down</i>
                    </a>
                </div>

                <!-- Dropdown Structure -->
                <ul id='dropdown1' class='dropdown-content smol' style="min-width: 150px">
                    <?php if(isConnected()){
                        echo '<li><span class="center dark-grey-text">' .$GLOBALS['NAV_HELLO']. ', ' .$_SESSION["surnameConnected"]. ' !</span></li>';
                        echo '<li class="divider" tabindex="-1"></li>';
                        echo '<li><a href="cart.php" class="center dark-grey-text">' .$GLOBALS['CART_TITLE']. '</a></li>';
                        echo '<li class="divider" tabindex="-1"></li>';
                    } ?>
                    <li><a href="subscribe.php" class="center dark-grey-text"><?php echo $GLOBALS['NAV_SUBSCRIBE'] ?></a></li>
                    <li><a href="services.php" class="center dark-grey-text"><?php echo $GLOBALS['NAV_SERVICES'] ?></a></li>
                    <li><a href="Ridegl/index.php" class="center dark-grey-text"><?php echo $GLOBALS['NAV_DEMO'] ?></a></li>
                    <li class="divider" tabindex="-1"></li>
                    <?php if(isConnected()){
                        echo '<li><a href="deconnexion.php" class="center dark-grey-text">' .$GLOBALS['LOG_OUT_TITLE']. '</a></li>';
                    } else {
                        echo '<li><a href="logChoice.php?type=log" class="center dark-grey-text">' .$GLOBALS['LOG_IN_TITLE']. '</a></li>';
                        echo '<li><a href="logChoice.php?type=reg" class="center dark-grey-text">' .$GLOBALS['REGISTER_TITLE']. '</a></li>';
                    } ?>
                </ul>
            </div>
        </div>
    </nav>
</header>