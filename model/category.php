<?php
class category {
    private $categoriesQuery="select * from category";
    private $queryBuilder;
    public function __construct($queryBuilder) {
      $this->queryBuilder=$queryBuilder;  
    }
    public function getString(){
      
    return   $this->queryBuilder-> getCategories($this->categoriesQuery);
       
   }
}
