<?php
class dbController{
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $dbName = 'apple_phones';

    // connect property 
    public $conn = null;

// calling the constrcut 

public function __construct(){
   $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->dbName);
   if($this->conn->connect_error){
       echo 'database Connection failed '. $this->conn->connect_error;
   }
}

// closing mysqli connection and constructor 

public function __destruct()
{
    $this->closeConnection();
}

protected function closeConnection(){
    if($this->conn != null){
        $this->conn->close();
        $this->conn = null;
    }
}

}