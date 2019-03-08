  <?php
require_once "Database.php";
class Manage{


  public function __construct($result){


  }


  public function showUser($result){
    foreach ($result as $member):
  //  <td><button onclick="ban(\''.$member->mail.'\',\''.$member->pseudo.'\',\''.$member->age.'\',\''.$member->gender.'\',\''.$member->isBanned.'\')" type="button" class="btn btn-danger">Ban</button></td>
     echo'
     <tr>
     <form method="POST" action="">
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
       <td><button onclick="ban(\''.$member->mail.'\','.$member->isBanned.')" type="submit" class="btn btn-danger">Ban</button></td>
    </form>
       <td><button onclick="openModal('.$member->id.')" id="modalBtn" class="btn btn-primary" type="button">Modify</button></td>


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
  }

  public function showDriver($result){
    foreach ($result as $member):
     echo'
     <tr>
     <form method="POST" action="">
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
       <td><button onclick="banDriver(\''.$member->mail.'\', '.$member->isBanned.')" type="submit" class="btn btn-danger">Ban</button></td>
    </form>
       <td><button onclick="openModal('.$member->id.')" id="modalBtn" class="btn btn-primary">Modify</button></td>


          <div class="modal" id="'.$member->id.'">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Modify User Info</h5> <button onclick="closeModal('.$member->id.')" type="button" class="closeBtn btn btn-danger" data-dismiss="modal"> <span>x</span> </button>
                </div>
                <div class="modal-body">
                  <form method="POST" action="modifyDriver.php">
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
  }
}
