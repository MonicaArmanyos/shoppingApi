<?php

class mysqliQueryJson implements QBuilderInterface{
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
        
        while ($row = $result->fetch_assoc())
        {
            $output['data'][] = $row;
        }
        echo json_encode($output);
      }}
    public function getProductsByCat($query,$cat){
         $result = $this->conn->query($query.$cat);
      if($result->num_rows > 0){
        
        while ($row = $result->fetch_assoc())
        {
            $output['data'][] = $row;
        }
        echo json_encode($output);
      }
    }
    public function getProductSimple(){}
     public function getProductFull(){}
    public function disconnect() {
        mysqli_close($conn);
    }
}
