<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
class Fruits{
public $fname;
public $color;

public function __construct($fname,$color){
$this->fname=$fname;
$this->color=$color;
}
public function intro(){
echo"This is my name{$this->fname}<br> add color is {$this->color}<br>";
}


}

class Blueberry extends Fruits{

public function message(){
  echo "I am fruits of berry";

}

}

$berry= new Blueberry('ketan','Orange');
$berry->intro();
$berry->message();
?> 

</body>
</html>
