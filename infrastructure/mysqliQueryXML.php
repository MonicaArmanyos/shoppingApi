<?php

class mysqliQueryXML implements QBuilderInterface{
    private $conn;
     public function __construct() {
        $this->connect();
        
    }
    public function connect (){
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if(!$conn){
            die("Connection failed: " . mysqli_connect_error());
            
        }

        $this->conn=$conn;
        
    }
    public function getCategories($query){
        $result = $this->conn->query($query);
      if($result->num_rows > 0){
        echo '<?xml version="1.0"?>';
    
        echo "  <data>";
        
        while ($row = $result->fetch_assoc())
        {
           echo "<category>";
            echo "<id>{$row['id']}</id>";
            echo "<name>{$row['name']}</name>";
            echo "</category>";
        }
        echo "  </data>";
    
       
      }
    }
    public function getProductsByCat($query,$category){
        $result = $this->conn->query($query.$category);
        
      if($result->num_rows > 0){
         echo '<?xml version="1.0"?>';
    
        echo "  <data>";
        
        while ($row = $result->fetch_assoc())
        {
           echo "<category>";
            echo "<id>{$row['id']}</id>";
            echo "<name>{$row['name']}</name>";
            echo "</category>";
        }
        echo "  </data>";
       
      }
    }
    public function getProductSimple(){}
    public function getProductFull(){}
    public function disconnect() {
        mysqli_close($conn);
    }
}