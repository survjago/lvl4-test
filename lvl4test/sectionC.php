<?php
class fruits{
    public $name;
    public $color;
    public $taste;
    public $size;
    public function __construct($name,$color,$taste,$size){
        echo ' This is   '.$name. ' It is '.$color. ' in color and it has a '.$taste.' It is '.$size.'  in size ' ;
    }
   
   }
  
   $apple = new fruits("apple","red","sweet","small");
   echo '<br>';
   $banana = new fruits("banana","yellow","sweet","medium");
   echo '<br>';
   $orange = new fruits("orange","orange","sweet","medium");
   echo '<br>';
   $grapes = new fruits("grapes","purple","sweet","small");
   echo '<br>';
   $watermelon = new fruits("watermelon","green","sweet","large");
   echo '<br>';
   $mango = new fruits("mango","yellow","sweet","medium");
   echo '<br>';
   $pineapple = new fruits("pineapple","yellow","sweet","large");
   
  


?>