<?php $pageTitle = "Services";
require_once "navbar.php"; ?>
<main>
    <div class="container">
        <form action="#">
            <div class="row"><br>
                <h2 class="col s12 m6 offset-m3 center smol white-text"><?php echo $GLOBALS['SERVICES_MAIN_TITLE'] ?></h2>
            </div>
            <div class="row">
                <ul class="collapsible">
                    <?php
                    $maxServices = $db->query("SELECT max(idService) as value from services");
                    $max = $maxServices->fetch(); // number of services

                    for ($idService = 1; $idService <= $max['value']; $idService++) { $idChoice = 0;
                        $services = $db->prepare("SELECT price, nbLeft from services WHERE idService = :idService");
                        $info = $db->prepare("SELECT icon from services_icons WHERE idService = :idService");

                        $services -> execute([":idService"=>$idService]);
                        $info -> execute([":idService"=>$idService]);

                        $info = $info -> fetch();

                        echo ($idService==1)? "<li class=\"active\">":"<li>";
                        echo "<div class=\"collapsible-header\"><i class=\"material-icons\">" .$info['icon']. "</i>" .$GLOBALS['SERVICES_TITLE_'.$idService]. "</div>";
                        echo "<div class=\"collapsible-body\" style=\"background-color: #F5F5F5\">";
                        echo "<table>";

                        foreach($services as $key=>$val) { $idChoice++;

                            if($val['price']!=0) $price = $val['price']. "€ " .$GLOBALS['SERVICES_REF_'.$idService.'_'.$idChoice];
                            else $price = "Nous consulter";

                            if($val['nbLeft']!=NULL) $nbLeft = $val['nbLeft']. " " .$GLOBALS['SERVICES_UNITS_LEFT'];
                            else $nbLeft = "";

                            echo "<tr>";
                            echo "<td width='20px'><label><input type=\"checkbox\" class=\"filled-in\" id=\"" .$idService. "-" .$idChoice. "\"/><span></span></label></td>";
                            echo "<td width='500px'>" .$GLOBALS['SERVICES_SUB_'.$idService.'_'.$idChoice]. "</td>";
                            echo "<td width='300px'>" .$nbLeft. "</td>";
                            echo "<td>" .$price. "</td>";
                            echo "</tr>";
                        }

                        echo "</table>";
                        echo "</div>";
                        echo "</li>";
                    } ?>
                </ul>
            </div>
        </form>
    </div>
</main>
<?php require_once "footer.php" ?>