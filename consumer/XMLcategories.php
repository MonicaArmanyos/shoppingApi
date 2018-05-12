<?php
$content = file_get_contents("http://127.0.0.1/api/getCategories.php");

$xml = simplexml_load_string($content)or die("Error: Cannot create object");

foreach($xml->category as $cat)
{
    echo "$cat->id : $cat->name <br/>";
}
echo '<br/>--------------------------------------------------------------------------------------------------------------------<br/>';
$content2 = file_get_contents("http://127.0.0.1/api/getProductsbyCategory.php?category=2");

$xml2 = simplexml_load_string($content2)or die("Error: Cannot create object");

foreach($xml2->category as $cat)
{
    echo "$cat->id : $cat->name <br/>";
}