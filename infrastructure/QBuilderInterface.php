<?php


interface QBuilderInterface {
     
   public function connect ();
   public function getCategories($query);
   public function getProductsByCat($query,$category);
   public function getProductSimple();
   public function getProductFull();
   public function disconnect();
   //const q1="select * from category ";
   //const q2="select * from product where category_id=";
  
}
