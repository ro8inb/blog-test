<?php



class Database {

    private $db;

    public function connect() {

        $this->db = new \PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        return $this->db;
    }
}