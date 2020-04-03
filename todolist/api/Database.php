<?php
require_once 'config.php';

class Database {
public $connexion;

private $dsn;
private $username;
private $pwd;
private $options;


public function __construct() {
    $this->dsn = DSN;
    $this->username = USERNAME;
    $this->pwd = PWD;
    $this->options = OPTIONS;

}
public function connect(){
    try{
        $this->connexion= new PDO( $this->dsn, $this->username, $this->pwd,  $this->options);
                echo 'connexion etablie' ;
    } catch (PDOException $error){
            echo 'Error :'.$error->getMessage();

        }
        return $this->connexion;
}

};


$db = new Database();
$pdo = $db->connect();