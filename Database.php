<?php

class Database{

    private $db_name;
    private $db_host;
    private $db_user;
    private $db_pwd;
    private $pdo;

    public function __construct($dbname = 'riden', $dbhost = 'localhost', $dbuser = 'root', $dbpwd = ''){

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

    public function queryModifyUser($statement, $mailUser, $nameUser, $surnameUser, $addressUser, $cityUser, $zipCode, $numberUser){
      $query = $this->getPDO()->prepare($statement);
      $query->execute([
                      "mailUser"=>$mailUser,
                      "nameUser"=>$nameUser,
                      "surnameUser"=>$surnameUser,
                      "addressUser"=>$addressUser,
                      "cityUser"=>$cityUser,
                      "zipCode"=>$zipCode,
                      "numberUser"=>$numberUser,
                      "mailUser"=>$mailUser
                    ]);

    }

    public function queryModifyDriver($statement, $mail, $name, $surname, $addr, $number, $age){
      $query = $this->getPDO()->prepare($statement);

      $query->execute([
                      "mailDriver"=>$mail,
                      "nameDriver"=>$name,
                      "lastNameDriver"=>$surname,
                      "addr"=>$addr,
                      "number"=>$number,
                      "age"=>$age,
                      "mailDriver"=>$mail
                    ]);

    }



    public function queryBan($statement, $mailUser){
      $query = $this->getPDO()->prepare($statement);
      $query->execute(["mailUser"=>$mailUser]);
      var_dump($mailUser);
    }

    public function queryBanDriver($statement, $mailDriver){
      $query = $this->getPDO()->prepare($statement);
      $query->execute(["mailDriver"=>$mailDriver]);
      var_dump($mailDriver);
    }

}
