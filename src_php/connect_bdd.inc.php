<?php
class DB {

    private $host = '172.190.1.52';
    private $username = 'tlahmar';
    private $password = 'NafissaNafissa1@';
    private $database = 'tlahmar';
    private $db;

    
    public function __construct($host = null, $username = null, $password = null, $database = null) {
        if ($host != null) {
            $this->host = $host;
            $this->username = $username;
            $this->password = $password;
            $this->database = $database;
        }

        try {
            $this->db = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, $this->password,
            array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }catch(PDOException $e) {
            die('Erreur de BDD'.$e->getMessage());
        }
    }

    public function query($sql, $data = array()) {
        $req = $this->db->prepare($sql);
        $req->execute($data);
        return $req->fetchAll(PDO::FETCH_OBJ);
    }
}

?>