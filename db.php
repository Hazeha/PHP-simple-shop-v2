<?php
class db{
    private $conn;
    private $dbHost = "localhost:3307";
    private $dbUser = "bobshop";
    private $dbPass = "bob123";
    private $dbName = "db_bobshop";

    function __construct(){
        $this->conn = $this->initConn();
    }
    private function initConn(){
        $conn = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        return $conn;
    }
    public function DB_SELECT($sql){
        $query = mysqli_query($this->conn, $sql);
        while($row = mysqli_fetch_assoc($query)){
            $results[] = $row;
        }
        if (!empty($results)) {
            return $results;
        } else {
            die("Connection failed: " . mysqli_connect_error());
        }
    }
}





