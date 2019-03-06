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
    echo '<div class="tab-content mt-2">
      <div class="tab-pane fade show active" id="tabone" role="tabpanel">
        <div class="py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="table-responsive">
                  <table class="table table-striped table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Mail</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Gender</th>
                      </tr>
                    </thead>
                    <tbody>';
    foreach ($statement as $member):
     echo'
     <tr>
     <form method="POST" action="ban.php">
       <td>'.$member->mail.'</td>
       <input name="mail" value="'.$member->mail.'" type="hidden"/>
       <td>'.$member->pseudo.'</td>
       <input name="pseudo" value="'.$member->pseudo.'" type="hidden"/>
       <td>'.$member->age.'</td>
       <input name="age" value="'.$member->age.'" type="hidden"/>
       <td>'.$member->gender.'</td>
       <input name="gender" value="'.$member->gender.'" type="hidden"/>
       <td>'.$member->isBanned.'</td>
       <input name="isBanned" value="'.$member->isBanned.'" type="hidden"/>
       <td><button type="submit" class="btn btn-danger">Ban</button></td>
    </form>
       <td><button onclick="openModal('.$member->id.')" id="modalBtn" class="btn btn-primary">Modify</button></td>


          <div class="modal" id="'.$member->id.'">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Modify User Info</h5> <button onclick="closeModal('.$member->id.')" type="button" class="closeBtn btn btn-danger" data-dismiss="modal"> <span>x</span> </button>
                </div>
                <div class="modal-body">
                  <form method="POST" action="modify.php">
                      <p>Mail</p>
                      <input name="mail" type="text" value="'.$member->mail.'"/>
                      <p>Pseudo</p>
                      <input name="pseudo" type="text" value="'.$member->pseudo.'"/>
                      <p>Age</p>
                      <input name="age" type="text" value="'.$member->age.'"/>
                      <p>Gender</p>
                      <input name="gender" type="text" value="'.$member->gender.'"/>
                      <div class="modal-footer"> <button type="submit" class="btn btn-primary">Save changes</button> <button type="button" onclick="closeModal('.$member->id.')" class="btn btn-secondary" data-dismiss="modal">Close</button> </div>
                    </form>
                    </div>
                </div>

            </div>
          </div>

       </td>
     </tr>
     ';
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
