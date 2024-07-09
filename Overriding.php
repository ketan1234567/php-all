<?php 
class ParentClass {
public function greet(){
    echo "Hello From parent Class";
}
}
class childClass extends ParentClass {
    public  function greet(){
        echo "Hello From child class";

}
}
$main=new childClass();
$main->greet();

?>
