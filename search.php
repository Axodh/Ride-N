<?php
require_once "Database.php";
$db = new Database("viaxe","localhost","root","");

  if(isset($_POST["request"])
  && isset($_POST["filterUser"])
  && isset($_POST["filterBan"])){
    if($_POST["filterUser"] == "user" && $_POST["filterBan"] == "nBanned"){
        $statement = $db->query("SELECT * FROM customer WHERE (`pseudo` LIKE '%".$_POST["request"]."%') AND isBanned = 0 ");
    }
    if($_POST["filterUser"] == "user" && $_POST["filterBan"] == "banned"){
        $statement = $db->query("SELECT * FROM customer WHERE (`pseudo` LIKE '%".$_POST["request"]."%') AND isBanned = 1");
    }
    if($_POST["filterUser"] == "driver" && $_POST["filterBan"] == "nBanned"){
        $statement = $db->query("SELECT * FROM guide WHERE (`pseudo` LIKE '%".$_POST["request"]."%') AND isBanned = 0 ");
    }
    if($_POST["filterUser"] == "driver" && $_POST["filterBan"] == "banned"){
        $statement = $db->query("SELECT * FROM guide WHERE (`pseudo` LIKE '%".$_POST["request"]."%') AND isBanned = 1 ");
    }
  
   endforeach;
   echo '  </tbody>
   </table>

 </div>
</div>
</div>
</div>
</div>
</div>';
  }else{
    http_response_code(400);
  }
