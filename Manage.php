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
       <td>
       <form method="GET" action="$this->editUser($result)">
         <button type="submit" class="btn btn-primary">
         </button>
        </form>
        </td>
     </tr>
     ';
   endforeach;
  }

  public function editUser($result){
    echo 'Hello';
  }
}
