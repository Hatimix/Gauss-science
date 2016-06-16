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

    public function __construct()
    {
        $dsn = $this->db_dsn;
        $user = $this->db_user;
        $pass = $this->db_pass;
        if ($this->db === null){
            $this->db = new PDO($dsn,$user,$pass,$this->options);
        }
        return $this->db;
    }
}