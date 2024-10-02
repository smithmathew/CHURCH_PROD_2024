<?php
class Product{
 
    // database connection and table name
    private $conn;
    private $table_name = "new_church_text";
 
    // object properties
    public $id;
    public $message;
  
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

function read(){
 
    // select all query
    $query = "SELECT id,message from " . $this->table_name . "
                           ";
 
    // prepare query statement
    $stmt = $this->conn->prepare($query);
 
    // execute query
    $stmt->execute();
 
    return $stmt;
}
 

}

?>



