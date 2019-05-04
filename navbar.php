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
          <div class="col s4 l2 center smol"><a href="index.php">RIDE'N</a></div>
          <div class="col s4 l8 center smol">
            <a href="subscribe.php" class="pad"><?php echo $GLOBALS['NAV_SUBSCRIBE'] ?></a>
            <a href="services.php" class="pad"><?php echo $GLOBALS['NAV_SERVICES'] ?></a>
            <a href="Ridegl/index.php" class="pad"><?php echo $GLOBALS['NAV_DEMO'] ?></a>
          </div>
          <div class="col s4 l2 center smol">
            <?php if(!isConnected()){
              echo '<a href="logChoice.php?type=reg" class="pad">' .$GLOBALS['REGISTER_TITLE']. '</a>';
              echo '<a href="logChoice.php?type=log" class="pad">' .$GLOBALS['LOG_IN_TITLE']. '</a>';
            }else {
              echo '<a href="#" class="pad">' .$GLOBALS['NAV_HELLO']. ', ' .$_SESSION["surnameConnected"]. ' !</a>';
              echo '<a href="deconnexion.php" class="pad">' .$GLOBALS['LOG_OUT_TITLE']. '</a>';
            }
            ?>
          </div>
        </div>
      </div>
    </nav>
  </header>
