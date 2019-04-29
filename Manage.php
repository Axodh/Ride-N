<?php require_once "Database.php";

function dbQuery($ban, $table){
    $db = new Database("riden","localhost","root","");
    if($ban == 'ntBanned' && $table == 'user'){ $result = $db->query("SELECT idUser,mailUser,nameUser,surnameUser,isBanned,addressUser,cityUser,zipCode,numberUser FROM user WHERE isBanned = 0"); }
    else if($ban == 'isBanned' && $table == 'user'){ $result = $db->query("SELECT idUser,mailUser,nameUser,surnameUser,isBanned,addressUser,cityUser,zipCode,numberUser FROM user WHERE isBanned = 1"); }
    if($ban == 'ntBanned' && $table == 'driver'){ $result = $db->query("SELECT idDriver,mailDriver,nameDriver,lastNameDriver,addr,'number',age,license,isBanned FROM driver WHERE isBanned = 0"); }
    else if($ban == 'isBanned' && $table == 'driver'){ $result = $db->query("SELECT idDriver,mailDriver,nameDriver,lastNameDriver,addr,'number',age,license,isBanned FROM driver WHERE isBanned = 1"); }
    return $result;
}


function showUser($result){
    $user = 'user';

    foreach ($result as $member){
        echo '
    <tr>
     <form method="POST" action="">
       <td>'.$member->mailUser.'</td>
       <input name="mail" value="'.$member->mailUser.'" type="hidden"/>
       <td>'.$member->nameUser.'</td>
       <input name="name" value="'.$member->nameUser.'" type="hidden"/>
       <td>'.$member->surnameUser.'</td>
       <input name="surname" value="'.$member->surnameUser.'" type="hidden"/>
       <td>'.$member->addressUser.'</td>
       <input name="surname" value="'.$member->addressUser.'" type="hidden"/>
       <td>'.$member->cityUser.'</td>
       <input name="surname" value="'.$member->cityUser.'" type="hidden"/>
       <td>'.$member->zipCode.'</td>
       <input name="surname" value="'.$member->zipCode.'" type="hidden"/>
       <td>'.$member->numberUser.'</td>
       <input name="surname" value="'.$member->numberUser.'" type="hidden"/>

       <input name="isBanned" value="'.$member->isBanned.'" type="hidden"/>
       <td><button onclick="ban(\''.$member->mailUser.'\',\''.$user.'\','.$member->isBanned.')" type="submit" class="btn btn-danger">Ban</button></td>
    </form>
       <td><button onclick="openModal(\''.$member->mailUser.'\')" id="modalBtn" class="btn btn-primary" type="button">Modify</button></td>


          <div class="modal" id="'.$member->mailUser.'">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Modify User Info</h5> <button onclick="closeModal(\''.$member->mailUser.'\')" type="button" class="closeBtn btn btn-danger" data-dismiss="modal"> <span>x</span> </button>
                </div>
                <div class="modal-body">
                  <form method="POST" action="">
                      <p>Mail</p>
                      <input name="mail" type="text" value="'.$member->mailUser.'"/>
                      <p>Pseudo</p>
                      <input name="name" type="text" value="'.$member->nameUser.'"/>
                      <p>Age</p>
                      <input name="surname" type="text" value="'.$member->surnameUser.'"/>
                      <p>Address</p>
                      <input name="mail" type="text" value="'.$member->addressUser.'"/>
                      <p>City</p>
                      <input name="name" type="text" value="'.$member->cityUser.'"/>
                      <p>ZipCode</p>
                      <input name="surname" type="text" value="'.$member->zipCode.'"/>
                      <p>Number</p>
                      <input name="surname" type="text" value="'.$member->numberUser.'"/>
                      <div class="modal-footer"> <button type="submit" class="btn btn-primary" onclick="modify(\''.$user.'\',\''.$member->mailUser.'\',\''.$member->nameUser.'\',\''.$member->surnameUser.'\',\''.$member->addressUser.'\',\''.$member->cityUser.'\',\''.$member->zipCode.'\',\''.$member->numberUser.'\',)">Save changes</button> <button type="button" onclick="closeModal(\''.$member->mailUser.'\')" class="btn btn-secondary" data-dismiss="modal">Close</button> </div>
                    </form>
                    </div>
                </div>

            </div>
          </div>

       </td>
     </tr>
     ';
    }
}

function showDriver($result){
    $driver = 'driver';

    foreach ($result as $member):
        echo'
     <tr>
     <form method="POST" action="">
       <td>'.$member->mailDriver.'</td>
       <input name="mail" value="'.$member->mailDriver.'" type="hidden"/>
       <td>'.$member->nameDriver.'</td>
       <input name="FirstName" value="'.$member->nameDriver.'" type="hidden"/>
       <td>'.$member->lastNameDriver.'</td>
       <input name="LastName" value="'.$member->lastNameDriver.'" type="hidden"/>
       <td>'.$member->addr.'</td>
       <input name="address" value="'.$member->addr.'" type="hidden"/>
       <td>'.$member->number.'</td>
       <input name="isBanned" value="'.$member->number.'" type="hidden"/>
       <td>'.$member->age.'</td>
       <input name="surname" value="'.$member->age.'" type="hidden"/>
       <td><button type="submit" onclick="ban(\''.$member->mailDriver.'\',\''.$driver.'\','.$member->isBanned.')"  class="btn btn-danger">Ban</button></td>
    </form>
       <td><button onclick="openModal(\''.$member->mailDriver.'\')" type="button" id="modalBtn" class="btn btn-primary">Modify</button></td>
          <div class="modal" id="'.$member->mailDriver.'">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Modify User Info</h5> <button onclick="closeModal(\''.$member->mailDriver.'\')" type="button" class="closeBtn btn btn-danger" data-dismiss="modal"> <span>x</span> </button>
                </div>
                <div class="modal-body">
                  <form method="POST" action="">
                      <p>Mail</p>
                      <input name="mail" type="text" value="'.$member->mailDriver.'"/>
                      <p>Pseudo</p>
                      <input name="FirstName" type="text" value="'.$member->nameDriver.'"/>
                      <p>Age</p>
                      <input name="LastName" type="text" value="'.$member->lastNameDriver.'"/>
                      <p>Gender</p>
                      <input name="address" type="text" value="'.$member->addr.'"/>
                      <p>Number</p>
                      <input name="mail" type="text" value="'.$member->number.'"/>
                      <p>Age</p>
                      <input name="surname" type="text" value="'.$member->age.'"/>
                      <div class="modal-footer"> <button type="submit" class="btn btn-primary" onclick="modify(\''.$driver.'\',\''.$member->mailDriver.'\',\''.$member->nameDriver.'\',\''.$member->lastNameDriver.'\',\''.$member->addr.'\', , ,\''.$member->number.'\',\''.$member->age.'\')">Save changes</button> <button type="button" onclick="closeModal(\''.$member->mailDriver.'\')" class="btn btn-secondary" data-dismiss="modal">Close</button> </div>
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
