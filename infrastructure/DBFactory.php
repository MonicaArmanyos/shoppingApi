<?php

class DBFactory {
    public function getExtension (){
    
   if (__Extension__==="json")
   {
       
       return new mysqliQueryJson();
   }
   else{
      
       return new mysqliQueryXML();
   }
    
}
}
