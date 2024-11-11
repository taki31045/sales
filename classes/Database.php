<?php

class Database {
    # Define Properties
    // Public - anyone can access
    // Private - only the class can access
    // Protect - the classes that extends to this class can access

    private $server_name = "localhost";
    private $username = "root";
    private $password = "root";
    private $db_name = "sales_oop";
    protected $conn;

    public function __construct(){
        $this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->db_name);

        if($this->conn->connect_error){
            die("Unable to connect to the database: " . $this->conn->connect_error);
        }
    }
}

?>