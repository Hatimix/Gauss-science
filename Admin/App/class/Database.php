<?php

class Database
{
    private $db_dsn = 'mysql:host=localhost;dbname=gauss';
    private $db_user = 'root';
    private $db_pass = '';
    public $options = array(
        PDO::ATTR_ERRMODE       =>  PDO::ERRMODE_EXCEPTION,
        MYSQLI_SET_CHARSET_NAME =>  'set names utf8'
    );
    private $db;

    private function getConnexion()
    {
        $dsn = $this->db_dsn;
        $user = $this->db_user;
        $pass = $this->db_pass;
        if ($this->db === null){
            $this->db = new PDO($dsn,$user,$pass,$this->options);
        }
        return $this->db;
    }

    public function query($query)
    {
        $req = $this->getConnexion()->query($query);
        $res = $req->fetchAll(PDO::FETCH_ASSOC);
        var_dump($res);
    }

    public function prepare($statement,$userData)
    {
        $pre= $this->getConnexion()->prepare($statement);
        $pre->execute($userData);
        $res = $pre->fetchAll(PDO::FETCH_ASSOC);
        $count = $pre->rowCount();
        var_dump($count);
        var_dump($res);
        if ($count > 0){
            return true;
        } else {
            return false;
        }
    }
}