<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once ("bootstrap.php");
$factory=new DBFactory();
        $QueryBuilder=$factory->getExtension();
        $category=new category($QueryBuilder);
        $category->getString();

        
    
