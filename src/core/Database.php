<?php

namespace lirazan\Gs\core;

class Database {
    protected $conn;

    public function __construct()
    {
        $host = 'localhost';
        $bd = 'oop';
        $user = 'root';
        $pass = '';
        //myqsli connection
        $this->conn = new \mesqli($host, $user, $pass, $bd,);
        if ($this->conn->connect_error) {
            die("Connection failed: ". $this->conn->connect_error);
        }
    }
}