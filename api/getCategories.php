<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once("../config/dbconfiguration.php");
require_once("../infrastructure/QBuilderInterface.php");
require_once("../infrastructure/mysqliQueryJson.php");
require_once("../infrastructure/mysqliQueryXML.php");
require_once("../infrastructure/DBFactory.php");
require_once("../model/category.php");
require_once("../model/product.php");
require_once("../model/reviews.php");
$factory=new DBFactory();
$QueryBuilder=$factory->getExtension();
$category=new category($QueryBuilder);
$category->getString();

        
    

