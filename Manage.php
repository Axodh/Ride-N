  <?php
require_once "Database.php";
class Manage{


  public function __construct($result){
    $this->showUser($result);

  }

  public function showUser($result){
    foreach ($result as $member):
     echo'
     <tr>
       <td>'.$member->mail.'</td>
       <td>'.$member->pseudo.'</td>
       <td>'.$member->age.'</td>
       <td>'.$member->gender.'</td>
       <td><button onclick="openModal('.$member->id.')" id="modalBtn" class="btn btn-primary"></button>
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

  public function editUser($result){

  }
}
