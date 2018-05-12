<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$content = file_get_contents("http://127.0.0.1/api/getCategories.php");

$output1 = json_decode($content);

print_r($output1);
echo '<br/>--------------------------------------------------------------------------------------------------------------------<br/>';
$content2 = file_get_contents("http://127.0.0.1/api/getProductsbyCategory.php?category=2");
$output2 = json_decode($content2);

print_r($output2);

