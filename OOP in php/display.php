<?php

class Student {
    public $name;
    public $age;

    public function setDetails($n, $a)
    {
        $this->name = $n;
        $this->age = $a;
    }

    public function display(){
        echo "Name: $this->name<br>";
        echo "Age: $this->age<br>";
    }
}

$s1 = new Student();
$s1->setDetails("Alish Shakya", 21);
$s1->display();

?>
