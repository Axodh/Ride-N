<?php

class Database{

    private $db_name;
    private $db_host;
    private $db_user;
    private $db_pwd;
    private $pdo;

    public function __construct($dbname = 'viaxe', $dbhost = 'localhost', $dbuser = 'root', $dbpwd = ' '){

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
      var_dump($this->getPDO());
      $query = $this->getPDO()->query($statement);
      $response = $query->fetchAll(PDO::FETCH_OBJ);
      return $response;
    }

}
