<?php 

class Database
{
    private $host ="";
    private $user = "";
    private $password="";
    private $db="";
    private $mysqli;

    function __construct($host,$user,$pass,$db) {

        $this->host     = $host;
        $this->user     = $user;
        $this->pass     = $pass;
        $this->db       = $db;
        $this->mysqli   = new mysqli($this->host, $this->user, $this->pass, $this->db);
    }

    public function query($query)
    {
        return $this->mysqli->query($query);
    }
}