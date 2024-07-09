<?php
class Fruits{
    public $name;
    public $color;

    public  function setname($name,$color){
        $this->name=$name;
        $this->color=$color;

        echo $this->name;
        echo $this->color;
    }
}

class mango extends Fruits{

    public  function manago(){

        echo "This is manago";
    }
}


$manago= new  mango();
$manago->manago();
$manago->setname("anil","orange");

?>
