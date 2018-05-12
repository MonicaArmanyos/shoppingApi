<?php

class product {
    private  $productByCategoryQuery="select * from product where category_id=";
    private $simpleDetails="select * from product where id= ";
    private  $fullDetails="SELECT * from product p,category c,reviews r where p.category_id=c.id and p.id=.r.product_id ";
    private $queryBuilder;
    public function __construct($queryBuilder) {
      $this->queryBuilder=$queryBuilder;  
    }
    public function getString($category_id){
    return   $this->queryBuilder->getProductsByCat($this->productByCategoryQuery,$category_id);
       
   }
}
