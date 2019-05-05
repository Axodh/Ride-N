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

                    for ($i = 1; $i <= $max['value']; $i++) { $j = 0;
                        $services = $db->prepare("SELECT price, nbLeft from services WHERE idService = :idService");
                        $info = $db->prepare("SELECT name, icon from services_names WHERE idService = :idService");

                        $services -> execute([":idService"=>$i]);
                        $info -> execute([":idService"=>$i]);

                        $info = $info -> fetch();

                        echo "<li>";
                        echo "<div class=\"collapsible-header\"><i class=\"material-icons\">" .$info['icon']. "</i>" .$GLOBALS['SERVICES_TITLE_'.$i]. "</div>";
                        echo "<div class=\"collapsible-body\" style=\"background-color: #F5F5F5\">";
                        echo "<table>";

                        foreach($services as $key=>$row) { $j++;

                            if($row['price']!=0) $price = $row['price']. "€ " .$GLOBALS['SERVICES_REF_'.$i.'_'.$j];
                            else $price = "Nous consulter";

                            echo "<tr>";
                            echo "<td width=\"20px\"><label><input type=\"checkbox\" class=\"filled-in\" id=\"" .$info['name']. "-" .$j. "\"/><span></span></label></td>";
                            echo "<td width=\"800px\">" .$GLOBALS['SERVICES_SUB_'.$i.'_'.$j]. "</td>";
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