<?php
class Books
{
    //Member variables//
   var $price;
    var $title; 
    // member fuction//
    function setPrice($par){
        $this->price=$par;
    }
    function getPrice(){
        echo $this->price."<br>";
    }
    function setTitle($par){
        $this->title=$par;
    }
    function getTitle(){
        echo $this->title."<br>";
    }

}
$physics=new Books;
$math=new Books;
$chemistry= new Books;
//Now call member function as follow
$physics->setTitle("Physics for high School");
$chemistry->setTitle("Chemistry for high School");
$math->setTitle("math for high School");

$physics->setPrice(10);
$chemistry->setPrice(15);
$math->setPrice(7);
echo $physics->getPrice();
echo $chemistry->getPrice();
echo $physics->getTitle();
?>