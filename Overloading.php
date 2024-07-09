
<?php

class MyClass {
    private $data = [];

    public function __get($name) {
        return $this->data[$name];
    }

    public function __set($name, $value) {
        $this->data[$name] = $value;
    }

    public function __call($name, $arguments) {
        echo "Call to method '$name' with arguments: " . implode(', ', $arguments);
    }
}

$obj = new MyClass();
$obj->someProperty = 'Hello'.'<br>'; // This will call __set
echo $obj->someProperty;      // This will call __get
 echo $obj->someMethod('arg1', 'arg2'); // This will call __call




 
?>