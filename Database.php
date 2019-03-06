<?php

class Database{

    private $db_name;
    private $db_host;
    private $db_user;
    private $db_pwd;
    private $pdo;

    public function __construct($dbname = 'riden', $dbhost = 'localhost', $dbuser = 'root', $dbpwd = ' '){

     $this->db_name = $dbname;
     $this->db_host = $dbhost;
     $this->db_user = $dbuser;
     $this->db_pwd = $dbpwd;


    }

    private function getPDO(){
      $pdo = new PDO("mysql:dbname=".$this->db_name.";host=".$this->db_host, $this->db_user, $this->db_pwd);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $this->pdo = $pdo;
      return $this->pdo;
    }

    public function query($statement){
      $query = $this->getPDO()->prepare($statement);
      $query->execute();
      $response = $query->fetchAll(PDO::FETCH_OBJ);
      return $response;
    }

    public function queryModify($statement, $mail, $pseudo, $age, $gender){
      $query = $this->getPDO()->prepare($statement);
      $query->execute([
                      "mail"=>$mail,
                      "pseudo"=>$pseudo,
                      "age"=>$age,
                      "gender"=>$gender,
                    ]);
      header("location: backOffice.php");
    }

    public function queryBan($statement, $mail){
      $query = $this->getPDO()->prepare($statement);
      $query->execute(["mail"=>$mail]);
      header("location: backOffice.php");
    }

}
